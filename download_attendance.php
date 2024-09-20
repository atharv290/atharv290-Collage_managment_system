<?php
$conn = mysqli_connect('localhost', 'root', '', 'myproject');
if (!$conn) {
    echo "Connection failed";
    exit;
}

if (isset($_GET['Class_Name']) && isset($_GET['Subject'])) {
    $classn = mysqli_real_escape_string($conn, $_GET['Class_Name']);
    $sub = mysqli_real_escape_string($conn, $_GET['Subject']);
    $filename = "Attendance_" . $classn . $sub . date("Y-m-d") . ".xlsx";
    $filepath = "C:/xampp/htdocs/myproject/" . $filename;

    if (!empty($filename) && file_exists($filepath)) {
        // Set the correct Content-Type header for Excel files (xlsx)
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");

        // Set Content-Disposition header with proper quotes around filename
        header("Content-Disposition: attachment; filename=\"$filename\"");
        
        // Set Content-Length header
        header("Content-Length: " . filesize($filepath));

        // Open the file in binary mode
        $fileHandle = fopen($filepath, "rb");
        if ($fileHandle) {
            // Output the file contents in chunks to avoid memory issues
            while (!feof($fileHandle)) {
                echo fread($fileHandle, 8192);
            }
            fclose($fileHandle);
            exit;
        } else {
            echo "Error opening the file.";
        }
    } else {
        echo "File does not exist";
    }
} else {
    echo "Class_Name and Subject parameters are not set.";
}
?>
