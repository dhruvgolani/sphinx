<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="Mathematica"){
		$min=2;
		$max=3;
	} else if($event=="Moodle") {
		$min=1;
		$max=1;
	}
 else if($event=="Ultimate-crossover") {
		$min=2;
		$max=2;
	}
 else if($event=="Mission-impossible") {
		$min=2;
		$max=5;
	}
 else if($event=="Wordly-wise") {
		$min=1;
		$max=2;
	}
 else if($event=="Egg-drop") {
		$min=3;
		$max=5;
	}
 else if($event=="Shark-tank") {
		$min=1;
		$max=5;
	}	else
	{
		header("Location:extravaganza");
	}

}
?>

<!DOCTYPE html>
<script>
function reg_closed(){
    alert('Registrations has been closed for this event.');
}
</script>
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
        <input type="hidden" name="event_type" value="Extravaganza">
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

<div class="modal fade Mathematica  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MATHEMATICA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
Mathematics is the basis of most of the advancements in science and technology. To test the basic knowledge and aptitude of current learners, we have designed an interesting event, ‘MATHEMATICA’. Here, your mathematical aptitude, logic, observing ability, creativity, etc. will be judged providing you a unique learning experience. So, get ready with your teams and let the quest begin!

		 </div>

		  <div class="evencon_box">
            <h3>Team Formation</h3>
A team shall consist of maximum 3 members and minimum 2 members.
		 </div>

		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
			This event will be held in 3 rounds: <br>
            <ul class="checboxlist">

<li>1. ROUND 1 (ELIMINATION ROUND)</li>
<li>2. ROUND 2 (MATHEMATICAL PUZZLE)</li>
<li>3. ROUND 3 (BUZZER ROUND)</li>
            </ul>
          </div>
          <div class="evencon_box">
            <h3>ROUND 1 (ELIMINATION ROUND)</h3>
         This Round will consist of 50 questions and time limit will be 60 minutes.
<ul class="checboxlist">
<li>1. Questions will be in MCQ format.</li>
<li>2. Questions will be based on basic mathematical knowledge, including general aptitude, verbal reasoning, etc.</li>
</ul>

		 </div>

		  <div class="evencon_box">
            <h3>ROUND 2 (MATHEMATICAL PUZZLE)</h3>
This Round will test your logic, accuracy and speed. Rest will be revealed at the time of quiz.
	</div>

	 <div class="evencon_box">
            <h3>ROUND 3 (BUZZER ROUND)</h3>
A question will be fired & the team who presses the buzzer first gets to answer first. Questions will cover various aspects of mathematics.
	</div>


			 <div class="evencon_box">
            <h3>Rules and Regulations</h3>
            <ul class="checboxlist">

<li>The decision of the quiz master will be final and will not be subjected to any change.</li>
<li>Participants will not be allowed to use mobiles, calculators or other electronic instruments.</li>
<li>Audience is not supposed to give any hints or clues to the competitors.</li>
<li>The participants are supposed to bring their own pens/markers.</li>
<li>Rough sheets will be provided.</li>


            </ul>
          </div>

		   <div class="evencon_box">
            <h3>Judging Criteria</h3>
            <ul class="checboxlist">

 <li>Maximum of 10 teams will be selected for Round 2 on the basis of top 10 scorers in Round 1.</li>
 <li>5 teams will go further for final round.</li>
 <li>Top 3 teams will be awarded.</li>
            </ul>
          </div>


          <div class="evencon_box">
            <h3>Note</h3>
            <ul class="checboxlist">
           <li>The decision of the judges and the organizers shall be final and abiding.</li>
            </ul>
          </div>

                              <div class="evencon_box">
            <h3>Prizes worth : 6000/-</h3>
        </div>


		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Shubham</td>
                  <td>8969725749</td>
				  <td>2016uec1069@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Surya Bihani</td>
                  <td>8875542879</td>
				   <td>2018pma5361@mnit.ac.in</td>
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
            <a href="" onclick="reg_closed();"   class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="" onclick="reg_closed();"  class="btn btn-input regist-popshow">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade Moodle  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MOODLE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
