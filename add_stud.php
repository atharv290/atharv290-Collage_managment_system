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
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <style>
        .nav1{
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
            font-size: 20px;
            margin: 8px;
            font-weight: bold;

        }
        .table_margin{
            margin: 5px;
            padding: 10px;
            color: black;
            text-align: center;
        }
        .table_margin img{
            width: 20px;
            height: 20px;
            margin-left: auto;
            margin-right: auto;
        }

        .pagebody {
            font-weight: bold;
            border-color: gray;
            border-radius: 8px;
            border-width: 4px;
            margin-bottom: 20px;
            margin-left: 200px;
            margin-right: 200px;
            color: black;

        }
    </style>
</head>
<body class="size-1520 primary-color-orange background-white ">
    <!-- HEADER -->
    <header class="grid">
        <!-- Top Navigation -->
        <nav class="s-12 grid background-none background-primary-hightlight">
            <!-- logo -->
            <a href="index.html" class="m-12 l-3 padding-2x logo">
            <div class="nav1">
              <img src="logo1.jpg" style="height: 50px; width: 50px;">
              <p class="title1"style="Color:black; font-size:14px; font-weight: bold;">Goverment Polytechnic Jintur शासकीय तंत्रनिकेतन जिंतूर</p>
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
            <div class="bodytitle">
                <center>
                    <h1>Student Entery Form</h1><br>
                </center>
            </div>
            <form action="" method="post">
                <center>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="enroll" id="floatingInput"
                            placeholder="Enrollment No">
                        <label for="floatingInput">Enrollment No</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="roll_no" id="floatingInput"
                            placeholder="Roll No">
                        <label for="floatingInput">Roll No</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Name">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="gender" style="font-weight: bold;">
                            <option selected>Select Gender</option>
                            <option value="Male" name="gender">Male</option>
                            <option value="Female" name="gender">Female</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="phone" id="floatingInput" placeholder="Phone no">
                        <label for="floatingInput">Phone no</label>
                    </div>

                 
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="pas" id="floatingInput" placeholder="Password">
                        <label for="floatingInput">Password</label>
                    </div>
                    <button type="button" class="btn btn-primary"><input type="submit" name="sub2"
                            class="btn btn-primary"></button>

                    <?php if (isset($_POST['sub2'])) {
                        msg2();
                    }
                    ?>
                </center>
            </form>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
function msg2()
{
    $conn = mysqli_connect('localhost', 'root', '', 'myproject');
    if (!$conn) {
        echo "Connection failed";
    }
    $enroll = $_POST['enroll'];
    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $pas = $_POST['pas'];

    $sql = "INSERT INTO `student_info` (`enrollment_no`,`Roll No`,`name`,`gender`,`phone`,`login_password`)
 VALUES('$enroll','$roll_no','$name','$gender','$phone','$pas')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<h3>Student Entery Successful</h3>";
    } else {
        echo "<h3>Student Entery Fail</h3>";
    }
}
?>