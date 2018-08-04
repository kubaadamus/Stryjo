var dor;
var dz;
var _1;
var _2;
var _3;
var _4;
var _5;
var _6;
var suma;
var rabat = false;
$('input[type=range]').bind('input', function (evt) {
    var nazwa_docelowa = $(this).attr('id') + "box";
    $("#" + nazwa_docelowa + "").attr('value', this.value);




    /*NALICZANIE KWOTY*/

    dor = $("#_dorbox").attr('value');
    dz = $("#_dzbox").attr('value');
    _1 = $("#_1box").attr('value');
    _2 = $("#_2box").attr('value');
    _3 = $("#_3box").attr('value');
    _4 = $("#_4box").attr('value');
    _5 = $("#_5box").attr('value');
    _6 = $("#_6box").attr('value');

    console.log(dor);
    console.log(dz);
    console.log(_3);
    console.log(_4);

    suma = (dor * 100 + dz * 50 + _1 * 2 + _3 * 1);

    if (dz >= 1 && dor>=2) {
        rabat = true;
        $("#rabatAlert").show();

        $("#oszczedzasz").html((suma-suma*0.9).toFixed(2)+" PLN");

        suma = suma * 0.9;
    } else {
        rabat = false;
        $("#rabatAlert").hide();
    }

    suma = suma.toFixed(2);

    suma += " PLN";

    $("#suma").attr('value', suma);

});