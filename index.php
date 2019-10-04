<?php
include("config.php");
$db= new Database();
?>
<!DOCTYPE html>

<html class="skrollr skrollr-desktop">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Sphinx 2.0 | Sign In, Shine Out</title>
<link rel="icon" type="image/png" href="images/favicon.png">


<link href="css/parsley.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/main.css">

<link href="css/css" rel="stylesheet">

<script src="js/jquery.min.js"></script>
<link href="css/ticker-style.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">

</head>
<body>

<script type="text/javascript" src="js/popper.js" charset="utf-8"></script>
<script type="text/javascript" src="js/bootstrap.js" charset="utf-8"></script>
<script type="text/javascript" src="js/parsley.js" charset="utf-8"></script>
<!-- END WAYBACK TOOLBAR INSERT -->

<script>
$(function(){
	$('.form').parsley();
})

</script>
<script>
$(function(){
	$('.forgetbtn').click(function(){
		$('#loginbox').modal('hide');
		$('#forgetmodal').modal('show');
	});
});
$(function(){
	$('.menuslhowbtn a').click(function(){
		$('.rightsidemenu').toggleClass('righmeShow');
	});
});
$(function(){
	$('.menusbtn').on('click', function(){
		$('.menushowwrp').addClass('topmenuShow');
	});
	$('.menuscloseb').click(function(){
		$('.menushowwrp').removeClass('topmenuShow');
	});
});



</script>
<script>
$(document).ready(function () {
	$(".TxtNumbers").keypress(function (e) {
		var key = e.charCode || e.keyCode || 0;
		// only numbers
		if (key < 48 || key > 58) {
			return false;
		}
	});
});
$( document ).ready(function() {
	$( ".txtOnly" ).keypress(function(e) {
		var key = e.keyCode;
		if (key >= 48 && key <= 57) {
			e.preventDefault();
		}
	});
});

</script>

<script>
$(window).bind("load", function() {
	//alert('hello');
  	$('#overlay').css({'left':'110%', 'transition':'all 3s ease'}, 2000);

});
</script>
<div id="overlay" style="width:100%;">
	<div class="ppp1" >
		 <div class="ppp2"></div>
		 <div class="ppp3"></div>
	</div>
</div>

  <script type="text/javascript">
function myfunc(arg1,arg2,arg3,arg4){

   {
    var el = document.getElementById(arg2);
    window.requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;

    var points = arg1;
    var maxDistance = arg3;

    var getDistance = function(point1, point2) {
        return Math.sqrt(Math.pow(point1.x - point2.x, 2) + Math.pow(point1.y - point2.y, 2));
		}

    var refreshPoints = function() {
        var lines = []
        for (var i = points.length - 1; i >= 0; i--) {
            for (var j = 0, _length = points.length; j < _length; j++) {
                var distance = getDistance(points[j], points[i]);
                if ((points[i].x == points[j].x && points[i].y == points[j].y) || distance > maxDistance)
                    continue;
                var line = document.createElementNS('http://www.w3.org/2000/svg', "line")
                line.setAttribute('x1', points[i].x);
                line.setAttribute('y1', points[i].y);
                line.setAttribute('x2', points[j].x);
                line.setAttribute('y2', points[j].y);
                line.setAttribute("class", "plexus-line");
                line.style.strokeDasharray = distance + " " + distance;
                line.style.strokeDashoffset = distance;
                line.style.transitionDelay = line.style.WebkitTransitionDelay = ((i * 50 % 1500) / 1000) + "s";
                el.appendChild(line);
                lines.push(line);
            };
        };

      var loop = function() {
		  requestAnimationFrame(function() {

            for (var i = lines.length - 1; i >= 0; i--) {
                lines[i].style.strokeDashoffset = 0
            };
        })

       var timer = setTimeout(function() {
          for (var i = lines.length - 1; i >= 0; i--) {
             lines[i].style.strokeDashoffset = lines[i].style.strokeDasharray.split(',')[0];
          };
        }, 2000)
      }


      setTimeout(loop,10);
      if (arg4==false){
        setTimeout(loop,3000);
      }
      if (arg4)
        {inter = setInterval(loop, 4000);}
    }

    refreshPoints()
  }
}


