<?php

if(isset($_POST["submit"])) {
    echo $_POST['name'];
    echo $_POST['age'];
}

?>

<a href="<?php echo $_SERVER['PHP_SELF'];?>?
name=Bro&age=2">Click Me</a>
<!-- btw konsep ini bisa digunakan dalam membuat komentar -->
<!-- lebih baik menggunakan method post karena lebih aman -->
<img src="<?php 
echo $_POST['img'];?>" />
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