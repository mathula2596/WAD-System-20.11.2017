<?php
include('ses.php');
?>
<?php

include_once "conn.php";
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









<table style="position: absolute; left: 380px; top: 130px; ">
<form action="" name="myform" method="post" enctype="multipart/form-data">

<tr>
	<td colspan="2"><h1 style="font-family:Georgia, 'Times New Roman', Times, serif; font-style:normal; text-align:center; color:#51b8f1;"> Appointment</h1><br><br></td>
		
	
</tr>
<tr> 
<?php
			include "connect.php";
			$i = "select * from appointment where A_ID='$_GET[A_ID]'";
			$h = mysql_query($i);
			while($tr=mysql_fetch_array($h))
			{?>	

 
<td><label> Appointment : </label></td>
<td><input type="text" name="A_ID" size="30"  value="<?php echo $tr[0]; ?>" readonly / ></td>
</tr>

<tr></tr><tr></tr>
<tr>
 
<td><label> Patient ID : </label></td>
<td><input type="text" name="pid" size="30"  value="<?php echo $tr[1]; ?>"  id="pid1"    / ></td>
</tr>

<tr></tr><tr></tr>




<tr><td>
<label> Reason : </label></td>
<td><textarea rows="4" cols="20" name="reason"  required ><?php echo $tr[2]; ?> </textarea></td></tr>

<tr></tr><tr></tr>

<tr>
<td><label > Doctor Type : </label></td>
<td><select name="type1" onChange="getId(this.value);">
<option value=""><?php echo $tr[3]; ?></option>
<?php
	$query="SELECT * FROM type";
	$results= mysqli_query($con,$query);
	
	foreach($results as $doct){
		
	
	?>
	<option value="<?php echo $doct["type_id"]; ?>"><?php echo $doct["type"]; ?></option>
	<?php 
	}
		?>
</select>
</td>
</tr>

<tr></tr><tr></tr>

<tr>
<td><label> Doctor Name :</label></td>
<td><select name="doctor" id="docx"  >
<option value="<?php echo $tr[4]; ?>"></option>

</select></td>
</tr>

<tr></tr><tr></tr>


<tr>
<td><label> Date : </label></td>
<td><input type="date" name="date" size="30" value="<?php echo $tr[5]; ?>"  required class="manual"/></td></tr>

<tr></tr><tr></tr>


<tr>
<td><label> Time : </label></td>
<td><input type="time" name="time" value="<?php echo $tr[6]; ?>" size="30"   /></td></tr>

<tr></tr><tr></tr>



<tr></tr><tr></tr>

<tr>
<td align="right"><input type="submit" name="submit" value="Submit" /></td>

<td><input type="reset" name="reset" value="Reset" /></td></tr>
</form>
</table>

 




<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
	function getId(val)
	{
		//alert(val);
		$.ajax({
			type:"POST",
			url:"getdata.php",
			data: "type_id="+val,
			success:function(data)
			{
				$("#docx").html(data);
			}
		});
		
	}
	
	
	
	</script>
	<?php   
       
        if(isset($_POST['submit'])){
       
        include "connect.php";
        $i = mysql_query("UPDATE  appointment SET  P_ID='".$_POST['pid']."',Reason='".$_POST['reason']."',Doctor_Type='".$_POST['type1']."',Doctor_ID='".$_POST['doctor']."',	Date='".$_POST['date']."',Time='".$_POST['time']."'WHERE A_ID='".$_POST[A_ID]."'");
        if($i==true){
			   echo '<script language="javascript">';
		    echo 'alert("Successfully Updated...");';
			   echo '</script>';

        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=view_app.php">';
        }
       
        }
			}

    ?>



</body>
</html>
	