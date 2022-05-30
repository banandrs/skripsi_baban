<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TruncateAllTables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema:: disableForeignKeyConstraints();
 
        foreach ($this-&gt;getTargetTableNames() as $tableName) {
            DB:: table($tableName)-&gt;truncate();
        }
 
        Schema:: enableForeignKeyConstraints();
    }

    private function getTargetTableNames(): array
    {
        $excludes = ['migrations'];
        return array_diff($this-&gt;getAllTableNames(), $excludes);
    }
 
    /**
     * @return array
     */
    private function getAllTableNames(): array
    {
        return DB:: connection()-&gt;getDoctrineSchemaManager()-&gt;listTableNames();
    }
}
