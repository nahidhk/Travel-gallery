<?php
$title = "Welcome to My Travel Gallery";
?>


<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <!-- Install Nav -->
    <?php include 'components/nav.php'; ?>




    <!--  -->

   
<!-- JavaScript -->
 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
<script>
  const timestamp = new Date().getTime();

  const link = document.createElement("link");
  link.rel = "stylesheet";
  link.href = "/src/css/style.css?v=" + timestamp;
  document.head.appendChild(link);

  const script = document.createElement("script");
  script.src = "/src/javascript/script.js?v=" + timestamp;
  document.body.appendChild(script);
</script>

</body>
</html>