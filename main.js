    
$(document).ready(function(){
    $("#tt4").click(function(){
        $("#m1").show();
    });


});

function getval(sel) {
document.getElementById("nedel").value = sel.value;

	$.ajax({
	   type: "POST",
	   url: "seltt.php",
	   data: "nedel="+sel.value+"&day=1",
		success: function(msg){
			$("#pn").html(msg);
		}
	 });

	$.ajax({
	   type: "POST",
	   url: "seltt.php",
	   data: "nedel="+sel.value+"&day=2",
		success: function(msg){
			$("#vt").html(msg);
		}
	 });

	$.ajax({
	   type: "POST",
	   url: "seltt.php",
	   data: "nedel="+sel.value+"&day=3",
		success: function(msg){
			$("#sr").html(msg);
		}
	 });

	$.ajax({
	   type: "POST",
	   url: "seltt.php",
	   data: "nedel="+sel.value+"&day=4",
		success: function(msg){
			$("#ch").html(msg);
		}
	 });
	 	

	$.ajax({
	   type: "POST",
	   url: "seltt.php",
	   data: "nedel="+sel.value+"&day=5",
		success: function(msg){
			$("#pt").html(msg);
		}
	 });

	$.ajax({
	   type: "POST",
	   url: "seltt.php",
	   data: "nedel="+sel.value+"&day=6",
		success: function(msg){
			$("#sb").html(msg);
		}
	 }); 
}


function getval1(r) {

	$.ajax({
	   type: "POST",
	   url: "seltt.php",
	   data: "nedel=1"+"&day=1",
		success: function(msg){
			$("#pn").html(msg);
		}
	 });

	$.ajax({
	   type: "POST",
	   url: "seltt.php",
	   data: "nedel=1"+"&day=2",
		success: function(msg){
			$("#vt").html(msg);
		}
	 });


	$.ajax({
	   type: "POST",
	   url: "seltt.php",
	   data: "nedel=1"+"&day=3",
		success: function(msg){
			$("#sr").html(msg);
		}
	 });


	$.ajax({
	   type: "POST",
	   url: "seltt.php",
	   data: "nedel=1"+"&day=4",
		success: function(msg){
			$("#ch").html(msg);
		}
	 });


	$.ajax({
	   type: "POST",
	   url: "seltt.php",
	   data: "nedel=1"+"&day=5",
		success: function(msg){
			$("#pt").html(msg);
		}
	 });


	$.ajax({
	   type: "POST",
	   url: "seltt.php",
	   data: "nedel=1"+"&day=6",
		success: function(msg){
			$("#sb").html(msg);
		}
	 });


	 	 
}



function getval_tag(tag) {
$tag = tag;
	$.ajax({
	   type: "POST",
	   url: "seltt_tags.php",
	   data: "nedel="+document.getElementById("nedel").value+"&day=1&tags="+$tag,
		success: function(msg){
			$("#pn").html(msg);
		}
	 });

	$.ajax({
	   type: "POST",
	   url: "seltt_tags.php",
	   data: "nedel="+document.getElementById("nedel").value+"&day=2&tags="+$tag,
		success: function(msg){
			$("#vt").html(msg);
		}
	 });

	$.ajax({
	   type: "POST",
	   url: "seltt_tags.php",
	   data: "nedel="+document.getElementById("nedel").value+"&day=3&tags="+$tag,
		success: function(msg){
			$("#sr").html(msg);
		}
	 });

	$.ajax({
	   type: "POST",
	   url: "seltt_tags.php",
	   data: "nedel="+document.getElementById("nedel").value+"&day=4&tags="+$tag,
		success: function(msg){
			$("#ch").html(msg);
		}
	 });
	 	

	$.ajax({
	   type: "POST",
	   url: "seltt_tags.php",
	   data: "nedel="+document.getElementById("nedel").value+"&day=5&tags="+$tag,
		success: function(msg){
			$("#pt").html(msg);
		}
	 });

	$.ajax({
	   type: "POST",
	   url: "seltt_tags.php",
	   data: "nedel="+document.getElementById("nedel").value+"&day=6&tags="+$tag,
		success: function(msg){
			$("#sb").html(msg);
		}
	 }); 
}






 