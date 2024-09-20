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
    <div class="stud_form">
        <div class="btn_pos">
            <form method="post">
                <center>
                    <input type="text" name="searchtxt" class="input_box_pos form-control" placeholder="Search name.."
                        style="font-size: 18px;" />
                    <div class="btn_pos_search">
                        <input type="submit" class="btn btn-primary btn-large" name="btnsearch" value="Search"
                            style="font-size: 18px;" />&nbsp;&nbsp;
                        <a href="add_score.php"><input type="button" class="btn btn-large btn-primary"
                                value="Register new" name="butAdd" style="font-size: 18px;" /></a>
                    </div>
                </center>
            </form>
        </div><br><br>
        <form action="" method="post">

            <div class="table_margin">
                <center>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align: center;"> Enrollment No</th>
                                <th style="text-align: center;">Student Name</th>
                                <th style="text-align: center;">Subject code</th>
                                <th style="text-align: center;">Subject Name</th>
                                <th style="text-align: center;">Theeory Exam Marks</th>
                                <th style="text-align: center;">1st Session Marks</th>
                                <th style="text-align: center;">2nd Session Marks</th>
                                <th style="text-align: center;">Practical Exam Marks</th>
                                <th style="text-align: center;">Manual Marks</th>
                                <th style="text-align: center;" colspan="2">Operation</th>
                            </tr>

                            <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'myproject');
                            $key = "";
                            if (isset($_POST['searchtxt']))
                                $key = $_POST['searchtxt'];

                            if ($key != "")
                                $sql_sel = mysqli_query($conn, "SElECT * FROM   student_score WHERE name  like '%$key%'");
                            else
                                $sql_sel = mysqli_query($conn, "SELECT * FROM   student_score");



                            $i = 0;
                            while ($row = mysqli_fetch_array($sql_sel)) {
                                $i++;
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row['enrollment_no']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['subject code']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['subject name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Theory Marks']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Sessional 1 marks']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Sessional 2 marks']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Practical Marks']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Manual Marks']; ?>
                                    </td>
                                    <td><a href="delete_score.php?enrollment_no=<?php echo $row['enrollment_no']; ?>"
                                            title="Delete"><img
                                                style="-webkit-box-shadow: 0px 0px 0px 0px rgba(50, 50, 50, 0.75);-moz-box-shadow:    0px 0px 0px 0px rgba(50, 50, 50, 0.75);box-shadow:         0px 0px 0px 0px rgba(50, 50, 50, 0.75);"
                                                src="deleteimg.png" height="20" alt="Delete" /></a></td>
                                </tr>
                            <?php
                            }
                            ?>
                    </table>
                </center>
        </form>
    </div>
    </form>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>