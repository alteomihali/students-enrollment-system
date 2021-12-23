<html>
 <head>
 <style>
          #user {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
          }

          #user td, #user th {
          border: 1px solid #ddd;
          padding: 8px;
          }

          #user tr:nth-child(even){background-color: #f2f2f2;}

          #user tr:hover {background-color: #ddd;}

          #user th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: center;
          background-color: brown;
          color: white;
          }
        </style>
</head>
<body>
<?php 

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "elms";

$db=mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if (mysqli_connect_error()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

	$qry = "SELECT * FROM tblemployees tbldepartments WHERE (Department='Faculty of Natural Sciences') || (Department='Universiteti i Mjekesise') || 
			(Department='Fakulteti Ekonomik') || (Department='Racing F1 Department') ||(Department='Finance & Accounting') ORDER BY id";
	$res = mysqli_query($db, $qry) or die(mysqli_connect_error($db));

	//kolonat qe do te ktheje query
	$cols = mysqli_num_fields($res);

	echo "<table id='user' border='1' text-align='center'>";
	echo "<hr>";
	echo '<tr  style="font-weight:bold; align:center;">';
	echo '<th>'; echo 'id'; echo '</th>';
	echo '<th>'; echo 'EmpId'; echo '</th>';
	echo '<th>'; echo 'FirstName'; echo '</th>';
	echo '<th>'; echo 'LastName'; echo '</th>';
	echo '<th>'; echo 'EmailId'; echo '</th>';
	echo '<th>'; echo 'Password'; echo '</th>';
	echo '<th>'; echo 'Gender'; echo '</th>';
	echo '<th>'; echo 'Dob'; echo '</th>';
	echo '<th>'; echo 'Department'; echo '</th>';
	echo '<th>'; echo 'Address'; echo '</th>';
	echo '<th>'; echo 'City'; echo '</th>';
	echo '<th>'; echo 'Country'; echo '</th>';
	echo '<th>'; echo 'Phonenumber'; echo '</th>';
	echo '<th>'; echo 'Status'; echo '</th>';
	echo '<th>'; echo 'RegDate'; echo '</th>';
	echo '</tr>';

	$i=0;
	while($rows=mysqli_fetch_array($res)){

 		echo "<tr align='center' style='font-weight:bold;'>
                <td><i> ".$rows[0]."</i></td>
                <td><i> ".$rows[1]." </i></td>
                <td><i> ".$rows[2]." </i></td>
                <td><i> ".$rows[3]." </i></td>
                <td><i> ".$rows[4]." </i></td>
                <td><i> ".$rows[5].".</i></td>
                <td><i> ".$rows[6]." </i></td>
                <td><i> ".$rows[7]." </i></td>
                <td><i> ".$rows[8]." </i></td>
                <td><i> ".$rows[9]." </i></td>
                <td><i> ".$rows[10]." </i></td>
                <td><i> ".$rows[11]." </i></td>
                <td><i> ".$rows[12]." </i></td>
                <td><i> ".$rows[13]." </i></td>
                <td><i> ".$rows[14]." </i></td>
              </tr>";
    }
    echo"</table>";


    
    mysqli_close($db);
?>
<br>

</body>
</html>