<?php
include("config.php");
$db= new Database();
?>
<!DOCTYPE html>

<html class="skrollr skrollr-desktop">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Sphinx 2.0 | Sign In, Shine Out</title>
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
.ex_items{
	font-size:20px;
	font-weight:bold;
}
.ex_items_content{
	font-size:12px;
	font-weight:normal;
}
.contentbox_pwr {
    border-radius: 40px 0px 0px 0;
	padding-right:10px;
	width:55%; height:40%; padding-left:10px; left:25px; position:absolute; top:245px;
}

.title_img2{
position:absolute; width:220px; top:300px; margin:0 auto; right:250px;
}
.title_img{
	position:absolute; width:18%; top:145px; left:20%;
}
</style>

<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/exhibtion2.png" class="title_img2">
<img src="images/exhibitions.png" class="title_img">
   <section class="contentbox_pwr" style="">
    <div class="about_box_mainwrp" style="width:100%;">
        <div class="about_text_wrp" style="width:100%;">
          <p>The exhibition will display various research projects and development activities going on in the various departments of the institute which are sure to leave you exhilarated. The exhibition will be a technical extravaganza which will portray the technical excellence of MNIT Jaipur and at the same time depict the staggering feats of the technical community. It will also exhibit the latest and coolest technology on the blocks some of which are:</p>
        </div>
		<div class="ex_items">
			1. GOOGLE LENS
			<p class="ex_items_content">
			Google Lens is an app announced by Google during Google I/O 2017, designed to bringing up relevant information using visual analysis. For example, when pointing the device's camera at a Wi-Fi label containing the network name and password, it will automatically connect to the Wi-Fi source that has been scanned; when directing the camera at an object, Lens will attempt to identify the object and show relevant search results and information. Lens is also integrated with the Google Photos and Google Assistant apps. Lens uses more advanced deep learning routines; artificial neural networks are used to detect and identify objects, landmarks and to improve OCR accuracy.
			</p>
		</div>
		<div class="ex_items">
			2. 3D Printer
			<p class="ex_items_content">
			3D printing, also known as additive manufacturing (AM), refers to processes used to create a three-dimensional object in which layers of material are formed under computer control to create an object.Objects can be of almost any shape or geometry and typically are produced using digital model data from a 3D model or another electronic data source such as an Additive Manufacturing File(AMF) file. Stereolithography (STL) is one of the most common file types that is used for 3D Printing. Thus, unlike material removed from a stock in the conventional machining process, 3D printing or AM builds a three-dimensional object from computer-aided design (CAD) model or AMF file by successively adding material layer by layer.The term "3D printing" originally referred to a process that deposits a binder material onto a powder bed with inkjet printer-heads layer by layer. More recently, the term is being used in popular vernacular to encompass a wider variety of additive manufacturing techniques. United States and global technical standards use the official term additive manufacturing for this broader sense.
			</p>
		</div>
		<div class="ex_items">
			3. Quadcopter
			<p class="ex_items_content">
			A quadcopter, also called a quadrotor helicopter or quadrotor is a multirotor helicopter that is lifted and propelled by four rotors. Quadcopters differ from conventional helicopters, which use rotors that are able to vary the pitch of their blades dynamically as they move around the rotor hub. Quadcopters are classified as rotorcraft, as opposed to fixed wing aircraft because their lift is generated by a set of rotors (vertically oriented propellers).These vehicles were among the first successful heavier-than- air vertical take-off and landing(VTOL) vehicles.
			</p>
		</div>
		<div class="ex_items">
			4. Virtual reality
			<p class="ex_items_content">
			Virtual reality (VR) is a computer technology that uses virtual reality headsets or
multi-projected environments, sometimes in combination with physical environments or props, to
generate realistic images, sounds and other sensations that simulate a user&#39;s physical presence in a
virtual or imaginary environment. A person using virtual reality equipment is able to &quot;look around&quot; the
artificial world, and with high quality VR move around in it and interact with virtual features or items.

The effect is commonly created by VR headsets consisting of a head-mounted display with a small
screen in front of the eyes, but can also be created through specially designed rooms with multiple
large screens.VR systems that include transmission of vibrations and other sensations to the user
through a game controller or other devices are known as haptic systems. This tactile information is
generally known as force feedback in medical, video gaming and military training applications.
Virtual reality also refers to remote communication environments which provide a virtual presence of
users with through telepresence and telexistence or the use of a virtual artifact (VA). The immersive
environment can be similar to the real world in order to create a lifelike experience grounded in
reality or sci-fi.
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
