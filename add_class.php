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
    <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,700,800&amp;subset=latin-ext"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
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

        .time {
            display: flex;
            color: white;
            margin: 30px;
            justify-content: space-around;
            justify-content: space-between;

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

<body class="size-1520 primary-color-orange background-white ">
    <!-- HEADER -->
    <header class="grid">
        <!-- Top Navigation -->
        <nav class="s-12 grid background-none background-primary-hightlight">
            <!-- logo -->
            <a href="index.html" class="m-12 l-3 padding-2x logo">
                <div class="nav1">
                    <img src="logo1.jpg" style="height: 50px; width: 50px;">
                    <p class="title1" style="Color:black; font-size:14px; font-weight: bold;">Goverment Polytechnic
                        Jintur शासकीय तंत्रनिकेतन जिंतूर</p>
                </div>
            </a>
            <div class="top-nav s-12 l-9">
                <ul class="top-ul right chevron">
                <li><a class="nav-link" href="newhomepage.php">Home</a></li>
                    <li><a class="nav-link" href="add_stud.php">Add Student</a></li>
                    <li><a class="nav-link" href="view_student.php">View Student</a></li>
                    <li><a class="nav-link" href="add_faculty.php">Add Faculty</a></li>
                    <li><a class="nav-link" href="view_faculty.php">View Faculty</a></li>
                    <li><a class="nav-link" href="add_score.php">Add Score</a></li>
                    <li><a class="nav-link" href="view_score.php">View Score</a></li>
                    <li><a class="nav-link" href="add_subject.php">Add subject</a></li>
                    <li><a class="nav-link" href="view_subject.php">view subject</a></li>
                    <li><a class="nav-link" href="uplodes.php">Upload Notes</a></li>
                    <li><a class="nav-link" href="add_class.php">Add class</a></li>
                    <li><a class="nav-link" href="stud_login.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="pagebody">
        <div class="stud_form">
            <form action="" method="post">
                <div class="bodytitle">
                    <center>
                        <h1>Attendance Entry</h1>
                    </center>
                </div>
                <center>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="class_name" id="floatingInput"
                            placeholder="Class Name,eg. CO1I">
                        <label for="floatingInput">Class Name</label>
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="facultyname" id="floatingInput"
                            placeholder="Faculty Name">
                        <label for="floatingInput">Faculty Name</label>
                    </div> <br>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="Subject" id="floatingInput" placeholder="Subject">
                        <label for="floatingInput">Subject</label>
                    </div> <br>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="total_stud" id="floatingInput"
                            placeholder="Total Students">
                        <label for="floatingInput">Total Students</label>
                    </div> <br>
                    <button type="button" class="btn btn-primary"><input type="submit" name="sub3"
                            class="btn btn-primary"></button>
                    <?php if (isset($_POST['sub3'])) {
                        msg3();
                    }
                    ?>
                </center>

            </form>

            <form action="" method="post">

                <div class="table_margin">
                    <center>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;"> Class Name</th>
                                    <th style="text-align: center;">Faculty Name</th>
                                    <th style="text-align: center;">Subject</th>
                                    <th style="text-align: center;">Total Students</th>
                                    <th style="text-align: center;"colspan="2">Operation</th>
                                </tr>
                                <?php
                                $conn = mysqli_connect('localhost', 'root', '', 'myproject');
                                $key = "";
                                if (isset($_POST['searchtxt']))
                                    $key = $_POST['searchtxt'];

                                if ($key != "")
                                    $sql_sel = mysqli_query($conn, "SElECT * FROM class_details WHERE name  like '%$key%'");
                                else
                                    $sql_sel = mysqli_query($conn, "SELECT * FROM class_details");
                                $i = 0;
                                while ($row = mysqli_fetch_array($sql_sel)) {
                                    $i++;
                                    ?>
                                    <tr>
                                        <td style="text-align: center;">
                                            <?php echo $row['Class_Name']; ?>
                                        </td>
                                        <td style="text-align: center;">
                                            <?php echo $row['Faculty Name']; ?>
                                        </td>
                                        <td style="text-align: center;">
                                            <?php echo $row['Subject']; ?>
                                        </td>
                                        <td style="text-align: center;">
                                            <?php echo $row['Total Students']; ?>
                                        </td>
                                        <td style="text-align: center;"><a href="Mark_Attendance.php?Class_Name=<?php echo $row['Class_Name']; ?>&Subject=<?php echo $row['Subject']; ?>"><button type="button" class="btn btn-success">Mark
                                                Attendance</button></a>
                                        </td>
                                        <td style="text-align: center;"><a href="download_attendance.php?Class_Name=<?php echo $row['Class_Name']; ?>&Subject=<?php echo $row['Subject']; ?>"><button type="button" class="btn btn-success">Download Attendance</button></a>
                                        </td>
                                    </tr>

                                    <?php
                                }

                                ?>
                        </table>
                    </center>
            </form>
        </div>
    </div>
    </form>
    </div>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

</body>

</html>
<?php
function msg3()
{
    $conn = mysqli_connect('localhost', 'root', '', 'myproject');
    if (!$conn) {
        echo "Connection failed";
    }
    $class_name = $_POST['class_name'];
    $facultyname = $_POST['facultyname'];
    $subject = $_POST['Subject'];
    $total_stud = $_POST['total_stud'];

    $sql = "INSERT INTO `class_details` (`Class_Name`,`Faculty Name`,`Subject`,`Total Students`)
 VALUES('$class_name','$facultyname','$subject','$total_stud')";
    //Class Name	Faculty Name	Subject	Total Students
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<h3>Student Entery Successful</h3>";
    } else {
        echo "<h3>Student Entery Fail</h3>";
    }
}
?>