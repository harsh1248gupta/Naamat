<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select language for presentation</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
</head>
<body style="overflow:hidden;box-sizing:border-box;margin:0;padding:0;background-position:center" >

<img src="<?php echo base_url('/assets/img/background.jpg') ?>" alt="background" style="width:100%; height:100%">
<div class="row" style="display: flex; flex-direction: row; margin-top:-350px;margin-left:300px;">
    <div class="col-lg-6">
        <a href="<?php echo base_url('Admin/p_english')?>" align="center">
        <h5 align="center" style="position: absolute; margin-top:55px;margin-left:50px;color:white;font-family: 'Open Sans', sans-serif;"><!-- English -->אנגלית
                </h5>
            <img src="<?php echo base_url('/assets/img/2.png')?>" alt="" style="height: 150px;width:150px;">
        </a>
    </div>
    <div class="col-lg-6">
        <a href="<?php echo base_url('Admin/p_hebrew')?>" align="center">
        <h5 align="center" style="position: absolute; margin-top:55px;margin-left:50px;color:white;font-family: 'Open Sans', sans-serif;"><!-- Hebrew -->עִברִית
                </h5>
            <img src="<?php echo base_url('/assets/img/3.png')?>" alt="" style="height: 150px;width:150px;">
        </a>
    </div>
</div>
</body>
</html>