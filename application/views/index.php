<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>PPTXjs - Meshesha</title>

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
<body>
	<div id="warper">
		<input id="uploadFileInput" type="file" />
		<br><br>
		<div id="container">
			<br>
			<div  id="result"></div>cmd
		</div>
	</div>
<script>
	$("#result").pptxToHtml({
		pptxFileUrl: "",
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
