<?php

    include_once('./printTable.php');

    class GenerateMultiplicationTable
    {
        public static function generate($min = 1, $max = 10)
        {
            for($i=$min; $i<=$max; $i++)
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