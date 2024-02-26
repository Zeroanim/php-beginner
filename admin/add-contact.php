<?php
include("./includes/header.php");
include("./includes/navbar.php");
?>
<?php

include("./dbcon.php");

if (isset($_POST['save'])) {
    $fm = $_POST['fm'];
    $lm = $_POST['lm'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $postData = [
        'fnm' => $fm,
        'lnm' => $lm,
        'email' => $email,
        'number' => $number,
    ];

    $ref_table = "main";
    $postRef_result = $database->getReference($ref_table)->push($postData);
    $postKey = $postRef_result->getKey();   

    if ($postKey) {
        $_SESSION['status'] = "success";
        header("Location: /");
    } else {
        $_SESSION['status'] = "failed add contact";
        header("Location: /");
    }
};
?>

<?php
echo $_POST($postData);
?>
<div class="p-10 m-auto space-y-8 justify-center items-center">
    <div class="m max-w-2xl grid gap-4 text-center  md:flex glass p-5 m-auto justify-center items-center">
        <h4 class="text-[16px] md:text-xl text-slate-200 mx-auto md:mr-auto md:ml-2">Contact Anime</h4>
        <a href="/" class="text-xs md:text-[17px] rounded p-2 px-3 md:p-3 md:px-4 bg-zinc-800 text-slate-400 mx-auto md:ml-auto md:mr-2">Back</a>
    </div>
<form class="max-w-sm mx-auto" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div class="mb-5">
    <label for="fm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
    <input type="text" name="fm" id="fm" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <div class="mb-5">
    <label for="lm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
    <input type="text" name="lm" id="lm" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Addres</label>
    <input type="text" name="email" id="email" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <div class="mb-5">
    <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
    <input name="number" type="text" id="number" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
  </div>
  <button name="save" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

</div>

<?php
include("./includes/footer.php");
?>