A doodle is a drawing made while a person's attention is otherwise occupied. Doodles are simple drawings that can have concrete representational meaning or may just be composed of random and abstract lines, generally without ever lifting the drawing device from the paper, in which case it is usually called a "scribble".

		 </div>





		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
          </div>
		   <div class="evencon_box">
            <h3>Theme: Hollywood movies</h3>
			<ul class="checboxlist">
<li>Only doodles drawn with pen or pencil are accepted.</li>
<li>You can also use colors.</li>
<li>All doodles must be the artwork of one individual.</li>
<li>Only judges will choose the winning entries.</li>
<li>No purchase necessary to enter or win.</li>
</ul>

		 </div>




		   <div class="evencon_box">
            <h3>Judging Criteria</h3>
			 Each Doodle will be evaluated and scored based on the following "Criteria":
            <ul class="checboxlist">



<li>Artistic merit- Drawing skills and use of color.</li>
<li>Creativity and originality - Considering the representation of the contest theme, as well as the unique and novel approach to the Doodle.</li>
<li>Communication of the Contest theme in both the drawing and supporting statement - how well the entrant explains the theme in the supporting statement and drawing.</li>




            </ul>
          </div>





                              <div class="evencon_box">
            <h3>Prizes worth : 4500/-</h3>
        </div>





		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Nitesh Kumar</td>
                  <td>8769085013</td>
				  <td>2016uar1652@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Aditya Sinha</td>
                  <td>8949296150</td>
				   <td>2016uec1070@mnit.ac.in</td>
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
            <a href="extravaganza?event=Moodle"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade Shark-tank  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SHARK TANK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
The best place for aspiring entrepreneurs as they make their business presentations to a panel of ‘shark’ investors, who judge the teams and choose whether
to invest as business partners!

		 </div>

		 <div class="evencon_box">
            <h3>Team Formation</h3>
			The team can consist of a maximum of 5 members.
          </div>


		   <div class="evencon_box">
            <h3>Structure of the event</h3>
			The event will consist of two rounds:
			<ul class="checboxlist">
			<li>ROUND 1</li>
			<li>ROUND 2</li>
			</ul>
          </div>

		  <div class="evencon_box">
            <h3>ROUND 1</h3>
			This round is the stand-alone public B-plan pitching, where the start-up would present their idea in a nutshell on any mode of presentation, within 5-7 minutes.

          </div>





		   <div class="evencon_box">
            <h3>Judging Criteria</h3>
			<ul class="checboxlist">
			<li>The B-plans will be selected based on idea conceptualization, innovativeness, short term and long term prospect, profit maximization, techniques, uniqueness of the idea, practical problems, solution analysis, withstanding market competition, budget allocation and progressiveness. </li>
			</ul>
          </div>

		  <div class="evencon_box">
            <h3>ROUND 2</h3>
			The top 5-7 teams based on the no. of participants shall advance to Round 2 and will take up shuffled B-plans of an arbitrary selected team and improvise and present it.
          </div>





		   <div class="evencon_box">
            <h3>Judging Criteria</h3>
			<ul class="checboxlist">
			<li>Top 5-7 teams will be selected based on their performance in Round 1 and then each team will be handed with a unique B-plan of another team and their task will be to improvise and refurbish their B-plan and present them in a better way than the original team would do. They will be judged upon unbiased working and instant logical thinking towards development of ideas.  </li>
			</ul>
          </div>

		   <div class="evencon_box">
            <h3>Rules and Regulations</h3>
			<ul class="checboxlist">
<li>Students from all departments and year of study can take part in the event.</li>
<li>Use of internet during presentation is not allowed, unless otherwise if the product/service requires its functions to be internet operated, about which the team has to inform the event coordinators beforehand for the modifications to be made. </li>
<li>Teams shall note the details of the pitching teams to assess them and produce their ideas if selected in 2nd round.  </li>
<li>It’s not necessary to realize an actual product/service to take part in the event. The presentation can be on a hypothetical product/service based on a real valid idea.</li>
<li>If any team is found playing against the rules, is liable to be disqualified, at any point/stage of the event by the organizing party or judges.  </li>
<li>The decision of the panel is final and abiding. </li>



			</ul>
          </div>

		     <div class="evencon_box">
            <h3>Judges*</h3>
			<ul class="checboxlist">
