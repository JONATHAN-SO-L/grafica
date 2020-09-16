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
		data: [11,12,13,14,15,16,17,18,19,20,21,22]

	}, {
		name: 'Videos',
		data: [11,12,13,14,15,16,17,18,19,20,21,22]

	}, {
		name: 'Horas',
		data: [11,12,13,14,15,16,17,18,19,20,21,22]

	}, {
		name: 'Revisitas',
		data: [11,12,13,14,15,16,17,18,19,20,21,22]

	},{
		name: 'Cursos',
		data: [11,12,13,14,15,16,17,18,19,20,21,22]

	}]
});

console.log("Función correcta");