<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="Digilog"){
		$min=1;
		$max=2;
	} else if($event=='Electrocrossword') {
		$min=1;
		$max=2;
	} else if($event=='Pluggedin') {
		$min=1;
		$max=2;
	}
	else{
		header("Location:electrical_and_electronics.php");
	}

}
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
        <input type="hidden" name="event_type" value="Electrical & Electronics">
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

<div class="modal fade Digilog  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DIGILOG</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Event Description:</h3>
						In this event, each team will have to solve digital and analog circuits. This will consist of three rounds. First round will be qualification round which will be a written
		quiz. The qualifying teams after first round will have to solve some digital circuits (pen and paper based). Last and the final round will be a circuit hunt.
</div>
          <div class="evencon_box">

						<div class="evencon_box">
							<h3> FORMAT: </h3>
							<h3>Level 1:</h3>
							This will be a written elimination round consisting of questions related to
	aptitude and basic electrical and electronics. Test will be of 45 minutes and consists of 30 questions, 10 from logical reasoning, 10 from analog and 10 from digital.
	 </div>
	 <div class="evencon_box">
		 <h3>Level 2:</h3>
		 Teams will have to solve analog and digital circuits (pen and paper based).
This will be one and a half hour test. Teams will have to solve the circuits on paper and submit it to the examiner/coordinator present on the spot.
Selected teams will proceed further for next round.
</div>
<div class="evencon_box">
	<h3>Level 3:</h3>
	This round will be the final round of the event. This round is a circuit hunt round in which each team will have to solve a circuit to get to the next clue.
Total points will be calculated cumulative of first second and final round
on the basis of that winner will be decided.

</div>



		  </div>

		   <div class="evencon_box">
            <h3>Rules and Regulations:</h3>
            <ul class="checboxlist">

<li>Every team should consist of a maximum of Two members.</li>
<li>Every team has to register for SPHINX.</li>
<li>The final decision of judges and event coordinators shall be treated as final and
binding to all.</li>
<li>A basic knowledge of digital and analog circuitry is necessary.</li>
<li>Any malpractice will be strictly treated and will be submitted to "SPHINX
Committee” (on spot examiner/coordinators).</li>
<li>Time sense will be appreciated.</li>
            </ul>
          </div>



  <div class="evencon_box">
            <h3>Judging Criteria:</h3>
      <ul class="checboxlist">
				<li><b>Level I</b> is evaluated based on number of questions answered correctly.</li>
				<li><b>Level II</b> is based on the solution and approach to a given question.</li>
				<li><b>Level III</b> is based Time taken to solve each circuit.</li>
			</ul>
 </div>


				<div class="evencon_box">
            <h3>Prizes</h3>
						<li>First:</li>
						<li>Second:</li>
						<li>Third:</li>
        </div>



		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <div class="pptable">
              <table>
                <tr>
                  <td>Suryaprakash Agarwal</td>
                  <td>7383935784</td>
				  <td>2017uec1231@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Avinash Mehto</td>
                  <td>7023461289</td>
				   <td>2017uec1315@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Vipul Raj</td>
                  <td>8987444598</td>
				   <td>2017uec1207@mnit.ac.in</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
            <a href="electrical_and_electronics.php?event=Digilog"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade Electrocrossword  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ELECTRO CROSSWORD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3><u>Event Description</u></h3>
          In this event, each team will have to solve electronic and electrical crossword. This will consist of two rounds. First round will be qualification round which will be a written quiz. The qualifying teams after first round will have to design a circuit in the second round with the help of the crossword.

</div>
          <div class="evencon_box">
            <h3><u>Format:</u></h3>
		  </div>

		   <div class="evencon_box">
            <ul class="checboxlist">

<ul><b>Level 1:</b>
	This will be a written elimination round consisting of questions and a crossword related to aptitude and basic electrical and electronics. This will be of one hour. This will consist of 2 sections. Section-A will contain 30 questions, 10 of logical reasoning, 10 of analog and 10 of digital and Section-B will be a technical crossword related to electrical and electronics. There might be provision for negative marking.
</ul>

<ul><b>Level 2:</b>
	<li><b>Round 1</b>- Qualified teams will have to first solve a crossword. This will be of 25 minutes. According to number of crossword answers, teams will be given certain number of LEDs that will help them in next round.</li>
	<li><b>Round 2</b>- Teams will have to solve the problems and circuits given to them and predict the correct output and finally display the answer on the breadboard using LEDs provided in the first round.</li>
