<?php
$server_name='localhost';
$username='root';
$password='';
$database_name='car_responses';

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

// Rest of your code for handling form submission...

// Rest of your code...

if(isset($_POST['save'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $car_types = implode(', ', $_POST['car_type']);  // Correct variable name is $car_types

    //For inserting the values into the MySQL database 
    $sql_query = "INSERT INTO car_responses (name, phone, email, address, car_type)
    VALUES ('$name', '$phone', '$email', '$address', '$car_types')";
    
    if (mysqli_query($conn, $sql_query)) {
        echo "New Details Entry inserted successfully!";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}

?>