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
<script>

	$(function(){
		$('.regist-popshow').click(function(){
			$('.modalevent').modal('hide');
			$('#eventregister').modal('show');
		});
	});
</script>

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
<?php
	include('header.php');
?>

<style>
.contentbox_pwr {
	width:55%; height:40%; padding-left:10px; left:25px; position:absolute; top:260px;
}
.title_img2{
	position:absolute; width:350px; top:280px; margin:0 auto; right:140px;
}
.title_img{
	position:absolute; width:22%; top:160px; left:20%;
}
</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/aboutus2.png" class="title_img2">
<img src="images/aboutus (1).png" class="title_img">
   <section class="contentbox_pwr" style="">
    <div class="about_box_mainwrp" style="width:100%;">
        <div class="about_text_wrp" style="width:100%;">
          <p>Malaviya National Institute of Technology, Jaipur proudly presents its second edition of Annual Technical Festival “SPHINX 2.0”, from the 27th of September to the 29th of September, 2018 which aspires to be the Largest Techno-fest in Rajasthan. This 3-day long convergence of unprecedented technical events and powerful tech-talks, delivered by leading Industry experts and successful entrepreneurs is expected to have a footfall of 12,000, paving down its own path to become Rajasthan’s biggest techno-youth destina.</p>
	<center><img src="images/director.png" style="width:150px; float:left; display:inline-block; margin-right:20px;">
	<div style="font-size:15px; font-weight:bold; margin-top:20px;">Director's Address</div></center>
		  <p><span style="">MNIT Jaipur with a vision of imparting technical education and conducting research to meet the challenges of technological development. It strives to develop individuals who are capable of making a difference in the society. The institute has upheld its vision in its journey towards excellence in academic achievements, research and innovations. The responsibility of driving the nation forward rests upon young minds, who with their knowledge and scientific temper will become drivers of change. With the underlying spirit of promoting technology and innovation, MNIT brings its second edition of Annual Techfest - SPHINX 2.0, which aspires to provide a platform for students to develop and showcase their technical prowess. The fest will host a variety of events that include competitions, workshops as well as lectures that will hone the skills of students and put to test their knowledge and creative thinking. I wish good luck to the organisers and the participants.
</span>
</p>
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
