<?php
session_start();
include("./includes/header.php");
include("./includes/navbar.php");

$img = [
   [
    'img' => 'https://imgs.search.brave.com/fCHYY_jaabtI63lyDKzP3J9g0cIsTb9Pa_OnT3F6MCI/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9jZG4u/d2FsbHBhcGVyc2Fm/YXJpLmNvbS8zLzQ1/L1kxb3Vtbi5qcGc'
    ],
    [
        'img'=> 'https://imgs.search.brave.com/yyfNO_FXlym4EHdnkEFDPmWfAvXEzyQJeNrmKuAQ7es/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9jZG4u/d2FsbHBhcGVyc2Fm/YXJpLmNvbS83Ny8y/MC9mcm50WGguanBn'
    ],
    [
        'img'=> 'https://imgs.search.brave.com/vaY0fftzl-uz7PgMXlLqe13Ul1FLI9DzZXBI6GsRE_o/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9jZG4u/d2FsbHBhcGVyc2Fm/YXJpLmNvbS81NC8y/Mi9aVHFlRnAuanBn'
    ],
    [
        'img'=> 'https://imgs.search.brave.com/6qKxf4wrDSr51z_afSCFiJXF7aIEj3L6faIJThWU2VM/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9jZG4u/d2FsbHBhcGVyc2Fm/YXJpLmNvbS81Ni83/Ny9oUXRFTjAuanBn'
    ],
    [
        'img'=> 'https://imgs.search.brave.com/yljqoiiqGAXWXYd8gXZC1oq-R2QuSX0LPnyLDUCT3wA/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJjYXZlLmNv/bS93cC93cDcwNjIx/MzUuanBn'
    ],
    [
        'img'=> 'https://imgs.search.brave.com/EHlt-lPbScGlha25EzdwadUVDGi9u385DGYa2h6l-HI/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzLzE1LzJj/L2JiLzE1MmNiYmNi/YmU5YTAyZWQ3NTVl/YTlhYTYxMDZiYmIz/LmpwZw'
    ],
    [
        'img' => 'https://imgs.search.brave.com/_MGsl_MtZMHlne5cC721-tCXwyF3f6j9VnGdoJgZfKk/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9jZG4u/d2FsbHBhcGVyc2Fm/YXJpLmNvbS81LzU2/L25SR1Vhdy5qcGc'
    ]
];
?>

<?php
    //$item = file_get_contents("./img.json");
    //$img = json_decode($item);
?>
<div class="carousel carousel-end">
  <div class="carousel-item">
      <?php
      foreach ($img as $img) { ?>
        
        <img class="h-[500px] w-[300px] saturate-0 hover:saturate-100 object-cover object-center" src="
        <?= 
        //$img->img untuk mengambil data langsung yang di json
        //dan yang bawah ini di filr nya langsung
        $img['img'] ?>
        " alt="Drink" />
    <?php
    }
    ?>
  </div> 
</div>

<div class="p-10 m-auto justify-center items-center space-y-6">
    <?php
    if(isset($_SESSION['status']))
    {
        echo " <div role='alert' class='alert max-w-md m-auto alert-success'>
        <svg xmlns='http://www.w3.org/2000/svg' class='stroke-current shrink-0 h-6 w-6' fill='none' viewBox='0 0 24 24'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z' /></svg>
        <span>" .$_SESSION['status']."</span>
        </div>";
        unset($_SESSION["status"]);
    }
    ?>
    <div class="m max-w-2xl grid gap-4 text-center md:flex glass p-5 m-auto justify-center items-center">
        <h4 class="text-[16px] md:text-xl text-slate-200 mx-auto md:mr-auto md:ml-2">Realtime contact Anime</h4>
        <a href="./add-contact.php" class="text-xs md:text-[17px] rounded p-2 px-3 md:p-3 md:px-4 bg-zinc-800 text-slate-400 mx-auto md:ml-auto md:mr-2">Add contact</a>
    </div>

</div>
<?php
include("./includes/footer.php");

?>

