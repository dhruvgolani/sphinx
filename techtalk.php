<?php
include("config.php");
$db= new Database();
?>
<!DOCTYPE html>

<html class="skrollr skrollr-desktop">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Sphinx'19</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



<link rel="icon" type="image/png" href="images/favicon.png">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/parsley.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="css/main.css">
<link href="css/css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<link href="css/ticker-style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
</head>
<body style="overflow:hidden;">
<script type="text/javascript" src="js/popper.js" charset="utf-8"></script>
<script type="text/javascript" src="js/bootstrap.js" charset="utf-8"></script>


<!-- END WAYBACK TOOLBAR INSERT -->

<script>
$(window).bind("load", function() {
	//alert('hello');
  	$('#overlay').css({'left':'110%', 'transition':'all 1s ease-in-out'}, 2000);

});
</script>
<div id="overlay" style="width:100%;">
	<div class="ppp1" >
		 <div class="ppp2"></div>
		 <div class="ppp3"></div>
	</div>
</div>

<style>
.contentbox_pwr {
width:65%; height:20%; padding-left:10px; margin:0 auto;
}
.title_img2{
	position:absolute; width:12%; bottom:260px; right:12%;
}
.title_img{
	position:absolute; width:18%; top:150px; left:42%;
}

</style>

<?php
	include('header.php');
?>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/techtalk.png" class="title_img">
  <section class="contentbox_pwr" style="">
    <div class="about_box_mainwrp" style="width:100%;">
        <div class="about_text_wrp" style="width:100%;">
          <p>SPHINX'19 presents to you the 3<sup>rd</sup> edition of TECHTALK, A course of events that
showcase some of the most prominent personas across India belonging to a range
of diverse field. Connecting these minds to the young and dynamic audience present
at the fest, the series has been continuously striving to provide an opportunity to live
one’s dream of interacting with the best of every discipline.
With a lineup of some of best orators, dignified personalities in the field of
technology, SPHINX'19 provides you once in a lifetime opportunity to savour their
rich experience and profound knowledge.
So gear up and do not miss one of the most awaited events of SPHINX'19.</p>
        </div>
        <div class="about_text_wrp">

        </div>

    </div>
  </section>


</div>
<?php
					include('footer.php');
				?>
<script src="js/skrollr.min.js"></script>
<script src="js/jquery.ticker.js" type="text/javascript"></script>
<script type="text/javascript" src="js/skrollr.menu.js"></script>
<script type="text/javascript">
        var x = screen.width;
        var y = window.innerWidth;
        var z = window.devicePixelRatio;
        var phyWidth = x;

        if(phyWidth > 30){

        setTimeout(function() {
        var s = skrollr.init({
			forceHeight: false

        });


        skrollr.menu.init(s, {
            change: function(hash, top) {
                }
            });
        }, 500);
         $(window).load(function(){
                $('#loader').delay(2000).fadeOut();

        });
    }
    else{
         $('#mob_text').append("Use your device in landscape mode for better experience");
         $(window).load(function(){
                $('#loader').delay(400).fadeOut();

        });
        $('#slides').css("display","none");
        $('.topnav').css("display","none");
        $('.mobile').show();
    }

        $(window).resize(function(){
        var x = screen.width;
        var y = window.innerWidth;
        var z = window.devicePixelRatio;
        var w = $(window).width();
        var phyWidth = w;
        console.log(x);
        console.log(y);
        console.log(z);
        console.log(w);
        console.log(phyWidth);
        if(phyWidth > 450){

        setTimeout(function() {
        var s = skrollr.init({

        });


        skrollr.menu.init(s, {
            change: function(hash, top) {
                console.log(hash, top);
                }
            });
        }, 500);
        $('#slides').css("display","block");
        $('.topnav').css("display","block");
        $('.mobile').hide();
         $(window).load(function(){
                /*$('#loader').delay(350).fadeOut();*/
        });

    }
    else{
         $('#mob_text').append("Use your device in landscape mode for better experience");
         $(window).load(function(){
               /* $('#loader').delay(400).fadeOut();*/

        });
        $('#slides').css("display","none");
        $('.topnav').css("display","none");
        $('.bottomnav').css("transform","translate(0,0)");
        $('.mobile').show();
    }
    });
    </script>
<script type="text/javascript">
        $(function () {
  $('#js-news').ticker();
  });
    </script>
</body>
</html>