</ul>

            </ul>
          </div>


			 <div class="evencon_box">
            <h3><u>Rules and Regulations:</u></h3>
            <ul class="checboxlist">

<li>Every team should consist a maximum of Two members.</li>
<li>Every team has to be registered for SPHINX prior to it.</li>
<li>The final decision of judges and event coordinators shall be treated as final and binding to all.</li>
<li>Any malpractice will not be tolerated and you will be disqualified on the spot.</li>
<li>Time sense will be appreciated.</li>
<li>Calculator and mobile phones will not be allowed in any round.</li>
            </ul>
          </div>




          <div class="evencon_box">
            <h3><u>Prerequisites:</u></h3>
            <ul class="checboxlist">

A basic knowledge of electrical and electronics is necessary.

            </ul>
          </div>


			 <div class="evencon_box">
            <h3><u>Judging Criteria:</u></h3>
            <ul class="checboxlist">

<li><b>Level I</b> will be evaluated based on number of questions answered correctly.</li>
<li><b>Level II</b> is based on the solution and time taken to solve the given question.</li>
            </ul>
          </div>

                             <div class="evencon_box">
            <h3><u>Prizes:</u></h3>
						<li>First:</li>
						<li>Second:</li>
						<li>Third:</li>
        </div>



		  <div class="evencon_box">
            <h3><u>Contact Us:</u></h3>
            <div class="pptable">
              <table>
                <tr>
                  <td>SURYAPRAKASH   AGARWAL</td>
                  <td>7383935784</td>
				  <td>2017uec1231@mnit.ac.in </td>
                </tr>

                <tr>
                  <td>ADITI SINGHAL</td>
                  <td>9460097308</td>
				   <td>2017uec1289@mnit.ac.in </td>
                </tr>

                <tr>
                  <td>SOURABH KUMAR</td>
                  <td>9532471137</td>
				   <td>2017uec1292@mnit.ac.in</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
            <a href="electrical_and_electronics.php?event=Electrocrossword"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade Pluggedin modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PLUGGED IN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Event Description</h3>
						This event will consist of two different rounds. Teams will be tested on the basis of their understanding of high voltage circuits, their ability to find bugs in a given circuit and application of electrical science principles in day to day life.<br><br>
	 <u><b>Round 1</b></u> will be a qualifying round. It will be a pen paper test consisting of MCQs based on Reasoning and Aptitude and Basic Electrical Engineering.<br>
	 <u><b>Round 2</b></u> will be the final round consisting of problems from electrical science based on finding fault in circuits and understand the cause behind a particular electrical problem and find its solution. There will also be problems on design and analysis of electrical circuit.


</div>
          <div class="evencon_box">
            <h3>Format: </h3>
						<u>Event will be conducted in two rounds:</u><br>
						<ul><b>Round 1</b> is the elimination round. This round will decide the finalist for the event.</ul>
          	<ul><b>Round 2</b> will be the final round and its result will decide the winners.</u>
		  		</div>


		   <div class="evencon_box">
            <h3><u>Round Wise Rules:</u></h3>
            <ul class="checboxlist">
              The event consists of two rounds:<br>
<li>1. ROUND 1</li>
<li>2. ROUND 2</li>

            </ul>
          </div>

          <div class="evencon_box">
            <h3>ROUND 1</h3>

	<ul class="checboxlist">
	<li>There will be 30 MCQs in the paper. 10 based on aptitude and logical reasoning and 20 on basic electrical engineering.</li>
	<li>Question paper will be provided to the teams and answer has to be marked on the same sheet.</li>
	<li>The paper will be of 45 minutes.</li>
	<li>Calculators won’t be allowed.</li>
	<li>Only teams clearing the set cut-off will qualify for next round. Cut-off will be decided after considering the performance of teams in this round</li>
	<li>There might be provision of negative marking for few sections of the question paper.</li>

	</ul>

	</div>

	 <div class="evencon_box">
            <h3>ROUND 2</h3>
    This round will be of 2 hours and will again be a pen paper test.
		The paper will consist of questions in 3categories :
	<ul class="checboxlist">
	<li>Category 1 – Circuit designing and analysis: Teams will be provided with a problem statement along with technical constraints. They have to design a circuit on paper based on the problem or they will be provided with a circuit and they will have to analyze its behavior.</li>
	<li>Category 2 - Fix the problem: In this category, we will provide you with a situation in which your power circuit will be malfunctioning. You need to find the problem and fix it.</li>
	<li>Category 3 – Play with Electrical Machines: In this category, fundamental problems of simple electrical machines will be asked.</li>

	</ul>

	</div>






			 <div class="evencon_box">
            <h3>Rules and Regulations:</h3>
            <ul class="checboxlist">

