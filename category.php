<!DOCTYPE html>
<html>
<head>
	<title>category</title>
	<meta charset="utf-8">
</head>
<body>
	<br>View Categories:  
     <select name="categories">
     <option disabled="disabled" selected="selected">Entered Categories</option>
<?php
$con=mysqli_connect("localhost","root","","questionera");
$sel="select * from category";
$res=mysqli_query($con,$sel);
while($row=mysqli_fetch_array($res))
{
     echo "<option>".$row['cname']."</option>";
}
?>
</select>
     <h3>Enter Category :</h3>
     <form action="ccheck.php" method="get">
     	<table>
     		<tr>
     			<td>
     				<label>Category:</label>
     			</td>
     			<td><input type="text" name="name" required="required"></td>
     		</tr>
     		<tr>
     			<td></td>
     			<td><input type="submit" name="submit" ></td>
     		</tr>
     	</table>
     </form>
     
</body>
</html>