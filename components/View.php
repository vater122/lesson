<?php

class View
{
    protected $data = [];

    //сюда передаются 'items' и $news(то, что получили из БД)
    public function __set($key, $val)
    {
        $this->data[$key] = $val;
    }
    public function dispaly($template)
    {
        //здесь $key - это 'items',
        // а $val -двухмерный массив(то что получили из БД, где каждый массив - набор значений одной строки БД)
        //делаем из строкового значения 'items' переменную с названием $items,
        // где её значение - двухмерный массив, возвращенный из БД
        foreach($this->data as $key => $val)
        {
           $$key = $val;
        }

        include __DIR__ . '/../views/'.$template;
    }
}