<?php include 'con.php' ?>
<?php
if(isset($_POST["submit"])){
    if(!empty($_POST['username'])){
        $username = $_POST['username'];
    
    }
    else{
        die('empty');
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (username,email,password) values('$username','$email', '$password')";
    $query = mysqli_query($con,$sql) or trigger_error("Query not running".mysqli_error($con),E_USER_ERROR);
    if($query){
        echo 'resistred';
        header('Location:index.php');
    }else{
        echo 'not registered'.$sql;
        header('Location:index.php');
    }
}
?>
<html>
    <head>
        <title>home </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <style>
        .tr{
            padding: 1rem;
            margin:1.5rem;
        }
    </style>
<body>
    <div>
        <h1 class="container center">index </h1>
    </div>
    <div class="container form-group">
        <form method='POST' >
            <h1></a> </h1>
            <label for='username'>username</label>
            <input type="text" class="form-control input-group" name="username" required></br>
            <label for='email' >email </label>
            <input for='email' class="form-control" name='email' pattern = "^\S+@\S+$" required></br>
            <label for="password">password</label>
            <input type="password" class="form-control" name="password" required></br>
            <button type="submit" name="submit">submit</button>
        </form>
    </div>
    <div class="container"> 
        <h1 class="justify-content-center p-0 m-0">dispaly data</h1>
    <table class="table">
        <thead>
  <tr class="">
      <th scope="col">id</th>
    <th scope="col">username</th>
    <th scope="col">email</th>
    <th scope="col">password</th>
    <th scope="col">action</th>
  </tr>
        </thead>
</br>
  <?php
  $sql = "select * from users";
  $result = mysqli_query($con,$sql);
  while($row = mysqli_fetch_assoc($result)){
  echo "
  <tr>
  <td scope='row'> " .$row['id'] . "</td>
    <td scope='row'> " .$row['username'] . "</td>
    <td>" .$row['email'] ."</td>
    <td> " .$row['password'] ."</td>
    <td><a  href='update.php?id=".$row['id'] ."'>update</a> /
    <a href='delete.php?id=".$row['id']. "' >delete</a>
    </td>
  </tr>
  ";
}
  ?>
</table> 
    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
