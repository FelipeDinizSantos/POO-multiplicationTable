<?php

    class PrintTable
    {
        public static function print($table)
        {
            echo "<div class='table'>";
            foreach($table as $tableRow)
            {
                echo
                "
                   <p> 
                        $tableRow
                   </p>
                ";
            }
            echo "<div />";
        } 
    }