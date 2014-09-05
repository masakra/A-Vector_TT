<?php

require 'ms.php';

echo_json_result( query('SELECT '.
	'bl.[ID], '.
	'CONVERT( varchar, bl.[DateTime], 104 ) + \'&nbsp;\' + CONVERT( varchar, bl.[DateTime], 108 ) AS DateTime, '.
	'bl.[IndexPLC], '.
	'q1.[Name] AS Quality, '.
	'bl.[Hn] AS ThickNom, '.
	'bl.[Wn] AS WidthNom, '.
	'bl.[Ln] AS LengthNom, '.
	'bl.[Pocket] AS Pocket, '.
	'bl.[Group], '.
	'bl.[ShtabelID], '.
	'bl.[Flags] AS AuxInfo, '.
	'q2.[Name], '.
	'q3.[Name], '.
	'bl.[Hf] AS ThickFact, '.
	'bl.[Wf] AS WidthFact, '.
	'bl.[Lf] AS LengthFact, '.
	'bl.[TorzTop], '.
	'bl.[TorzBottom], '.
	'bl.[Pult], '.
	'b.[Name] AS Kind, '.
	'bl.[Durability], '.
	'bl.[Humidity] AS Humidity, '.
	'bl.[Param] '.
	'FROM '.
		'[test_boards].[dbo].[BoardsList] AS bl '.
	'INNER JOIN '.
		'[test_boards].[dbo].[Qualities] AS q1 ON bl.[QualityID] = q1.[ID] '.
	'INNER JOIN '.
		'[test_boards].[dbo].[Qualities] AS q2 ON bl.[QualityID] = q2.[ID] '.
	'INNER JOIN '.
		'[test_boards].[dbo].[Qualities] AS q3 ON bl.[QualityID] = q3.[ID] '.
	'INNER JOIN '.
		'[test_boards].[dbo].[Breeds] AS b ON bl.[BreedID] = b.[ID] '.
	'WHERE '.
		"bl.[DateTime] BETWEEN '" . $_GET['start'] . "' AND '" . $_GET['finish'] . "' ".
	'AND bl.[BreedID] = ' . $_GET['kind'] . ' '.
	'AND bl.[QualityID] = ' . $_GET['quality'] . ' '.
	'AND bl.[Hf] BETWEEN ' . $_GET['thick_min'] . ' AND ' . $_GET['thick_max'] . ' '.
	'AND bl.[Wf] BETWEEN ' . $_GET['widht_from'] . ' AND ' . $_GET['width_to'] . ' '.
	'AND bl.[Lf] BETWEEN ' . $_GET['length_from'] . ' AND ' . $_GET['length_to'] . ' '.
	'AND bl.[Pocket] BETWEEN ' . $_GET['pocket_from'] . ' AND ' . $_GET['pocket_to'] . ' '.
	'AND bl.[Humidity] BETWEEN ' . $_GET['humidity_from'] . ' AND ' . $_GET['humidity_to'] . ' '.
	'ORDER BY '.
		'bl.[DateTime]') );
?>
