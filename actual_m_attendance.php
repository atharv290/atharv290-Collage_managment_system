<!DOCTYPE html>
<html lang="en-US">
   <head>
   </head>
   <body>
 
<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

session_start(); // Start the session



// Redirect back to the previous page


    echo "<h1>hi</h1>";
    $conn = mysqli_connect('localhost', 'root', '', 'myproject');
    if (!$conn) {
        echo "Connection failed";
    }
    if(isset($_GET['enrollment_no']) ){
        $stud_enroll = mysqli_real_escape_string($conn, $_GET['enrollment_no']);
        $status =  $_GET['status'];
        $classn = $_GET['classn'];
        $sub = $_GET['sub'];
        $result = "SELECT * FROM student_info WHERE enrollment_no=$stud_enroll";
        $sql_sel = mysqli_query($conn, $result);
        $row = mysqli_fetch_assoc($sql_sel);
        $rollno = $row['Roll No'];
        $name = $row['name'];
        
        
    // $stud_enroll = $enroll;
    // Load the existing Excel file
    $inputFileName = "Attendance_" . $classn . $sub . date("Y-m-d") . ".xlsx";
    $spreadsheet = IOFactory::load($inputFileName);

    // Get the active worksheet (you can choose a specific sheet if needed)
    $worksheet = $spreadsheet->getActiveSheet();

    // Define new data to append
    $newDataToAppend = [
        [$rollno, $name, $status]
    ];

    // Find the next available row for appending data
    $highestRow = $worksheet->getHighestRow();
    $nextRow = $highestRow + 1;

    // Append the new data to the worksheet
    foreach ($newDataToAppend as $rowData) {
        $columnIndex = 1;
        foreach ($rowData as $cellData) {
            $worksheet->setCellValueByColumnAndRow($columnIndex, $nextRow, $cellData);
            $columnIndex++;
        }
        $nextRow++;
    }

    // Save the modified Excel file
    $outputFileName = "Attendance_" . $classn . $sub . date("Y-m-d") . ".xlsx";
    $writer = new Xlsx($spreadsheet);
    $writer->save($outputFileName);

    echo "Data has been appended to '$outputFileName'.";
    mysqli_close($conn);
    $conn = mysqli_connect('localhost', 'root', '', 'myproject');
if (!$conn) {
    $_SESSION['message'] = "Connection failed"; // Store an error message in the session
} else {
    // Your code to generate the Excel file and other logic here

    // If the code was successful, store a success message in the session
    $_SESSION['message'] = "Attendance Marked for ".$name." : ".$status;
}
}

?>
<script>window.history.back();</script>
  </body>
</html>