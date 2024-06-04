
<!-- 
CREATE DATABASE Noman;
Use Noman;


CREATE TABLE info(

ID INT PRIMARY KEY NOT NULL auto_increment, 
NAME  VARCHAR(255),
EMAIL VARCHAR(255),
PASS VARCHAR(255),
CONTACT VARCHAR(255)
);


Select * from info;

 -->



 <?php
$server = "localhost";
$username = "root";
$password = "";

// db
$database = "Noman";


$con = mysqli_connect($server, $username, $password, $database);



if (!$con) {
    die("connection is failed" . mysqli_connect_error());
} else {

    echo "success";
}

if (isset($_POST["username"])) {


    $name = $_POST["username"];
    $email = $_POST["useremail"];
    $passward = $_POST["userpassward"];
    $contact = $_POST["usercontact"];

    $sqlinsert = "Insert into info (Name, Email, Pass, Contact)values('$name', '$email', '$passward', '$contact')";

    $res = mysqli_query($con, $sqlinsert);

    if ($res) {
        echo "inserted";
    }
}



?>








<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <div class="container">
        <form method="post" action="lec01.php">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name </label>
                <input type="text" class="form-control" name="username" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">Email </label>
                <input type="email" class="form-control" name="useremail" id="exampleInputEmail2"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="userpassward" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail3" class="form-label">Contact </label>
                <input type="text" class="form-control" name="usercontact" id="exampleInputEmail3"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>

</html>