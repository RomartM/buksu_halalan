<?php
    if ($_SERVER["REQUEST_METHOD"]=="GET"){
        $request_page_name = $_GET["page"];
?>
<html lang="en" >
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/<?php echo $request_page_name;?>.css">
    <link rel="stylesheet" href="assets/css/lib/materialize.min.css">
    <link rel="stylesheet" href="assets/icon/icon.css">
</head>
<body class="bh-theme">
<?php
    include "templates/". $request_page_name .".php";
?>
<script src="assets/js/lib/jquery-3.3.1.min.js"></script>
<script src="assets/js/lib/materialize.min.js"></script>
<script src="assets/js/<?php echo $request_page_name;?>.js"></script>
</body>
</html>
<?php } ?>

