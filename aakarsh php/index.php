<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Update and Delete</title>
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">
      <h1>CRUD Operation</h1>
    </a>
  </div>
</nav>
	<div class="container">
  <?php
    if(isset($_GET['msg'])){
      $msg = $_GET['msg'];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      '.$msg.'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
  ?>
  <button><a href="submit.php" class="btn btn-dark">Add New<a></button>
  <button><a href="home.php" class="btn btn-dark">Home<a></button>
  <br>
  <br>
		<table class="table table-hover text-center table-border">
      <thead class="table-dark">
        <tr>
          <th scope="col">id</th>
          <th scope="col">name</th>
          <th scope="col">email</th>
          <th scope="col">date</th>
					<th scope="col">room</th>
          <th scope="col">Contact</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include "conn.php";
          $sql="SELECT * FROM `hotel`";
          $result = mysqli_query($conn1,$sql);
          while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
              <td><?php echo $row['id'] ?></td>
              <td><?php echo $row['name'] ?></td>
              <td><?php echo $row['email'] ?></td>
              <td><?php echo $row['date'] ?></td>
              <td><?php echo $row['room'] ?></td>
              <td><?php echo $row['Contact'] ?></td>
              <td>
                <a href="edit.php?id=<?php echo $row['id']  ?>" class="link-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0         0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.        5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                </svg></a>

                <a href="delete.php?id=<?php echo $row['id']  ?>" class="link-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi   bi-trash-fill"         viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1         1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.        5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                </svg>
              </td>
            </tr>
            <?php
          }
        ?>
      </tbody>
    </table>
	</div>
</body>
</html> 