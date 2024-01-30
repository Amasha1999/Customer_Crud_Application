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
<?php
  if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
    echo "<div class='alert alert-success'> $msg
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
  }
?>

  
    <a href="add_new.php" class="btn btn-dark mb-3">Add New </a>
    
    <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "db_conn.php";
    $sql = "SELECT * FROM `crud`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
       <tr>
                  <td> <?php echo $row['id']?> </td>
                  <td> <?php echo $row['first_name']?> </td>
                  <td> <?php echo $row['last_name']?> </td>
                  <td> <?php echo $row['email']?> </td>
                  <td> <?php echo $row['gender']?> </td>

                  
                    
                    <td>
                      <a href="edit.php?id=<?php echo $row['id'] ?>"
                         class="btn btn-success btn-sm">Edit</a>

                         <a href="delete.php?id=<?php echo $row['id'] ?>"
                        class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    
        </tr>

      <?php
    }
    ?>
  </tbody>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script>
</body>
</html>
