<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

session_start(); // Start the session

// Check if the session variable containing the message is set


error_reporting(E_ALL);
ini_set('display_errors', 1);
global $date;
$conn = mysqli_connect('localhost', 'root', '', 'myproject');
if (!$conn) {
    echo "Connection failed";
}
if (isset($_GET['Class_Name']) && isset($_GET['Subject'])) {
    $classn = mysqli_real_escape_string($conn, $_GET['Class_Name']);
    $sub = mysqli_real_escape_string($conn, $_GET['Subject']);
}
$date = "Attendance_" . $classn . $sub . date("Y-m-d") . ".xlsx";
$time = "Lecture Time : " . time();

// Check if the file exists
if (!file_exists($date)) {
    require 'vendor/autoload.php'; // Include the autoload file for PhpSpreadsheet
    $spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();
    $activeWorksheet = $spreadsheet->getActiveSheet();
    $activeWorksheet->setCellValue('A1', 'Roll No');
    $activeWorksheet->setCellValue('B1', 'Student Name');
    $activeWorksheet->setCellValue('C1', 'Status');
    $activeWorksheet->setCellValue('D1', '' . $time);
    $writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    $writer->save($date);
}
?>


<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Goverment polytechnic collage, Jintur</title>
    <link rel="stylesheet" href="components.css">
    <link rel="stylesheet" href="icons.css">
    <link rel="stylesheet" href="responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,700,800&amp;subset=latin-ext"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,700,800&amp;subset=latin-ext"
        rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <style>
        .nav1 {
            display: flex;
            padding: 8px;
        }

        .title1 {
            margin: 8px;
            font-size: 14px;
        }

        .stud_form {
            padding: 30px;
            margin: 30px;
            margin-top: 60px;
        }

        .btn_pos_search {
            margin: 20px;
        }

        .stud_form {
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 30px;
            margin-right: 30px;
        }

        .bodytitle {
            color: black;
            font-size: 30px;
            margin: 10px;
        }

        .table_margin {
            margin: 5px;
            padding: 10px;
            color: black;
            text-align: center;
        }

        .table_margin img {
            width: 20px;
            height: 20px;
            margin-left: auto;
            margin-right: auto;
        }

        .pagebody {
            border-color: gray;
            border-radius: 8px;
            border-width: 4px;
            margin-top: 20px;
            padding-top: 20px;
            margin-bottom: 20px;
            margin-left: 200px;
            margin-right: 200px;
            color: black;

        }
    </style>
</head>

<!--
    You can change the color scheme of the page. Just change the class of the <body> tag. 
    You can use this class: "primary-color-white", "primary-color-red", "primary-color-orange", "primary-color-blue", "primary-color-aqua", "primary-color-dark" 
    -->

<!--
    Each element is able to have its own background or text color. Just change the class of the element.  
    You can use this class: 
    "background-white", "background-red", "background-orange", "background-blue", "background-aqua", "background-primary" 
    "text-white", "text-red", "text-orange", "text-blue", "text-aqua", "text-primary"
    -->

<body class="size-1520 primary-color-white">
    <form action="" method="post">

        <div class="table_margin">
            <center>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align: center;"> Roll No</th>
                            <th style="text-align: center;">Student Name</th>
                            <th style="text-align: center;" colspan="2">Operation</th>
                        </tr>

                        <?php
                        if (isset($_GET['Class_Name'])) {
                            $class_name = mysqli_real_escape_string($conn, $_GET['Class_Name']);
                            echo "" . $class_name;
                            $subject = mysqli_real_escape_string($conn, $_GET['Subject']);
                            $conn = mysqli_connect('localhost', 'root', '', 'myproject');
                            $key = "";
                            if (isset($_POST['searchtxt']))
                                $key = $_POST['searchtxt'];

                            if ($key != "")
                                $sql_sel = mysqli_query($conn, "SElECT * FROM student_info WHERE name  like '%$key%'");
                            else
                                $sql_sel = mysqli_query($conn, "SELECT * FROM student_info WHERE `Class`='$class_name'");
                            $i = 0;
                            while ($row = mysqli_fetch_array($sql_sel)) {
                                $i++;
                                ?><center><div class="massage" style="background-color:yellow; font-weight:bold; font-size :18px;">
                                <?php
    if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']); 
                                 
}?></div></center>
                                <tr>

                                    <td style="text-align: center;">
                                        <?php echo $row['Roll No'];
                                        ?>
                                    </td>
                                    <td style="text-align: center;">
                                        <?php echo $row['name'];
                                        $name = $row['name']; ?>
                                    </td>


                                    <td style="text-align: center;"><a
                                                href="actual_m_attendance.php?status=<?php echo "Absent" ?>&enrollment_no=<?php echo $row['enrollment_no']; ?>&classn=<?php echo "" . $class_name; ?>&sub=<?php echo "" . $subject; ?>"><Button type="button" class="btn btn-danger">Absent</Button></a>
                                    </td>
                                    <td style="text-align: center;"><a
                                                href="actual_m_attendance.php?status=<?php echo "Present" ?>&enrollment_no=<?php echo $row['enrollment_no']; ?>&classn=<?php echo "" . $class_name; ?>&sub=<?php echo "" . $subject; ?>"><Button type="button" class="btn btn-success">Prasent</Button></a>
                                    </td>
                        
    <td style="text-align: center;"></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                </table>
            </center>
        </div>
    </form>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
</body>

</html>