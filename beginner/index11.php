<?php 

//belajar cookies


setcookie("age","", time() + 8000 * 20);
setcookie("name","", time() + 8000 * 20);
setcookie("img","", time() + 8000 * 20);


?>
<h4><?php echo $_POST["name"];?></h4>
<h4><?php echo $_POST["age"];?></h4>
<img src="<?php echo $_POST["img"] ;?>" />
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label for='name'>Name: </label>
    <input type="text" name='name'/>
</div>
<div>
    <label for='age'>Age: </label>
    <input type='text' name='age'/>
</div>
<div>
    <label for='img'>Img: </label>
    <input type='text' name='img'/>
</div>
<input type='submit' value="Button" name='submit'/>
</form>