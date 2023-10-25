<?php 

    include_once('./generateMultiplicationTable.php');
    include_once('./styles.php');

    class Main
    {
        public static function Main()
        {
            SetStyles::set();
            GenerateMultiplicationTable::generate();
        }
    }

    Main::Main();