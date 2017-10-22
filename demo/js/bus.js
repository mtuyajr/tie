$(document).ready(function () {
	var priceF = $("#priceF").text();
	var priceF = parseInt(priceF);

	var seatbook = 0;
	var price = $("#tprice").val();
   $("input[type='checkbox']").change(function () {
      var maxAllowed = 6;
      var cnt = $("input[type='checkbox']:checked").length;
      if (cnt > maxAllowed) 
      {
         $(this).prop("checked", "");
         seatbook--;
		 $("#book").text(seatbook);
		 price = parseInt(price);
		 price = price - priceF + " Tsh";
		 $("#tprice").val(price);
         alert('Select maximum of ' + maxAllowed + ' Seats!');
     };

  });

$("input[type='checkbox']").click(function(){
	price = parseInt(price);
	if (this.checked) {
		price = price + priceF + " Tsh";
		$("#tprice").val(price);
		seatbook++;
		$("#book").html(seatbook);
		var seatid = this.id;
		$("#ul").append("<li class='seat"+seatid+"'> Seat"+seatid+"</li>");
	}else{
		price = price - priceF + " Tsh";
		$("#tprice").val(price);
		seatbook--;
		$("#book").text(seatbook);
		var i = this.id;
		i = parseInt(i);
		$(".seat"+i).remove();
	}
});

$("#posRight").click(function(){
	$(".finishing").hide('medium');
});



$(".selectedSeat").click(function(){
	var booked = $("#book").text();
	if (booked <= 0) {
		return;
	}else{
		$(".finishing").show('medium');
		for (var i = 0; i < booked; i++) {
			$("#tableF").append
			("<tr><td width='10%'><input type='text' name='name"+(i+1)+"' value='seat "+(i+1)+"' id='seatFinish' disabled></td>  <td><input type='text' name='name' id='name' placeholder='Passanger Name' required></td><td width='20%'><select name='gender' id='gender'><option value='others' selected>Choose Gender</option><option value='Male'>Male</option><option value='Female'>Female</option></select></td></tr> ");
		}
		
	}
});






});