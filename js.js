$(document).ready(function Todo(){
    $("#tablaJSON").hide();
    $("#graficoJSON").hide();

    alert("Bienvenido a la página Proyecto Emocional");
    $(".celda").click(function(){
        alert($(this).data("x") + ", " + $(this).data("y"));
    });

    document.querySelector('#op1').addEventListener('click', traerDatos);

    $("#op2").click(function(){
        MostrarGrafico();
    });

    $("#op3").click(function(){
        Esconder();
    });

    function traerDatos(){
        $("#tablaJSON").show();
        $("#graficoJSON").hide();

        const xhttp = new XMLHttpRequest();
        xhttp.open('GET', 'prueba.json', true);
        xhttp.send();
        xhttp.onreadystatechange = function(){
            if(this.readyState==4 && this.status==200){
                let datos = JSON.parse(this.responseText);
                let res = document.querySelector('#res');
                res.innerHTML = '';

                for(let item of datos){
                    res.innerHTML += `
                    <tr>
                        <td>${item.nombre}</td>
                        <td>${item.mensaje}</td>
                    </tr>
                    `
                }
            }
        }
    } //Fin traerDatos()


    function MostrarGrafico(){
        $("#graficoJSON").show();
        $("#tablaJSON").hide();


    }

    function Esconder(){
        $("#tablaJSON").hide();
        $("#graficoJSON").hide();
    }


    //CANVAS
    var ctx = document.getElementById('graficoJSON').getContext('2d');
    var myChart = new Chart(ctx, {  
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
        
    }); //FIN CANVAS    
});

