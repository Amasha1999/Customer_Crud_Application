<?php
include "db_conn.php";

if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `crud`(`first_name`, `last_name`, `email`, `gender`) 
    VALUES ('$first_name','$last_name','$email','$gender')";
    
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=New record created successfully");
    } else {
        echo "Failed: "  . mysqli_error($conn);
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title> 𝐂𝐮𝐬𝐭𝐨𝐦𝐞𝐫 𝐂𝐫𝐮𝐝 𝐀𝐩𝐩𝐥𝐢𝐜𝐚𝐭𝐢𝐨𝐧</title>
</head>
<body>
<nav class="navbar navbar-light justify-content-center fs=3 mb-5" 
    style="background-color:#ECB2CD; font-size: 2.2rem; ">
    𝐂𝐮𝐬𝐭𝐨𝐦𝐞𝐫 𝐂𝐫𝐮𝐝 𝐀𝐩𝐩𝐥𝐢𝐜𝐚𝐭𝐢𝐨𝐧
</nav>
<div class="container">
    <div class="text-center mb-4">
        <h3>𝐀𝐝𝐝 𝐍𝐞𝐰 𝐂𝐮𝐬𝐭𝐨𝐦𝐞𝐫 </h3>
        <p class="text-muted"> Complete the form below to add a new user </p>
    </div>

    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="first_name" placeholder="John" required>
             </div>   

        </div>
        

        <div class="mb-3">
        <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="last_name" placeholder="Roman" required>

        </div>


        <div class="mb-3">
        <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email" placeholder="name@example.com" required>

        </div>

        <div class="form-group mb">
            <label>Gender</label>&nbsp;
            <input type="radio" class="form-check-input" name="gender" id="male" value="">
            <label for="male" class="form-input-label">Male </label>&nbsp;

            <input type="radio" class="form-check-input" name="gender" id="female" value="">
            <label for="female" class="form-input-label">Female </label>
        </div>

        <div>
            <button type="submit" class="btn btn-success" name="submit">Save </button>

            <a href="index.php" class="btn btn-danger"> Cancel</a>
        </div>

        
        </form>
    </div>

</div>

  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.
bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
crossorigin="anonymous"></script>
</body>
</html>