$(document).ready(function(){

 var t1cor=[{"x":0,"y":1.2},
{"x":15.4,"y":1.2},
{"x":43.8,"y":1.2},
{"x":59.2,"y":1.2},
{"x":15.4,"y":28.9},
{"x":43.8,"y":28.9},
{"x":15.4,"y":43.1},
{"x":43.8,"y":43.1},
{"x":0,"y":71.2},
{"x":15.4,"y":71.2},
{"x":43.8,"y":71.2},
{"x":59.2,"y":71.2}];

var e1cor= [{"x":0,"y":1.2},
{"x":0,"y":71.2},
{"x":53.3,"y":71.2},
{"x":53.3,"y":57.5},
{"x":15.3,"y":57.5},
{"x":15.3,"y":42.8},
{"x":48.3,"y":42.8},
{"x":48.3,"y":29.1},
{"x":15.3,"y":29.1},
{"x":15.3,"y":14.9},
{"x":52.8,"y":14.9},
{"x":52.8,"y":1.2}];


var c1cor=[{"x":0,"y":1.2},
{"x":15.4,"y":1.2},
{"x":43.8,"y":1.2},
{"x":59.2,"y":1.2},
{"x":15.4,"y":28.9},
{"x":43.8,"y":28.9},
{"x":15.4,"y":43.1},
{"x":43.8,"y":43.1},
{"x":0,"y":71.2},
{"x":15.4,"y":71.2},
{"x":43.8,"y":71.2},
{"x":59.2,"y":71.2}];

var h1cor=[{"x":0,"y":1.2},
{"x":15.4,"y":1.2},
{"x":43.8,"y":1.2},
{"x":59.2,"y":1.2},
{"x":15.4,"y":28.9},
{"x":43.8,"y":28.9},
{"x":15.4,"y":43.1},
{"x":43.8,"y":43.1},
{"x":0,"y":71.2},
{"x":15.4,"y":71.2},
{"x":43.8,"y":71.2},
{"x":59.2,"y":71.2}];

var n1cor=[{"x":0,"y":1.2},
{"x":15.4,"y":1.2},
{"x":43.8,"y":1.2},
{"x":59.2,"y":1.2},
{"x":15.4,"y":28.9},
{"x":43.8,"y":28.9},
{"x":15.4,"y":43.1},
{"x":43.8,"y":43.1},
{"x":0,"y":71.2},
{"x":15.4,"y":71.2},
{"x":43.8,"y":71.2},
{"x":59.2,"y":71.2}];

var f1cor=[{"x":0,"y":1.2},
{"x":53.3,"y":1.2},
{"x":15.4,"y":15.2},
{"x":53.3,"y":15.2},
{"x":15.4,"y":30.1},
{"x":48.8,"y":30.1},
{"x":15.4,"y":44.1},
{"x":48.8,"y":44.1},
{"x":0,"y":71.2},
{"x":15.4,"y":71.2}];

var s1cor=[{"x":53.3,"y":9.1},
{"x":27.3,"y":0.2},
{"x":2.8,"y":21.5},
{"x":26,"y":42.9},
{"x":40.1,"y":52},
{"x":30,"y":58.6},
{"x":9.1,"y":50.1},
{"x":0,"y":61},
{"x":29.7,"y":72.2},
{"x":55.4,"y":50.3},
{"x":33.2,"y":29.3},
{"x":18.1,"y":20},
{"x":27.1,"y":13.8},
{"x":45.3,"y":20.7}];

 setTimeout(myfunc(t1cor,"plexus1",100,false),
            myfunc(e1cor,"plexus",50,false),
            myfunc(c1cor,"plexus2",55,false),
            myfunc(h1cor,"plexus3",55,false),
            myfunc(f1cor,"plexus4",55,false),
            myfunc(e1cor,"plexus5",50,false),
            myfunc(s1cor,"plexus6",35,false),
            myfunc(t1cor,"plexus7",70,false),
			myfunc(n1cor,"plexus8",55,false),
            100);
  var temps=false;
  $("#t1").mouseenter(function(){
  if (temps==false){
    myfunc( t1cor,"plexus1",100,true );
    temps = true;
  }

  });
 $("#t1").mouseleave(function(){
  // clearTimeout(timer);
  clearInterval(inter);
  temps=false;
  //cancelAnimationFrame(frame);
   $(".plexus-line").remove();

  });

var tempe=false;
  $("#e1").mouseenter(function(){
//  $("#plexus").show();
  if (tempe==false){
    myfunc(e1cor,"plexus",50,true);
    tempe = true;
  }
});

$("#e1").mouseleave(function(){
  // clearTimeout(timer);
  clearInterval(inter);
  tempe=false;
  //cancelAnimationFrame(frame);
   $(".plexus-line").remove();

  });

var tempc=false;
  $("#c1").mouseenter(function(){
//  $("#plexus").show();
  if (tempc==false){
    myfunc( c1cor,"plexus2",55,true);
    tempc = true;
  }
});

$("#c1").mouseleave(function(){
  // clearTimeout(timer);
  clearInterval(inter);
  tempc=false;
  //cancelAnimationFrame(frame);
   $(".plexus-line").remove();

  });


var temph=false;
  $("#h1").mouseenter(function(){
//  $("#plexus").show();
  if (temph==false){
    myfunc( h1cor,"plexus3",55,true);
    temph = true;
  }
});

$("#h1").mouseleave(function(){
  // clearTimeout(timer);
  clearInterval(inter);
  temph=false;
  //cancelAnimationFrame(frame);
   $(".plexus-line").remove();

  });


var temph=false;
  $("#n1").mouseenter(function(){
//  $("#plexus").show();
  if (temph==false){
    myfunc( n1cor,"plexus8",55,true);
    temph = true;
  }
});

$("#n1").mouseleave(function(){
  // clearTimeout(timer);
  clearInterval(inter);
  temph=false;
  //cancelAnimationFrame(frame);
   $(".plexus-line").remove();

  });

var tempf=false;
  $("#f1").mouseenter(function(){
//  $("#plexus").show();
  if (tempf==false){
    myfunc( f1cor,"plexus4",55,true);
    tempf = true;
  }
});

$("#f1").mouseleave(function(){
  // clearTimeout(timer);
  clearInterval(inter);
  tempf=false;
  //cancelAnimationFrame(frame);
   $(".plexus-line").remove();

  });

var tempe2=false;
  $("#e2").mouseenter(function(){
//  $("#plexus").show();
  if (tempe2==false){
    myfunc( e1cor,"plexus5",50,true);
    tempe2 = true;
  }
});

$("#e2").mouseleave(function(){
  // clearTimeout(timer);
  clearInterval(inter);
  tempe2=false;
  //cancelAnimationFrame(frame);
   $(".plexus-line").remove();

  });



var temps=false;
  $("#s1").mouseenter(function(){
//  $("#plexus").show();
  if (temps==false){
    myfunc( s1cor,"plexus6",35,true);
    temps = true;
  }
});

$("#s1").mouseleave(function(){
  // clearTimeout(timer);
  clearInterval(inter);
  temps=false;
  //cancelAnimationFrame(frame);
   $(".plexus-line").remove();

  });


var tempt2=false;
  $("#t2").mouseenter(function(){
//  $("#plexus").show();
  if (tempt2==false){
    myfunc( t1cor,"plexus7",70,true);
    tempt2 = true;
  }
});

$("#t2").mouseleave(function(){
  // clearTimeout(timer);
  clearInterval(inter);
  tempt2=false;
  //cancelAnimationFrame(frame);
   $(".plexus-line").remove();

  });
});

</script>

<?php
	include('header.php');
?>
<style>

.title111{
    width:650px; margin-left:-100px;

}

.title112{
   width:400px; margin-left:-180px; margin-top:-120px;

}
.hui{
    margin-left:100px;
}



</style>



                <div id="slides">

                 <div class="text" data-0="transform: translate(-48%,-48%) scale(1,1);" data-80p="" data-100p="transform:  translate(-48%,-48%) scale(0.5,0.5);" data-120p="transform: translate(-48%,-48%) scale(0.0,0.0);">
                 <div id="checking">

<div>

<center>
<div class="spinximg">
	<center><img src="images/title2.png" class="title111" style="" >
	<img src="images/tagline.png" class="title112" style="" ></center>
