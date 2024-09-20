<?php
ob_start();
$conn = mysqli_connect('localhost', 'root', '', 'myproject');
if (!$conn) {
    echo "Connection failed";
}
  if (isset($_GET['Faculty_id'])) {
    $stud_enroll = mysqli_real_escape_string($conn, $_GET['Faculty_id']);
    $sql1 = "DELETE FROM faculty_info WHERE Faculty_id='$stud_enroll'";
    $result = mysqli_query($conn, $sql1);
    if($result){
        echo"<h3>Faculty deleted succesfully</h3>";
        header("Location: http://localhost/myproject/view_faculty.php", true, 301);
        ob_end_flush();
        exit(); 
         
    }
    else{
        echo"<h3>Fcaulty deletion failed</h3>";
    }
  }
?>