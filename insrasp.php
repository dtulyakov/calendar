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



?>




<head>   
<meta charset="UTF-8">                                                            
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="main.js"></script>

<link rel="stylesheet" href="bootstrap-3.0.0/dist/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="bootstrap-3.0.0/dist/css/bootstrap.min.css">
<script src="bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>



<div style="width:200px; margin:100px;">

<form role="form">
  <div class="form-group">
Номер недели
<select name="список" id="target" onchange="getval(this);" class="form-control" style="width:100px;">
<option value="1" >1</option>
<?php 

for ($i = 1; $i <= 5; $i++) {
 echo "<option value=".$i.">".$i."</option>";
}
?>
</select>
</br>
День недели
<select name="Дни недели" id="daynedel"  class="form-control" style="width:200px;">
<option value="1" >Понедельник</option>
<option value="2" >Вторник</option>
<option value="3" >Среда</option>
<option value="4" >Четверг</option>
<option value="5" >Пятница</option>
<option value="6" >Суббота</option>
<option value="7" >Воскресенье</option>
</select>
 
<br/>Вид тренировки
<select name="Вид тренировки" id="daynedel"  class="form-control" style="width:200px;">

<?php 
  $query1 = 'SELECT `id`, `name` FROM `T_typetr`';
  $result1 = mysql_query($query1) or die('Пичалька =( : ' . mysql_error());
    while ($row1 = mysql_fetch_assoc($result1)) { 
      echo "<option value=".$row1['id'].">".$row1['name']."</option>";
    } 
?>
</select>


</br>
Тренер
<select name="Тренер" id="traner"  class="form-control" style="width:200px;">

<?php 
  $query2 = 'SELECT `id`, `fio` FROM `T_traner`';
  $result2 = mysql_query($query2) or die('Пичалька =( : ' . mysql_error());
    while ($row2 = mysql_fetch_assoc($result2)) { 
       echo "<option value=".$row2['id'].">".$row2['fio']."</option>";
     } 
?>
</select>

</br>

Начало занятия
<input type="text" class="input-xlarge" id="input01">


</br></br>

Продолжительность занятия
<input type="text" class="input-xlarge" id="input01"></br></br>
      <button type="submit" class="btn btn-default">Submit</button>
</form>
</br>
</div>