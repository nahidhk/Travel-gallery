<?php
$welcome_title = "Welcome to MIZAN TRAVEL GALLERY .: MTG Website";
$welcome_note = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi dicta non neque autem, eligendi voluptas excepturi vitae vero voluptatum ipsum consequatur id,";
$welcome_image = "https://www.gallerywallsmadeeasy.com/cdn/shop/collections/Gallery-Walls-Made-Easy-Travel_1400x.jpg?v=1654616583";

?>




<div style="background-image: url('<?php echo $welcome_image ?>');" class="content">
    <div class="txbox">
        <h1 class="modeltext"><?php echo $welcome_title ?></h1>

        <p class="text">
            <?php echo $welcome_note ?>
        </p>
        <br><br><br>
        <button onclick="location.href='Gallery'" class="button">
           <span> View Gallery </span>
          &nbsp;
            <i class="fa-solid fa-arrow-right"></i>
        </button>

    </div>
</div>