<?php
include 'pagination.php';
//current URL of the Page. cart_update.php redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
	
	<!DOCTYPE html>
	<html>

	<head>
	<title>EMPLOYEE | LESTARI'S CAFE</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css" />
	<style>
	.pagination {
	  list-style: none;
	  text-align: center; 
	   padding: 5px;
	}
	.pagination li {
	  display: inline-block;
	  margin: 10px;
	}

</style>
	</head>

	<body>
	<div id="wrapper">
	<?php include 'inc/header.php';?>
	
    <div id="content"> 
	<br><br>
	<tr>
		<td align="right"><input type="text" id="myInput" onkeyup="myFunction()" placeholder=" Search by customer name" title="Type In Order Id"></td>
	</tr>
	
	<table id="myTable">
	<tr>
    	<th width="10%">Id</th>
		<th width="10%">Username</th>
		<th width="10%">Fistname</th>
		<th width="10%">Phone No</th>
		<th width="10%">Address</th>
        <th width="10%">Signup</th> 
        <th width="10%"></th>
    </tr>
		 <?php
	$connect = mysqli_connect("localhost", "root", "", "tapau_delivery");
		$sql = "select * from customer LIMIT $offset, $total_records_per_page";
		$result = mysqli_query($connect,$sql);
		
		while($rows = mysqli_fetch_array($result))
		{
			?>
				<tr>
                    <td align="center" width="10%"><?php echo $rows['c_id']; ?></td>
                    <td align="center" width="10%"><?php echo $rows['uname']; ?></td>
					 <td align="center" width="10%"><?php echo $rows['f_name']; ?></td>
                    <td align="center" width="10%">0<?php echo $rows['phone']; ?></td>
					<td align="center" width="10%"><?php echo $rows['address']; ?></td>
					<td align="center" width="10%"><?php echo $rows['date']; ?></td>
					<!--<td align="center" width="10%"><php echo $rows['b_date']; ?></td>-->
						<td>
						<!--<select name="status">
    						<php echo $rows['status']; ?></td>
							<!--<option value="Pejabat Pegawai Daerah">Pending</option>
                            <option value="Bahagian Perundangan">On Delivery</option>
  							<option value="Bahagian Pembangunan">Complete</option>				
						</select>-->
					
                   <!-- <p style="flex-direction:column">
					 <td align="center" width="10%">
                    	<a href="order_update.php?pid=<php echo $rows['order_id']; ?>"><input type="submit"  class="button button4" value="UPDATE" /></a>
                    </td> -->
					
				</tr>         
            <?php
		}
	?>
	</table>
	</form>
	<div style='padding: 10px 20px 0px; border-top: dotted 1px; text-align:center;'>
	<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
	</div>

	<ul class="pagination">
		<?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>

		<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
		<a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
	</li>

	<?php 
	if ($total_no_of_pages <= 10){  	 
	for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
	if ($counter == $page_no) {
	echo "<li class='active'><a>$counter</a></li>";	
	}else{
	echo "<li><a href='?page_no=$counter'>$counter</a></li>";
	}
	}
	}
	elseif($total_no_of_pages > 10){

	if($page_no <= 4) {			
	for ($counter = 1; $counter < 8; $counter++){		 
	if ($counter == $page_no) {
	echo "<li class='active'><a>$counter</a></li>";	
	}else{
	echo "<li><a href='?page_no=$counter'>$counter</a></li>";
	}
	}
	echo "<li><a>...</a></li>";
	echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
	}

	elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
	echo "<li><a href='?page_no=1'>1</a></li>";
	echo "<li><a href='?page_no=2'>2</a></li>";
	echo "<li><a>...</a></li>";
	for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
	if ($counter == $page_no) {
	echo "<li class='active'><a>$counter</a></li>";	
	}else{
	echo "<li><a href='?page_no=$counter'>$counter</a></li>";
	}                  
	}
	echo "<li><a>...</a></li>";
	echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
	}

	else {
	echo "<li><a href='?page_no=1'>1</a></li>";
	echo "<li><a href='?page_no=2'>2</a></li>";
	echo "<li><a>...</a></li>";

	for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
	if ($counter == $page_no) {
	echo "<li class='active'><a>$counter</a></li>";	
	}else{
	echo "<li><a href='?page_no=$counter'>$counter</a></li>";
	}                   
	}
	}
	}
	?>

	<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
	</li>
	<?php if($page_no < $total_no_of_pages){
	echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
	} ?>
	</ul>
	
	<script> /*search only for products*/
	function myFunction() 
	{
	var input, filter, table, tr, td, i, txtValue;
	input = document.getElementById("myInput");
	filter = input.value.toUpperCase();
	table = document.getElementById("myTable");
	tr = table.getElementsByTagName("tr");
	for (i = 0; i < tr.length; i++) {
	td = tr[i].getElementsByTagName("td")[1];
	if (td) {
	txtValue = td.textContent || td.innerText;
	if (txtValue.toUpperCase().indexOf(filter) > -1) {
	tr[i].style.display = "";
		} else {
	tr[i].style.display = "none";
			}
			}       
		}
	}
	</script>
	
    </div>

	<div id="footer">Copyright <a href="dashboard.php">Tapau's Delivery System</a>. All Rights Reserved. </div>
	 <script type="text/JavaScript">
//Script courtesy of BoogieJack.com
var message="NoRightClicking";
function defeatIE() {if (document.all) {(message);return false;}}
function defeatNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;}
else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;}
document.oncontextmenu=new Function("return false")
</script>
	</div>

	</body>
	</html>