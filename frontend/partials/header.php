<?php  include_once($_SERVER['DOCUMENT_ROOT'].'/config.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $css.'bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>School Project 1</title>
</head>
<body class="">
    <div class="row bg-info">
        <div class="col-2 p-3 ml-3">
            <img src="<?php echo $img.'BAF_Logo.png'; ?>" class="w-60 "  style="height: 100px;"/>
        </div>

        <div class="col-7 mt-2">
            <h1 style="text-align: center">KARPASHA GOVT PRIMARY SCHOOL</h1>
            <h3 style="text-align: center"> Karpasha, Nikli, Kishoregonj. </h3>
        </div>

        <div class="col-3 mt-2 mb-2 lh-1">
        <p>EIIN: 100076</p>
        <p><i class="bi bi-telephone-forward-fill"></i> karpasha111@gmail.com </p>
        <p><i class="bi bi-telephone-forward"></i>  01788832159</p>
        <span class="bg-dark text-white">Admision Form</span>
        <span  class="bg-dark text-white">Login</span>
        </div>

        

    </div>


    <script src="<?php echo $js.'popper.min.js';?>" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>