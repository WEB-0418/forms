<?php

  // $a = [
  //   'key1' => 12,
  //   'key2' => true
  // ];

// $a = [1,2,3,4,5];
// php 5.4
// $a = array(1,2,3,4,5);

// array_shift($a, 100500);

  // $a[] = 100500;
  // $a['someKeyName'] = 'value';

// define('APP', 'myApp');
// const APP = [1,2,3];
// APP = 5;

// APP[1] = 15;
// logg(APP);


$a = [
  'name' => 'test',
  'age' => 100500,
  'parents' => [
    'mother' => [
      'name' => 'Theresa',
      'age' => 100500,
      'sex' => 'female',
    ],
    'father' =>  [
      'name' => 'Adam',
      'age' => 100500,
      'sex' => 'male',
    ],
  ]
];

unset($a['parents']['father']);

/* 
  $_GET - данные, переданные методом get, 
  $_POST - данные, переданные методом post, 
  $_REQUEST - 
*/

function logg($data, $dieFlag = false)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    if ($dieFlag) {
      die();
    }
}

  // echo count($a) . PHP_EOL;
  if (!empty($_GET)) {
    echo 'GET' . PHP_EOL;
    logg($_GET);
  }
  if (!empty($_POST)) {
    echo 'POST' . PHP_EOL;
    logg($_POST);
  }
  if (!empty($_REQUEST)) {
    echo 'REQUEST' . PHP_EOL;
    logg($_REQUEST, true);
  }


  // function funcName($a, $b, $value='')
  // {
    
  // }



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="/">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit">
  </form>
  <form action="/" method="post">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit">
  </form>
</body>
</html>





<!-- 

Data Manipulating Language = DML
  insert - вставка новых записей в таблицу
  update - изменение существующих записей
  delete - удаление записи
  select - получение выборки данных
    from - откуда выбираем данные
    where - условие попадения в выборку (and or () between in)
    group by - для группировки выборки по указанному полю
    order by - для сортировки данных по указанным полям

&&
||



 -->










