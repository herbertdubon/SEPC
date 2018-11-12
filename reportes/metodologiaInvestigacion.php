<?Php
       
    $dbhost = 'localhost';
    $dbname = 'proyecto';  
    $dbuser = 'root';                  
    $dbpass = ''; 
    
    
    try{
        
        $dbcon = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }catch(PDOException $ex){
        
        die($ex->getMessage());
    }
    $stmt=$dbcon->prepare("SELECT * FROM grupos where total_cat2>0 ORDER BY total_cat2 DESC;");
    $stmt->execute();
    $json= [];
    $json2= [];
    $json3= [];
    $json4= [];
    $json5= [];
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) 
    {
        extract($row);
        $json[]= $nombre_proyecto;
        $json2[]= (int)$total_cat1;
        $json3[]= (int)$total_cat2; // Presentacion Oral
        $json4[]= (int)$total_cat3; // Poster cientifico
        $json5[]= (int)$total_cat4; // Presentacion Escrita
        $json6[]= (int)$total_cat5; // programacion       
        
    }
    
    
?>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        
        ul {
    text-align: justify;
}
ul:after {
    content: '';
    display: inline-block;
    width: 100%;
}
ul:before {
    content: '';
    display: block;
    margin-top: -1.25em;
}
li {
    display: inline-block;
    margin-right: -.25em;
    position: relative;
    top: 1.25em;
}
</style>
    <title>Chart js</title>
</head>
<body>
<div class="col l2 m4 s6">
    <ul>
        <li>
            <h1>Resultados de Presentación Escrita</h1>
                <div style="width: 400px; height: 200px;">
                <canvas id="myChart"></canvas>
                </div>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
                <script type="text/javascript">

                    var ctx = document.getElementById('myChart').getContext('2d');
                var chart = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'bar',

                    // The data for our dataset
                    data: {
                        labels: <?php echo json_encode($json); ?>,
                        datasets: [{
                            label: "Total de la categoria",
                            backgroundColor: 'orange',
                            borderColor: 'red',
                            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                            hoverBorderColor: 'rgba(200, 200, 200, 1)',
                            data: <?php echo json_encode($json5); ?>,
                        }]
                    },

                    // Configuration options go here
                    options: {
                        scales: {
                        xAxes: [{ stacked: true }],
                        yAxes: [{ stacked: true }]
                        }
                    }
                });
                </script>
                </div>
            </li>
            <li>
                <h1>Resultados de Presentacion Oral &nbsp&nbsp&nbsp</h1>
                <div style="width: 400px; height: 200px;">
                <canvas id="myChart2"></canvas>


                <script type="text/javascript">

                    var ctx1 = document.getElementById('myChart2').getContext('2d');
                    var chart1 = new Chart(ctx1, {
                        // The type of chart we want to create
                        type: 'bar',

                        // The data for our dataset
                        data: {
                            labels: <?php echo json_encode($json); ?>,
                            datasets: [{
                                label: "Total de la categoria",
                                backgroundColor: 'green',
                                borderColor: 'red',
                                hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                data: <?php echo json_encode($json3); ?>,
                            }]
                        },

                        // Configuration options go here
                        options: {
                        scales: {
                        xAxes: [{ stacked: true }],
                        yAxes: [{ stacked: true }]
                        }
                    }
                    });
                </script>
                </div>
            </li>
            <li>
                <h1>Resultados de Poster Científico</h1>
                <div style="width: 400px; height: 200px;">
                <canvas id="myChart3"></canvas>


                <script type="text/javascript">

                    var ctx1 = document.getElementById('myChart3').getContext('2d');
                    var chart1 = new Chart(ctx1, {
                        // The type of chart we want to create
                        type: 'bar',

                        // The data for our dataset
                        data: {
                            labels: <?php echo json_encode($json); ?>,
                            datasets: [{
                                label: "Total de la categoria",
                                backgroundColor: 'blue',
                                borderColor: 'red',
                                hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                data: <?php echo json_encode($json4); ?>,
                            }]
                        },

                        // Configuration options go here
                        options: {
                        scales: {
                        xAxes: [{ stacked: true }],
                        yAxes: [{ stacked: true }]
                        }
                    }
                    });
                </script>
                </div>
            </li>

    </ul>
</div>
</body>
</html>