<?php
if($_SERVER('REQUEST_METHOD')=='post' && isset($_POST['sub1'])){
$conn=mysqli_connect('localhost','root','','myproject');
if(!$conn){
    echo "Connection failed";
}
$username = $_POST['name']; 
$password = $_POST['pas'];
$result = mysqli_query($conn, "SELECT * FROM  `user_db`
    WHERE username IN ('$username') AND Password IN ('$password')");
    while ($row = mysqli_fetch_array($result))
    {
        session_start();
        
        $_SESSION['idno'] = $row['idno']; 
        $_SESSION['username'] = $row['username'];
        $_SESSION['pos'] = $row['pos'];
    
    if($_SESSION['pos'] == 'admin')
    {
        header("Location: homepage/");
    
    }
    mysqli_close($conn);
    exit;
    }
    $error="Invalid login!";
    header("Location: index.php?error=".$error);
    mysqli_close($conn);
    exit;
}


?>