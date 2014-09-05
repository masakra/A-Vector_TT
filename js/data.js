function fetchData()
{
    var start = $("#dtp_from").val();
	var finish = $("#dtp_to").val();
	var kind = $("#kind option:selected").val();
	var quality = $("#quality option:selected").val();
	var thick_min = $("#thick_min").val();
	var thick_max = $("#thick_max").val();
	var width_from = $("#width_from").val();
	var width_to = $("#width_to").val();
	var length_from = $("#length_from").val();
	var length_to = $("#length_to").val();
	var pocket_from = $("#pocket_from").val();
	var pocket_to = $("#pocket_to").val();
	var humidity_from = $("#humidity_from").val();
	var humidity_to = $("#humidity_to").val();

	$.getJSON('php/fetchData.php', {
		"start": start,
		"finish": finish,
		"kind": kind,
		"quality": quality,
		"thick_min": thick_min,
		"thick_max": thick_max,
		"widht_from": width_from,
		"width_to": width_to,
		"length_from": length_from,
		"length_to": length_to,
		"pocket_from": pocket_from,
		"pocket_to": pocket_to,
		"humidity_from": humidity_from,
		"humidity_to": humidity_to
	}, function( j ) {
		var html = '<table class="grid">' +
			'<tr>' +
			'<th>ID</th>' +
			'<th>Дата и время</th>' +
			'<th>Порода</th>' +
			'<th>Качество</th>' +
			'<th>Толщина<br>ном. мм</th>' +
			'<th>Ширина<br>ном. мм</th>' +
			'<th>Длина<br>ном. мм</th>' +
			'<th>Толщина<br>факт. мм</th>' +
			'<th>Ширина<br>факт. мм</th>' +
			'<th>Длина<br>факт. мм</th>' +
			'<th>Карман</th>' +
			'<th>Доп. инфо.</th>' +
			'<th>Влажность</th>' +
			'</tr>';

		var style = 'cell';

		for ( var i = 0; i < j.length; ++i ) {
			style = style === 'cell' ? 'cell odd' : 'cell';
			html += '<tr>' +
				'<td class="' + style + '">' + j[ i ].ID + '</td>' +
				'<td class="' + style + '">' + j[ i ].DateTime + '</td>' +
				'<td class="' + style + '">' + j[ i ].Kind + '</td>' +
				'<td class="' + style + '">' + j[ i ].Quality + '</td>' +
				'<td class="' + style + '" align=right>' + j[ i ].ThickNom + '</td>' +
				'<td class="' + style + '" align=right>' + j[ i ].WidthNom + '</td>' +
				'<td class="' + style + '" align=right>' + j[ i ].LengthNom + '</td>' +
				'<td class="' + style + '" align=right>' + j[ i ].ThickFact + '</td>' +
				'<td class="' + style + '" align=right>' + j[ i ].WidthFact + '</td>' +
				'<td class="' + style + '" align=right>' + j[ i ].LengthFact + '</td>' +
				'<td class="' + style + '" align=right>' + j[ i ].Pocket + '</td>' +
				'<td class="' + style + '" align=right>' + j[ i ].AuxInfo + '</td>' +
				'<td class="' + style + '" align=right>' + j[ i ].Humidity + '</td>' +
				'</tr>';
		}

		html += '</table>';

		$("div#data").html( html );
	});

}

