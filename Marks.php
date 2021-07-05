<head>
<title>
Marklist
</title>
<link rel="stylesheet" type="text/css" href="Sty.css"/>
</head>
<table cellpadding="5px" cellspacing="5px">
     <tr>
        <th>Exam ID</th>
        <th>Exam Date</th>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Subject</th>
        <th>Semester</th>
        <th>Type of Exam (UT/Sem)</th>
        <th>Mode of Exam (MCQ/Descriptive)</th>
        <th>Marks (out of 100)</th>
        <th>Pass/Fail</th>
   </tr> 
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

$Select = "SELECT * FROM `exam`";

$Sel=$conn-> query($Select);
if($Sel -> num_rows >0)
   {
while($d = $Sel->fetch_assoc())
    {
    echo "<tr><td>" . $d['EXAM_ID'] . "</td><td>" . $d['DATE'] . "</td><td>" . $d['STUDENT_ID'] . "</td><td>" . $d['NAME'] . "</td><td>" . $d['SUBJECT'] . "</td><td>" . $d['SEMESTER'] . "</td><td>" . $d['TYPE'] . "</td><td>" . $d['MODE'] . "</td><td>" . $d['MARKS'] ."
       </td><td>" . $d['VERDICT'] . "</td></tr>"
      ;
  }
  }

$conn->close();
?>
</table>