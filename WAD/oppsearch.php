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

<div class="summary"> <label style="text-align: right">     User Login     : </label>  <?php echo $login_session; ?> <p align="right" style="position: absolute; top: -12px;left: 1000px;"> <font style="font-size:18px;"><a href="opp_se.php">Back </a> </font>
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
<h1  style="color:#51b8f1; align-content: center; left: 500px; ">Search Results</h1><br>
<table  align="left" width="100%" style=" border: solid #51b8f1;  " >
<tbody><tr><td></td></tr>
    	<tr>
          <th  width= 96 style="border-radius: 5px; text-align: center;  width:80px;  background-color:#51b8f1; color: #ffffff;" >Operation No</th>
            <th width= "96" style=" border-radius: 5px; text-align: center; width:80px;  background-color:#51b8f1; color: #ffffff;">Patient ID</th>
            
            <th width="96" style=" border-radius: 5px; background-color:#51b8f1; width:120px; color: #ffffff; text-align: center; ">Doctor ID  </th>
            
            <th width="105" style=" border-radius: 5px; background-color:#51b8f1; color: #ffffff; text-align: center;  width:90px;">Operation Parts</th>
            <th width="205" style="border-radius: 5px;background-color:#51b8f1; color: #ffffff; text-align: center; width:80px;" >Reason for operation </th>
            <th width="80" style="border-radius: 5px; background-color:#51b8f1; color: #ffffff; text-align: center; width:70px; ">Date</th>
            <th width="80" style="border-radius: 5px; background-color:#51b8f1; color: #ffffff; text-align: center;  width:60px;">Time</th>
