$(document).ready(function(){
	$.ajax({
		url: "http://localhost:8080/SEPC/reportes/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var id_grupo = [];
			var resultado = [];

			for(var i in data) {
				id_grupo.push("id_grupo" + data[i].id_grupo);
				resultado.push(data[i].resultado);
			}

			var chartdata = {
				labels: id_grupo,
				datasets : [
					{
						label: 'id_grupo resultado',
						backgroundColor: 'rgba(66, 244, 122, 0.75)',
						borderColor: 'rgba(66, 244, 122, 0.75)',
						hoverBackgroundColor: 'rgba(66, 134, 244, 1)',
						hoverBorderColor: 'rgba(66, 134, 244, 1)',
						data: resultado
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});