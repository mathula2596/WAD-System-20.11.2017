<?php
include('ses.php');


?>
<html >
<head>

<link type="text/css" rel="stylesheet" href="css/style.css" />

<link type="text/css" rel="stylesheet" href="css/patient.css" />

<!-- date and time -->
<script type="text/javascript">
    <!--
    function updateTime() {
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();
        if (minutes < 10){
            minutes = "0" + minutes;
        }
        if (seconds < 10){
            seconds = "0" + seconds;
        }
        var v = hours + ":" + minutes + ":" + seconds + " ";
        if(hours > 11){
            v+="PM";
        } else {
            v+="AM"
        }
        setTimeout("updateTime()",1000);
        document.getElementById('time').innerHTML=v;
    }
    updateTime();
    //-->
</script>


<!-- date and time end  -->

<!-- menu -->
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color:#51b8f1;
}

li {
    float: left;
}

li a {
    display: block;
    color:#FFFFFF;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color:#000000;
}

li a.active {
    color: white;
    background-color: #4CAF50;
}
</style>
<!-- menu end-->





<title>Health Care Hospital System</title>


</head>


<body  alink="#51b8f1" vlink="#A0A0A4">

<!--logo file-->
<div class="header">
<img src="Images/looo.png">

<div class="summary"> <label style="text-align: right">     User Login     : </label>  <?php echo $login_session; ?> <p align="right" style="position: absolute; top: -12px;left: 1000px;"> <font style="font-size:18px;"><a href="JavaScript:window.close()">Close </a> </font>
 </td></tr></table>
</div>
<!--logo file end-->

<!--date and time display-->
<div style="text-align:center; font-size:20px; font-style:oblique;width:16%; height:45px; margin:auto;   padding-top:5px; padding-bottom:5px; float:right; border-left:solid; border-right:solid; border-color:#51b8f1; color:#989898;">
<b>
<script>
<!-- Begin
var now = new Date();
var days = new Array('Sun','Mon','Tue','Wed','Thurs','Fri','Satur');
var months = new Array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
function fourdigits(number) {
    return (number < 1000) ? number + 1900 : number;
}
today =  days[now.getDay()] + " " +
         months[now.getMonth()] + " " +
         date + " " +
         (fourdigits(now.getYear())) ;
document.write(today);
//  End -->
</script>

<!--date  display end -->

<!-- time display start-->
<br>
<span id="time"  />
<br>
<br>
</b>

</div>
</div>
<!--date and time display end-->
<br>
<br>

<!--menu bar-->
<div class="menu_group">
<br>
<div class="menu_items">

</div>

<!--menu end-->


<!--marquee start -->


<!--marquee end -->




<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<br><br><h1 style="font-family:Georgia, 'Times New Roman', Times, serif; font-style:normal; text-align:center; color:#51b8f1;">Ward Admission</h1><br>


<table align="center">
<form action="" name="myform" method="post" enctype="multipart/form-data">


  <tr></tr><tr></tr>  <tr></tr><tr></tr>  <tr></tr><tr></tr>  <tr></tr><tr></tr>




          <tr>
         <?php
			include "connect.php";
			$i = "select * from ward where Ad_No='$_GET[A_id]'";
			$h = mysql_query($i);
			while($tr=mysql_fetch_array($h))
			{?>	

<td><label> Admission No : </label></td>
<td><input type="text" name="A_id" size="30" placeholder="Enter the Admission No" readonly value="<?php echo $tr[0]; ?>"  / ></td>
</tr>

<tr></tr><tr></tr>
          <td><label> Patient ID : </label></td>
          <td><input type="text" name="id" size="30" placeholder="Enter the ID" required value="<?php echo $tr[1]; ?>"   / ></td>
          </tr>


          <tr></tr><tr></tr>

          <tr>
          <td><label> Reason : </label></td>
          <td><textarea rows="4" cols="20" name="reason" required  ><?php echo $tr[2]; ?> </textarea></td>
          </tr>

          <tr></tr><tr></tr>

          <tr>
          <td><label> Days :</label></td>
          <td><input type="number" name="day" size="30"   placeholder="No of Days to be admitted" required value="<?php echo $tr[3]; ?>" /></td>
          </tr>

          <tr></tr><tr></tr>
          <tr>
          <td><label> Ward No : </label></td>
          <td><select name="w_no">
          <option value="<?php echo $tr[4]; ?>" selected hidden="" ><?php echo $tr[4]; ?> </option>
<?php
include("connect.php");

	$query = mysql_query("SELECT bed
FROM ward_no
left  JOIN ward ON ward_no.bed = ward.W_No where ward.W_No is null");
	while ($row=mysql_fetch_array($query))
		{
	if($row==true)
	{
		
          echo "<option value='".$row[0]."'>".$row[0]."</option>";
        
	}
else
{
	echo 'fail';
}}
		
?>
         </select></td></tr>
    


       




          <tr><td>
          <label> Date of Admission : </label></td>
          <td><input type="date" name="doa" size="30"   placeholder="Enter the Admission date" required value="<?php echo $tr[5]; ?>"   /></td></tr>





          <tr></tr><tr></tr><tr></tr>

          <tr>
          <td align="right"><input type="submit" name="submit" value="Submit" /></td>

          <td><input type="reset" name="reset" value="Reset" /></td></tr>
          </form>
          </table>

<!--<div style="position:absolute; left:550px;"><img src="Images/ward.png"</div>-->





</body>
</html>
<?php   
       
        if(isset($_POST['submit'])){
       
        include "connect.php";
        $i = mysql_query("Update  ward SET  P_ID='".trim($_POST['id'])."',Reason='".trim($_POST['reason'])."',Days='".trim($_POST['day'])."',W_No='".trim($_POST['w_no'])."',D_O_A='".$_POST['doa']."' WHERE Ad_No='".$_POST['A_id']."'");
        if($i==true){
			
    echo '<script language="javascript">';
		    echo 'alert("Successfully Updated...");';
			   echo '</script>';

        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=view_ward.php">';
        }
        //if($i==true){
        //header('Location:index.php');
        //exit;
        //mysql_close();
        //}
        }
    
    ?>
<?php
 } 
 ?>
