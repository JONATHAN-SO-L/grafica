var caracter, opcion;

$.ajax ({
	url: "grafica.php",
	type: "POST",
	datatype: "json",
	succes: function (jan) {
		//opcion.series[0].data = jan;
		//caracter = new Highcharts.chart(opcion);
		console.log(jan);
	}
});

Highcharts.chart('contenedor', {
	chart: {
		type: 'column'
	},
	title: {
		text: 'INFORME ANUAL'
	},
	xAxis: {
		categories: [
		'Enero',
		'Febrero',
		'Marzo',
		'Abril',
		'Mayo',
		'Junio',
		'Julio',
		'Agosto',
		'Septiembre',
		'Octubre',
		'Noviembre',
		'Diciembre'
		],
		crosshair: true
	},
	yAxis: {
		min: 0,
		title: {
			text: 'TOTALES POR MES'
		}
	},
	tooltip: {
		headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
		pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
		'<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
		footerFormat: '</table>',
		shared: true,
		useHTML: true
	},
	plotOptions: {
		column: {
			pointPadding: 0.2,
			borderWidth: 0
		}
	},
	series: [{
		name: 'Publicaciones',
		data: [35, 45, 65, 35, 25, 16, 15, 65, 35, 43, 26, 46],

	}, {
		name: 'Videos',
		data: [35, 45, 65, 35, 25, 16, 15, 65, 35, 43, 26, 46]

	}, {
		name: 'Horas',
		data: [70, 12, 4, 35, 75, 95, 1, 64, 42, 43, 26, 7]

	}, {
		name: 'Revisitas',
		data: [35, 45, 65, 35, 25, 16, 15, 65, 35, 43, 26, 46]

	},{
		name: 'Cursos',
		data: [35, 45, 65, 35, 25, 16, 15, 65, 35, 43, 26, 46]

	}]
});