<li>Dr. Amar Patnaik (Faculty member, Dept. of Mechanical Engineering) </li>
<li>Dr. Monica Sharma (Faculty Coordinator, ED Cell) </li>
  (* → Subject to change)




			</ul>
          </div>

		    <div class="evencon_box">
            <h3>Registration Fee</h3>
			<ul class="checboxlist">
<li>MNIT students: Free of cost</li>
<li>Others: Rs. 200/-</li>

			</ul>
          </div>


                              <div class="evencon_box">
            <h3>Prizes worth : 4500/-</h3>
        </div>


		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Rohan Shreedhar Badiger</td>
                  <td>9983876720</td>
				  <td>2016ume1010@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Dhruv Jain</td>
                  <td>9784200509</td>
				   <td>2016ucp1018@mnit.ac.in</td>
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
            <a href="extravaganza?event=Shark-tank"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade Egg-drop  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EGG DROP CHALLENGE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
Working in a team with limited supplies, create a device to house an egg so that when dropped from an elevated location, the egg stays intact;
‘EGG DROP CHALLENGE’ team building task gets teams working together,   thinking creatively and managing their time.


		 </div>

		 <div class="evencon_box">
            <h3>Team Formation</h3>
			The team can consist of 3-5 participants.
          </div>



		   <div class="evencon_box">
            <h3>Structure of the event</h3>
			The team will be asked to make a compact structure from limited materials, which will prevent a raw egg from breaking when it is dropped by the facilitator from a height of 20ft.
          </div>

		  <div class="evencon_box">
            <h3>Key themes</h3>
			<ul class="checboxlist">
<li>Teamwork</li>
<li>Creativity</li>
<li>Time Management</li>
</ul>

 </div>

   <div class="evencon_box">
            <h3>Materials Available</h3>
			<ul class="checboxlist">
<li>Eggs for one per team plus two spare</li>
<li>Straws (approx. 50 per team)</li>
<li>Gaffer/cloth tape</li>
<li>Cardboard</li>
<li>Thermocol</li>
<li>PU Foam</li>
<li>Balloons</li>
<li>Glue</li>
<li>Cotton roll</li>
<li>Hay</li>
<li>Newspaper</li>
<li>Thin strips of wood</li>

</ul>

 </div>



		  <div class="evencon_box">
            <h3>TIMING</h3>
		15 – 30 minutes.
          </div>





		   <div class="evencon_box">
            <h3>Judging Criteria</h3>
			The model will be evaluated based on its effectiveness, simplicity, design explanation, aesthetics and time to design the model. There will be some penalty in case the model doesn’t work in the first attempt.
          </div>

		  <div class="evencon_box">
            <h3>Grading Policy (out of 100 points)</h3>
			The model will be graded only if the egg remains intact or is just partially cracked (content of the egg doesn’t come out).<br>Should more than one team succeed in protecting their egg, the winner will be determined by the fewest straws used.
<ul class="checboxlist">
<li>Partially Cracked Egg - 10 points</li>
<li>Intact Egg - 30 points</li>
<li>Simple & Effective design - 20 points</li>
<li>Design explanation - 20 points</li>
<li>Time taken : <30 min - 20 points, <45 min - 10 points</li>
<li>Aesthetics - 10 points</li>
<li>Penalty of 10 points for using second chance</li>

</ul>
  </div>





		   <div class="evencon_box">
            <h3>Rules</h3>
			<ul class="checboxlist">
<li>Maximum size of structure – 12*12*12(inch) </li>
<li>Dropping height – 20 feet</li>
<li>Use of adhesives between material and egg is not permitted.</li>
<li>Maximum time will be 1 hour for designing the structure after getting the materials. </li>
<li>The structure should be dropped with zero velocity. </li>
<li>Two chances shall be given to each Team. However, the second chance will lead to a penalty of 10 points.</li>
<li>Teams are not allowed to take structure with them. </li>
<li>Teams can only use materials provided at that time. Using materials from outside will lead to disqualification.</li>
<li>You can't slow the egg down with a parachute .</li>

</ul>
          </div>




		    <div class="evencon_box">
            <h3>Registration Fee</h3>
			<ul class="checboxlist">
