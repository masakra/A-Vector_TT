<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css" />
<link rel="icon" type="image/png" href="favicon.png" />
<title>A-Vector test task by Chursanov S.N.</title>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.datetimepicker.js"></script>
<script src="js/startup.js"></script>
<script src="js/data.js"></script>
</head>
<body onload="startup();">
<div class="header">
<h1>A-Vector тестовое задание, Чурсанов С.Н.</h1>
</div>
<div class="params">
<table><tr>
<td colspan="2" class="caption">начало</td><td><input id="dtp_from" type="text"></td>
</tr><tr>
<td colspan="2" class="caption">окончание</td><td><input id="dtp_to" type="text"></td>
</tr><tr>
<td colspan="2" class="caption">порода</td><td><select id="kind"></select></td>
</tr><tr>
<td colspan="2" class="caption">качество</td><td><select id="quality"></select></td>
</tr><tr>
<td class="caption">толщина</td><td class="caption">мин.</td><td><input type="text" class="number" id="thick_min"></td>
</tr><tr>
<td></td>	<td class="caption">макс.</td><td><input type="text" class="number" id="thick_max"</td>
</tr><tr>
<td class="caption">ширина</td><td class="caption">от</td><td><input type="text" class="number" id="width_from"></td>
</tr><tr>
<td></td>	<td class="caption">до</td><td><input type="text" class="number" id="width_to"></td>
</tr><tr>
<td class="caption">длина</td><td class="caption">от</td><td><input type="text" class="number" id="length_from"></td>
</tr><tr>
<td></td>	<td class="caption">до</td><td><input type="text" class="number" id="length_to"></td>
</tr><tr>
<td class="caption">карман</td><td class="caption">от</td><td><input type="text" class="number" id="pocket_from"></td>
</tr><tr>
<td></td>	<td class="caption">до</td><td><input type="text" class="number" id="pocket_to"></td>
</tr><tr>
<td class="caption">влажность</td><td class="caption">от</td><td><input type="text" class="number" id="humidity_from"></td>
</tr><tr>
<td></td>	<td class="caption">до</td><td><input type="text" class="number" id="humidity_to"></td>
</tr><tr>
<td colspan="3" align="center"><input type="button" value="Обновить" onclick="fetchData();"></td>
</tr></table>
</div>
<div class="data" id="data"></div>
</body>
</html>

