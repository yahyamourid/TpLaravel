@extends('adminlte::page')

@section('title', 'Chart')

@section('content_header')
    <h1 align=center>Nombre des machines par salle </h1>
   
@stop

@section('content')
    <div class="container">
    <div class="row ">
        <div class="col-md-9 mx-auto">
        
            
            <canvas id="myChart" width="490" height="300"></canvas>
        </div>
        </div>

    </div>
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script>
         var data = {!! json_encode($data) !!};
        
        var labels = Object.keys(data);
        var values = Object.values(data);
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    
                    data: values,
                    backgroundColor: [
                        'rgba(255, 99, 132',
                        'rgba(54, 162, 235',
                        'rgba(255, 206, 86)',
                        'rgba(75, 192, 192)',
                        'rgba(153, 102, 255)',
                        'rgba(255, 159, 64)'
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
                
                legend: {
            display: false
        },
                scales: {
                    yAxes: [{
                        scaleLabel: {
                    display: true,
                    labelString: 'Nombre de machines',
                    fontStyle: 'bold',
                    fontSize: 15
                },
                        ticks: {
                            beginAtZero: true,
                            stepSize: 1
                        }
                    }],
                    xAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Les salles',
                    fontStyle: 'bold',
                    fontSize: 15
                },
                animation: {
            duration: 1000,
            easing: 'easeOutBack'
        }
            }]

                }
            }
        });
    </script>
@stop
