<?php

function query( $sql )
{
	global $db;

	$db = mssql_connect('a-vector', 'ma', 'ma');		// CONNECTION HERE  !!!!!

	if ( ! $db ) {
		echo_json("Ошибка соединения с базой данных");
		return;
	}

	return mssql_query( $sql );
}

function echo_json_result( $result )
{
	global $db;

	$json = '[';
	$delim_rec = '';
	while ( $record = mssql_fetch_array( $result, MSSQL_ASSOC ) ) {
		$json .= $delim_rec . '{';
		$delim_fi = '';
		foreach ( array_keys( $record ) as $key ) {
			$json .= $delim_fi . '"' . $key . '":' . json_encode(
				//iconv('windows-1251', 'utf-8', $record[ $key ] ) );	// for win* php
				$record[ $key ] );
			$delim_fi = ',';
		}
		$json .= '}';
		$delim_rec = ',';
	}

	echo $json . ']';

	mssql_free_result( $result );

	mssql_close( $db );
}

?>

