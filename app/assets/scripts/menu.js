//Jesli uzytkownik wjedzie wysoko kursorem to menu sie pojawia//
var Menu_Down = false;

(window).addEventListener("mousemove", function (e) {

    if (e.pageY - $(window).scrollTop() < 200) {
        if (!Menu_Down && $(window).scrollTop() > 200) {
            Menu_Down = true;
            $(".menu").slideDown("fast");
        }
    } else {
        if (Menu_Down) {
            Menu_Down = false;
            $(".menu").slideUp("fast");
        }

    }
});

(window).addEventListener("scroll", function (e) {
    if ($(window).scrollTop() < 200 && !Menu_Down) {
        $(".menu").slideDown("slow");
        Menu_Down = false;
    }

    if ($(window).scrollTop() > 200 && !Menu_Down) {
        $(".menu").slideUp("slow");
    }

});