<li>MNIT students: Free of cost</li>
<li>Others: Rs. 50/-</li>

			</ul>
          </div>



                              <div class="evencon_box">
            <h3>Prizes worth : 4500/-</h3>
        </div>







		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Gauri Sharma</td>
                  <td>8076308448</td>
				  <td>2016uar1062@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Aditya Sinha</td>
                  <td>8949296150</td>
				   <td>2016uec1070@mnit.ac.in</td>
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
            <a href="extravaganza?event=Egg-drop"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade Ultimate-crossover  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">THE ULTIMATE CROSSOVER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
Are you an avid Marvel fan or DC fan? <br>
Are you more like Spiderman and Iron Man or Batman and Superman?<br>
 If you are into comics then you would’ve probably played out a variety of these confrontations between the two realms in your mind. Well to bring these fantasies closer to reality we’ve pinned these characters together right here in glorious battle of epic proportions. <br>
Which of these would emerge as victors?

		 </div>

		 <div class="evencon_box">
            <h3>Team Formation</h3>
			Each team should consist of 2 members. Both members should belong to the same institute.
          </div>



		   <div class="evencon_box">
            <h3>Structure of the event</h3>
			This event will be held in 2 rounds.
<ul class="checboxlist">
<li>ROUND 1</li>
<li>ROUND 2</li>
</ul>
			</div>


		  <div class="evencon_box">
            <h3>ROUND 1</h3>
			Round 1 is the elimination round. It will decide the finalist for the events.
			<ul class="checboxlist">
<li>This will be pen and paper based quiz round.</li>
<li>There will be 60 questions in the paper. Topics will range  from Marvel Realm to DC Realm.</li>
<li>The paper will be of 60 minutes.</li>
<li>Certain Sections of paper will carry more weightage. </li>
<li>Only teams clearing the set cut-off will qualify for next round. Cut-off will be decided after considering the performance of teams in this round</li>


</ul>

 </div>

   <div class="evencon_box">
            <h3>Judging Criteria</h3>
		In this round, teams will be judged on the basis of number of correct answers with more weightage given to certain questions.

 </div>

   <div class="evencon_box">
            <h3>ROUND 2 (FINAL SHOWDOWN):</h3>
			This is the final round of the event.The top performers of the prelims will proceed to the final round consisting of a visual presentation. The marking scheme and rules will be announced on the spot for both the rounds.
			<ul class="checboxlist">
<li>The Final Showdown will consist of two sub-rounds.</li>
<li>The first sub-round will comprise of audio visual clues.</li>
<li>The second sub-round will be a buzzer round including audio-visual clues.</li>
<li>Further details will be revealed after the first round.</li>


</ul>

 </div>

   <div class="evencon_box">
            <h3>Judging Criteria</h3>
		For this round, judging criteria will be revealed after the first round.
 </div>

		  <div class="evencon_box">
            <h3>Note</h3>
			<ul class="checboxlist">
			<li>The decision of the judges and the organizers shall be final and abiding.</li>
<li>The students are supposed to bring pens along with them for various rounds.</li>
<li>Use of mobile phone will entail disqualification.</li>
<li>The rules and regulations of the event are subject to change, if modified, will be informed to the participants.</li>


</ul>
  </div>

                              <div class="evencon_box">
            <h3>Prizes worth : 4500/-</h3>
        </div>


  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Samihan Nandedkar</td>
                  <td>7972228793</td>
				  <td>2016uec1051@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Vandita Goyal</td>
                  <td>8800926540</td>
				   <td>2016ucp1004@mnit.ac.in</td>
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
            <a href="" onclick="reg_closed();"   class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="" onclick="reg_closed();"   class="btn btn-input regist-popshow">Register Now</a>
		<?php  }?>
        </div>
		</div>
    </div>
  </div>
</div>

		<div class="modal fade Mission-impossible  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MISSION IMPOSSIBLE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
Let your intellect shine, let the rolling of brain race with every passing of minute. We are here with a challenge to test your technical wits and juggle with your IQ.


		 </div>

		 <div class="evencon_box">
            <h3>Team Formation</h3>
			A team with a minimum of 2 and maximum of 5 members can participate.
          </div>



		   <div class="evencon_box">
            <h3>Structure of the event</h3>
			The event will be conducted in 2 rounds.
