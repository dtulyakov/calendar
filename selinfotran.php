<?php

$link = mysql_connect('localhost', 
                      'bh47253_ad',
                      'Qwerty123')
    or die('Не могу соединиться: ' . mysql_error());

mysql_select_db('bh47253_ad') or die('Хнык, база данных не выбрана');
mysql_query ("set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
mysql_query ("SET NAMES utf8");



$query = 'SELECT `descr` FROM `T_typetr` WHERE `id`='.$_POST['id'];

$result = mysql_query($query) or die('Пичалька =( : ' . mysql_error());


while ($row = mysql_fetch_assoc($result)) {

echo $row['descr'];

  }