<?php
$connect = mysqli_connect('localhost', 'root', '', 'tapau_delivery');
$query = "DATE(order_date) AS date, SUM(quantity) AS total_sales from menu_order";
$result = mysqli_query($connect,$query);

$rowcount = 0; //loop

while($row = mysqli_fetch_array($result))
{
	if($rowcount == 0) 
	{
		$dataPoints = array(array("label" => $row['date'], "y" => $row['total_sales']));
	}
	else
	{
		array_push($dataPoints,array("label" => $row['date'], "y" => $row['total_sales']));
	}
	$rowcount++;
};

$graph = "bar";
if (isset($_GET['type']))
{
	$graph = $_GET['type'];
}

?>
<!DOCTYPE>
<html>
<head>
<script>
function myFunction() {
	var graf = document.getElementById("graph").value;
	window.location.href = "index.php?type=" + graf;
}

window.onload = function () {
var graph_type = "<?php echo $graph ?>";
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Total Units Sold"
	},
	data: [{
		type: graph_type, //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>

</head>
<body>
<script src="canvasjs.min.js"></script>
<table border="1" width="70%" align="center" cellpadding="5">
<tr>
	<td align="center"><font size="+3">Generate Graph From Database</font></td>
</tr>
<tr>
	<td align="right">
    Type of graph: 
    <select id="graph" onChange="myFunction()">
    	<option value="" hidden>--Please choose a graph--</option>
        <option value="bar">bar</option>
        <option value="line">line</option>
        <option value="area">area</option>
        <option value="pie">pie</option>
    </select>
    </td>
</tr>
<tr>
	<td align="center"><div id="chartContainer" style="height: 400px; width: 80%;"></div></td>
</tr>
</table>


</body>
</html>