</div>
</center>
<!--
 <div id="s1" style="width:129px ; height:77px ;background:url(images/s1.png);float:left; margin:0 10px;">
      <svg id="plexus6" width="200" height="77" viewbox="0 0 60 77"></svg>
 </div>
 <div id="f1" style="width:59px ; height:77px ;background:url(images/p.png);float:left;  margin:0 10px;">
      <svg id="plexus4" width="60" height="77" viewbox="0 0 60 77"></svg>
 </div>
 <div id="h1" style="width:59px ; height:77px ;background:url(images/h.png); float:left;  margin:0 10px;">
      <svg id="plexus3" width="62" height="77" viewbox="0 0 40 77"></svg>
 </div>
 <div id="t1" class="svgI" style="width:16px ; height:77px ;background:url(images/i.png);float:left;  margin:0 10px;">
      <svg id="plexus1" width="10" height="77" viewbox="0 0 10 77"></svg>
 </div>

 <div id="n1" style="width:58px ; height:77px ;background:url(images/n.png); float:left; ">
      <svg id="plexus8" width="62" height="77" viewbox="0 0 62 77"></svg>
 </div>
 <div id="c1" style="width:62px ; height:77px ;background:url(images/x.png); float:left;  margin:0 10px;">
      <svg id="plexus2" width="62" height="77" viewbox="10 10 40 60"></svg>
 </div>



 <div id="e1" style="width:58px ; height:77px ;background:url(images/E1.svg); float:left; display:none;">
      <svg id="plexus" width="62" height="77" viewbox="0 0 62 77"></svg>
 </div>

 <div id="c1" style="width:71px ; height:77px ;background:url(images/C.svg);float:left; display:none;">
      <svg id="plexus2" width="62" height="77" viewbox="0 0 62 77"></svg>
 </div>
 <div id="e2" style="width:62px ; height:77px ;background:url(images/n.png); float:left; display:none;">
      <svg id="plexus5" width="62" height="77" viewbox="0 0 62 77"></svg>
 </div>

-->






 <div id="t2" style="width:62px ; height:77px ;background:url(images/T1.svg); float:left;  display:none;">
      <svg id="plexus7" width="62" height="77" viewbox="0 0 62 77"></svg>
 </div>
</div>
<!--p align="right" style="float:left; "> <img src="images/tagline.png" class="img-responsive pull-right" alt="img"></p-->
</div>
                </div>
               <div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" data-50p="transform: translate(0%,-6%);" data-80p="" data-100p="transform: translate(-12.25%,-3%)" data-120p="transform: translate(-25%,0%)" data-140p="transform: translate(-37.25%,-3%)" data-160p="transform: translate(-48%,-6%)" data-180p="" data-200p="transform: translate(-48%,-10%)" data-240p="" data-250p="transform: translate(0%,-10%);" data-300p="transform: translate(0%,-6%);" data-330p="" data-350p="transform: translate(-12.25%,-3%)" data-370p="transform: translate(-25%,0%)" data-390p="transform: translate(-37.25%,-3%)" data-410p="transform: translate(-48%,-6%)" data-430p="" data-450p="transform: translate(-48%,-10%)" data-490p="" data-500p="transform: translate(0%,-10%);" data-550p="transform: translate(0%,-6%);" data-580p="" data-600p="transform: translate(-12.25%,-3%)" data-620p="transform: translate(-25%,0%)" data-640p="transform: translate(-37.25%,-3%)" data-660p="transform: translate(-48%,-6%)" data-680p="" data-700p="transform: translate(-48%,-10%)" data-740p="" data-750p="transform: translate(0%,-10%)" data-800p="transform: translate(0%,-6%);" data-830p="" data-850p="transform: translate(-12.25%,-3%)" data-870p="transform: translate(-25%,0%)" data-890p="transform: translate(-37.25%,-3%)" data-910p="transform: translate(-48%,-6%)" data-930p="" data-950p="transform: translate(-48%,-10%)" data-990p="" data-1000p="transform: translate(0%,-10%)" data-1050p="transform: translate(0%,-6%);" data-1080p="" data-1100p="transform: translate(-12.25%,-3%)" data-1120p="transform: translate(-25%,0%)" data-1140p="transform: translate(-37.25%,-3%)" data-1160p="transform: translate(-48%,-6%)" data-1180p="" data-1200p="transform: translate(-48%,-10%)" data-1240p="" data-1250p="transform: translate(0%,-10%)" data-1300p="transform: translate(0%,-6%);" data-1330p="" data-1350p="transform: translate(-12.25%,-3%)" data-1370p="transform: translate(-25%,0%)" data-1390p="transform: translate(-37.25%,-3%)" data-1410p="transform: translate(-48%,-6%)" data-1430p="" data-1450p="transform: translate(-48%,-10%)" data-1490p="" data-1500p="transform: translate(0%,-10%)" data-1550p="transform: translate(0%,-6%);" data-1580p="" data-1600p="transform: translate(-12.25%,-3%)" data-1620p="transform: translate(-25%,0%)" data-1640p="transform: translate(-37.25%,-3%)" data-1660p="transform: translate(-48%,-6%)" data-1680p="" data-1700p="transform: translate(-48%,-10%)" data-1740p="" data-1750p="transform: translate(0%,-10%)" data-1800p="transform: translate(0%,-6%);" data-1830p="" data-1850p="transform: translate(-12.25%,-3%)" data-1870p="transform: translate(-25%,0%)" data-1890p="transform: translate(-37.25%,-3%)" data-1910p="transform: translate(-48%,-6%)" data-1930p="" data-1950p="transform: translate(-48%,-10%)" data-1990p="" data-2000p="transform: translate(0%,-10%)" data-2050p="transform: translate(0%,-6%);" data-2080p="" data-2100p="transform: translate(-12.25%,-3%)" data-2120p="transform: translate(-25%,0%)" data-2140p="transform: translate(-37.25%,-3%)" data-2160p="transform: translate(-48%,-6%)" data-2180p="" data-2200p="transform: translate(-48%,-10%)">

                    </div>

                    <div class="planet" id="p1" data-0="transform: translate(0%,75%);" data-50p="transform: translate(0%,116.96%);" data-80p="" data-100p="transform: translate(-48%,157.1%);" data-120p="transform: translate(-100%,197.24%);" data-140p="transform: translate(-148%,157.24%);" data-160p="transform: translate(-200%,116.96%);" data-180p="" data-200p="transform: translate(-200%,75%);" data-220p="transform: translate(-200%,75%); dispaly:none;" style="width:29%;">

                    <img src="images/1.png" width="50%" class="hui">
                    </div>

                    <section id="initiatives" class="events" data-0="display:none;" data-120p="display:block;">
                    <div style="height:100%;" data-0="transform:scale(0,0); display:none;" data-120p="transform:scale(0,0); display:block;" data-140p="transform:scale(0.5,0.5);" data-160p="transform:scale(1,1);" data-200p="" data-330p="" data-350p="transform:scale(0.5,0.5);" data-370p="transform:scale(0,0); display:none;">
                    <div class="hevents">
                    <img src="images/aboutus.png" style="width:400px;" >
                    </div>
                    <div class="evePara">
                   <p>Conceptualized in 2017, Sphinx is part of a vision to bring together technology and culture in a unique
