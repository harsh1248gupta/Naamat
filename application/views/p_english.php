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

    <link rel="stylesheet" href="<?php echo base_url('/assets/css/pptxjs.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('/assets/css/nv.d3.min.css') ?>">

<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery-1.11.3.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/jszip.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/filereader.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/d3.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/nv.d3.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/pptxjs.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/assets/js/divs2slides.js') ?>"></script>

<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.fullscreen-min.js') ?>"></script>

<script type="text/javascript">
    $(function() {
		var oldWidth, oldMargin ,isFullscreenMode=false;
		$("#fullscreen-btn").on("click", function(){
			 			
			if(!isFullscreenMode){
				oldWidth = $("#result .slide").css("width");
				oldMargin = $("#result .slide").css("margin");
				$("#result .slide").css({
					"width": "99%",
					"margin": "0 auto"
				})
				$("#result").toggleFullScreen();
				isFullscreenMode = true;
			}else{
				$("#result .slide").css({
					"width": oldWidth,
					"margin": oldMargin
				})
				$("#result").toggleFullScreen();
				isFullscreenMode = false;
			}		
		});
		$(document).bind("fullscreenchange", function() {
			if(!$(document).fullScreen()){
				$("#result .slide").css({
					"width": oldWidth,
  					"margin": oldMargin
				})
			}
		});
    });
</script>
<style>
	html, body { margin: 0; padding: 0; }
	#warper { margin-right: auto; margin-left: auto; width: 900px; }
</style>
</head>
</head>
<body  >
<div class="container">
    <div class="row">
        <?php $i=0  ; foreach($result as $data) {; ?>
      <div class="col-sm-3">
        <div class="card" style="margin-top: 2rem;">
          <div class="card-body">
            <h5 class="card-title"><?php print_r($result[$i]) ?></h5>
            <a href="<?php echo base_url('Admin/ppthtml') ?>" class="btn btn-primary" >Play</a>
          </div>
        </div>
      </div>
      <?php $i++;} ?>
    </div>
</div>


<script>
		$("#uploadFileInput").pptxToHtml({
			pptxFileUrl:"",
			fileInputId: "uploadFileInput",
	slideMode: false,
	keyBoardShortCut: false,
	slideModeConfig: {  //on slide mode (slideMode: true)
	    first: 1, 
	    nav: false, /** true,false : show or not nav buttons*/
	    navTxtColor: "white", /** color */
	    navNextTxt:"&#8250;", //">"
	    navPrevTxt: "&#8249;", //"<"
	    showPlayPauseBtn: false,/** true,false */
	    keyBoardShortCut: false, /** true,false */
	    showSlideNum: false, /** true,false */
	    showTotalSlideNum: false, /** true,false */
	    autoSlide: false, /** false or seconds (the pause time between slides) , F8 to active(keyBoardShortCut: true) */
	    randomAutoSlide: false, /** true,false ,autoSlide:true */ 
	    loop: false,  /** true,false */
	    background: "black", /** false or color*/
	    transition: "default", /** transition type: "slid","fade","default","random" , to show transition efects :transitionTime > 0.5 */
	    transitionTime: 1 /** transition time in seconds */
	}
});
</script>

</body>
</html> 