var selectorFrom = document.getElementById("inputRegion");

$(document).ready(function(){

	//hide the model containing the regions
	$("#listValcancel").click(function(){
	 	$(".regions").css("display","none");
	 });

	$("#listValcancelTo").click(function(){
	 	$(".regionsTo").css("display","none");
	 });


	//displaying calender on the date field
	 $( "#datepicker" ).datepicker();

	$("#inputRegion").click(function(){
	 	selectorfrom();
	 });

	$("#inputRegionTo").click(function(){
	 	selectorto();
	 });

	function selectorfrom(){
	$(".regions").css("display","block");
	$(".regionsTo").css("display","none");
//AUTOSELECT FROM
	$(".ValDar").click(function(){
	 	var value = $(".ValDar").text();
	 	$(".regions").css("display","none");
	 	selectorFrom.value = value;
	 });

	$(".valMwanza").click(function(){
	 	var value = $(".valMwanza").text();
	 	$(".regions").css("display","none");
	 	selectorFrom.value = value;
	 });

	$(".valMoro").click(function(){
	 	var value = $(".valMoro").text();
	 	$(".regions").css("display","none");
	 	selectorFrom.value = value;
	 });

	$(".valTanga").click(function(){
	 	var value = $(".valTanga").text();
	 	$(".regions").css("display","none");
	 	selectorFrom.value = value;
	 });

	$(".valArusha").click(function(){
	 	var value = $(".valArusha").text();
	 	$(".regions").css("display","none");
	 	selectorFrom.value = value;
	 });

	$(".valShinyanga").click(function(){
	 	var value = $(".valShinyanga").text();
	 	$(".regions").css("display","none");
	 	selectorFrom.value = value;
	 });

	$(".valTunduma").click(function(){
	 	var value = $(".valTunduma").text();
	 	$(".regions").css("display","none");
	 	selectorFrom.value = value;
	 });
	$(".valTuriani").click(function(){
	 	var value = $(".valTuriani").text();
	 	$(".regions").css("display","none");
	 	selectorFrom.value = value;
	 });
	$(".valMtwara").click(function(){
	 	var value = $(".valMtwara").text();
	 	$(".regions").css("display","none");
	 	selectorFrom.value = value;
	 });
	$(".valSingida").click(function(){
	 	var value = $(".valSingida").text();
	 	$(".regions").css("display","none");
	 	selectorFrom.value = value;
	 });


	};



var selectorTo = document.getElementById("inputRegionTo");
		function selectorto(){
	$(".regionsTo").css("display","block");
	$(".regions").css("display","none");
//AUTOSELECT FROM
	$(".ValDarTo").click(function(){
	 	var valueT = $(".ValDarTo").text();
	 	$(".regionsTo").css("display","none");
	 	selectorTo.value = valueT;
	 });

	$(".valMwanzaTo").click(function(){
	 	var valueT = $(".valMwanzaTo").text();
	 	$(".regionsTo").css("display","none");
	 	selectorTo.value = valueT;
	 });

	$(".valMoroTo").click(function(){
	 	var valueT = $(".valMoroTo").text();
	 	$(".regionsTo").css("display","none");
	 	selectorTo.value = valueT;
	 });

	$(".valTangaTo").click(function(){
	 	var valueT = $(".valTangaTo").text();
	 	$(".regionsTo").css("display","none");
	 	selectorTo.value = valueT;
	 });

	$(".valArushaTo").click(function(){
	 	var valueT = $(".valArushaTo").text();
	 	$(".regionsTo").css("display","none");
	 	selectorTo.value = valueT;
	 });

	$(".valShinyangaTo").click(function(){
	 	var valueT = $(".valShinyangaTo").text();
	 	$(".regionsTo").css("display","none");
	 	selectorTo.value = valueT;
	 });

	$(".valTundumaTo").click(function(){
	 	var valueT = $(".valTundumaTo").text();
	 	$(".regionsTo").css("display","none");
	 	selectorTo.value = valueT;
	 });
	$(".valTurianiTo").click(function(){
	 	var valueT = $(".valTurianiTo").text();
	 	$(".regionsTo").css("display","none");
	 	selectorTo.value = valueT;
	 });
	$(".valMtwaraTo").click(function(){
	 	var valueT = $(".valMtwaraTo").text();
	 	$(".regionsTo").css("display","none");
	 	selectorTo.value = valueT;
	 });
	$(".valSingidaTo").click(function(){
	 	var valueT = $(".valSingidaTo").text();
	 	$(".regionsTo").css("display","none");
	 	selectorTo.value = valueT;
	 });
	$(".valMbeyaTo").click(function(){
	 	var valueT = $(".valMbeyaTo").text();
	 	$(".regionsTo").css("display","none");
	 	selectorTo.value = valueT;
	 });


	};




})