<!--             <th width="90" style="border-radius: 5px; background-color:#51b8f1; color: #ffffff; text-align: center;  width:60px;">Payment</th>-->

            
            
            
	</tr>
		
	
    <?php
	//$date = $_POST['date'];
		$cbo = $_POST['searchcombo'];
	$cbo1 = $_POST['searchcombo1'];
		$search = $_POST['id'];
	$search1=$_POST['date'];
	//$search2=$_POST['time'];
		include('connect.php');
	?>
	
    <?php
		
		$text = $_POST['id'];
		$text1 = $_POST['date'];
	//$text2 = $_POST['time'];
		if($text==""&&$text1==""){
			echo "Enter the words to search details..."."<br><br><br>";
			//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=View_Patient.php">';
		}
		if($cbo=="P_ID"&&$text1=="")
		{
			$id = mysql_query("SELECT * FROM theater WHERE 	p_id='$search'");
	?>

    <?php
		while($di=mysql_fetch_array($id))
		{
	?>
			<tr>
				<td  class="bod" style="text-align: center; width:65px;"><?php echo $di[0]; ?></td>
            <td class="bod" style="text-align: center; "><?php echo $di[1]; ?></td>
            
            <td class="bod" style="text-align: center;   "><?php echo $di[2]; ?></td>
            <td class="bod" style="text-align: center; "><?php echo $di[3]; ?></td>
            <td class="bod" style="text-align: center; width:90px; "><?php echo $di[4]; ?></td>
            <td class="bod" style="text-align: center;  width:80px;"><?php echo $di[5]; ?></td>
            <td class="bod" style="text-align: center;  width:80px;"><?php echo $di[6]; ?></td>
<!--                         <td class="bod" style="text-align: center;  width:80px;"><?php //echo $di[7]; ?></td>-->

              
               
           
			</tr>
            <?php
		}
		}else if($cbo=="Op_No"&&$text1=="")
		{
			$na = mysql_query("SELECT * FROM theater WHERE o_no like '".$search."'");
	?>
    <?php
		while($an=mysql_fetch_array($na))
		{
	?>
			<tr>
					
				<td  class="bod" style="text-align: center; width:65px;"><?php echo $an[0]; ?></td>
            <td class="bod" style="text-align: center; "><?php echo $an[1]; ?></td>
         
            <td class="bod" style="text-align: center;   "><?php echo $an[2]; ?></td>
            <td class="bod" style="text-align: center; "><?php echo $an[3]; ?></td>
            <td class="bod" style="text-align: center; width:90px; "><?php echo $an[4]; ?></td>
            <td class="bod" style="text-align: center;  width:80px;"><?php echo $an[5]; ?></td>
            <td class="bod" style="text-align: center;  width:80px;"><?php echo $an[6]; ?></td>
<!--                        <td class="bod" style="text-align: center;  width:80px;"><?php //echo $an[7]; ?></td>-->

			</tr></tr>
            <?php
		}
		}else if($cbo=="Parts"&&$text1=="")
		{
			$na = mysql_query("SELECT * FROM theater WHERE 	parts like '".$search."'");
	?>
    <?php
		while($an=mysql_fetch_array($na))
		{
	?>
			<tr>
					
				<td  class="bod" style="text-align: center; width:65px;"><?php echo $an[0]; ?></td>
            <td class="bod" style="text-align: center; "><?php echo $an[1]; ?></td>
         
            <td class="bod" style="text-align: center;   "><?php echo $an[2]; ?></td>
            <td class="bod" style="text-align: center; "><?php echo $an[3]; ?></td>
            <td class="bod" style="text-align: center; width:90px; "><?php echo $an[4]; ?></td>
            <td class="bod" style="text-align: center;  width:80px;"><?php echo $an[5]; ?></td>
            <td class="bod" style="text-align: center;  width:80px;"><?php echo $an[6]; ?></td>
<!--                        <td class="bod" style="text-align: center;  width:80px;"><?php //echo $an[7]; ?></td>-->

			</tr>
            <?php
				}
			?>  
     <?php
		}
       else if($cbo=="D_ID"&&$text1=="")
				{
        $add = mysql_query("SELECT * FROM theater WHERE d_id like '".$search."'");
     ?>
		<?php
		while($dda=mysql_fetch_array($add))
		{
		?>
			<tr>
					
				<td  class="bod" style="text-align: center; width:65px;"><?php echo $dda[0]; ?></td>
            <td class="bod" style="text-align: center; "><?php echo $dda[1]; ?></td>
            
            <td class="bod" style="text-align: center;   "><?php echo $dda[2]; ?></td>
            <td class="bod" style="text-align: center; "><?php echo $dda[3]; ?></td>
            <td class="bod" style="text-align: center; width:90px; "><?php echo $dda[4]; ?></td>
            <td class="bod" style="text-align: center;  width:80px;"><?php echo $dda[5]; ?></td>
            <td class="bod" style="text-align: center;  width:80px;"><?php echo $dda[6]; ?></td>
<!--                        <td class="bod" style="text-align: center;  width:80px;"><?php //echo $dda[7]; ?></td>-->

			</tr>
				<?php
				}
			?>  
     <?php
		}else if($cbo=="Time"&&$text1=="")
				{
        $add = mysql_query("SELECT * FROM theater WHERE time like '".$search."'");
     ?>
		<?php
		while($dda=mysql_fetch_array($add))
		{
		?>
			<tr>
					
				<td  class="bod" style="text-align: center; width:65px;"><?php echo $dda[0]; ?></td>
            <td class="bod" style="text-align: center; "><?php echo $dda[1]; ?></td>
            
            <td class="bod" style="text-align: center;   "><?php echo $dda[2]; ?></td>
            <td class="bod" style="text-align: center; "><?php echo $dda[3]; ?></td>
            <td class="bod" style="text-align: center; width:90px; "><?php echo $dda[4]; ?></td>
            <td class="bod" style="text-align: center;  width:80px;"><?php echo $dda[5]; ?></td>
            <td class="bod" style="text-align: center;  width:80px;"><?php echo $dda[6]; ?></td>
<!--                        <td class="bod" style="text-align: center;  width:80px;"><?php //echo $dda[7]; ?></td>-->

			</tr>
			
            
				
            <?php
				}
		
		}
   		
		
			?>
			
			
			
			
			
			
			
			
			
			
			<?php 
	//		$date = $_POST['date1'];
	$search1=$_POST['date'];
		
		if($cbo1=="Date"&&$text=="")
		{
			$da = mysql_query("SELECT * FROM theater WHERE date like '".$search1."'");
	?>
    <?php
		while($ad=mysql_fetch_array($da))
		{
	?>
			<tr>
				<td class="bod" style="text-align: center; width:65px;"><?php echo $ad[0]; ?></td>
				<td class="bod" style="text-align: center; "><?php echo $ad[1]; ?></td>
                <td class="bod" style="text-align: center;   "><?php echo $ad[2]; ?></td>
                <td class="bod" style="text-align: center; "><?php echo $ad[3]; ?></td>
                <td class="bod" style="text-align: center; "><?php echo $ad[4]; ?></td>
                <td class="bod" style="text-align: center;  width:90px;"><?php echo $ad[5]; ?></td>
                <td class="bod" style="text-align: center;  width:50px;"><?php echo $ad[6]; ?></td>
              
			
			</tr>	<?php 
		}}
			elseif($cbo1=="Date"&&$cbo=="P_ID")
		{
			$da = mysql_query("SELECT * FROM theater WHERE date like '".$search1."' and p_id='$search' ");
	?>
    <?php
		while($ad=mysql_fetch_array($da))
		{
	?>
			<tr>
				<td class="bod" style="text-align: center; width:65px;"><?php echo $ad[0]; ?></td>
				<td class="bod" style="text-align: center; "><?php echo $ad[1]; ?></td>
                <td class="bod" style="text-align: center;   "><?php echo $ad[2]; ?></td>
                <td class="bod" style="text-align: center; "><?php echo $ad[3]; ?></td>
                <td class="bod" style="text-align: center; "><?php echo $ad[4]; ?></td>
                <td class="bod" style="text-align: center;  width:90px;"><?php echo $ad[5]; ?></td>
                <td class="bod" style="text-align: center;  width:50px;"><?php echo $ad[6]; ?></td>
      
			</tr><?php 
		}}
			elseif($cbo1=="Date"&&$cbo=="Op_No")
		{
			$da = mysql_query("SELECT * FROM theater WHERE date like '".$search1."' and o_no like '".$search."' ");
	?>
    <?php
		while($ad=mysql_fetch_array($da))
		{
	?>
			<tr>
				<td class="bod" style="text-align: center; width:65px;"><?php echo $ad[0]; ?></td>
				<td class="bod" style="text-align: center; "><?php echo $ad[1]; ?></td>
                <td class="bod" style="text-align: center;   "><?php echo $ad[2]; ?></td>
                <td class="bod" style="text-align: center; "><?php echo $ad[3]; ?></td>
                <td class="bod" style="text-align: center; "><?php echo $ad[4]; ?></td>
                <td class="bod" style="text-align: center;  width:90px;"><?php echo $ad[5]; ?></td>
                <td class="bod" style="text-align: center;  width:50px;"><?php echo $ad[6]; ?></td>
             
				
			
				</tr>
		<?php 
		}}
			elseif($cbo1=="Date"&&$cbo=="Parts")
		{
			$da = mysql_query("SELECT * FROM theater WHERE date like '".$search1."' and parts like '".$search."' ");
	?>
    <?php
		while($ad=mysql_fetch_array($da))
		{
	?>
			<tr>
				<td class="bod" style="text-align: center; width:65px;"><?php echo $ad[0]; ?></td>
				<td class="bod" style="text-align: center; "><?php echo $ad[1]; ?></td>
                <td class="bod" style="text-align: center;   "><?php echo $ad[2]; ?></td>
                <td class="bod" style="text-align: center; "><?php echo $ad[3]; ?></td>
                <td class="bod" style="text-align: center; "><?php echo $ad[4]; ?></td>
                <td class="bod" style="text-align: center;  width:90px;"><?php echo $ad[5]; ?></td>
          
			
				</tr>
				<?php 
		}}
			elseif($cbo1=="Date"&&$cbo=="Time")
		{
			$da = mysql_query("SELECT * FROM theater WHERE date like '".$search1."' and time like '".$search."' ");
	?>
    <?php
		while($ad=mysql_fetch_array($da))
		{
	?>
			<tr>
				<td class="bod" style="text-align: center; width:65px;"><?php echo $ad[0]; ?></td>
				<td class="bod" style="text-align: center; "><?php echo $ad[1]; ?></td>
                <td class="bod" style="text-align: center;   "><?php echo $ad[2]; ?></td>
                <td class="bod" style="text-align: center; "><?php echo $ad[3]; ?></td>
                <td class="bod" style="text-align: center; "><?php echo $ad[4]; ?></td>
                <td class="bod" style="text-align: center;  width:90px;"><?php echo $ad[5]; ?></td>
                <td class="bod" style="text-align: center;  width:50px;"><?php echo $ad[6]; ?></td>
              
				
			
				</tr><?php 
		}}
			elseif($cbo1=="Date"&&$cbo=="D_ID")
		{
			$da = mysql_query("SELECT * FROM theater WHERE date like '".$search1."' and d_id like '".$search."' ");
	?>
    <?php
		while($ad=mysql_fetch_array($da))
		{
	?>
			<tr>
				<td class="bod" style="text-align: center; width:65px;"><?php echo $ad[0]; ?></td>
				<td class="bod" style="text-align: center; "><?php echo $ad[1]; ?></td>
                <td class="bod" style="text-align: center;   "><?php echo $ad[2]; ?></td>
                <td class="bod" style="text-align: center; "><?php echo $ad[3]; ?></td>
                <td class="bod" style="text-align: center; "><?php echo $ad[4]; ?></td>
                <td class="bod" style="text-align: center;  width:90px;"><?php echo $ad[5]; ?></td>
                <td class="bod" style="text-align: center;  width:50px;"><?php echo $ad[6]; ?></td>
             
			
				<?php 
		}}
	?></tr>
	
	
	</table>
	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		