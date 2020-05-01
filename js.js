$(document).ready(function Todo(){
    alert("Bienvenido a la página Proyecto Emocional");
    $(".celda").click(function(){
        alert($(this).data("x") + ", " + $(this).data("y"));
    });
});

