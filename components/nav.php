<?php

$x_link         = $row['x_link'] ?? '#';
$instagram_link = $row['instagram_link'] ?? '#';
$youtube_link   = $row['youtube_link'] ?? '#';
$tiktok_link    = $row['tiktok_link'] ?? '#';
$facebook_link  = $row['facebook_link'] ?? '#';
?>

<nav class="nav ">
    <div class="flex around">
        <div class="flex medel">

            <span class="logo pc"><?php echo $row['site_name'] ?></span>
            <span class="logo mobile"><?php echo $row['short_name'] ?></span>
        </div>
        <div id="menu" class="medel  pcFlex">
            <a class="a" href="/">Home</a>
            <a class="a" href="/About">About</a>
            <a class="a" href="/Contact">Contact</a>
        </div>
        <div class="medel">
            <a target="_blank" href="<?= $facebook_link ?>">
                <i class="fa-brands fa-facebook-f icon"></i>
            </a>

            <a target="_blank" href="<?= $x_link ?>">
                <i class="fa-brands fa-x-twitter icon"></i>
            </a>

            <a target="_blank" href="<?= $instagram_link ?>">
                <i class="fa-brands fa-instagram icon"></i>
            </a>

            <a target="_blank" href="<?= $youtube_link ?>">
                <i class="fa-brands fa-youtube icon"></i>
            </a>

            <a target="_blank" href="<?= $tiktok_link ?>">
                <i class="fa-brands fa-tiktok icon"></i>
            </a>

            &nbsp;&nbsp;

            <i onclick='openDispaly({id: "menu", class: "sideMenu animate__zoomInRight animate__animated flex"});'
                class="mobile fa-solid fa-bars icon menuBtn"></i>
        </div>

</nav>