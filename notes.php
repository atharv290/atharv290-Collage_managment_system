
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
      </style>   
   </head>

<body class="size-1520 primary-color-orange background-white">
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
              <li><a class="nav-link" href="stud_infoview.php">Home</a></li>
              <li><a class="nav-link" href="stud_login.php">Logout</a></li>
              <li><a class="nav-link" href="notes.php">Notes</a></li>
              </ul>
           </div>
        </nav>
      </header>
      <form action="" method="post">

<div class="table_margin">
    <center>
        <h1>Download Notes</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="text-align: center;">Subject code</th>
                    <th style="text-align: center;">File Name</th>
                    <th style="text-align: center;">Download</th>
                </tr>
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'myproject');
                $sql_sel = mysqli_query($conn, "SELECT * FROM   downloads");
                $i = 0;
                while ($row = mysqli_fetch_array($sql_sel)) {
                    $i++;

                    ?>
                    <tr>
                        <td style="text-align: center;">
                            <?php echo $row['Subject code']; ?>
                        </td>
                        <td style="text-align: center;">
                            <?php echo $row['filename']; ?>
                        </td>
                        <td style="text-align: center;"><a href="download.php?file=<?php echo $row['filename']; ?>"
                                title="Download"><img
                                    style="-webkit-box-shadow: 0px 0px 0px 0px rgba(50, 50, 50, 0.75);-moz-box-shadow:    0px 0px 0px 0px rgba(50, 50, 50, 0.75);     box-shadow:0px 0px 0px 0px rgba(50, 50, 50, 0.75);"
                                    src="download.png" height="20" alt="Download" /></a></td>
                        </td>
                    </tr>
                    <?php
                }

                ?>
        </table>
    </center>
</form>
</div>
<!-- Footer - bottom -->
<div class="s-12 text-center margin-bottom">
  <p class="text-size-12">Copyright © 2016 - All Rights Reserved - www.gpjintur.co.in</p>
  <p class="text-size-12"></p>
  <p><a class="text-size-12 text-primary-hover" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Designed by Atharva Joshi</a></p>
</div>
</footer>                                                                    
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