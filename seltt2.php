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



$query = 'SELECT * FROM `T_rasp` WHERE `id_week`='.$_POST['nedel'];

$result = mysql_query($query) or die('Пичалька =( : ' . mysql_error());


while ($row = mysql_fetch_assoc($result)) {

  $query1 = 'SELECT `name`, `descr` FROM `T_typetr` WHERE `id`='.$row['id_type'];

  $result1 = mysql_query($query1) or die('Пичалька =( : ' . mysql_error());
  
  while ($row1 = mysql_fetch_assoc($result1)) { 
    $r = $row1['name'];
    $d = $row1['descr'];

  } 


 
  
   $query2 = 'SELECT `fio` FROM `T_traner` WHERE `id`='.$row['id_tren'];

   $result2 = mysql_query($query2) or die('Пичалька =( : ' . mysql_error());
  
  while ($row2 = mysql_fetch_assoc($result2)) { 
    $tranFIO = $row2['fio'];

  }


$array2[] = array(
    "daynedel" => $row['id'],
    "more" => array(
         "type" => $r,
         "descr" => $d,
         "traner" => $tranFIO,
         "time" => str_replace(".", ":", $row['id_time']),
         "prod" => $row['id_dur'],
         "type" => "foo",

        
    )
);



}

$tt = json_encode($array2);





  $cyr_chars = array (
    '\u0430' => 'а', '\u0410' => 'А',
    '\u0431' => 'б', '\u0411' => 'Б',
    '\u0432' => 'в', '\u0412' => 'В',
    '\u0433' => 'г', '\u0413' => 'Г',
    '\u0434' => 'д', '\u0414' => 'Д',
    '\u0435' => 'е', '\u0415' => 'Е',
    '\u0451' => 'ё', '\u0401' => 'Ё',
    '\u0436' => 'ж', '\u0416' => 'Ж',
    '\u0437' => 'з', '\u0417' => 'З',
    '\u0438' => 'и', '\u0418' => 'И',
    '\u0439' => 'й', '\u0419' => 'Й',
    '\u043a' => 'к', '\u041a' => 'К',
    '\u043b' => 'л', '\u041b' => 'Л',
    '\u043c' => 'м', '\u041c' => 'М',
    '\u043d' => 'н', '\u041d' => 'Н',
    '\u043e' => 'о', '\u041e' => 'О',
    '\u043f' => 'п', '\u041f' => 'П',
    '\u0440' => 'р', '\u0420' => 'Р',
    '\u0441' => 'с', '\u0421' => 'С',
    '\u0442' => 'т', '\u0422' => 'Т',
    '\u0443' => 'у', '\u0423' => 'У',
    '\u0444' => 'ф', '\u0424' => 'Ф',
    '\u0445' => 'х', '\u0425' => 'Х',
    '\u0446' => 'ц', '\u0426' => 'Ц',
    '\u0447' => 'ч', '\u0427' => 'Ч',
    '\u0448' => 'ш', '\u0428' => 'Ш',
    '\u0449' => 'щ', '\u0429' => 'Щ',
    '\u044a' => 'ъ', '\u042a' => 'Ъ',
    '\u044b' => 'ы', '\u042b' => 'Ы',
    '\u044c' => 'ь', '\u042c' => 'Ь',
    '\u044d' => 'э', '\u042d' => 'Э',
    '\u044e' => 'ю', '\u042e' => 'Ю',
    '\u044f' => 'я', '\u042f' => 'Я',
 
    '\r' => '',
    '\n' => '<br />',
    '\t' => ''
  );
 
  foreach ($cyr_chars as $key => $value) {
    $tt = str_replace($key, $value, $tt); 
  }






echo $tt;


 
mysql_free_result($result);
mysql_close($link);



?>

