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
<body  >
<div class="container">
    <div class="row">
        <?php $i=0  ; foreach($result as $data) {; ?>
      <div class="col-sm-3">
        <div class="card" style="margin-top: 2rem;">
          <div class="card-body">
            <h5 class="card-title"><?php print_r($result[$i]) ?></h5>
            <a href="<?php echo(base_url('uploads/movie/international//').$result[$i]) ?>" class="btn btn-primary">Play</a>
          </div>
        </div>
      </div>
      <?php $i++;} ?>
    </div>
</div>
</body>
</html> 