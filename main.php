<?php 

    include_once('./generateMultiplicationTable.php');
    include_once('./styles.php');

    class Main
    {
        public static function Main()
        {
            SetStyles::set();
            GenerateMultiplicationTable::generate(); // O método espera o valor range de quantas tabuadas irá gerar
                                                     // Caso não forneça, os valores padrões são 1 e 10
        }
    }

    Main::Main();
