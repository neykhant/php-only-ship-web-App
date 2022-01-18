<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Online Vehicle Auction</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
 <link href="calendar/calendar.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="calendar/calendar.js"></script>
<!--[if IE]>
<style type="text/css" media="screen">
.shell {background-image: none;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='css/images/shell-bg.png', sizingMethod='scale');}
.box{background-image: none;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='css/images/dot.png', sizingMethod='scale');}
.transparent-frame .frame{background-image: none;filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='css/images/transparent-frame.png', sizingMethod='image');}
.search .field{padding-bottom:9px}
</style>
<![endif]-->
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>
</head>
<body>
<!-- Shell -->
<div class="shell">
  <!-- Header -->
  <div id="header">
    <!-- Logo -->
    <h1 id="logo"><image src="logo.gif" width="130" height="55">Online Vehicle Auction</a></h1>
    <!-- End Logo -->
    <!-- Navigation -->
    <div id="nav">
      <ul>
        <li><a href="StaffHome.php">Home</a></li>
        <li><a  href="VehicleRegistration.php">Vehicle Reg</a></li>
		<li><a href=" CategoryRegistration.php"> Cat Reg</a></li>
        <li><a   href="OpenAuction.php">Open Auction</a></li>
        <li><a  class="active" href="Report.php">Report</a></li>
       
      </ul>
    </div>
    <!-- End Navigation -->
  </div>
  <!-- End Header -->
  <!-- Content -->
  <div id="content">
    <!-- Sidebar -->
    <div id="sidebar">
      <!-- Search -->
      <form action="http://all-free-download.com/free-website-templates/" class="search" method="post">
        <div class="cl">&nbsp;</div>
        <input type="text" class="field blink" value="search" title="search" />
        <div class="btnp">
          <input type="submit" value="go" />
        </div>
        <div class="cl">&nbsp;</div>
      </form>
      <!-- End Search -->
      <!-- Sign In Links -->
     
      <!-- End Sign In Links -->
      <!-- Box Latest News -->
      
      <!-- End Box Latest News -->
      <!-- Box Latest Reviews -->
      
      <!-- End Box Latest Reviews -->
      <!-- Box Latest Posts -->
      
      <!-- End Box Latest Posts -->
    </div>
    <!-- End Sidebar -->
    <!-- Main -->
    <div id="main">
      <!-- Top Image -->
     <center><h1> Detail Information Report</h1>&nbsp;<br></center><br>
	 <form action="" method="POST">
	 <table>
	  <tr>
	  <td>
	  AuctionID
	  <td/>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="AuctionID" style="width:150px;"  onchange = "reload(this.form);" >
	  <option>Select AuctionID</option>
	  <?php
	  $localhost = "localhost";
$username = "root";
$password = "";
$database = "vehicleauction";
$dbconnect = mysql_connect ($localhost,$username,$password) or die ("Connection Failed!!!");

