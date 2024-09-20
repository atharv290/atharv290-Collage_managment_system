<?php
ob_start();
$conn = mysqli_connect('localhost', 'root', '', 'myproject');
if (!$conn) {
    echo "Connection failed";
}
  if (isset($_GET['enrollment_no'])) {
    $stud_enroll = mysqli_real_escape_string($conn, $_GET['enrollment_no']);
    $sql1 = "DELETE FROM student_info WHERE enrollment_no='$stud_enroll'";
    $result = mysqli_query($conn, $sql1);
    if($result){
        echo"<h3>Student deleted succesfully</h3>";
        header("Location: http://localhost/myproject/view_student.php", true, 301);
        ob_end_flush();
        exit();
    }
    else{
        echo"<h3>Student deletion failed</h3>";
    }
  }
?>