<script>
	var scrolling = true;
	var element=0;

	$(window).on('wheel', function(event){
		scrollPage(event);
	});

	$(window).keydown(function(event) {

		if(event.which==87 || event.which==38)
		{
			element--;
			scrollPage(event);
		}
		if(event.which==83 || event.which==40)
		{
			element++;
			scrollPage(event);
		}
	});	
function scrollPage(event)
{

// deltaY obviously records vertical scroll, deltaX and deltaZ exist too
if(event.originalEvent.deltaY < 0){
  if(scrolling==true)
  {
	element-=1;

  }
}
if(event.originalEvent.deltaY > 0) {
  if(scrolling==true)
  {
  element+=1;

  }
}

  	if(element<0){element=0;}
	if(element>8){element=8;}
if(scrolling)
{
var _string = "#scroll_"+element.toString();
console.log(_string);



$('html, body').animate({
    scrollTop: $(_string).offset().top
}, 200);

}
$('#home, #oferta, #onas, #galeria, #kontakt').removeClass("czerwone");

switch(element)
{
case 0:{
	$('#home').addClass("czerwone");
break;}
case 1:{

break;}
case 2:{
	$('#oferta').addClass("czerwone");
break;}
case 3:{

break;}
case 4:{
	$('#onas').addClass("czerwone");
break;}
case 5:{

break;}
case 6:{
	$('#galeria').addClass("czerwone");
break;}
case 7:{

break;}
case 8:{
	$('#kontakt').addClass("czerwone");
break;}

}
};
</script>