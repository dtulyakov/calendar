<head>   
<meta charset="UTF-8">                                                            
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="main2.js"></script>

<link rel="stylesheet" href="bootstrap-3.0.0/dist/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="bootstrap-3.0.0/dist/css/bootstrap.min.css">
<script src="bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>


<script type="text/javascript">

function getval(sel) {

document.getElementById("nedel").value = sel.value;

	$.ajax({
	   type: "POST",
	   url: "seltt2.php",
dataType: "json",	  
 data: "nedel="+sel.value+"&day=1",
		success: function(msg){
			$("#d1").html(msg[0].daynedel);
                      console.log(msg);
                      var $cval=msg;

		}
	 });

$("#d2").html($cval[0].daynedel);
}
</script>
</head>







<br>
<body>





<div style="margin-left: 50px;">

Неделя 
<select name="список" id="target" onchange="getval(this);" class="form-control" style="width:100px;">
<option value="1" >1</option>
<option value="2" >2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option></select>

  <h4>Фильтруем?</h4>





<div style="font-size:16pt; cursor:pointer;" class="label label-warning large" id="allist">Все</div>

<div style="margin-left:14px; margin-right:14px; font-size:16pt; cursor:pointer;" class="label label-info large"  id="yoga1"> Йога</div>
<div style="margin-left:14px; margin-right:14px; font-size:16pt; cursor:pointer;" class="label label-info large" id="pilates"> Пилатес</div>
</br>
</br>
</br>

<input type="hidden" id="nedel" value="1">

<table border="1" bordercolor="#c3c3c3" style="background-color:#FFF; border:1px dotted #5bc0de!important;" width="770" cellpadding="0" cellspacing="0">
	<col width="110" valign="top">
	<col width="110" valign="top">
	<col width="110" valign="top">
	<col width="110" valign="top">
	
	<col width="110" valign="top">
	<col width="110" valign="top">			
	<col width="110" valign="top">		
	
	
	<tr style="background-color:#5bc0de; font-size:12; color:#fff; text-align:center;font-weight:bold; border:1px dotted #DCDCDC;">
		<td>Понедельник</td>
		<td>Вторник</td>
		<td>Среда</td>
		<td>Четверг</td>
		<td>Пятница</td>
		<td>Суббота</td>
		<td >Воскресенье</td>
	</tr>

	<tr style="background-color:#f2f2f2; font-size:12;">
		<td><div id="d1" style="float:top;" > </div></td>
		<td><div id="d2" style="float:top;"> </div></td>
		<td <div id="d3" > </div></td>
		<td><div id="d4" style="float:top;" > </div></td>
		<td><div id="d5" > </div></td>
		<td><div id="d6" > </div> </td>
		<td><div id="d7" > </div></td>
	</tr>



</table>

</div>