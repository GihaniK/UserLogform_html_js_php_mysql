<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

$servername = "localhost:4306";
$username = "root";
$password = "";
$dbname = "atirathnapura";


// Create Connection into db

$conn = mysqli_connect($servername,$username,$password,$dbname);


//check Conncetion

if(!$conn){
    die("Connection Not Successfully. Try Again !" . mysqli_connect_error());
}
else{
    echo("Connection is Successfully : <br>");
}


//Create Database

// $createdb = "CREATE DATABASE  ATIRathnapura";

// if(mysqli_query($conn,$createdb)){
//     echo ("Create Database Successfully");
// }
// else{
//     echo ("Error try again : " . mysqli_error($conn));
// }

// mysqli_close($conn);

// Creating Table 

// $sqltable = "CREATE TABLE Student (
//     name VARCHAR(20),
//     email VARCHAR (20),
//     password VARCHAR (20),
//     phone_no INT(10),
//     student_id VARCHAR(20) PRIMARY KEY ,
//     gender VARCHAR (20),
//     language VARCHAR (20),
//     zip_code INT (10),
//     about VARCHAR(50)
// )";

// if(mysqli_query($conn,$sqltable)){
//     echo("Table is Creating Successfully ");
// }
// else{
//     echo(" Error Creating table : " . mysqli_error($conn));
// }

// importing data from html form

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone_no = $_POST["phone"];
$stu_id = $_POST["sid"];
$gender = $_POST["gender"];
$language = $_POST["myselect"];
$zip_code = $_POST["zip"];
$about = $_POST["textarea"];


//Insert Data to Database

$sqlInsertData = "INSERT INTO student(name,email,password,phone_no,student_id,gender,language,zip_code,about)
VALUE('$name','$email','$password',$phone_no,'$stu_id','$gender','$language',$zip_code,'$about');";


if(mysqli_multi_query($conn,$sqlInsertData)){
    echo(" New Records Created Successfully");
}
else{
    echo (" Error : )" . $sqlInsertData . "<br>" . mysqli_error($conn));
}


mysqli_close($conn);




?>

<br>
<br>
<br>

<!-- create table view button and search button -->
<div class="dbview">
<form class="dbpage" action="dbview.php" method="post">
<button class= "viewBtn"type="submit">View All</button>

</form>

<br>
<br>
<br>

<form action="dbsearch.php" method="post">
    <div class="searchBtn">
        <input type="text" name="search" id="search" />
        <button type="submit">Search</button>
    </div>
      </form>
</div>
</body>
</html>
