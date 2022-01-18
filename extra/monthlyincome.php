<!DOCTYPE html>
<?php
    session_start();
   $con = mysql_connect("localhost", "root", "");
mysql_select_db('Peacock', $con);
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="monthlyincomeexcel.php">
            Month <select name="month"><option>1</option><option>2</option>
            <option>3</option><option>4</option><option>5</option><option>6</option>
            <option>7</option><option>8</option><option>9</option><option>10</option>
            <option>11</option><option>12</option></select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Year <select name="year"><option>2016</option><option>2017</option>
            <option>2018</option><option>2019</option></select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" name="report" value="Report"><br><br>
            
            <?php
                if(isset($_POST["report"])) {
                    $month = $_POST["month"];
                    $year = $_POST["year"];
                    $statement = $connection->prepare("SELECT * FROM Customer");
                    $statement->bind_param("ss", $month, $year);
                    $statement->execute();
                    $statement->bind_result($CustomerID, $CustomerName, $Password, $PhNo, $Email);
            ?>
            Monthly Income Report<br>
            for <?php echo date('F', mktime(0, 0, 0, $month, 10)); ?>, <?php echo $year; ?><br>
            Report Date : <?php echo date("Y-m-d"); ?>
            
            <table border="1" style="border-collapse: collapse">
                <tr>
                    <th>CustomerID</th>
                    <th>CustomerName</th>
                    <th>Password</th>
                    <th>Phone No</th>
					 <th>Email</th>
                </tr>
                <?php
                    $no = 1;
                    $total = 0;
                    while($statement->fetch()) {
                ?>
                <tr>
                    <td><?php echo $CustomerID; ?></td>
                    <td><?php echo $CustomerName; ?></td>
                    <td><?php echo $Password; ?></td>
                    <td><?php echo $PhNo; ?></td>
					<td><?php echo $Email; ?></td>
                </tr>
                <?php
                        $CustomerID++;
                       
                    }
                ?>
               
            </table>
            <?php
                }
            ?>
        </form>
    </body>
</html>
