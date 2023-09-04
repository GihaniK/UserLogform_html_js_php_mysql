<htm>
    <div class="dbsearch">
    <!-- <link rel="stylesheet" href="style.css"> -->
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

echo "<br>";
echo "<br>";
echo "Student Details";

echo "<br>";
echo "<br>";
echo "<br>";
//----------------------

//import search value

$searchNo = $_POST['search'];

//---------------search value and view details


$sqlShow = "SELECT * FROM `student` WHERE `phone_no` = '$searchNo'";

$result = mysqli_query($conn,$sqlShow);

if(mysqli_num_rows($result) > 0){
    echo "<table border = '1'>
    <tr>
        <th> Name </th>
        <th> Email </th>
        <th> Password </th>
        <th> Phone Number </th>
        <th> Student_ID </th>
        <th> Gender </th>
        <th> Language </th>
        <th> Zip Code </th>
        <th> About </th>
    </tr>
    ";

    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['phone_no'] . "</td>";
            echo "<td>" . $row['student_id'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['language'] . "</td>";
            echo "<td>" . $row['zip_code'] . "</td>";
            echo "<td>" . $row['about'] . "</td>";
            echo "</tr>";
    }
    echo "</table>";
}
else{
    echo ("No results Found !!");
}

mysqli_close($conn);




?>
</div>
</body>
</html>