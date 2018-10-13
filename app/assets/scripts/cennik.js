//Wartosci inputow
var _1;
var _2;
var _3;
var _4;
var _5;
var _6;
var _7;
var _8;
var _9;
//ceny
var _1cena1 = 1.50;
var _2cena1 = 2.50;
var _3cena1 = 4.00;
var _4cena1 = 4.00;
var _5cena1 = 4.00;
var _6cena1 = 4.00;
var _7cena1 = 7.00;
var _8cena1 = 2.00;
var _9cena1 = 5.50;
//ceny powyzej 50 sztuk
var _1cena2 = 1.20;
var _2cena2 = 2.00;
var _3cena2 = 3.00;
var _4cena2 = 3.00;
var _5cena2 = 3.00;
var _6cena2 = 3.00;
var _7cena2 = 6.00;
var _8cena2 = 2.00;
var _9cena2 = 4.50;

var sufix = " PLN/sztuka"
//Początkowe naliczenie sumy
_1 = $("#_1box").attr('value');
_2 = $("#_2box").attr('value');
_3 = $("#_3box").attr('value');
_4 = $("#_4box").attr('value');
_5 = $("#_5box").attr('value');
_6 = $("#_6box").attr('value');
_7 = $("#_7box").attr('value');
_8 = $("#_8box").attr('value');
_9 = $("#_9box").attr('value');
//Uaktualnienie cen w podglądzie
document.getElementById("_1cena").innerHTML = ((_1 < 50) ? _1cena1 : _1cena2) + sufix;
document.getElementById("_2cena").innerHTML = ((_2 < 50) ? _2cena1 : _2cena2) + sufix;
document.getElementById("_3cena").innerHTML = ((_3 < 50) ? _3cena1 : _3cena2) + sufix;
document.getElementById("_4cena").innerHTML = ((_4 < 50) ? _4cena1 : _4cena2) + sufix;
document.getElementById("_5cena").innerHTML = ((_5 < 50) ? _5cena1 : _5cena2) + sufix;
document.getElementById("_6cena").innerHTML = ((_6 < 50) ? _6cena1 : _6cena2) + sufix;
document.getElementById("_7cena").innerHTML = ((_7 < 50) ? _7cena1 : _7cena2) + sufix;
document.getElementById("_8cena").innerHTML = ((_8 < 50) ? _8cena1 : _8cena2) + sufix;
document.getElementById("_9cena").innerHTML = ((_9 < 50) ? _9cena1 : _9cena2) + sufix;

var suma;
var rabat = false;

pricebox = $("#pricebox");



$(window).scroll(function() {
    var ScreenBottom = $(window).scrollTop() + $(window).height();

    if(ScreenBottom>=$("#_2box").offset().top && ScreenBottom<$("#koszt").offset().top+100)
    {
        pricebox.offset({ top: ScreenBottom-100});
    }

    //console.debug(ScreenBottom);
    if(ScreenBottom>$("#koszt").offset().top+100)
    {
        pricebox.offset({ top: $("#koszt").offset().top}); 
    }

 });


$('input[type=range]').bind('input', function (evt) {
    var nazwa_docelowa = $(this).attr('id') + "box";
    $("#" + nazwa_docelowa + "").attr('value', this.value);

    /*NALICZANIE KWOTY*/
    _1 = $("#_1box").attr('value');
    _2 = $("#_2box").attr('value');
    _3 = $("#_3box").attr('value');
    _4 = $("#_4box").attr('value');
    _5 = $("#_5box").attr('value');
    _6 = $("#_6box").attr('value');
    _7 = $("#_7box").attr('value');
    _8 = $("#_8box").attr('value');
    _9 = $("#_9box").attr('value');

    //Uaktualnianie ceny w podglądzie
    document.getElementById("_1cena").innerHTML = ((_1 < 50) ? _1cena1 : _1cena2) + sufix;
    document.getElementById("_2cena").innerHTML = ((_2 < 50) ? _2cena1 : _2cena2) + sufix;
    document.getElementById("_3cena").innerHTML = ((_3 < 50) ? _3cena1 : _3cena2) + sufix;
    document.getElementById("_4cena").innerHTML = ((_4 < 50) ? _4cena1 : _4cena2) + sufix;
    document.getElementById("_5cena").innerHTML = ((_5 < 50) ? _5cena1 : _5cena2) + sufix;
    document.getElementById("_6cena").innerHTML = ((_6 < 50) ? _6cena1 : _6cena2) + sufix;
    document.getElementById("_7cena").innerHTML = ((_7 < 50) ? _7cena1 : _7cena2) + sufix;
    document.getElementById("_8cena").innerHTML = ((_8 < 50) ? _8cena1 : _8cena2) + sufix;
    document.getElementById("_9cena").innerHTML = ((_9 < 50) ? _9cena1 : _9cena2) + sufix;



    //Naliczanie sumy

    suma = (
        _1 * ((_1 < 50) ? _1cena1 : _1cena2)+
        _2 * ((_2 < 50) ? _2cena1 : _2cena2)+
        _3 * ((_3 < 50) ? _3cena1 : _3cena2)+
        _4 * ((_4 < 50) ? _4cena1 : _4cena2)+
        _5 * ((_5 < 50) ? _5cena1 : _5cena2)+
        _6 * ((_6 < 50) ? _6cena1 : _6cena2)+
        _7 * ((_7 < 50) ? _7cena1 : _7cena2)+
        _8 * ((_8 < 50) ? _8cena1 : _8cena2)+
        _9 * ((_9 < 50) ? _9cena1 : _9cena2)
    );
console.log(suma);


    suma = suma.toFixed(2);

    suma += " PLN";

    $("#suma").attr('value', suma);

});