if ($dbconnect){
    mysql_select_db($database,$dbconnect) or die ("Database Connection Failed!!!");
}
else {
    echo "<script type = 'text/javascript'> alert ('Failed Database Connection'); </script>";
}
							           if(isset($_GET["point"])){
                 $var = $_GET["point"];
     $query1 = "select Image from vehicle v,auction a where v.VehicleID=a.SubName and a.AuctionID='$var'";
            $result1 = mysql_query($query1, $dbconnect);
			$arr1 = mysql_fetch_array( $result1 );
			$Image=$arr1['Image'];
      }else{
	  $Image="";
	  }
							 $query = "Select AuctionID,AuctionID from auction";
							 $result = mysql_query($query, $dbconnect);
							 while($arr = mysql_fetch_array( $result )){
								if($arr ['AuctionID'] == @$var)
			{
	print ("<option selected value = '" .$arr['AuctionID']. "'>" . $arr['AuctionID']."</option>");
			}
			else
			{

          print "<option value=".$arr['AuctionID'].">". $arr['AuctionID'] ." </option>";

                        }
								}                                       
							?>
							
	  </td>
	  </tr>
	
	
	<tr>
	  <td><br>
	<input type="submit" value="Generate" name="btnGenerate"/>
	  </td>
	  <td><br>
	  <input type="reset" value="Cancel" name="btnCancel"/>
	  </td>
	  </tr>
	    </form>
	  <center/>
	  </table>
	  
	  <?php
         
	if(isset($_POST['btnGenerate'])) {
	$date=date("m/d/y");
$AuctionID=$_POST["AuctionID"];      
        require("C:/xampp/htdocs/Project/Classes/PHPExcel.php");

$objPHPexcel = new PHPExcel();
$objPHPexcel = PHPExcel_IOFactory::load('C:/xampp/htdocs/Project/Report/Report2.xlsx');
                $objPHPexcel->getActiveSheet()->getCell('G30')->setValue("$date");


	$host = "localhost";
	$username = "root";
	$password ="";
	$db="vehicleauction";

	$dbconect = mysql_connect($host, $username, $password) or die("Connection Failed!!");
	mysql_select_db($db,$dbconect) or die("Cannot connect database!!");
         $query = "select * from vehicle v,auction a where a.AuctionID='$AuctionID' and a.SubName=v.VehicleID";
    $result = mysql_query($query,$dbconect);
    $row1= mysql_fetch_array($result);
	 $objPHPexcel->getActiveSheet()->getCell('E18')->setValue("$row1[VehicleID]");
	$objPHPexcel->getActiveSheet()->getCell('E19')->setValue("$row1[ManufactureName]");
	$objPHPexcel->getActiveSheet()->getCell('E20')->setValue("$row1[SubName]");
        $objPHPexcel->getActiveSheet()->getCell('E21')->setValue("$row1[VehicleModel]");
        $objPHPexcel->getActiveSheet()->getCell('E22')->setValue("$row1[VehicleTypeName]");
         $objPHPexcel->getActiveSheet()->getCell('E23')->setValue("$row1[VehicleColor]");
		 $objPHPexcel->getActiveSheet()->getCell('E24')->setValue("$row1[VehicleEnginePower]");
         $objPHPexcel->getActiveSheet()->getCell('E25')->setValue("$row1[VehicleCondition]");
		 $objPHPexcel->getActiveSheet()->getCell('E26')->setValue("$row1[FuelType]");
         $objPHPexcel->getActiveSheet()->getCell('E27')->setValue("$row1[Transmission]");
		 $objPHPexcel->getActiveSheet()->getCell('E28')->setValue("$row1[Seats]");
         $objPHPexcel->getActiveSheet()->getCell('E29')->setValue("$row1[Weight]");
         $objPHPexcel->getActiveSheet()->getCell('E30')->setValue("$row1[UsedMiles]");
    $i = 34;
     $query2 = "select ad.CustomerID,CustomerName,AuctionAmount from auctiondetail ad,customer c where ad.AuctionID='$AuctionID' and ad.CustomerID=c.CustomerID";
    $result1 = mysql_query($query2,$dbconect);

    while($row2= mysql_fetch_array($result1)) {
       	 $objPHPexcel->getActiveSheet()->getCell('D' . $i)->setValue("$row2[CustomerID]");
         $objPHPexcel->getActiveSheet()->getCell('E' . $i)->setValue("$row2[CustomerName]");
         $objPHPexcel->getActiveSheet()->getCell('F' . $i)->setValue("$row2[AuctionAmount]");
		 
        $i = $i +1;
    }
    $range = 'D34:F' . --$i ;

    $objPHPexcel->getActiveSheet()->getStyle("$range")->getBorders()-> getAllBorders() ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);


     $objWriter = PHPExcel_IOFactory::createWriter($objPHPexcel, 'Excel5');
$objWriter->save('Report2.xls');
echo"<script type='text/javascript'>window.location='Report2.xls'; </script>";


	exit;    	
}
error_reporting(0);
?>

	  
	  
      
      <!-- End Top Image -->
      <!-- Box -->
     
      </div>
      <!-- End Box -->
    </div>
    <!-- End Main -->
    <div class="cl">&nbsp;</div>
  </div>
  <!-- End Content -->
  <!-- Footer -->
 <!-- <div id="footer">
    <p>&copy; Sitename.com. Design by <a href="http://chocotemplates.com">ChocoTemplates.com</a></p>
  </div>
  <!-- End Footer -->
</div>
<!-- End Shell -->
<div align=center></a></div></body>
</html>
