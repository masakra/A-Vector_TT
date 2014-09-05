<?php

require 'ms.php';

echo_json_result( query('SELECT '.
			'[ID], '.
			'[Name] '.
		'FROM '.
			'[test_boards].[dbo].[Breeds] '.
		'ORDER BY '.
			'[Name]') );
?>

