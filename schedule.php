<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event==""){
		$min=1;
		$max=2;
	} else if($event=='') {
		$min=1;
		$max=2;
	} else if($event=='') {
		$min=1;
		$max=2;
	}
	else{
		header("Location:hackathons");
	}

}
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
<link rel="stylesheet" href="css/main.css">
<link href="css/css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<link href="css/ticker-style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
</head>
<body style="overflow:hidden;">
<script type="text/javascript" src="js/timestamp.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/graph-calc.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/auto-complete.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/toolbar.js?v=1506980387.0" charset="utf-8"></script>
<script type="text/javascript" src="js/popper.js" charset="utf-8"></script>
<script type="text/javascript" src="js/bootstrap.js" charset="utf-8"></script>
<!--<script>

	$(function(){
		$('.regist-popshow').click(function(){
			$('.modalevent').modal('hide');

			$('#eventregister2').modal('show');

			$('#loginbox').modal('show');

		});
	});
</script> -->
<?php
if(isset($_REQUEST['event']))
{ ?>
	<script type="text/javascript">  $(window).load(function () {  $('#eventregister2').modal('show'); });</script>
<?php }
?>
<script>
$(function(){
	$('.teamC').change(function(){
		$('.teamember_detial').empty();
		var selVal = $(this).val();
		for (i = 0; i < selVal; i++) {
			$('.teamember_detial').append('<div class="row"> <div class="col-sm-4"> <div class="form-group"> <label for="recipient-name" class="form-control-label">Registration Id</label> </div> </div> <div class="col-sm-8"> <div class="form-group"> <input type="text" class="form-control" id="recipient-name" placeholder="Enter registration id" required name="regid[]"> </div> </div> </div> <div class="row"> <div class="col-sm-4"> <div class="form-group"> <label for="recipient-name" class="form-control-label">Email Id</label> </div> </div> <div class="col-sm-8"> <div class="form-group"> <input type="email" class="form-control" id="recipient-name" placeholder="Enter email address" required name="emailid[]"> </div> </div> </div> <div class="row"> <div class="col-sm-4"> <div class="form-group"> <label for="recipient-name" class="form-control-label">Password</label> </div> </div> <div class="col-sm-8"> <div class="form-group"> <input type="Password" name="password[]" class="form-control" id="recipient-name" placeholder="Enter your password"  required> </div> </div> </div><div class="breaklinke"></div>')
		}
	})
})
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

