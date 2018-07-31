//Jesli uzytkownik wjedzie wysoko kursorem to menu sie pojawia//
var Menu_Down=false;

(window).addEventListener("mousemove",function(e){
    if(e.pageY<200)
    {
        if(!Menu_Down)
        {
            console.log("Opuszczam Menu!");
            Menu_Down=true;
            $(".menu").slideDown("fast");
        }
    }
    else{
        if(Menu_Down){
            console.log("Podnoszę menu");
            Menu_Down=false;
            $(".menu").slideUp("fast");
        }

    }
})