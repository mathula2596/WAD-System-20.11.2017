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

<div class="summary"> <table > <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td align="right"><?php echo $login_session; ?> <td></td><td></td><td align="right"> <font style="font-size:18px;"><a href="JavaScript:window.close()">Close </a> </font>
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

<br><br><h1 style="font-family:Georgia, 'Times New Roman', Times, serif; font-style:normal; text-align:center; color:#51b8f1;"> Operation details</h1><br><br>


<table style="margin:auto;">
<form action="" name="myform" method="post" enctype="multipart/form-data">

<?php

					include ("connect.php");
               


   
				$t = mysql_query("select o_no
					from theater
					order by o_no desc
					limit 1");
               	while($id=mysql_fetch_array($t))
			{
			$b=$id["o_no"];

			$y=substr($b,2);
			$z=$y+1;
			$new="O-".$z;
			}
  


					{

				?>
				<tr>
<td><label> Operation No : </label></td>
<td><input type="text" name="no" size="30" placeholder="Enter the No" readonly value="<?php echo $new ?>"  / ></td>
</tr>
<?php
 } 
 ?>
<tr></tr><tr></tr>
<td><label> Patient ID : </label></td>
<td><input type="text" name="id" size="30" placeholder="Enter the patient ID" required   / ></td>
</tr>
<tr></tr><tr></tr>

<tr>
<td><label> Doctor ID : </label></td>
<td><input type="text" name="did" size="30" placeholder="Enter the doctor ID" required / ></td>
</tr>

<tr></tr><tr></tr>


<tr><td>
<label> Operation Parts: </label></td>
<td><select name="parts" required>
<option>Choose the Parts</option>
<option>Head</option>
<option>Right Hand</option>
<option>Left Hand</option>
<option>Right Leg</option>
<option>Left Leg</option>
<option>Right Shoulders</option>
<option>Left Shoulders</option>
<option>Teeth</option>
<option>Eye</option>
<option>Stomach</option>
</select></td></tr>

<tr></tr><tr></tr>
<tr>
<td><label> Reason for operation : </label></td>
<td><textarea name="reason" rows="5" cols="20" required></textarea></td>
</tr>

<tr></tr><tr></tr>

<tr><td>
<label> Date : </label></td>
<td><input type="date" name="date" size="30" placeholder="Enter the date" required / ></td></tr>
<tr>
<tr></tr><tr></tr>
<td><label> Time : </label></td>
<td><input type="time" name="time" size="30" placeholder="Enter the time" required / ></td>
</tr>

<tr></tr><tr></tr>
<td><label> Payment : </label></td>
<td><input type="number" name="pay" size="30" placeholder="Enter the payment" required / ></td>
</tr>


<tr></tr><tr></tr><tr></tr><tr></tr>

<tr>
<td align="right"><input type="submit" name="submit" value="Submit" /></td>

<td><input type="reset" name="reset" value="Reset" /></td></tr>
</form>
</table>


</body>
</html>
<?php   
       
        if(isset($_POST['submit'])){
       
        include "connect.php";
        $i = mysql_query("insert into theater values('".$_POST['no']."','".trim($_POST['id'])."','".trim($_POST['did'])."','".trim($_POST['parts'])."','".trim($_POST['reason'])."','".trim($_POST['date'])."','".$_POST['time']."','".$_POST['pay']."')");
        if($i==true){
			
    echo '<script language="javascript">';
		    echo 'alert("Successfully Added...");';
			   echo '</script>';

        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=operation.php">';
        }
        //if($i==true){
        //header('Location:index.php');
        //exit;
        //mysql_close();
        //}
        }
    
    ?>
