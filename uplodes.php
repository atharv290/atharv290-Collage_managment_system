
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
        .up{
            margin-left: 400px;
            margin-right: 400px;
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

   <body class="size-1520 primary-color-orange background-white">
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
      <center> 
         <div class="up">
  
<form action="uplodes.php" method="post" enctype="multipart/form-data"><br>
   <Label style="color: white; font-size:28px;">Uplode Notes</Label><br><br>
   <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="sub_code" id="floatingInput" placeholder="Subject code">
                        <label for="floatingInput">Subject code</label>
                    </div>
                    <div class="form-floating mb-3">
    <input type="file" name="file"class="form-control"id="floatingInput"><br><br>
    </div>
    <button type ="submit" name="submit" class="btn btn-primary">Upload</button>
    <?php 
    if (isset($_POST['submit'])) {
        msg2();
    }
     ?>
   </form>
   </div>
</center>
   <?php
   function msg2(){
     $conn=mysqli_connect('localhost','root','','myproject');
     if(!$conn){
         echo "Connection failed";
     }
     $code = $_POST['sub_code'];
     $filename=$_FILES['file']['name'];
     $filetempname=$_FILES['file']['tmp_name'];
     $path = "files/".$filename;
     $qurey = " INSERT INTO `downloads`(`Subject code`,`filename`)VALUES('$code','$filename')";

    $run=mysqli_query($conn,$qurey);
    if($run){
        move_uploaded_file($filetempname,$path);
        echo"<h1>Successful</h1>";
        
    }
    else{
        echo"unsuccessful".mysqli_error($conn);
    }
    }
    ?>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>