way and to infuse creativity into technology. Sphinx derives its name from a mythical Greek creature
that has the head of a human and the body of a lion. Staying true to its name, Sphinx represents the two
sides to technology- boundless creativity and calculative science. This 3 day fest is a glorious celebration
of the many facets of technology and provides the perfect platform to soak in the latest of the tech
industry. With intensive workshops, motivating orations by industry experts, cut throat competitions
and breathtaking performances, there is something for everyone here. So join us in this magical
escapade to explore the best of tech !
                    </p>

                    <!--<div id="ideatebut">
                     <a href="#">
                    <div class="iparabut">
                    Explore More
                    </div>
                    </a>
                    </div>-->

                    </div>
                    </div>
                    </section>
                    <div id="warship" class="deselements" data-460p=" top:-22%; right:-12%; display:none;" data-430p=" top:-2%; right:1%;" data-400p=" top:18%; right:14%;" data-370p=" top:37%; right:27%;" data-340p=" top:56%; right:40%;" data-310p=" top:75%; right:53%;" data-290p=" top:94%; right:66%;" data-270p=" top:103%; right:79%;" data-260p=" top:122%; right:92%;" data-250p=" top:141%; right:105%;display:block;" data-0p="display:none;">
                    <div id="warshipt">
                    <img src="images/o2.png" width="100%">
                    </div>
                    </div>

                    <div class="planet" id="p2" data-50p="transform: translate(294.82%,116.96%); display:block;" data-80p="" data-100p="transform: translate(251.72%,157.1%);" data-120p="transform: translate(208.62%,197.24%);" data-140p="transform: translate(165.61%,157.24%);" data-160p="transform: translate(122.41%,116.96%);" data-180p="" data-200p="" data-220p="" data-240p="transform: translate(122.41%,116.96%);" data-260p="transform: translate(165.61%,157.24%);" data-280p="transform: translate(208.62%,197.24%);" data-300p="transform: translate(251.72%,157.1%);" data-320p="transform: translate(294.82%,116.96%); display:none;" >
                    <img src="images/7.png" width="25%" style="margin-top:-100px;">
                    </div>
                    <section id="ideate" class="events" data-0="display:none;" data-370p=" display:block;">
                    <div style="height:100%;" data-0="transform:scale(0,0); display:none;" data-370p="transform:scale(0,0); display:block;" data-390p="transform:scale(0.5,0.5);" data-410p="transform:scale(1,1);" data-450p="" data-580p="" data-600p="transform:scale(0.5,0.5);" data-620p="transform:scale(0,0); display:none;">
                    <div class="hevents">
                     <img src="images/events.png" style="width:200px;" >
                    </div>
                    <div class="evePara">
                    <!--p>For all Technoholics out there, SPHINX indulges in experiential learning with a hands-on approach through out Workshops organise during the fest under the supervision of industry experts from throughout the country. Involving the major industrial cutting edge tools in our Workshops, we'll help you bring your long awaited aspirations to life over the course of SPHINX 2018.</p-->

					<div class="eventdbtb">

                    <div id="ideatebut">
                     <a href="core-love-event.php">
                    <div class="iparabut">
                    CORE-LOVE
                    </div>
                    </a>
                    </div>

					<div id="ideatebut">
                     <a href="extravaganza.php">
                    <div class="iparabut">
                    EXTRAVAGANZA
                    </div>
                    </a>
                    </div>


					<div id="ideatebut">
                     <a href="hackathons.php">
                    <div class="iparabut">
                    HACKATHONS
                    </div>
                    </a>
                    </div>

					<div id="ideatebut">
                     <a href="robotics.php">
                    <div class="iparabut">
                    ROBOTICS
                    </div>
                    </a>
                    </div>

					<div id="ideatebut">
                     <a href="socevents.php">
                    <div class="iparabut">
                    SOC EVENTS
                    </div>
                    </a>
                    </div>
					<img src="images/camera.png" style="margin-top:-450px; margin-left:600px; width:400px;">
                    </div>
                    </div>
                    </div>

                    </section>
                    <div id="astronaut" class="deselements" data-0p="display:none;" data-500p="display:block; transform:translate(90%,+85%);" data-530p="transform:translate(0%,0%);" data-580p="transform:translate(-210%,-165%);" data-630p="transform:translate(-420%,-325%);" data-680p="transform:translate(-630%,-485%);" data-700p="transform:translate(-725%,-572.5%);" data-730p="transform:translate(-820%,-645%);" data-830p="transform:translate(-955%,-750%);" data-930p="transform:translate(-1200%,-850%);" data-1130p="transform:translate(-1450%,-1000%);" data-1300p="transform:translate(-1600%,-1200%);">
                    <div id="astronautr"  data-930p="transform:rotateZ(300deg);" data-1130p="transform:rotateZ(350deg);" data-1300p="transform:rotateZ(350deg);">
                    <img src="images/astronaut.png" width="250%">
                    </div>
                    </div>
                    <div id="astronaut" data-450p="transform:translate(90%,85%);">
                    <div id="astronautr">
                    <img src="images/astronaut.png" width="100%">
                    </div>
                    </div>
              <!--       <div class="planet" id="p3" data-250p="transform: translate(294.82%,75%);" data-300p="transform: translate(294.82%,116.96%);" data-330p="" data-350p="transform: translate(251.72%,157.1%);" data-370p="transform: translate(208.62%,197.24%);" data-390p="transform: translate(165.61%,157.24%);" data-410p="transform: translate(122.41%,116.96%);" data-430p="" data-450p="transform: translate(122.41%,75%);" data-470p="" data-490p="" data-700p="transform: translate(-48%,75%);" data-710p="transform: translate(-48%,116.96%);" data-920p="" data-730p="transform: translate(-62.25%,157.1%)" data-740p="transform: translate(-75%,197.24%)" data-750p="transform: translate(-87.25%,157.24%)" data-755p="transform: translate(-100%,116.96%)" data-760p="" data-765p="transform: translate(-100%,75%)">

                    <img src="images/8.png" width="100%">
                    </div> -->
                    <section id="competitions" class="events" data-0="display:none;" data-620p="display:block;">
                    <div style="height:100%" data-0="transform:scale(0,0); display:none;" data-620p="transform:scale(0,0); display:block;" data-640p="transform:scale(0.5,0.5);" data-660p="transform:scale(1,1);"  data-800p="transform:scale(1,1);" data-820p="transform:scale(0.5,0.5);" data-840p="transform:scale(0,0); display:none;">
                    <div class="hevents">
                   <img src="images/workshops.png" style="width:240px;" >
                    </div>
                    <div class="evePara">
                    <p>Sputnik is a tech savvy person  and is determined to learn, analyze and create all the technologies he can dream of. So he decides to conduct a workshop, giving us an insight into all the modern technologies including Robotics , Aerodynamics, Ethical hacking and Internet of things for us to gain practical wisdom and to have an uncompromised learning experience.</p>


                    <div id="ideatebut">
                    <a href="workshop.php">
                    <div class="iparabut">
                    Explore More
                    </div>
                     </a>
                    </div>

                    </div>
					<img src="images/robot.png" style="width:300px; margin-top:50px; margin-left:800px;">
                    </div>
                    </section>




                     <div id="asteroid" class="deselements" data-0p="top:-15%; left:95%; width:15%; display:none;" data-700p="top:-15%; left:95%; width:15%; display:block;" data-800p="" data-820p="top:-5%; left:85%; width:12%; display:block;" data-840p="top:5%; left:65%; width:15%; display:block;" data-860p="top:15%; left:45%; width:17%; display:block;" data-880p="top:25%; left:25%; width:18.5%; display:block;" data-900p="top:35%; left:5%; width:20%; display:block;" data-920p="top:45%; left:-20%; width:21.5%; display:block;" data-930p="top:55%; left:-40%; width:21.5%; display:block;">
                    <img src="images/asteroid.png" width="80%">
                    </div>
                   <!-- <div class="planet" id="p4" style="width:58%;" data-0="transform: translate(248%,75%);" data-500p="" data-550p="transform: translate(294.82%,116.96%);" data-580p="" data-600p="transform: translate(251.72%,157.1%);" data-620p="transform: translate(208.62%,197.24%);" data-640p="transform: translate(165.61%,157.24%);" data-660p="transform: translate(122.41%,116.96%);" data-680p="" data-700p="transform: translate(122.41%,75%);" data-740p="" data-900p="transform: translate(-48%,75%);" data-905p="transform: translate(-48%,116.96%);" data-910p="" data-915p="transform: translate(-62.25%,157.1%)" data-920p="transform: translate(-75%,197.24%)" data-930p="transform: translate(-87.25%,157.24%)" data-940p="transform: translate(-100%,116.96%)" data-950p="" data-960p="transform: translate(-100%,75%)">

                    <img src="images/4.png" width="100%">
                    </div>-->
                    <section id="workshops" class="events" data-0=" display:none;" data-870p="display:block;">

                    <div style="height:100%" data-0="transform:scale(0,0); display:none;" data-870p="transform:scale(0,0); display:block;" data-890p="transform:scale(0.5,0.5);" data-910p="transform:scale(1,1);" data-950p="" data-1080p="" data-1100p="transform:scale(0.5,0.5);" data-1120p="transform:scale(0,0); display:none;">
                    <div class="hevents">
                    <img src="images/labyrinth.png" style="width:220px;" >
                    </div>
                    <div class="evePara">


					<div class="eventdbtb">
					<div id="ideatebut">
                     <a href="csgo.php">
                    <div class="iparabut">
                    CS GO
                    </div>
                    </a>
                    </div>

					<div id="ideatebut">
                     <a href="fifa.php">
                    <div class="iparabut">
                    FIFA
                    </div>
                    </a>
                    </div>

					 <div id="ideatebut">
                     <a href="nfs.php">
                    <div class="iparabut">
                    NFS
                    </div>
                    </a>
                    </div>

					<div id="ideatebut">
                     <a href="pubg.php">
                    <div class="iparabut">
                    PUBG
                    </div>
                    </a>
                    </div>
					<img src="images/game.png" class="game_image" style="width:230px; margin-top:-170px; margin-left:650px;">

                    </div>


                    <!--<div id="ideatebut">
                    <a href="#">
                    <div class="iparabut">
                    Explore More
                    </div>
                     </a>
                    </div>-->

                    </div>

                    </div>


                    </section>

              <!--      <div class="planet" id="p5" style="width:58%;" data-0p="transform: translate(294.82%,75%);" data-750p="" data-800p="transform: translate(294.82%,116.96%);" data-830p="" data-850p="transform: translate(251.72%,157.1%);" data-870p="transform: translate(208.62%,197.24%);" data-890p="transform: translate(165.61%,157.24%);" data-910p="transform: translate(122.41%,116.96%);" data-930p="" data-940p="transform: translate(122.41%,75%);" data-950p="" data-1170p="transform: translate(-48%,75%);" data-1180p="transform: translate(-48%,116.96%);" data-1190p="" data-1200p="transform: translate(-62.25%,157.1%)" data-1210p="transform: translate(-75%,197.24%)" data-1220p="transform: translate(-87.25%,157.24%)" data-1230p="transform: translate(-100%,116.96%)" data-1240p="" data-1200p="transform: translate(-100%,75%)">
                    <img src="images/6.png" width="100%">
                    </div> -->
                    <section id="twmun" class="events" data-0="display:none;" data-1120p="display:block;">
                    <div style="height:100%" data-0="transform:scale(0,0); display:none;" data-1120p="transform:scale(0,0); display:block;" data-1140p="transform:scale(0.5,0.5);" data-1160p="transform:scale(1,1);" data-1200p="" data-1230p="" data-1250p="transform:scale(0.5,0.5);" data-1270p="transform:scale(0,0); display:none;">
                    <div class="hevents">
                    <img src="images/exhibitions.png" style="width:220px;" >
                    </div>
                    <div class="evePara">
                  <p>The exhibition will display various research projects and development activities going on in the various departments of the institute which are sure to leave you exhilarated. The exhibition will be a technical extravaganza which will portray the technical excellence of MNIT Jaipur and at the same time depict the staggering feats of the technical community. It will also exhibit the latest and coolest technology on the blocks</p>


                    <!--<div id="ideatebut">
                    <a href="#">
                    <div class="iparabut">
                    Explore More
                    </div>
                     </a>
                    </div>-->

                    </div>
                    <img src="images/bird.png" style="width:400px; margin-left:820px; margin-top:50px;">
                    </div>
                    </section>
                    <div id="enterpreneur" class="deselements" data-0p="display:none; " data-1230p="display:block;
			 transform:translate(100%,0%) scale(1,1)" data-1250p="transform:translate(40%,0%) scale(1,1)" data-1260p="transform:translate(-300%,0%) scale(1.1,1.1)" data-1380p="transform:translate(-700%,0%) scale(1.2,1.2)" data-1400p="transform:translate(-1100%,0%) scale(1.4,1.4)"  data-1410="display:none;">
                    <img src="images/enterpreneur.png" width="140%">
                    </div>
                <!--     <div class="planet" id="p6" style="width:58%;" data-0p="transform: translate(294.82%,75%);" data-1000p="" data-1050p="transform: translate(294.82%,116.96%);" data-1080p="" data-1100p="transform: translate(251.72%,157.1%);" data-1120p="transform: translate(208.62%,197.24%);" data-1140p="transform: translate(165.61%,157.24%);" data-1160p="transform: translate(122.41%,116.96%);" data-1180p="" data-1200p="transform: translate(122.41%,75%);" data-1240p="" data-1450p="transform: translate(-48%,75%);" data-1460p="transform: translate(-48%,116.96%);" data-1470p="" data-1180p="transform: translate(-62.25%,157.1%)" data-1485p="transform: translate(-75%,197.24%)" data-1490p="transform: translate(-87.25%,157.24%)" data-1495p="transform: translate(-100%,116.96%)" data-1500p="" data-1500p="transform: translate(-100%,75%)">
                        <img src="images/5.png" width="100%">
                    </div> -->
                    <section id="lectures" class="events" data-0="display:none;" data-1370p="display:block;">
                    <div style="height:100%" data-0="transform:scale(0,0); display:none;" data-1370p="transform:scale(0,0); display:block;" data-1290p="transform:scale(0.5,0.5);" data-1310p="transform:scale(1,1);" data-1440p="transform:scale(1,1);" data-1450p="" data-1560p="" data-1580p="transform:scale(0.5,0.5);" data-1600p="transform:scale(0,0); display:none;">

                    <div class="hevents">
                    <img src="images/techtalk.png" style="width:220px;" >
                    </div>
                    <div class="evePara">

					<p>SPHINX 2.0 presents to you the 2nd edition of TECHTALK, A course of events that
