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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,700,800&amp;subset=latin-ext"
        rel="stylesheet">
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

        body {
            color: black;
        }

        .table_margin {
            border-style: solid;
            border-color: black;
            padding: 8px;
            
        }
        .page1{
            margin-left: 200px;
            margin-right: auto;
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
              <li><a class="nav-link" href="stud_infoview.php">Home</a></li>
              <li><a class="nav-link" href="notes.php">Note</a></li>
              <li><a class="nav-link" href="stud_profile.php?enrollment_no=<?php echo $_GET['enrollment_no']?>">Profile</a></li>
                <li><a class="nav-link" href="stud_login.php">Logout</a></li>
              </ul>
           </div>
        </nav>
      </header>
    </header>
    <div class="page1" >

        <div class="navbar">

            <form action="" method="post">

                <div class="table_margin">
                    <center>
                        <h1>Student personal Information</h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;"> Enrollment No</th>
                                    <th style="text-align: center;">Student Name</th>
                                    <th style="text-align: center;">Gender</th>
                                    <th style="text-align: center;">Phone</th>

                                </tr>

                                <?php
                                $conn = mysqli_connect('localhost', 'root', '', 'myproject');

                                if (isset($_GET['enrollment_no'])) {
                                    $enroll = mysqli_real_escape_string($conn, $_GET['enrollment_no']);

                                    $sql_sel = mysqli_query($conn, "SELECT * FROM student_info WHERE enrollment_no=$enroll");

                                    $i = 0;
                                    while ($row = mysqli_fetch_array($sql_sel)) {
                                        $i++;

                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $row['enrollment_no']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['gender']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['phone']; ?>
                                            </td>
                                            <?php
                                    }
                                }
                                ?>
                        </table>
                    </center>
            </form>
            <br>
            <br>
            <form action="" method="post">
                <div class="table_margin">
                    <center>
                        <h1>Student Academic Information</h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;"> Enrollment No</th>
                                    <th style="text-align: center;">Student Name</th>
                                    <th style="text-align: center;">Subject code</th>
                                    <th style="text-align: center;">Subject Name</th>
                                    <th style="text-align: center;">Theory Exam Marks</th>
                                    <th style="text-align: center;">1st Session Marks</th>
                                    <th style="text-align: center;">2nd Session Marks</th>
                                    <th style="text-align: center;">Practical Exam Marks</th>
                                    <th style="text-align: center;">Manual Marks</th>
                                </tr>

                                <?php
                                if (isset($_GET['enrollment_no'])) {
                                    $enroll = mysqli_real_escape_string($conn, $_GET['enrollment_no']);
                                    $conn = mysqli_connect('localhost', 'root', '', 'myproject');
                                    $sql_sel = mysqli_query($conn, "SELECT * FROM   student_score WHERE enrollment_no=$enroll");



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
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                        </table>
                    </center>
            </form>
        </div>
        </form>
    </div>
    </form>
    <br>
    <br>
    <div class="s-12 text-center margin-bottom">
        <p class="text-size-12">Copyright © 2016 - All Rights Reserved - www.gpjintur.co.in</p>
        <p class="text-size-12"></p>
        <p><a class="text-size-12 text-primary-hover" href="http://www.myresponsee.com"
                title="Responsee - lightweight responsive framework">Designed by Atharva Joshi</a></p>
    </div>
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>

</body>

</html>