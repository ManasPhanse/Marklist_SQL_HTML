<head>
<title>
Connected
</title>
<link rel="stylesheet" type="text/css" href="Sty.css"/>
</head>
<?php  
$servername = "localhost";
$username = "root";
$password = "";
$database= "marks";

// Creating connection
$conn = new mysqli($servername, $username, $password, $database);

// Checking connection
if ($conn->connect_error) {
die("Connection failed:" . $conn->connect_error);
}

$EID=$_POST['EXAM_ID'];
$Date=$_POST['DATE'];
$SID=$_POST['STUDENT_ID'];
$Name=$_POST['NAME'];
$Subj=$_POST['SUBJECT'];
$Sem=$_POST['SEMESTER'];
$Type=$_POST['TYPE'];
$Mode=$_POST['MODE'];
$Marks=$_POST['MARKS'];

if ($Marks>=40) {
  $Verdict="PASS";
} else {
  $Verdict="FAIL";
}

$sql = "INSERT INTO `exam` VALUES (
        '$EID','$Date','$Name','$SID','$Subj',
        '$Type','$Mode','$Sem','$Marks', '$Verdict'
        )";

if ($conn->query($sql) == TRUE) {
  echo "Record Accepted!"."<br/><br/>".'<a href="Marks.php">Marklist</a>';
} else {
  echo "Error: " . $sql . "<br/>" . $conn->error;
}

$conn->close();
?>