showcase some of the most prominent personas across India belonging to a range
of diverse field. Connecting these minds to the young and dynamic audience present
at the fest, the series has been continuously striving to provide an opportunity to live
one’s dream of interacting with the best of every discipline.
With a lineup of some of best orators, dignified personalities in the field of
technology, SPHINX 2.0 provides you once in a lifetime opportunity to savour their
rich experience and profound knowledge.
So gear up and do not miss one of the most awaited events of SPHINX 2.0.</p>


                    </div>
                    <img src="images/mic.png" style="width:200px; margin-left:870px; margin-top:100px;">

                    </div>
                    </section>

                      <div id="comet2" class="deselements" data-0p="transform:  translate(-50%,-400%) rotate(-175deg); display:block;" data-1300="" data-1350="" data-1400p="transform:  translate(0%,-175%) rotate(-175deg);" data-1450p="" data-1550p="transform:  translate(-1000%,1000%) rotate(-175deg);">
                    <img src="images/comet.png" width="100%">
                    </div>

                    <!--<section id="exhibitions" class="events" data-0=" display:none;" data-1620p=" display:block;">
                    <div style="height:100%" data-0="transform:scale(0,0); display:none;" data-1620p="transform:scale(0,0); display:block;" data-1640p="transform:scale(0.5,0.5);" data-1660p="transform:scale(1,1);" data-1700p="" data-1830p="" data-1850p="transform:scale(0.5,0.5);" data-1870p="transform:scale(0,0); display:none;">


                    </div>
                    </section>-->
            <!--        <div class="planet" id="p8" style="width:58%;" data-0="transform: translate(248%,75%);" data-1500p="" data-1550p="transform: translate(294.82%,116.96%);" data-1580p="" data-1600p="transform: translate(251.72%,157.1%);" data-1620p="transform: translate(208.62%,197.24%);" data-1640p="transform: translate(165.61%,157.24%);" data-1660p="transform: translate(122.41%,116.96%);" data-1680p="" data-1700p="transform: translate(122.41%,75%);" data-1740p="" data-1900p="transform: translate(-48%,75%);" data-1905p="transform: translate(-48%,116.96%);" data-1910p="" data-1915p="transform: translate(-62.25%,157.1%)" data-1920p="transform: translate(-75%,197.24%)" data-1925p="transform: translate(-87.25%,157.24%)" data-1930p="transform: translate(-100%,116.96%)" data-1935p="" data-1940p="transform: translate(-100%,75%)">
                    <img src="images/8.png" width="100%">
                    </div>
					-->
                    <section id="techonoholix" class="events" data-0="display:none;" data-1560p="display:block;">
                        <div style="height:100%" data-0="transform:scale(0,0); display:none;" data-1670p="transform:scale(0,0); display:block;" data-1690p="transform:scale(0.5,0.5);" data-1710p="transform:scale(1,1);" data-1750p="" data-2080p="" data-2100p="transform:scale(0.5,0.5);" data-2120p="transform:scale(0,0); display:none;">


					<div class="hevents">
                    <img src="images/contactus.png" style="width:240px; margin-top:-40px; margin-left:55px;" >
                    </div>
                    <div class="evePara">
                   <div class="contact-info-home" style="margin-top:-60px;">

                    <ul class="contact-address">
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-building"></span>
                            </div>
                            <div class="text-holder" >
                                <p><span style="font-size:18px; font-weight:bold;">Address: </span><br><br> Malaviya National Institute of Technology, JLN Marg, Jhalana Gram, Jaipur, Rajasthan-302017</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-technology"></span>
                            </div>
                            <div class="text-holder" >
                              <p><span style="font-size:18px; font-weight:bold; margin-bottom:10px;">Contact No:</span><br><br>
								<span style="text-align:left;"></span>
								    Sumit Kumar : 7073357606 (Workshop)<br>

