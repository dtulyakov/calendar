<link rel="stylesheet" href="style.css">
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

 
$query = 'SELECT * FROM `T_rasp` WHERE `id_week`='.$_POST['nedel'].' and `id_day`='.$_POST['day'].' and `tags` IN ("'.$_POST['tags'].'")';

$result = mysql_query($query) or die('Пичалька =( : ' . mysql_error());


while ($row = mysql_fetch_assoc($result)) {

  $query1 = 'SELECT `name` FROM `T_typetr` WHERE `id`='.$row['id_type'];

  $result1 = mysql_query($query1) or die('Пичалька =( : ' . mysql_error());
  
  while ($row1 = mysql_fetch_assoc($result1)) { 
    $r = $row1['name'];

  }
  
  
   $query2 = 'SELECT `fio` FROM `T_traner` WHERE `id`='.$row['id_tren'];

   $result2 = mysql_query($query2) or die('Пичалька =( : ' . mysql_error());
  
  while ($row2 = mysql_fetch_assoc($result2)) { 
    $tranFIO = $row2['fio'];

  }
  
  
  
  

  echo '<div class="day">
    <div style="color:#00B2EE; font-weight:bold; display: inline-block;">'.$r.'  </div></p>
   <span style="font-size:10pt;" class="glyphicon glyphicon-time">&#9;'.str_replace(".", ":", $row['id_time']).'/'.$row['id_dur'].'мин</span></br></br>
    <span style="font-size:10pt;" class="glyphicon glyphicon-user">'.$tranFIO.'</span></br>    
    </div></br>
    ';


}


 
mysql_free_result($result);
mysql_close($link);




?>