<div class="modal fade" id="eventregister2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Now!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <form class="form" method="post" action="core-love-reg.php">
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-7">
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Number of Team Members</label>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group">
                <select class="form-control teamC"  required name="teamsize">
                <option value="">Select</option>
                  <?php
				  for($i=$min;$i<=$max;$i++)
				  {
				  ?>
                  <option value="<?=$i;?>"><?=$i;?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <div class="teamember_detial">
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="recipient-name" class="form-control-label">Registration Id</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="recipient-name" placeholder="Enter registration id" name="regid[]" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="recipient-name" class="form-control-label">Email Id</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="text" class="form-control" id="recipient-name" placeholder="Enter email address" name="emailid[]" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="recipient-name" class="form-control-label">Password</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="form-group">
                  <input type="Password" class="form-control" id="recipient-name" placeholder="Enter your password" name="password[]" required>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        <input type="hidden" name="event_type" value="Core Love Event">
        <input type="hidden" name="event_name" value="<?=$event;?>">
        <input type="hidden" name="url" value="<?=$_SERVER['REQUEST_URI'];?>">
        <p style="color:#CF5759"><?=@$_SESSION['Error']; @$_SESSION['Error']=null;?></p>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="submitreg" class="btn btn-input">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!--top nav-->
<?php
	include('header.php');
?>

<!--top nav end-->
<style>
.content_p{
	margin-top:10px;

}
.card_box{

	border:2px solid #fff; padding:10px; color:#2A5D88; border-radius :22px; background-color:#fff; width:200px;  margin-top:-25px; font-size:20px; font-weight:bold;
}
.modal-title {
    margin-bottom: 0;
    line-height: 1.5;
    margin: 0 auto;
	font-size:32px;
	font-family:text;
}
.btn-secondary {
    color: #fff;
    background-color: #2A5D88;
    border-color: #868e96;
}

.contentbox_pwr {
	 overflow-x: hidden; height: 50%;  padding-left:0 ; width:70%;border-radius: 40px 0px 0px 40px; position:absolute; margin:0 auto;margin-top:-50px;
}
.title_img2{
	position:absolute; width:12%; bottom:260px; right:12%;
}
.title_img{
position:absolute; width:17%; top:150px; left:42%;margin-top:-50px;
}

body{font-family:arial;}
table{font-size:15px; font-family:arial; border: 2px solid #fff; margin-left:-100px;}
 td{width:200px; text-align:center; border: 2px solid #fff; padding:20px;}
tr th{text-align:center;}
h3 {margin-left:-100px;}
tr{height:50px;}

@media screen and (max-width: 600px) {
    table{font-size:11px; font-family:arial; border: 1px solid #fff; margin-left:-20px;}
 td{width:auto; text-align:center; border: 1px solid #fff; padding:0px;}
tr th{text-align:center;}
h3 {margin-left:0px;}
tr{height:auto;}
}

.coming{
	width: 50%;
	overflow: auto;
	margin: 90px auto;
}
</style>


<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%; color: white;">
<img src="images/schedule.png" class="title_img" >

<div class="coming">
	<img src="images/temp.gif" alt="" align="middle">
</div>

  <!-- <section class="contentbox_pwr" style="">
    <div>
      <div class="ourtemamanin_wrp" style="width:100%;     border-radius:0px 0px 0px 0px; padding-top: 25px;">

        <div class="eventmain_wrp">
          <div class="container">
            <div class="row">
               <img src="" class="team-icon">


				<div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp" >
                    <center>
                    <b><h3>27<sup>TH</sup> SEPTEMBER</h3> </b>
                    <table>
                    <tr><th>EVENTS</th><th>ROUND</th><th>VENUE</th><th>TIMINGS</th></tr>

                    <tr><td>DIGILOG</td><td>                    FIRST</td><td>VLTC-L004, L005</td><td>12:30-1:15PM</td></tr>
                    <tr><td>INQUIZITIVE</td><td>                FIRST</td><td>VLTC-L008,L009</td><td>12:30-1:15PM</td></tr>
                    <tr><td>CHEMICAL EXTRAVAGANZA</td><td>	    FIRST</td><td>VLTC-L006,L007</td><td>		12:30-1:30PM</td></tr>
                    <tr><td>PLUGGED IN</td><td>		            FIRST</td><td>VLTC-L203,L204</td><td>		2:00-2:45PM</td></tr>
                    <tr><td>CANTILIVO</td><td>		            FIRST</td><td>VLTC-L207,L208</td><td>		2:00-4:00PM</td></tr>
                    <tr><td>CIVIQ</td><td>		                FIRST</td><td>VLTC-L002,L003</td><td>		2:00-3:00PM</td></tr>
                    <tr><td>ENTROPHY</td><td>		            FIRST</td><td>VLTC-L205,L206</td><td>		3:00-5:00PM</td></tr>
                    <tr><td>READING BETWEEN	THE LINES</td><td>	FIRST</td><td>VLTC-L007,L008,L009</td><td>		3:15-4:15PM</td></tr>
                    <tr><td>CHEMICAL EXTRAVAGANZA</td><td>	    SECOND</td><td>CHEMISTRY LABS</td><td>		4:00-5:00PM</td></tr>
                    <tr><td>MISSSION IMPOSSIBLE</td><td>		FIRST</td><td>VLTC-L002,L003,L004,L005,L007</td><td>	5:00-6:00PM</td></tr>
                    </table>

                    <br><br>
                    <b><h3>28<sup>TH</sup> SEPTEMBER</h3> </b>
                    <table border="2">
                    <tr><th>EVENTS</th><th>ROUND</th><th>VENUE</th><th>TIMINGS</th></tr>
                    <tr><td>ELECTRABUG</td><td>		        FIRST</td><td>		VLTC-L004,L005</td><td>		            8:30-9:30AM</td></tr>
                    <tr><td>AQUA MISSILE</td><td>	       	FIRST</td><td>		FOOTBALL GROUND</td><td>		                    9:00-11:00AM</td></tr>
                    <tr><td>CODE OF WAR</td><td>		    SECOND</td><td>		LAB-1,2,3(COMPUTER CENTER)</td><td>		9:00-12:00AM</td></tr>
					<tr><td>CADASTROPHE</td><td>			---</td><td>	        LAB-6(COMPUTER CENTER)</td><td>		    9:00AM-12:00PM</td></tr>
					<tr><td>DESIGN IT</td><td>	        	---</td><td>		HEAT TRANSFER AND FPM LAB</td><td>		            9:00AM-1:00PM</td></tr>
                    <tr><td>SHARK TANK</td><td>	        	FIRST</td><td>		VLTC-L207</td><td>		                9:00AM-12:30PM</td></tr>
                    <tr><td>SEISMIC</td><td>		        FIRST</td><td>		VLTC-L002,L003</td><td>		            9:30-10:30AM</td></tr>
                    <tr><td>MOODLE</td><td>		            FIRST</td><td>		VLTC-L208,L209</td><td>		            10:00-11:30AM</td></tr>
                    <tr><td>URJA</td><td>		            SECOND</td><td>		VLTC-L008</td><td>		                10:00AM-2:00PM</td></tr>
                    <tr><td>DIGILOG</td><td>		        SECOND</td><td>		VLTC-L007</td><td>	                10:30AM-12:00PM</td></tr>
                    <tr><td>PULGGED IN</td><td>		        SECOND</td><td>		VLTC-L009</td><td>		                11:00AM-12:00PM</td></tr>
                    <tr><td>AQUA MISSLE</td><td>		    SECOND</td><td>		GROUND FLOOR, VLTC</td><td>		            12:00-1:00PM</td></tr></td></tr>
                    <tr><td>EGG DROP CHALLENGE</td><td>		---</td><td> 	THIRD FLOOR, VLTC</td><td>	                                12:30-3:30PM</td></tr>
                    <tr><td>MATHEMATICA</td><td>		    FIRST</td><td>		VLTC-L002,L003,L004,L005,L006</td><td>	1:00-2:00PM</td></tr>
					<tr><td>SHARK TANK</td><td>		        SECOND</td><td>		VLTC-L207</td><td>		                1:30-3:30PM</td></tr>
                    <tr><td>CIVIQ</td><td>		            SECOND</td><td>		VLTC-L007</td><td>		                2:00-3:00PM</td></tr>
                    <tr><td>CHEMICAL EXTRAVAGANZA</td><td>	THIRD</td><td>		VLTC-L208</td><td>		                2:00-5:00PM</td></tr>
                    <tr><td>QUIZOPEDIA</td><td>			---</td><td>	        VLTC-L303,L304</td><td>		            2:00PM-4:00PM</td></tr>
                    <tr><td>ULTIMATE CROSSOVER</td><td>		FIRST</td><td>		VLTC-L206</td><td>		                3:00-4:00PM</td></tr>
                    <tr><td>ELECTRA BUG</td><td>		    SECOND</td><td>		VLTC-L008</td><td>		                3:30-5:00PM</td></tr>
                    <tr><td>MATHEMATICA</td><td>		    SECOND</td><td>		VLTC-L009</td><td>		                5:00-6:00PM</td></tr>
                    <tr><td>WORDLY WISE</td><td>		    FIRST</td><td>		VLTC-L005,L004</td><td>		            4:00-5:00PM</td></tr>
                    </table>


                    <b><h3>29<sup>TH</sup> SEPTEMBER</h3> </b>
                    <table border="2">
                    <tr><th>EVENTS</th><th>ROUND</th><th>VENUE</th><th>TIMINGS</th></tr>
                    <tr><td>MISSION IMPOSSIBLE</td><td>		    SECOND</td><td>		CENTRAL LAWN</td><td>		8:00 AM-12:00PM</td></tr>
					<tr><td>SEISMIC</td><td>		            SECOND</td><td>		VLTC-L007</td><td>		            8:00AM-3:00PM</td></tr>
                    <tr><td>READING BETWEEN	THE LINES</td><td>	SECOND</td><td>		LAB-1,2(COMPUTER CENTER)</td><td>	9:00AM-12:00PM</td></tr>
					<tr><td>INQUIZITIVE</td><td>		        SECOND</td><td>		VLTC-L008</td><td>		            10:00AM-11:00AM</td></tr>
					<tr><td>ULTIMATE CROSSOVER</td><td>		    SECOND</td><td>		VLTC-L008</td><td>		            1:00PM-3:00PM</td></tr>
                    <tr><td>MATHEMATICA</td><td>		        THIRD</td><td>		VLTC-L006</td><td>		            2:00PM-4:00PM</td></tr>
                    <tr><td>DIGILOG</td><td>		            THIRD</td><td>		LAB(ECE DEPT.)</td><td>		            2:00PM-4:00PM</td></tr>
                    <tr><td>ENTROPHY</td><td>		            SECOND</td><td>		VLTC-L206</td><td>		            2:00PM-4:00PM</td></tr>
                    <tr><td>VENDEURPRENEUR</td><td>				    ---</td><td>        VLTC-L303,L304</td><td>		        2:00PM-4:00PM</td></tr>
                    <tr><td>CANVA-MOSAIC</td><td>		        FIRST</td><td>		VLTC-L207,L208</td><td>		        2:00PM-4:00PM</td></tr>
                    <tr><td>CHEMICAL EXTAVAGANZA</td><td>		FOURTH</td><td>		VLTC-L203</td><td>		            2:00PM-5:00PM</td></tr>
                    <tr><td>WORDLY WISE</td><td>		        SECOND</td><td>		VLTC-L204</td><td>		            3:30PM-5:00PM</td></tr>
                    <tr><td>CIVIQ</td><td>		                THIRD</td><td>		VLTC-L007</td><td>		            4:00PM-5:00PM</td></tr>
                    </table>

                    <br><br>
                    <b><h3>WORKSHOPS</h3></b>
                    <table border="2">
                    <tr><th>NAME</th><th width="400px">TIMINGS</th><th>VENUE</th></tr>
                    <tr><td >IOT</td><td width="400px">			                8:00AM-1:00PM (28th Sept. +29th Sept.)</td><td>			    Computer Science Dept</td></tr>
                    <tr><td>Ethical Hacking</td><td width="400px">		        8:00AM-1:00PM(28th Sept. +29th Sept.)</td><td>				VLTC-L108</td></tr>
                    <tr><td>Digital Marketing</td><td width="400px">	            2:00PM-5:00PM(27th Sept. +28th Sept. +29th Sept.)</td><td>	VLTC-L109</td></tr>
					<tr><td>Aerodynamics</td><td width="400px">		            2:00PM-5:00PM (27th Sept. +28th Sept. +29th Sept.)</td><td>	LAB-4(Computer Center)</td></tr>
					<tr><td>Robotics</td><td width="400px">			            2:00PM-5:00PM (27th Sept. +28th Sept. +29th Sept.)</td><td>	VLTC-L106</td></tr>
                    <tr><td>Machine Learning</td><td width="400px">			    2:00PM-5:00PM(27th Sept. +28th Sept. +29th Sept.)</td><td>	Computer Science Dept</td></tr>
                    <tr><td>Advanced Industrial	Automation</td><td width="400px">	2:00PM-5:00PM(27th Sept. +28th Sept. +29th Sept.)</td><td>	VLTC-L105</td></tr>
                    <tr><td>Fusion 360 Workshop</td><td width="400px">		    2:00PM-5:00PM(27th Sept. +28th Sept. +29th Sept.)</td><td>	LAB-7(Computer Center)</td></tr>
                    </table>

                    <br><br>
                    <b><h3>ROBOTICS</h3></b>
                    <table border="2">
                    <tr><th>NAME</th><th>TIMINGS</th><th>DATE</th><th>VENUE</th></tr>
                    <tr><td>BattleBots</td><td>	10:00AM-1:00PM</td><td>		28th Sept.</td><td>	    VLTC Entrance</td></tr>
                    <tr><td>Robotryst</td><td>	2:30PM onwards</td><td>		28th Sept.</td><td>	    VLTC-L203</td></tr>
                    <tr><td>Roborush</td><td>	11:00AM onwards</td><td>	29th Sept.</td><td>	    SECOND FLOOR, VLTC</td></tr>
                    </table>

                    <br><br>
                    <b><h3>HACKATHONS</h3></b>
                    <table border="2">
                    <tr><th>NAME</th><th>TIMINGS</th><th>DATE</th><th>VENUE</th></tr>
                    <tr><td>Hack-E-Design</td><td>	1:30PM-5:00PM</td><td>		27th Sept.</td><td>	Lab-8 (Computer Center)</td></tr>
                    <tr><td>Hack-E-App</td><td>		1:30PM-5:00PM</td><td>		28th Sept.</td><td>	Lab-8 (Computer Center)</td></tr>
                    <tr><td>Hack-E-Web</td><td>		1:30PM-5:00PM</td><td>		29th Sept.</td><td>	Lab-8 (Computer Center)</td></tr>
                    </table>

                    <br><br>
                   <b> <h3>GAMING</h3></b>
                    <table border="2">
                    <tr><th>GAME</th><th>TIMINGS</th><th>DATE</th><th>VENUE</th></tr>
                    <tr><td>CS:GO</td><td>		10:00AM-6:00PM</td><td>		28th Sept. And 29th	Sept.</td><td>	Lab-5 (Computer Center)</td></tr>
					<tr><td>NFS</td><td>		10:00AM-6:00PM</td><td>		28th Sept. And 29th	Sept.</td><td>	Lab-5 (Computer Center)</td></tr>
                    <tr><td>FIFA</td><td>		10:00AM-6:00PM</td><td>		28th Sept. And 29th	Sept.</td><td>	Lab-5 (Computer Center)</td></tr>
                    <tr><td>PUBG</td><td>		1:00PM-5:00PM</td><td>		27th Sept.</td><td>		        Your Own Location</td></tr>
                    </table>
                      </center>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

</div>


<?php
if(isset($_SESSION['suc_msg']))
{ ?>
<script>
alert("<?=$_SESSION['suc_msg'];?>");
</script>
<?php unset($_SESSION['suc_msg']); } ?>
<?php
	include('footer.php');
?>
<style>
@media screen and (max-width: 600px) {

.contentbox_pwr {
    /* max-width: 1000px; */
    background: rgba(0,0,0,0.4);
    /* margin: 0 auto; */
    vertical-align: middle;
    color: #fff;
    max-height: 500px;
    overflow: auto;
    position: fixed;
    left: 0%;
    /* font-size: 20px; */
    top: 22%;
    height: 72%;
    right: 0;
    /* bottom: 48px; */
    width: 100%;
    /* border-radius: 40px 0px 40px 0; */
    padding: 15px;
    order: 0;
    box-shadow: 0 0 0;
    z-index: 4;
    font-family: text;
    margin-bottom: 0;
    /* padding-top: 20px; */
    padding-bottom: -50px;
}


}

</style>
</body>
</html>
