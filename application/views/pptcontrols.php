<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPT Controller</title>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
</head>
<body style="overflow:hidden;box-sizing:border-box;margin:0;padding:0;background-position:center" >

<img src="<?php echo base_url('/assets/img/background.jpg') ?>" alt="background" style="width:100%; height:100%">

<div class="row" style="display: flex; flex-direction: row; margin-top:-350px;">
    <div class="col-lg-4" align="right">
        <a href="<?php echo base_url('Admin/')?>" align="center" >
        <h5 align="center" style="position: absolute; margin-top:95px;margin-left:320px;color:white;font-family: 'Open Sans', sans-serif; "><!-- back -->חזור</h5>
            <img src="<?php echo base_url('/assets/img/play.png')?>" alt="" style="height: 200px;width:200px;">
        </a>
    </div>
    <div class="col-lg-4" align="center">
        <a href="<?php echo base_url('Admin/')?>" align="center">
        <h5 align="center" style="position: absolute; margin-top:95px;margin-left:190px;color:white;font-family: 'Open Sans', sans-serif; "><!-- vote -->הַצבָּעָה</h5>
            <img src="<?php echo base_url('/assets/img/vote1.png')?>" alt="" style="height: 200px;width:200px;">
        </a>
    </div>
    <div class="col-lg-4" align="left">
        <a href="<?php echo base_url('Admin/')?>" align="center">
        <h5 align="center" style="position: absolute; margin-top:95px;margin-left:85px;color:white;font-family: 'Open Sans', sans-serif; "><!-- next -->הַבָּא</h5>
            <img src="<?php echo base_url('/assets/img/play1.png')?>" alt="" style="height: 200px;width:200px;">
        </a>
    </div>
</div>
</body>
</html> 