<?php
//belajar session

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'john' && $password == 'password') {
        $_SESSION['username'] == $username;
        header('Location: /view/page.php');
    } else {
        echo 'incorrect login';
    };

}

?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label for='username'>Username: </label>
    <input type="text" name='username'/>
</div>
<div>
    <label for='password'>Password: </label>
    <input type='text' name='password'/>
</div>
<input type='submit' value="Button" name='submit'/>
</form>