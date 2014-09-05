
function startup() {
	// http://xdsoft.net/jqplugins/datetimepicker/
	$('#dtp_from').datetimepicker({format:'Y/m/d H:i',lang:'ru'});
	$('#dtp_to').datetimepicker({format:'Y/m/d H:i',lang:'ru'});

	// http://api.jqueryui.com/spinner/
	//$('#spin_kind').spinner();

	refreshKind();

	refreshQuality();

	// prevent for non numeric caracters

	$(".number").keyup( function() {
		this.value = this.value.replace(/[^0-9\.]/g, '');
	});


	// // // // //	TODO comment after test

	$('#dtp_from').val('2010/01/01 00:00');
	$('#dtp_to').val('2014/12/31 23:59');

	$('#thick_min').val('0');
	$('#thick_max').val('5000');
	$('#width_from').val('0');
	$('#width_to').val('5000');
	$('#length_from').val('0');
	$('#length_to').val('5000');
	$('#pocket_from').val('0');
	$('#pocket_to').val('5000');
	$('#humidity_from').val('0');
	$('#humidity_to').val('5000');
}

/*! \fn refreshKind()
 *
 * \brief Обновляет породы
 */

function refreshKind()
{
	$.getJSON('php/fetchKind.php', {},
			function( j ) {
				var options = '';
				for ( var i = 0; i < j.length; ++i ) {
					options += '<option value="' +
						j[ i ].ID + '">' +
						j[ i ].Name + '</option>';
				}
				$("select#kind").html( options );
			});

}

/*! \fn refreshQuality()
 *
 * \brief Обновляет качества
 */

function refreshQuality()
{
	$.getJSON('php/fetchQuality.php', {},
			function( j ) {
				var options = '';
				for ( var i = 0; i < j.length; ++i ) {
					options += '<option value="' +
						j[ i ].ID + '">' +
						j[ i ].Name + '</option>';
				}
				$("select#quality").html( options );
			});
}



