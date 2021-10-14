<?php
session_start();
include("dbconnection.php");
global $user,$name,$roll,$cpi,$x,$x2,$re,$pronum,$skills;
$user = $_SESSION['username'];
$query = "SELECT * FROM cv WHERE username ='".$user."'";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($result)){
	$name = $row['Name'];
	$roll = $row['roll_no'];
	$cpi = $row['cpi'];	
	$x = $row['10_marks'];
	$x2 = $row['12_marks'];
	$skills = $row['Skills'];
	//echo $x.$x2.$roll;
	
}
$query = "SELECT * FROM project WHERE username='".$user."'";	
$result=mysqli_query($conn,$query);
$re = array();
$pronum=0;
while($row = mysqli_fetch_assoc($result)){
        $re[] = $row;
		$pronum = $pronum+1;
    }
//print_r($re);	
?>
<html>
<head>
<style>
 body{
   background-image: url(img/cvback.png);
 }
</style>
</head>
<body>
</br></br>
<form name = "register" action = "upload_cv.php" method = "post" enctype="multipart/form-data">
<center>
  <h1><strong>CV Upload Form </strong></h1>
<table border = "1" cellspacing = "3">
<tr>
        <td width="179">Name<em>*</em></td>
    <td><label>
      <input name="name1" type="text" id="name1" value= <?php echo $name ; ?> />
    </label></td>
</tr>
<tr>
        <td width="179">RollNumber<em>*</em></td>
    <td><label>
      <input name="roll" type="text" id="roll" value= <?php echo $roll ;?> />
    </label></td>
</tr>
<tr>
    <td width="179">CPI<em>*</em></td>
    <td><label>
      <input name="cpi_" type="text" id="cpi_" value= <?php echo $cpi ; ?> />
    </label></td>
</tr>
<tr>
   <td width="179">X Marks <em>*</em></td>
    <td><label>
      <input name="x_marks" type="text" id="x_marks" value = <?php echo $x ;?> />
    </label></td>
</tr>
<tr>
    <td width="179">Xll Marks <em>*</em></td>
    <td><label>
      <input name="xii_marks" type="text" id="xii_marks" value = <?php echo $x2 ;?> />
    </label></td>
</tr>
<tr>
	<td width="179">Skills<em>*</em></td>
	<td><label>
		<input name="skills" type="text" id="skills" value = <?php echo $skills ;?> />
	</label></td>
</tr>
<?php
for($i=0;$i<$pronum;$i++){
	$y = $i+1;
	$tit =$re[$i]['p_title'];
	//echo $tit; 
	$re1 = $y."title";
	$re2 = $y."des";
	//echo $re1;
	echo '<tr><td>Project'.$y.'</td><td >TITLE</td><td><input name="'.$re1.'" type=\'text\' id="'.$y.'" value ="'.$tit.'" /></td></tr>';
	echo '<tr><td></td><td>DESCRIPTION</td><td><textarea rows="4" cols="14" name="'.$re2.'"  id="'.$y.'" >"'.$re[$i]['p_des'].'" </textarea></td></tr>';
}
?>
<tr>
<td>No. Of Projects<em>*</em></td><td><?php echo "<input name = 'no_pro' type='text' id='no_pro' value =".$pronum." />"; ?></td>
</tr>
<tr align="center">
    <td colspan="3"><label>
      <input type="submit" name="Submit" value="Register" />
	
    </label></td>
 </tr>
 
</table>
</center>
</form>
</body>
</html>