<?php
include 'database.php';
if (isset($_POST['btn-send'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $text = $_POST['text'];

    $sql = "insert into userform(name,email,subject,text) values('$fname','$email','$subject','$text')";
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('new record inserted')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    } else {
        echo "error:" . mysqli_error($con);
    }
    mysqli_close($con);
}
