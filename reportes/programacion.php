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
    $stmt=$dbcon->prepare("SELECT * FROM grupos where total_cat5>0 ORDER BY total_cat5 DESC;");
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
        $json3[]= (int)$total_cat2;
        $json4[]= (int)$total_cat3;
        $json5[]= (int)$total_cat4;
        $json6[]= (int)$total_cat5;
       
        
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

    <ul>
        <li>
    <h1>Resultados de Programacion</h1>
<div style="width: 800px; height: 400px;">
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
            data: <?php echo json_encode($json6); ?>,
        }]
    },

    // Configuration options go here
    options: {
        scales: { yAxes: [{ stacked: true }] } } 
        }); 
    
</script>
</li>




</body>
</html>