<?php
ob_start();
$conn = mysqli_connect('localhost', 'root', '', 'myproject');
if (!$conn) {
    echo "Connection failed";
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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,700,800&amp;subset=latin-ext" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,700,800&amp;subset=latin-ext" rel="stylesheet">  
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>
      <style>
        .nav1{
            display: flex;
            padding: 8px;
        }
        .title1{
            margin: 8px;
            font-size: 14px;
        }
        body{
          color: black;
        }
        .stud_form{
            margin-left: 250px;
            margin-right: 250px;
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
           <a href="index.html" class="m-12 l-3 padding-2x logo" >
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
                    <h1>Student Update Form</h1>
                    <br>
                </center>
            </div>
            <?php
            if (isset($_GET['enrollment_no'])) {
                $stud_enroll = mysqli_real_escape_string($conn, $_GET['enrollment_no']);
                $sql1 = "SELECT * FROM student_info WHERE enrollment_no='$stud_enroll' ";
                $result = mysqli_query($conn, $sql1);
                if (mysqli_num_rows($result) > 0) {
                    $stud_record = mysqli_fetch_array($result);
                    ?>

                    <form action="" method="post">
                        <center>
                            <center>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="enroll" id="floatingInput"
                                        placeholder="Enrollment No" value="<?= $stud_record["enrollment_no"]; ?>">
                                    <label for="floatingInput">Enrollment No</label>
                                </div><br>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Name"
                                        value="<?= $stud_record['name']; ?>">
                                    <label for="floatingInput">Name</label>
                                </div><br>
                                <div class="form-floating mb-3">
                                 <div style="color: black;">
                                Gender: Male : <input type="radio" name="gender" value="Male" placeholder="male"
                                    value="<?= $stud_record["gender"]; ?>"> Female :
                                <input type="radio" value="Female" name="gender" placeholder="Female"
                                    value=<?= $stud_record["gender"]; ?>><br><br></div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="phone" id="floatingInput"
                                        placeholder="Phone no" value=<?= $stud_record["phone"]; ?>>
                                    <label for="floatingInput">Phone no</label>
                                </div><br>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="log_pass" id="floatingInput"
                                        placeholder="Login password" value=<?= $stud_record["login_password"]; ?>>
                                    <label for="floatingInput">Login password</label>
                                </div>
                                <button type="button" class="btn btn-primary"><input type="submit" name="update_button"
                                        class="btn btn-primary"></button>

                                <?php if (isset($_POST['update_button'])) {
                                    msg2();
                                }
                                ?>
                            </center>
                    </form>
                    <?php
                } else {
                    echo "<h4>NO such record found</h4>";
                }
            }
            ?>
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
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $pass = $_POST['log_pass'];
    $sql = "UPDATE `student_info` SET `enrollment_no`='$enroll',`name`='$name',`gender`='$gender',`phone`='$phone',`login_password`='$pass' WHERE `enrollment_no`='$enroll'";
    mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) == 1) {
        echo "<h3>Student Successful Updated</h3>";
        header("Location: http://localhost/myproject/view_student.php", true, 301);
        ob_end_flush();
        exit();
    } else {
        echo "<h3>Student Updation Failed</h3>";

    }
}
?>