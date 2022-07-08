require('dotenv').config()
const express = require('express')
const { db } = require('./database')
const CronJob = require('cron').CronJob
const moment = require('moment')
const axios = require('axios')

const app = express()

app.get('/ping', (req, res) => {
    return res.json({ msg: 'Running' })
})

/**
 * FUNCTION
 */
const schedulePromo = async () => {
    console.log('promo running')
}

/**
 * CRON JOB
 */
const job = new CronJob(
    '*/2 * * * * *',
    async () => {
        //
        // const today = new Date()
        // var time = today.getHours() + ':' + today.getMinutes() + ':' + today.getSeconds()
        // console.log(time)
        // console.log('cron job running')

        // schedulePromo()

        db.query('SELECT * FROM promos', (err, promos) => {
            /** data promo */
            promos.map((promo, i) => {
                if (!promo.send_at) return null

                const promoPekerjaan = promo.pekerjaan

                const timeNow = moment().format('YYYY-MM-DD HH:mm')
                const timeSend = promo.send_at && moment(promo.send_at).format('YYYY-MM-DD HH:mm')

                if (timeNow >= timeSend) {
                    // table users filter by pekerjaan
                    db.query(`SELECT * FROM users WHERE pekerjaan='${promoPekerjaan}'`, async (err, users) => {
                        // empty user return null
                        if (!users) return null

                        let sender = process.env.WA_SENDER
                        let params = []
                        //
                        users.map(async (user, i) => {
                            /** credential */
                            params.push({
                                receiver: user.no_hp,
                                message: promo.keterangan,
                            })
                        })

                        let url = `https://wa-restapi2.herokuapp.com/chats/send-bulk?id=${sender}`
                        // send wa
                        await axios
                            .post(url, params)
                            .then((response) => {
                                db.query(`UPDATE promos SET send_at=NULL WHERE id=${promo.id}`)
                            })
                            .catch((err) => {
                                // console.log(err)
                                return null
                            })
                    })
                }
                // console.log(promo.nama_promo)
            })
        })
    },
    null,
    true,
    'Asia/Jakarta'
)
job.start()

// console.log(process.env.APP_URL)
// const appUrl = process.env.APP_URL
const appUrl = 8080
app.listen(appUrl, () => console.log(`Server running at ${appUrl}`))