<ul class="checboxlist">
<li>ROUND 1</li>
<li>ROUND 2</li>
</ul>
			</div>


		  <div class="evencon_box">
            <h3>ROUND 1</h3>
			In this round, there will be a quiz based on current affairs, general knowledge, aptitude, sports, science and technology, movies etc. Teams will be given 30 minutes to attempt the quiz.


 </div>

   <div class="evencon_box">
            <h3>ROUND 2</h3>
		“Your mission, should you choose to accept it.’’<br>
A round full of brain storming puzzles and surprises. Teams will have to perform the given tasks as soon as possible to gain maximum points.


 </div>

   <div class="evencon_box">
            <h3>Rules and Regulations</h3>
			<ul class="checboxlist">
<li>The competition is open to all college students.</li>
<li>Every team will have to register online on our website for the competition. A registration number will be allocated to the team on registration which shall be used for future references.</li>
<li>The decision of the judges shall be treated as final.</li>
</ul>
 </div>

   <div class="evencon_box">
            <h3>Note</h3>

			<ul class="checboxlist">
<li>The students are supposed to bring pens along with them for various rounds.</li>


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
                  <td>Swaraj Thakre</td>
                  <td>8875682370</td>
				  <td>2016ucp1663@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Ashish Goyal</td>
                  <td>9024686835</td>
				   <td>2016ucp1100@mnit.ac.in</td>
                </tr>

				<tr>
                  <td>Abhishek Tibrewal</td>
                  <td>9413163601</td>
				   <td>2016ucp1103@mnit.ac.in</td>
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
            <a href="extravaganza?event=Mission-impossible"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade Wordly-wise  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">WORDLY WISE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
Let your intellect shine, let the rolling of brain race with every passing of minute. We are here with a word game where your knowledge, memory, wit and team work skills are tested with you having immense fun all along.

		 </div>

		 <div class="evencon_box">
            <h3>Team Formation</h3>
			Each team should consist of 2 members.
          </div>



		   <div class="evencon_box">
            <h3>Structure of the event</h3>
			This event will be held in 2 rounds.
<ul class="checboxlist">
<li>ROUND 1 (PRELIMS)</li>
<li>ROUND 2 (FINALS)</li>
</ul>
			</div>


		  <div class="evencon_box">
            <h3>ROUND 1 (PRELIMS)</h3>
			The prelims will consist of 50 questions to be answered in a 60 minutes duration. The quiz will contain various word games like crossword, analogies, scramble the world.


 </div>

   <div class="evencon_box">
            <h3>ROUND 2 (FINALS)</h3>
		The final round will be a visual presentation.

 </div>

  <div class="evencon_box">
            <h3>Note</h3>
		The marking scheme and rules will be announced on the spot for both the rounds.

 </div>

   <div class="evencon_box">
            <h3>Rules and Regulations</h3>
			<ul class="checboxlist">
<li>The competition is open to all college students, research scholars.</li>
<li>Every team will have to register online on our website for the competition. A registration number will be allocated to the team on registration which shall be used for future references.</li>
<li>Any communication with the judge will result in disqualification.</li>

</ul>
 </div>

   <div class="evencon_box">
            <h3>Note</h3>

			<ul class="checboxlist">
<li>The decision of the judges and the organizers shall be final and abiding.</li>
<li>The students are supposed to bring pens along with them for various rounds.</li>


