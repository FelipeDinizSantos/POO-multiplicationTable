<?php

    include_once('./printTable.php');

    class GenerateMultiplicationTable
    {
        public static function generate()
        {
            for($i=1; $i<=10; $i++)
            {
                $multiplicationsTable = [];
                for($y=1; $y<=10; $y++)
                {
                    $multiplication = $i * $y;
                    array_push($multiplicationsTable, "$i X $y = $multiplication");
                }
                PrintTable::print($multiplicationsTable);
            }
        }
    }