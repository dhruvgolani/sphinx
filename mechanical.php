<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="Aqua-missile"){
		$min=1;
		$max=3;
	} else if($event=="Inquizitive") {
		$min=1;
		$max=3;
	} else
	{
		header("Location:mechanical");
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
        <input type="hidden" name="event_type" value="Mechanical">
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

<div class="modal fade Aqua-missile  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AQUA MISSILE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
         Water rockets have been a source of entertainment and education for many years. They are usually made with an empty plastic bottle by adding water and pressurizing it with air for launching. So come, innovate and show us your product making skills by making an outstanding water rocket.
 </div>

  <div class="evencon_box">
            <h3>Team formation</h3>
    The team can consist of a maximum of 3 members.
	</div>

		 <div class="evencon_box">
            <h3>Problem Statement</h3>
   Design a water rocket that is completely powered by the thrust provided by compressed air in the bottle and using water as the fuel to increase the mass fraction.
	</div>

		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
            <ul class="checboxlist">
              The event will consist of two rounds:<br>
<li>1. ROUND 1</li>
<li>2. ROUND 2</li>
            </ul>
          </div>
          <div class="evencon_box">
            <h3>ROUND 1</h3>
           This round tests the stability of rocket. Only one chance will be provided for launching the rocket. There will be 4 regions in the arena, having different points (P).
		   </div>

		   <div class="evencon_box">
            <h3>Judging Criteria</h3>
           Total points = {Region score + Time of flight (in seconds)}
<ul class="checboxlist">
<li>1. Region BRONZE(50-70 meters) :  P = 20 points</li>
<li>2. Region SILVER(70-90 meters) :  P = 30 points</li>
<li>3. Region GOLD(90-110 meters) :  P = 40 points</li>
<li>4. Region PLATINUM (110-130 meters) : P = 50 points</li>
</ul>
		   </div>

		    <div class="evencon_box">
            <h3>ROUND 2</h3>
           Top ten teams from the first round will be selected according to the judging criteria mentioned above. The teams have to launch the rocket again and the judging criteria will be same as the first round.
		   </div>

		   <div class="evencon_box">
            <h3>Note</h3>
           Total points = {Region score + Time of flight (in seconds)}
<ul class="checboxlist">
<li>1. The Rocket must cover a distance of at least 50 meters and a maximum of 130 meters otherwise the team will be awarded 0 points.</li>
<li>2. Teams will be ranked according to total points scored.</li>
</ul>
		   </div>

		   <div class="evencon_box">
            <h3>Rules and Regulations</h3>
<ul class="checboxlist">
<li>1. Team can consist of maximum 3 members.</li>
<li>2. The size of rocket system (rocket mounted on the launcher) must fit into the launching zone which is a sector of 2.5 m radius.</li>
<li>3. Participants are supposed to get their own launching pads which can’t be shared with other teams.</li>
<li>4. Participants are advised to make different models for different rounds, in case of any damage to one, but water rockets must be identical.</li>
<li>5. Use of electronic components and chemical explosives are banned.</li>
<li>6. The rocket body should be made only with plastic bottles with aerated soft drinks of maximum capacity 2.5L.</li>
<li>7. Working fluid is water and it will be provided by organizers.</li>
<li>8. Decision of the organizers is final.</li>
</ul>
		   </div>

		  <div class="evencon_box">
            <h3>Venue</h3>
Football Ground, MNIT Jaipur
</div>

			 <div class="evencon_box">
            <h3>Registration Fee</h3>
            <ul class="checboxlist">

<li>• MNIT Students: Free of cost.</li>
<li>• Others: Rs. 50/-.</li>

            </ul>
          </div>

		                      <div class="evencon_box">
            <h3>Prizes worth : 7000/-</h3>
        </div>


		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Devendra Sahu</td>
                  <td>8989698223</td>
				  <td>2016UME1101@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Himanshu Pawar</td>
                  <td>7746894572</td>
				   <td>2016UME1226@mnit.ac.in</td>
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
            <a  href="mechanical?event=Aqua-missile" class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade Inquizitive  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INQUIZITIVE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
         The Department of Mechanical Engineering presents you a quiz contest ‘Inquzitive’. The idea is to test your knowledge in the field of Mechanical and Automobile engineering as well learn new things through fun.
 </div>

  <div class="evencon_box">
            <h3>Team formation</h3>
			<ul class="checboxlist">
				<li>1. Each team can consist of maximum 3 members.</li>
<li>2. A team can have members from same year only, like a team from 1st year should consist of members from 1st year only.</li>

	</div>



		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
            <ul class="checboxlist">
              The event will consist of two rounds:<br>
<li>1. ROUND 1</li>
<li>2. ROUND 2</li>
            </ul>
          </div>
          <div class="evencon_box">
            <h3>ROUND 1</h3>
           This round will be a written test consisting of 30 Multiple Objective type questions. The time limit for this round will be 30 minutes.
		   </div>

		   <div class="evencon_box">
            <h3>Marking Scheme</h3>
<ul class="checboxlist">
<li>1. Each correct answer will be awarded as +2 Marks</li>
<li>2. Each incorrect answer will be penalized with -1 mark.</li>
<li>3. If none of the answers have been marked teams will get 0 marks.</li>
<li>4. Maximum marks for this round = 60 marks.</li>

</ul>
		   </div>

		   <div class="evencon_box">
            <h3>Note</h3>
          The written test will be separate for 1st, 2nd and 3rd year students.
		  </div>

		    <div class="evencon_box">
            <h3>ROUND 2</h3>
           <ul class="checboxlist">
<li>1. Top 15 teams from the first round (5 teams from each year) will be selected according to the judging criteria mentioned above. </li>
<li>2. Round 2 is a buzzer round. In this round all teams will be shown 10 different questions on the board and teams will get 2 minutes to read the question and after that 5 seconds will be given to press the buzzer.</li>
<li>3. The teams will get +10 for each correct answer, +5 for partially correct answer and -5 for incorrect.</li>
<li>4. If a team does not press the buzzer in 5 seconds they will not be allowed to answer the question.</li>
		</ul>
		</div>


		                     <div class="evencon_box">
            <h3>Prizes worth : 7000/-</h3>
        </div>



		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Devendra Sahu</td>
                  <td>8989698223</td>
				  <td>2016UME1101@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Himanshu Pawar</td>
                  <td>7746894572</td>
				   <td>2016UME1226@mnit.ac.in</td>
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
            <a  href="mechanical?event=Inquizitive"  class="btn btn-input regist-popshow">Register Now</a>
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
	position:absolute; width:18%; top:150px; left:41%;
}

