$(document).ready(function(){
 var images = $(".slideShow").find('img');
 var imagesCount = images.length;
 slide(images);
});

function slide(i){
	console.log(i[0]);
}