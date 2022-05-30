<!DOCTYPE html>
<html>

<head>
    <title>Sinema Untan</title>
</head>

<body align="justify">
    <h1>{{ $promo->judul }}</h1>
    <img src="{{ $message->embed(asset('gambar/'.$promo->gambar)) }}" alt="{{ $promo->judul }}" width="900px"
        height="500px">
    <p style="font-size:14px">{{ $promo->keterangan }}</p>
    <a href="{{ route('user.paket-foto') }}" class="btn">Klik Link</a>
</body>

</html>