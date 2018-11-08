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
    $stmt=$dbcon->prepare("SELECT * FROM grupos");
    $stmt->execute();
    $json= [];
    $json2= [];
    $json3= [];
    $json4= [];
    $json5= [];
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $json[]= $nombre_proyecto;
        $json2[]= (int)$total_cat1;
        $json3[]= (int)$total_cat2;
        $json4[]= (int)$total_cat3;
        $json5[]= (int)$total_cat4;
        $json6[]= (int)$total_cat5;
       
        
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chart js</title>
</head>
<body>
    <h1>Resultados de Tecnologia</h1>
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
            backgroundColor: 'lightblue',
            borderColor: 'red',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: <?php echo json_encode($json2); ?>,
        }]
    },

    // Configuration options go here
    options: {}
});
</script>


<h1>Resultados de Presentacion Oral </h1>
<div style="width: 400px; height: 200px;">
<canvas id="myChart1"></canvas>
</div>

<script type="text/javascript">

    var ctx = document.getElementById('myChart1').getContext('2d');
    var chart = new Chart(ctx, {
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
        options: {}
    });
</script>

<h1>Resultados de Poster Cientifico </h1>
<div style="width: 400px; height: 200px;">
<canvas id="myChart2"></canvas>
</div>

<script type="text/javascript">

    var ctx = document.getElementById('myChart2').getContext('2d');
    var chart = new Chart(ctx, {
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
        options: {}
    });
</script>
<h1>Resultados de Innovacion </h1>
<div style="width: 400px; height: 200px;">
<canvas id="myChart3"></canvas>
</div>

<script type="text/javascript">

    var ctx = document.getElementById('myChart3').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: <?php echo json_encode($json); ?>,
            datasets: [{
                label: "Total de la categoria",
                backgroundColor: 'brown',
                borderColor: 'red',
                hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                hoverBorderColor: 'rgba(200, 200, 200, 1)',
                data: <?php echo json_encode($json4); ?>,
            }]
        },

        // Configuration options go here
        options: {}
    });
</script>

<h1>Resultados de Presentacion Oral </h1>
<div style="width: 400px; height: 200px;">
<canvas id="myChart4"></canvas>
</div>

<script type="text/javascript">

    var ctx = document.getElementById('myChart4').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: <?php echo json_encode($json); ?>,
            datasets: [{
                label: "Total de la categoria",
                backgroundColor: 'purple',
                borderColor: 'red',
                hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                hoverBorderColor: 'rgba(200, 200, 200, 1)',
                data: <?php echo json_encode($json5); ?>,
            }]
        },

        // Configuration options go here
        options: {}
    });
</script>

</body>
</html>