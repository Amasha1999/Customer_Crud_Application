<?php
include "db_conn.php";
$id = $_GET['id'];

if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "UPDATE `crud` SET `first_name`='$first_name', `last_name`='$last_name', `email`='$email', `gender`='$gender' WHERE id=$id";
    
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg= Data Updated successfully");
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
        <h3>𝐄𝐝𝐢𝐭 𝐔𝐬𝐞𝐫 𝐈𝐧𝐟𝐨𝐫𝐦𝐚𝐭𝐢𝐨𝐧 </h3>
        <p class="text-muted"> Click update after changing any information </p>
    </div>

    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM `crud` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);



    ?>

    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="first_name" value="<?php echo $row ['first_name'] ?>">
             </div>   

        </div>
        

        <div class="mb-3">
        <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="last_name" value="<?php echo $row ['last_name'] ?>">

        </div>


        <div class="mb-3">
        <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $row ['email'] ?>">

        </div>

        <div class="form-group mb-3" >
            <label>Gender</label>&nbsp;
            <input type="radio" class="form-check-input" name="gender" id="male" value="Male" <?php echo ($row['gender']=='male')? "checked":"";  ?>>
            <label for="male" class="form-input-label"> Male </label>&nbsp;

            <input type="radio" class="form-check-input" name="gender" id="female" value="Female" <?php echo ($row['gender']=='female')? "checked":"";  ?>>
            <label for="female" class="form-input-label"> Female </label>&nbsp;
        </div>


        <div class="mb-3">
                <button type="submit" class="btn btn-success" name="submit"> Update </button>
                <a href="index.php" class="btn btn-danger ms-2"> Cancel</a>
        </div>


        
        </form>
    </div>

</div>

  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.
bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
crossorigin="anonymous"></script>
</body>
</html>