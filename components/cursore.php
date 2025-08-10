<?php
$welcome_title = $row['welcome_title'];
$welcome_note = $row['welcome_note'];
$welcome_image = $row['welcome_image'];

?>
<!-- sql command -->



<!-- https://www.gallerywallsmadeeasy.com/cdn/shop/collections/Gallery-Walls-Made-Easy-Travel_1400x.jpg?v=1654616583 -->

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