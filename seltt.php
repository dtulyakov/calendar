<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">                                                            
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="main.js"></script>

<link rel="stylesheet" href="bootstrap-3.0.0/dist/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="bootstrap-3.0.0/dist/css/bootstrap.min.css">
<script src="bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>

<script type="text/javascript" >


function infotran(id){

$.ajax({
	   type: "POST",
	   url: "selinfotran.php",
	   data: "id="+id,
		success: function(msg){
			$("#descrtren").html(msg);
		}
	 });



</script>


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



$query = 'SELECT * FROM `T_rasp` WHERE `id_week`='.$_POST['nedel'].' and `id_day`='.$_POST['day'];

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
/*
echo '<tr><table border="1" bordercolor="#c3c3c3" width="100%" cellpadding="0" cellspacing="0">
';
		echo '<td>' . $r. '</td>';
		echo '<td>' . str_replace(".", ":", $row['id_time']) . '</td>';
		echo '<td>' . $tranFIO . '</td>';
		echo '</tr></table>';*/


 // aria-hidden="true"
  echo '

<div class="day">




    <div style="color:#00B2EE; font-weight:bold; display: inline-block;" id="zagolovoktran" ><a data-toggle="modal" href="#myModal'.$row['id'].'" style="text-decoration:none;">'.$r.'</a>  </div></p>
   <span style="font-size:10pt;" class="glyphicon glyphicon-time">&#9;'.str_replace(".", ":", $row['id_time']).'/'.$row['id_dur'].'мин</span></br></br>
    <div style="margin-bottom:4px;"><span style="font-size:10pt;" class="glyphicon glyphicon-user">'.$tranFIO.'</span></div></br>    


<div class="modal fade" id="myModal'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                 
        </div>
        <div class="modal-body">
        <div id="descrtren">'.$d.' </div>
        </div>
       
      </div>
    </div>
  </div>





 </div></br>
    ';


}


 
mysql_free_result($result);
mysql_close($link);



?>