Aditya Sinha : 8949296150 (Events registration)<br>

Ronak Gadia : 8879755487 (Marketing) <br>

Shreya Jain : 9783080753 (Cultural) </span>
								</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-new-email-outline"></span>
                            </div>
                            <div class="text-holder">
                                <p><span style="font-size:18px; font-weight:bold;">Email Id</span><br> <br>support@sphinxmnit.org </p>
                            </div>
                        </li>

                    </ul>

                </div>


                   <img src="images/phone.png" style="width:300px; margin-left:780px; margin-top:-420px;">
				   <style>
				   .contact_circle_1:hover{
					   background:rgba(0,0,0,0);
					   color:#2A5D88;
					   font-size:100px;
				   }
				   .contact_circle{
					   padding-top:18px;
					   font-size:25px;
					   font-weight:bold;
					   width:80px;
					   height:80px;
					   border-radius:50%;
					   margin-left:1035px;
					   margin-top:-137px;
					   border:4px solid #fff;
					   background-color:#fff;
						color:#2A5D88;
						text-decoration:none;
						box-shadow:0px 0px 20px 12px  #2A5D88;
				   }
				   .contact_circle:hover{
					   background-color:#2A5D88;
						color:#fff;
						border:4px solid #2A5D88;
						box-shadow:0px 0px 20px 12px #fff;
				   }
				   .contact_circle_1 a:hover{
					   text-decoration:none;
				   }
				   </style>
				   <div class="contact_circle_1">
				   <a href="contact.php">
                    <div class="contact_circle" style="">
                    	Now
                    </div>
                     </a>
                    </div>
					 </div>







                    </div>
                    </section>
                   <!-- <div class="planet" id="p9" style="width:58%;" data-0="transform: translate(248%,75%);" data-1750p="" data-1800p="transform: translate(294.82%,116.96%);" data-1830p="" data-1850p="transform: translate(251.72%,157.1%);" data-1870p="transform: translate(208.62%,197.24%);" data-1890p="transform: translate(165.61%,157.24%);" data-1910p="transform: translate(122.41%,116.96%);" data-1930p="" data-1950p="transform: translate(122.41%,75%);" data-1990p="" data-2200p="transform: translate(-48%,75%);" data-2205p="transform: translate(-48%,116.96%);" data-2210p="" data-2215p="transform: translate(-62.25%,157.1%)" data-2220p="transform: translate(-75%,197.24%)" data-2225p="transform: translate(-87.25%,157.24%)" data-2230p="transform: translate(-100%,116.96%)" data-2235p="" data-2240p="transform: translate(-100%,75%)">
                    <img src="images/4.png" width="100%">
                    </div>
					-->
                    <!--<section id="ozone" class="events" data-0="display:none;" data-2120p="display:block;">
                      <div style="height:100%" data-0="transform:scale(0,0); display:none;" data-2120p="transform:scale(0,0); display:block;" data-2140p="transform:scale(0.5,0.5);" data-2160p="transform:scale(1,1);" data-2200p="">


                    </section>-->

              <!--      <div id="satellite" class="deselements" data-2200p="transform:translate(-900%,-150%);" data-2225p="transform:translate(-800%,-150%);" data-2250p="transform:translate(-700%,-150%);" data-2275p="transform:translate(-500%,-150%);" data-2300p="transform:translate(-900%,-150%);" data-2325p="transform:translate(-900%,-150%);">
                    <div id="satelliter" data-2200p="transform:rotateZ(0deg);" data-2225p="transform:rotateZ(0deg);" data-2250p="transform:rotateZ(0deg);" data-2275p="transform:rotateZ(0deg);" data-2300p="transform:rotateZ(0deg);" data-2325p="transform:rotateZ(0deg);">
                    <img src="images/satellite.png" width="130%">
                    </div>
                    </div>
                    <div class="planet" id="p10" style="width:58%;" data-0="transform: translate(248%,75%);" data-2000p="" data-2050p="transform: translate(294.82%,116.96%);" data-2080p="" data-2100p="transform: translate(251.72%,157.1%);" data-2120p="transform: translate(208.62%,197.24%);" data-2140p="transform: translate(165.61%,157.24%);" data-2160p="transform: translate(122.41%,116.96%);" data-2180p="" data-2200p="transform: translate(75%,75%);" data-2220p="transform: translate(75%,60%);">
                    <img src="images/6.png" width="20%">
                    </div>

