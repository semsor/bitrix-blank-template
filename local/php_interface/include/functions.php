<?php

/**
 * Вывод значения переменной любого типа (str|array) в консоль браузера
 * @param $data
 */
function dump_console($data)
{
    $js = is_array($data) ? json_encode($data) : '"' . $data . '"';
    echo "<script type='text/javascript'>";
    echo "console.log($js)";
    echo "</script>";
}

/**
 * print_r обёрнутая тегом pre
 * @param $data
 */
function dump_content($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}