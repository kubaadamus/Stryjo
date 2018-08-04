var active_photo=1;
var images_count = $(".thumb_button").length;
var hr_width=0;
document.addEventListener("mousemove",function(){
    mouseMoved=true;
    });
    document.addEventListener("scroll",function(){
        mouseMoved=true;
        });
document.addEventListener("click",function(e){
    if($(e.target).attr('class')=="thumb_button")
    {
        var target = $(e.target).attr('link');
        console.log(target);
        $("#obraz").attr("src",target);
    }
    if($(e.target).attr('class')=="prev")
    {
        przewijaj(-1);
    }
    if($(e.target).attr('class')=="next")
    {
        przewijaj(1);
    }

});
function przewijaj(a){
    active_photo+=a;

    if(active_photo>=images_count)
    {
        active_photo=0;
    }
    if(active_photo<0)
    {
        active_photo=images_count-1;
    }
    console.log(active_photo);
    $("#obraz").attr("src",$(".thumb_button").eq(active_photo).attr('link'));
}