-->

                   <!-- <div class="ufo" data-0="transform: translate(48%,700%);" data-50p="transform: translate(48%,600%);" data-80p="" data-100p="transform: translate(260%,500%);" data-120p="transform: translate(480%,400%);" data-140p="transform: translate(700%,500%);" data-160p="transform: translate(848%,600%);" data-180p="" data-200p="transform: translate(848%,700%);" data-240p="" data-1050p="transform: translate(48%,700%);" data-300p="transform: translate(48%,600%);" data-330p="" data-350p="transform: translate(260%,500%);" data-370p="transform: translate(480%,400%);" data-390p="transform: translate(700%,500%);" data-410p="transform: translate(848%,600%);" data-430p="" data-450p="transform: translate(848%,700%);" data-490p="" data-500p="transform: translate(48%,700%);" data-550p="transform: translate(48%,600%);" data-580p="" data-600p="transform: translate(260%,500%);" data-620p="transform: translate(480%,400%);" data-640p="transform: translate(700%,500%);" data-660p="transform: translate(848%,600%);" data-680p="" data-700p="transform: translate(848%,700%);" data-740p="" data-750p="transform: translate(48%,700%);" data-800p="transform: translate(48%,600%);" data-830p="" data-850p="transform: translate(260%,500%);" data-870p="transform: translate(480%,400%);" data-890p="transform: translate(700%,500%);" data-910p="transform: translate(848%,600%);" data-930p="" data-950p="transform: translate(848%,700%);" data-990p="" data-1000p="transform: translate(48%,700%);" data-1050p="transform: translate(48%,600%);" data-1080p="" data-1100p="transform: translate(260%,500%);" data-1120p="transform: translate(480%,400%);" data-1140p="transform: translate(700%,500%);" data-1160p="transform: translate(848%,600%);" data-1180p="" data-1200p="transform: translate(848%,700%);" data-1240p="" data-1250p="transform: translate(48%,700%);" data-1300p="transform: translate(48%,600%);" data-1330p="" data-1350p="transform: translate(260%,500%);" data-1370p="transform: translate(480%,400%);" data-1390p="transform: translate(700%,500%);" data-1410p="transform: translate(848%,600%);" data-1430p="" data-1450p="transform: translate(848%,700%);" data-1490p="" data-1500p="transform: translate(48%,700%);" data-1550p="transform: translate(48%,600%);" data-1580p="" data-1600p="transform: translate(260%,500%);" data-1620p="transform: translate(480%,400%);" data-1640p="transform: translate(700%,500%);" data-1660p="transform: translate(848%,600%);" data-1680p="" data-1700p="transform: translate(848%,700%);" data-1740p="" data-1750p="transform: translate(48%,700%);" data-1800p="transform: translate(48%,600%);" data-1830p="" data-1850p="transform: translate(260%,500%);" data-1870p="transform: translate(480%,400%);" data-1890p="transform: translate(700%,500%);" data-1910p="transform: translate(848%,600%);" data-1930p="" data-1950p="transform: translate(848%,700%);" data-1990p="" data-2000p="transform: translate(48%,700%);" data-2050p="transform: translate(48%,600%);" data-2080p="" data-2100p="transform: translate(260%,500%);" data-2120p="transform: translate(480%,400%);" data-2140p="transform: translate(700%,500%);" data-2160p="transform: translate(848%,600%);" data-2180p="" data-2200p="transform: translate(848%,700%);">
                        <div class="rotate" data-0="transform:rotateZ(11deg);" data-25p="transform:rotateZ(0deg);" data-50p="transform:rotateZ(0deg);" data-80p="transform:rotateZ(15deg);" data-100p="transform:rotateZ(17.5deg);" data-120p="transform:rotateZ(20deg);" data-140p="transform:rotateZ(17.5deg);" data-160p="transform:rotateZ(15deg);" data-180p="transform:rotateZ(0deg);" data-200p="transform:rotateZ(-11deg);" data-240p="" data-250p="transform:rotateZ(11deg);" data-275p="transform:rotateZ(0deg);" data-300p="transform:rotateZ(0deg);" data-330p="transform:rotateZ(15deg);" data-350p="transform:rotateZ(17.5deg);" data-370p="transform:rotateZ(20deg);" data-390p="transform:rotateZ(17.5deg);" data-410p="transform:rotateZ(15deg);" data-430p="transform:rotateZ(0deg);" data-450p="transform:rotateZ(-11deg);" data-490p="" data-500p="transform:rotateZ(11deg);" data-525p="transform:rotateZ(0deg);" data-550p="transform:rotateZ(0deg);" data-580p="transform:rotateZ(15deg);" data-600p="transform:rotateZ(17.5deg);" data-620p="transform:rotateZ(20deg);" data-640p="transform:rotateZ(17.5deg);" data-660p="transform:rotateZ(15deg);" data-680p="transform:rotateZ(0deg);" data-700p="transform:rotateZ(-11deg);" data-740p="" data-750p="transform:rotateZ(11deg);" data-775p="transform:rotateZ(0deg);" data-800p="transform:rotateZ(0deg);" data-830p="transform:rotateZ(15deg);" data-850p="transform:rotateZ(17.5deg);" data-870p="transform:rotateZ(20deg);" data-890p="transform:rotateZ(17.5deg);" data-910p="transform:rotateZ(15deg);" data-930p="transform:rotateZ(0deg);" data-950p="transform:rotateZ(-11deg);" data-990p="" data-1000p="transform:rotateZ(11deg);" data-1025p="transform:rotateZ(0deg);" data-1050p="transform:rotateZ(0deg);" data-1080p="transform:rotateZ(15deg);" data-1000p="transform:rotateZ(17.5deg);" data-1020p="transform:rotateZ(20deg);" data-1040p="transform:rotateZ(17.5deg);" data-1060p="transform:rotateZ(15deg);" data-1080p="transform:rotateZ(0deg);" data-1200p="transform:rotateZ(-11deg);" data-1240p="" data-1250p="transform:rotateZ(11deg);" data-1275p="transform:rotateZ(0deg);" data-1300p="transform:rotateZ(0deg);" data-1330p="transform:rotateZ(15deg);" data-1350p="transform:rotateZ(17.5deg);" data-1370p="transform:rotateZ(20deg);" data-1390p="transform:rotateZ(17.5deg);" data-1410p="transform:rotateZ(15deg);" data-1430p="transform:rotateZ(0deg);" data-1450p="transform:rotateZ(-11deg);" data-1490p="" data-1500p="transform:rotateZ(11deg);" data-1525p="transform:rotateZ(0deg);" data-1550p="transform:rotateZ(0deg);" data-1580p="transform:rotateZ(15deg);" data-1600p="transform:rotateZ(17.5deg);" data-1620p="transform:rotateZ(20deg);" data-1640p="transform:rotateZ(17.5deg);" data-1660p="transform:rotateZ(15deg);" data-1680p="transform:rotateZ(0deg);" data-1700p="transform:rotateZ(-11deg);" data-1740p="" data-1750p="transform:rotateZ(11deg);" data-1775p="transform:rotateZ(0deg);" data-1800p="transform:rotateZ(0deg);" data-1830p="transform:rotateZ(15deg);" data-1850p="transform:rotateZ(17.5deg);" data-1870p="transform:rotateZ(20deg);" data-1890p="transform:rotateZ(17.5deg);" data-1910p="transform:rotateZ(15deg);" data-1930p="transform:rotateZ(0deg);" data-1950p="transform:rotateZ(-11deg);" data-1990p="" data-2000p="transform:rotateZ(11deg);" data-2025p="transform:rotateZ(0deg);" data-2050p="transform:rotateZ(0deg);" data-2080p="transform:rotateZ(15deg);" data-2100p="transform:rotateZ(17.5deg);" data-2120p="transform:rotateZ(20deg);" data-2140p="transform:rotateZ(17.5deg);" data-2160p="transform:rotateZ(15deg);" data-2180p="transform:rotateZ(0deg);" data-2200p="transform:rotateZ(-11deg);">
                             <img src="images/ufo.png" width="100%">
                        </div>
                    </div>  -->
                </div>


<svg class="arrows" data-0p="display:block;s" data-10p="display:none;">
<path class="a1" d="M0 0 L30 32 L60 0"></path>
<path class="a2" d="M0 20 L30 52 L60 20"></path>
<path class="a3" d="M0 40 L30 72 L60 40"></path>
</svg>



<?php
	include('footer.php');
	if(isset($_SESSION['messagess']))
	{
		unset($_SESSION['messagess']);
	}
?>
        <script src="js/skrollr.min.js"></script>

        <script type="text/javascript" src="js/skrollr.menu.js"></script>
        <script type="text/javascript">
        var x = screen.width;
        var y = window.innerWidth;
        var z = window.devicePixelRatio;
        var phyWidth = x;

        if(phyWidth > 30){

        setTimeout(function() {
        var s = skrollr.init({

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
        if(phyWidth > 30){

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

    </body>
</html>
