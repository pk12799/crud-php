<?php
include_once 'con.php';
if(isset($_POST['submit'])){
   
}


?>

<html>





<head>
    <title> signin form</title>
</head>
<body>
    <div>
        <h1>signin form </h1>
    </div>

    <form action="POST">

        <label for="username">username</label>
        <input type="text" name="username" required >
</br>
        <label for="password">password</label>
        <input type="password" name="password" required >

</br>
        <button type="submit" name="submit">submit</button>
    </form>
</body>

</html>