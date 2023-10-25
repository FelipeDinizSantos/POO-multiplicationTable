<?php

    class SetStyles
    {
        private static $style = 
        '
            <style>
                .table
                {
                    margin-top: 2em
                }
            </style>
        ';

        public static function set()
        {
            echo
                '
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                ' 
                .
                self::$style
                .
                '
                </head>
                ';
        }
    }