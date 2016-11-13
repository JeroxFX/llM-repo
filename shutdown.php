<?php


if(isset($_POST['linux_login'])) {
$linux_username = $_POST['username'];
$linux_password = $_POST['password'];
    
    
exec('shutdown now');
}

exec('sudo -u Monitor "shutdown now"');
?>


<html>


<body>
    
    <form action ="shutdown.php" method="post" enctype="multipart/form-data">
    <input placeholder="Username" name="username" type="text" autofocus required="required">
    <input placeholder="Password" name="password" type="password" required="required">
    <input name="linux_login" type="submit" class="btn btn-primary btn-block btn-large" value="Start Controlling">
</form>
    
    </body>
</html>