<li>1. Every team has to register for SPHINX.</li>
<li>2. The final decision of judges and event coordinators shall be treated as final and binding to all.</li>
<li>3. The participants are supposed to bring pens with them.</li>
<li>4. Any malpractice will be strictly treated and will be submitted to "SPHINX COMMITTEE (on spot examiner/coordinators)".</li>
            </ul>
          </div>







			 <div class="evencon_box">
            <h3>Judging Criteria:</h3>
            <ul class="checboxlist">

<li>1. For <b>Round 1</b>, teams will be judged on the basis of no. of correct attempts in paper.</li>
<li>2. For <b>Round 2</b>, teams will be judged on basis of their understanding of electrical circuits and their behaviors, their designing approach and ability to find faults  in an electrical circuit and their understanding of operation and behavior of electrical machines.</li>
            </ul>
          </div>

                    <div class="evencon_box">
            <h3>Prizes worth : </h3>
						<ul>First:</ul>
						<ul>Second:</ul>
						<ul>Third:</ul>
        </div>


		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <div class="pptable">
              <table>
                <tr>
                  <td>SURYAPRAKASH AGARWAL</td>
                  <td>7383935784</td>
				  <td>2017uec1231@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>GOURAV KHADRIA</td>
                  <td>8239609645</td>
				   <td>2017uee1477@mnit.ac.in</td>
                </tr>

                <tr>
                  <td> SOURABH KUMAR</td>
                  <td>9532471137</td>
				   <td>2017uec1292@mnit.ac.in</td>
                </tr>

              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
            <a href="electrical_and_electronics.php?event=Pluggedin"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
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
overflow-x: hidden; height: 40%;  padding-left: 210px; width:70%;border-radius: 40px 0px 0px 40px; position:absolute; margin:0 auto;
}
.title_img2{
	position:absolute; width:12%; bottom:260px; right:12%;
}
.title_img{
	position:absolute; width:24%; top:150px; left:39%;
}
.electrac{
    width: 300px;
}
</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/electrical_and_electronics.png" class="title_img">
  <section class="contentbox_pwr" style=" ">
    <div>
      <div class="ourtemamanin_wrp" style="width:100%;     border-radius:0px 0px 0px 0px; padding-top: 25px;">

        <div class="eventmain_wrp">
          <div class="container">
            <div class="row">
               <img src="" class="team-icon">


              <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box">DIGILOG</div></center>
					<p class="content_p">After spending a summer opening and then putting together various electronic devices in his house,
Sputnik has understood the importance of circuits that power the whole world. Sputnik decides to
form a group of potential pioneers who understand the basics of electronics and electrical
engineering and those who can design efficient circuits for various problems. The catch? Only those
who can clear his test can be a part of this elite group. Are you ready to take up this challenge?</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Digilog"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="electrical_and_electronics.php?event=Digilog" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>

			  <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box" style="    ">
                   <center> <div class="card_box electrac" style="">ELECRTO CROSSWORD</div></center>
					<p class="content_p">Here crosswords related to aptitude and basic electrical and electronics rifle at you. So how would you defend it? Infact how would you thrive in such an environ? Come show us your problem solving skills here at "Electro Crossword"<br> In this event, each team will have to solve various electronic and electrical science related crosswords.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Electrocrossword"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="electrical_and_electronics.php?event=Electrocrossword" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>

			   <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box">PLUGGED IN</div></center>
					<p class="content_p">After a power cut in his building, Sputnik has a new interest in studying high voltage circuits. Apart
from the complicated diagrams that he has studied in his Electrical Engineering course, Sputnik
decides to read about the applications of electrical science in real life and then moves onto
identifying faults in the circuit such as the one that caused the power cut. Help Sputnik navigate his
way through the world of complex circuitry to master the concepts of electrical engineering.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Pluggedin"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="electrical_and_electronics.php?event="Pluggedin" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</div>
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
</body>
</html>