</ul>

 </div>

                              <div class="evencon_box">
            <h3>Prizes worth : 4500/-</h3>
        </div>





  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Shambhawi</td>
                  <td>9057221674</td>
				  <td>2016ucp1470@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Leenashree Chaudhari</td>
                  <td>8239042033</td>
				   <td>2016uec1013@mnit.ac.in</td>
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
          <a href="" onclick="reg_closed();"   class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="" onclick="reg_closed();"   class="btn btn-input regist-popshow">Register Now</a>
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
position:absolute; width:22%; top:150px; left:39%;
}
.sharktank{
    height:300px;
}
.missionimpo{
    height:350px;
}
</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/extravaganza.png" class="title_img">
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
                   <center> <div class="card_box">MATHEMATICA</div></center>
					<p class="content_p">Sputnik came to know about the great Indian mathematics wizard Srinivas Ramanujan who devised literally 3900 results in math and that day he decided to become Anuj of  Ramanujan and started buckling down on math. To prove his excellence he decided to conduct a mathematics quiz named Mathematica. Are you a math genius? Then come join and prove your dominance.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Mathematica"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                   		 <a href="" onclick="reg_closed();" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
         <?php } else
		 { ?>
			 <a href="" onclick="reg_closed();" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>

			  <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box">MOODLE</div></center>
					<p class="content_p">Sputnik enjoys doodling in his free time and often uses the back of his notebook as a canvas. A
movie buff, Sputnik’s bedroom walls are lined with doodles of some of the most beloved films of all
times. In an effort to encourage the free spirit of art, Sputnik is holding a doodle competition based
on the theme of movies, thus leading to the creation of MOODLE, a rendition of screen on paper.
</p>
					<div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Moodle"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="extravaganza?event=Moodle" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
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
                   <center> <div class="card_box">WORDLY WISE</div></center>
					<p class="content_p">Sputnik believes that English is one of the most dominating languages of the world which is
having its impact on every field of work. He thinks that it plays a significant role in the world
that is inevitable for people to ignore this fully. For this very reason, Sputnik decides to
conduct a English language clash which would test a range of your English skills in the form
of crosswords, puzzles to even solving riddles!
</p>
<div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Wordly-wise"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    		 <a href="" onclick="reg_closed();" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
         <?php } else
		 { ?>
				 <a href="" onclick="reg_closed();" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>

			   <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp"  >
                   <div class="evnt_cont_box sharktank" style="">
                   <center> <div class="card_box">SHARK TANK</div></center>
					<p class="content_p">
					“Always work on your own terms” is the motto Sputnik lives by .The modest “9 to 5 jobs” have never been his cup
of tea. Sputnik’s thoughts have always wandered around finding solutions about basic problems and making a living
out of it. The desire of being his own boss has always driven him to shape his dreams into reality. To each and every
problem in his world, Sputnik believes one day, he shall have a solution. If you deem yourself to be as ambitious as
Sputnik, come and help him to design a model, as he vies to earn recognition among the top budding entrepreneurs
of today.
					</p>
					<div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Shark-tank"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="extravaganza?event=Shark-tank" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
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
                   <center> <div class="card_box">EGG DROP CHALLENGE</div></center>
					<p class="content_p">Sputnik was recently having a conversation with his friends where he heard of the *Egg
Drop* challenge. He was very curious to know more about this challenge and and in this
process he came to know that this challenge is a fun way to incorporate critical thinking and
problem solving abilities. So he decides to convoy this very challenge to test our creativity,
innovation and perfection.
</p>
 <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Egg-drop"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="extravaganza?event=Egg-drop" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
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
                   <center> <div class="card_box">THE ULTIMATE CROSSOVER</div></center>
					<p class="content_p">Sputnik is crazy about comics and has seen all the movies of marvel and dc but is unable to
choose one between the two as he believes that each of them are special in their own way.
So Sputnik decides to conduct *The ultimate crossover* where he has pinned these
characters together right here in this quiz. Help Sputnik get out of this dilemma and bring
these fantasies closer to reality !
</p>
 <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Ultimate-crossover"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                  		 <a href="" onclick="reg_closed();" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
         <?php } else
		 { ?>
					 <a href="" onclick="reg_closed();" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
		<?php  }?>
                    </div>
                  </div>
                </div>
              </div>


			  <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box missionimpo" style="">
                   <center> <div class="card_box">MISSION IMPOSSIBLE</div></center>
					<p class="content_p">Sputnik has learnt of an old fable that talks of a fantastic lost treasure, hidden since centuries in a
fantasy land. He pores over hundreds of ancient books to look for this fabulous treasure but the map
to the treasure has mysteriously vanished. Many before him have tried and failed to find the
treasure. In his quest for the treasure, he meets a wizened old woman who promises to guide him to
the location of the famed treasure. The catch? She speaks only in riddles and Sputnik must test his
wits against time to reach the treasure through a series of winding clues in a challenge that’s nothing
short of MISSION IMPOSSIBLE.
</p>
 <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Mission-impossible"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="extravaganza?event=Mission-impossible" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
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
