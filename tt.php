<head>   
<meta charset="UTF-8">                                                            
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="main.js"></script>

<link rel="stylesheet" href="bootstrap-3.0.0/dist/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="bootstrap-3.0.0/dist/css/bootstrap.min.css">
<script src="bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
</head>

<script type="text/javascript">

var $typeForF;

function ruru(){
  getval1(2);

}


  $(document).ready(function(){
  
     $("#yoga1").click(function(){ 
     
      
      getval_tag("Йога");
    
     });
     
       $("#pilates").click(function(){ 
      getval_tag("Пилатес");
     }); 
     
       $("#allist").click(function(){ 
      getval1(2);
     });   
       
     
        
 });

</script>


<br>
<body onload="ruru();">





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
		<td><div id="pn" style="float:top;" > </div></td>
		<td><div id="vt" style="float:top;"> </div></td>
		<td style="float:top;"><div id="sr" > </div></td>
		<td><div id="ch" style="float:top;" > </div></td>
		<td><div id="pt" > </div></td>
		<td><div id="sb" > </div> </td>
		<td><div id="vs" > </div></td>
	</tr>



</table>

</div>