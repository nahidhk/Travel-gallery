


 

<footer class="footer">
    <div class="mdflex around">
        <div style="text-align: center;">
            <span class="logo"><?php echo $row['short_name'] ?></span>
            <p>
                This is a travel gallery website showcasing beautiful destinations and travel experiences. Explore our
                gallery to find inspiration for your next adventure.

            </p>
        </div>
        <div>
            <div>
                <blockquote>
                    <div class="flex row">
                        <div class="callBtn">
                            <span class="iconS">
                                <i class="fa-solid fa-phone"></i>
                            </span>
                            <span class="string">
                                <?php echo $row['phone'] ?>
                            </span>
                        </div>
                        <div class="callBtn">
                            <span class="iconS">
                               <i class="fa-solid fa-envelope"></i>
                            </span>
                            <span class="string">
                                <?php echo $row['email'] ?>
                            </span>
                        </div>
                        <div class="callBtn">
                            <span class="iconS">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <span class="string">
                                <?php echo $row['location'] ?>
                            </span>
                        </div>
                    </div>

                </blockquote>
            </div>
        </div>
    </div>
    <p class="textCenter">Copyright&copy; <?php echo date("Y"); ?> <?php echo $row['site_name']; ?>. All rights
        reserved.</p>
</footer>