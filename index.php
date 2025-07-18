<?php
include 'sql/config.php'; 

$id = 1;

$sql = "SELECT * FROM setting WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc(); 

$stmt->close();
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['site_title'] ?></title>
</head>

<body>
    <!-- Install Nav -->
    <?php include 'components/nav.php'; ?>

<!-- Cursore -->
 <?php include 'components/cursore.php' ?>


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