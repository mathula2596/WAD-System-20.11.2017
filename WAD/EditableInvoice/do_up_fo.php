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
<br><br><h1 style="font-family:Georgia, 'Times New Roman', Times, serif; font-style:normal; text-align:center; color:#51b8f1;"> Doctor Details</h1><br>


<table style="margin:auto;">
<form action="" name="myform" method="post" enctype="multipart/form-data">


  <?php
  			include "connect.php";
  			$i = "select * from doctor where doctor_ID='$_GET[D_id]'";
  			$h = mysql_query($i);
  			while($tr=mysql_fetch_array($h))
  			{?>




          <tr>
          <td><label> ID : </label></td>
          <td><input type="text" name="D_id" size="30" placeholder="Enter the ID" readonly value="<?php echo $tr[0]; ?>"  / ></td>
          </tr>


          <tr></tr><tr></tr>

          <tr>
          <td><label> First Name : </label></td>
          <td><input type="text" name="f_name" size="30" placeholder="Enter the first name" value="<?php echo $tr[1]; ?>" required   / ></td>
          </tr>

          <tr></tr><tr></tr>

          <tr>
          <td><label> Last Name :</label></td>
          <td><input type="text" name="l_name" size="30" value="<?php echo $tr[2]; ?>"  placeholder="Enter the last name" required/></td>
          </tr>

          <tr></tr><tr></tr>

          <tr>
          <td><label> Contact Number : </label></td>
          <td><input type="NUMBER" name="p_number1" size="30" value="<?php echo $tr[3]; ?>"  placeholder="Enter the contact number" /></td></tr>
          <tr>

          </tr><tr></tr>
          <script src="http://code.jquery.com/jquery.js"></script>
          <script type="text/javascript" src="js/moment.js"></script>
          <script>
          function setAge(d)
          {
            var age = moment().diff(d, 'years');
            $('#age').val(age);
          }

          $(function() {
            $('.manual').change(function() {
              setAge(moment($(this).val()));
            });
          });
          </script>

          <tr>
          <td><label> DOB : </label></td>
          <td><input type="date" name="date" size="30" value="<?php echo $tr[4]; ?>"  placeholder="Enter the DOB"  class="manual"/></td></tr>

          <tr></tr><tr></tr>


          <tr>
          <td><label> Age : </label></td>
          <td><input type="number" name="age" value="<?php echo $tr[5]; ?>"  size="30"  id="age" readonly /></td></tr>

          <tr></tr><tr></tr>

          <tr>
          <td>

          <label> Address : </label></td>
          <td><textarea rows="4" cols="20" name="address"  > <?php echo $tr[6]; ?></textarea></td></tr>

          <tr></tr><tr></tr><tr></tr>

          <tr>
          <td><label>Gender : </label></td>
          <td><input type="radio" name="gender1" value="Male" <?php if($tr[7]=="Male") {?> <?php echo "checked";?> <?php }?> required/> Male

          <input type="radio" name="gender1" value="Female" <?php if($tr[7]=="Female") {?> <?php echo "checked";?> <?php }?> required/> Female

          <input type="radio" name="gender1" value="Other" <?php if($tr[7]=="Other") {?> <?php echo "checked";?> <?php }?> required/> Other</td></tr>

          <tr></tr><tr></tr><tr></tr><tr></tr>

          <tr><td>
          <label> Email : </label></td>
          <td><input type="email" name="mail" size="30" value="<?php echo $tr[8]; ?>"  placeholder="Enter the mail"  /></td></tr>

          <tr></tr><tr></tr><tr></tr>

          <tr><td>
          <label> Date of Joining : </label></td>
          <td><input type="date" name="join" size="30" value="<?php echo $tr[9]; ?>"  placeholder="Enter the Date"  /></td></tr>

          <tr></tr><tr></tr><tr></tr>

          <tr><td>
          <label> Type : </label></td>
          <td><input type="text" name="type" size="30" value="<?php echo $tr[10]; ?>"  placeholder="Enter the Doctor Type"   /></td></tr>

          <tr></tr><tr></tr><tr></tr>


          <tr><td>
          <label> Username : </label></td>
          <td><input type="text" name="username" readonly size="30"  value="<?php echo $tr[11]; ?>"  /></td></tr>

          <tr></tr><tr></tr><tr></tr>

          <tr><td>
          <label> Password : </label></td>
          <td><input type="password" name="password" size="30" value="<?php echo $tr[12]; ?>"  placeholder="Enter the Password" required  /></td></tr>

          <tr></tr><tr></tr><tr></tr>

          <tr><td>
          <label> Confirm Password : </label></td>
          <td><input type="password" name="c_password" size="30"   placeholder="Retype the Password" required  /></td></tr>

          <tr></tr><tr></tr><tr></tr>



          <tr></tr><tr></tr><tr></tr>

          <tr>
          <td align="right"><input type="submit" name="submit" value="Submit" /></td>

          <td><input type="reset" name="reset" value="Reset" /></td></tr>
          </form>
          </table>





<?php

        if(isset($_POST['submit'])){
			$des="Doctor";

			if($_POST['password']==$_POST['c_password'])	{


			include "connect.php";
    //  $i = mysql_query("UPDATE  appointment SET  P_ID='".$_POST['pid']."',Reason='".$_POST['reason']."',Doctor_Type='".$_POST['type1']."',Doctor_ID='".$_POST['doctor']."',	Date='".$_POST['date']."',Time='".$_POST['time']."'WHERE A_ID='".$_POST[A_ID]."'");

        $i = mysql_query("UPDATE doctor SET first_name='".$_POST['f_name']."',last_name='".$_POST['l_name']."',phone='".$_POST['p_number1']."',dob='".$_POST['date']."',age='".$_POST['age']."',address='".$_POST['address']."',gender='".$_POST['gender1']."',email='".$_POST['mail']."',doj='".$_POST['join']."',type_id='".$_POST['type']."',username='".$_POST['username']."',password='".$_POST['password']."'WHERE doctor_ID='".$_POST[D_id]."'");
		$x=mysql_query("UPDATE  login SET username='".$_POST['username']."',password='".$_POST['password']."'WHERE 	ID='".$_POST[D_id]."'");
        if($i==true && $x==true){
			   echo '<script language="javascript">';
		    echo 'alert("Successfully Updated...");';
			   echo '</script>';

        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=view_doctor.php">';

			}
			}
			else{

				echo '<script language="javascript">';
echo 'alert("Please check your passwords")';
echo '</script>';
			}
	}



}

        //if($i==true){
        //header('Location:index.php');
        //exit;
        //mysql_close();


    ?>







</body>
</html>
