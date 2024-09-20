
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
        .login1{
          margin-left: 400px;
          margin-right: 400px;
          border-style: solid;
          border-radius: 30px;
          border-color: black;
        }
        .loginform{
          margin-left: 100px;
          margin-right: 100px;
          padding: 8px;
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

   <body class="size-1520 primary-color-blue background-white">
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
              </ul>
           </div>
        </nav>
      </header>
  <div class="login1">
    <center>
      <div class="loginform">
      <h1>Government Polytechnic Jintur</h1>
                <h3>Staff Login</h3>
        <br>
        <form action="" method="post">
          <div class="form-floating mb-3">
            <input type="username" class="form-control" name="name" id="floatingInput" placeholder="Username">
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" name="pas" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <br>
          <input class="btn btn-primary" name="sub1" type="submit" value="Sign in">
          <br>
          <a href="stud_login.php"><h4>Click here for Student Login</h4></a>

          <?php
          if (isset($_POST['sub1'])) {
            msg1();
          }
          ?>
        </form>
      </div>
    </center>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
    crossorigin="anonymous"></script>
</body>

</html>
<?php
$msg = "";
function msg1()
{

  $conn = mysqli_connect('localhost', 'root', '', 'myproject');
  if (!$conn) {
    echo "Connection failed";
  }

  $uname = $_POST['name'];
  $pwd = $_POST['pas'];

  $sql = mysqli_query($conn, "SELECT * FROM user_db WHERE username='$uname' AND Password='$pwd'");
  $cout = mysqli_num_rows($sql);
  if ($cout > 0) {
    $row = mysqli_fetch_array($sql);
    if ($row['type'] == 'admin')
      $msg = "Login trov hery!.....";
    else
      header("location:  newhomepage.php");

  } else {
    echo "Invalid login authentication, try again!";
  }

}
?>