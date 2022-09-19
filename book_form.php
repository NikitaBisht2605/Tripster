<?php

    $connection = mysqli_connect('localhost','root','','book_db');

    if(isset($_POST['send'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $activity = $_POST['activity'];
        $guests = $_POST['guests'];
        $arrival = $_POST['arrival'];
        $leaving = $_POST['leaving'];

        $request = "insert into book_form(fname,lname,email,phone,address,location,activity,guests,arrival,leaving) values
        ('$fname','$lname','$email','$phone','$address','$location','$activity','$guests','$arrival','$leaving')";

        mysqli_query($connection,$request);
        header('location:book.php');

    }else{
        echo 'Something went wrong!Try again...';
    }

?>