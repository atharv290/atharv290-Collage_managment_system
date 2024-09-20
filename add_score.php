
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
      <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,700,800&amp;subset=latin-ext" rel="stylesheet">  
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
                    <h1>Student Score Entery Form</h1>
                </center>
            </div>
                <form action="" method="post">
                    <center>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="enroll" id="floatingInput"placeholder="Enrollment No">
                        <label for="floatingInput">Enrollment No</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="floatingInput"placeholder="Name">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="sub_code" id="floatingInput"placeholder="Subject Code">
                        <label for="floatingInput">Subject Code</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="sub_name" id="floatingInput"placeholder="Subject Name">
                        <label for="floatingInput">Subject Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="ese_tm" id="floatingInput"placeholder="ESE Theory Marks">
                        <label for="floatingInput">ESE Theory Marks</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="s_marks1" id="floatingInput"placeholder="Sessional 1 Marks">
                        <label for="floatingInput">Sessional 1 Marks</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="s_marks2" id="floatingInput"placeholder="Sessional 2 Marks">
                        <label for="floatingInput">Sessional 2 Marks</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="ese_pm" id="floatingInput"placeholder="ESE Practical Marks">
                        <label for="floatingInput">ESE Practical Marks</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="manual_marks" id="floatingInput"placeholder="Manual Marks">
                        <label for="floatingInput">Manual Marks</label>
                    </div> 
                    <button type="button" class="btn btn-primary"><input type="submit" name="sub2" class="btn btn-primary"></button>                                           
                        
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
    $s_code=$_POST['sub_code'];
    $sname=$_POST['sub_name'];  
    $ese_tm = $_POST['ese_tm'];
    $s_marks1 = $_POST['s_marks1'];
    $s_marks2 = $_POST['s_marks2'];
    $manual_marks = $_POST['manual_marks'];
    $ese_pm = $_POST['ese_pm'];

    $sql = "INSERT INTO `student_score` (`enrollment_no`,`Name`,`subject code`,`subject name`,`Theory Marks`,`Sessional 1 marks`,`Sessional 2 marks`,`Manual Marks`,`Practical Marks`)
 VALUES('$enroll','$name','$s_code','$sname','$ese_tm','$s_marks1','$s_marks2','$manual_marks','$ese_pm')";
 //	enrollment_no	Name	subject code	subject name	Theory Marks	Sessional 1 marks	Sessional 2 marks	Manual Marks	Practical Marks

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<h3>Student Subject Score Successful saved</h3>";
    } else {
        echo "<h3>Student Subject Score Failed</h3>";
    }
}
?>