<?php
    $servername="localhost";
    $username= "root";
    $password="";
    $database= "qlbtl";
    $conn= mysqli_connect($servername,$username, $password,$database);
    mysqli_set_charset($conn, 'UTF8');

    if(isset($_GET['delete'])){
        $mabtl= $_GET['delete'];
        $conn -> query("DELETE FROM quanly WHERE mabtl=$mabtl");
        header("location: library.php");
    }
    // if(!$conn){
    //     echo ("ket noi khong thanh cong");
    // }else{
    //     echo ("ket noi thanh cong rui ne :v");
    // }
?>