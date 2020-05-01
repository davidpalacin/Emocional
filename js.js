$(document).ready(function Todo(){
    $("#tablaJSON").hide();
    $("#graficoJSON").hide();

    alert("Bienvenido a la página Proyecto Emocional");
    $(".celda").click(function(){
        alert($(this).data("x") + ", " + $(this).data("y"));
    });

    $("#op1").click(function(){
        MostrarTabla();
    });

    $("#op2").click(function(){
        MostrarGrafico();
    });

    function MostrarTabla(){
        $("#tablaJSON").show();
        $("#graficoJSON").hide();
    }
    function MostrarGrafico(){
        $("#graficoJSON").show();
        $("#tablaJSON").hide();
    }
});