.inquie{
    height:320px;
}
.inquic{
    width: 300px;
}
.aqua{
    height:230px;
}
</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/mechanical.png" class="title_img">
  <section class="contentbox_pwr" style=" ">
    <div>
      <div class="ourtemamanin_wrp" style="width:100%;     border-radius:0px 0px 0px 0px; padding-top: 25px;">

        <div class="eventmain_wrp">
          <div class="container">
            <div class="row">
               <img src="" class="team-icon">


              <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box aqua" style="">
                   <center> <div class="card_box" >AQUA MISSILE</div></center>
					<p class="content_p">Sputnik is always surprised to see flying jets and missiles but does not like the pollution they cause. Sputnik finds out about water missiles which use compressed air and water only to power missiles for various ranges. He starts to build one for his own but fails. Poor Sputnik doesn't know where he went wrong. Come help Sputnik in  building the best 'AQUA MISSILE'.
</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Aqua-missile"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="mechanical?event=Aqua-missile" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
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
                   <div class="evnt_cont_box inquie" style="">
                   <center> <div class="card_box inquic" style="">INQUIZITIVE</div></center>
					<p class="content_p">Sputnik has always been curious about moving vehicles, their machinery, motors, and the science that works behind
them. He keeps an eye on every new vehicle that comes to the road, looks at its specifications and compares it with
others. He is fascinated by the world of machinery and is always ready to learn new stuffs being discovered or
modified. Basically Sputnik is an ‘avid mind’ in the field of ‘MECHANICAL AND AUTOMOBILES.’ Now here’s your
chance to compete with Sputnik in this quiz designed to test your Mechanical and Automobile knowledge.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Inquizitive"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="mechanical?event=Inquizitive" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
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
