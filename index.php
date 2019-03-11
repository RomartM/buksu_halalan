<?php
    if ($_SERVER["REQUEST_METHOD"]=="GET"){
        $request_page_name = $_GET["page"];
?>
<html lang="en" >
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/<?php echo $request_page_name;?>.css">
</head>
<body>
<?php
    include "templates/". $request_page_name .".php";
?>
<script src="assets/js/common.js"></script>
<script src="assets/js/<?php echo $request_page_name;?>.js"></script>
</body>
</html>
<?php } ?>

