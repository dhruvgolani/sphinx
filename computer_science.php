<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min=1;
	$max=1;
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="Code-of-war"){
		$min=1;
		$max=2;
	} else if($event=="Reading-between-the-lines") {
		$min=1;
		$max=2;
	} else if($event=='Blind-code') {
		$min=1;
		$max=1;
	}else if($event=='Binary-battle') {
		$min=1;
		$max=2;
	}  else
	{
		header("Location:computer_science");
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
                  <option value="<?=$i;?>"  ><?=$i;?></option>
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
        <input type="hidden" name="event_type" value="Computer Science">
        <input type="hidden" name="event_name" value="<?php echo $event; ?>">
        <input type="hidden" name="url" value="<?=$_SERVER['REQUEST_URI'];?>">
        <p style="color:#CF5759"><?=@$_SESSION['Error']; @$_SESSION['Error']=null;?></p>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="submitreg" class="btn btn-input">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade Code-of-war  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CODE-OF-WAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
            Sphinx’19 presents Code-of-War, a competitive programming competition for the
students. This is the right place to test your skills and winning exciting prizes. If you
love algorithms, let us know how well you know! </div>


		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
            <ul class="checboxlist">
              This event consists of two rounds:<br>
<li>1. Online Elimination Round</li>
<li>2. Onsite Final</li>
            </ul>
          </div>
          <div class="evencon_box">
            <h3>ONLINE ELIMINATION ROUND</h3>
            It will be a 3 hour Online Elimination Round. The online round will be held on Codechef. Any Indian student studying in India can participate in this round however a mandatory registration is required for being eligible. For registrations visit www.sphinxmnit.org.You will also need a Codechef account to participate. For Codechef account visit www.codechef.com. Participants are allowed to form a team of maximum two members. Top 50 eligible teams according to their rankings will proceed further.

            <br>
            <br>
            <b>Steps for complete registration for Round 1 (Elimination Round) :</b>
            <ol>
                <li>Register yourself at our website and obtain SPHINX ID</li>
                <li>Register your team at <b>CODE OF WAR</b> under Core Love -> Computer Science category using your SPHINX ID</li>
                <li>Register your team at Code of War <b>CodeChef</b> page at the link <a href='https://www.codechef.com/COW2018?order=desc&amp;sortBy=successful_submissions'>CodeChef registration link</a></li>
            </ol>
          </div>

		  <div class="evencon_box">
            <h3>ONSITE FINAL</h3>
            This will be an onsite finale in which top performers of the online elimination round will
participate. Venue: Malaviya National institute of Technology, Jaipur. To participate in
this round you have to register for Sphinx’19 and also secure a rank within top 50 teams
in Online Round. Participants will not be allowed to change team member after first
round. Details of this event will be sent to eligible candidates.			</div>

			 <div class="evencon_box">
            <h3>Rules and Regulations:</h3>
            <ul class="checboxlist">

<li>1. This is an IOI style contest. This means that the problems will be partially graded. You will get score for passing certain test cases.</li>
<li>2. You can submit solutions as many times as you like, there is 20 Minutes penalties for each incorrect submissions. Only your best correct submission will be considered.</li>
<li>3. Those who achieve the highest score first i.e. their submission time is less, will be placed higher in the rank list in case of a tie.</li>
<li>4. The contest is meant for students of high school and middle school though everyone is invited to participate.</li>
<li>5. Please do not discuss strategy, suggestions or tips in the comments during a live contest.</li>
<li>6. Decision of organizers will be final.</li>
<li>7. Participants are requested to bring their valid identity proof during event.</li>
<li>8. Team of maximum 2 members.</li>

            </ul>
          </div>




          <div class="evencon_box">
            <h3>Platform:</h3>
            <ul class="checboxlist">
           <li>	CodeChef:  A Platform for Aspiring Programmers</li>
CodeChef was created as a platform to help programmers make it big in the world of algorithms, computer programming and programming contests. At CodeChef, people work hard to revive the geek in you by hosting programming contests at the start of the month and another smaller programming challenge in the middle of the month.

            </ul>
          </div>

		            <div class="evencon_box">
            <h3>Prizes worth : TBA</h3>
            <h3>Date : TBA </h3>
        </div>




		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Suryaprakash Agarwal</td>
                  <td>7016268414</td>
				  <td>2017uec1231@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Ritika Mor</td>
                  <td>9588649104</td>
				   <td>2017uec1194@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Tapan Goyal</td>
                  <td>8384859398</td>
				   <td>2017ucp1582@mnit.ac.in</td>
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
            <a href="computer_science.php?event=Code-of-war"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade Reading-between-the-lines  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">READING BETWEEN THE LINES</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
            Hey Folks!! Ever wondered how Google gives lakhs of results in just milliseconds with so
much accuracy!! Every single extra space matters a lot! Likewise: “You have to give
accurate results with minimum code characters!!” This competition focuses on short
and succinct code. The Challenge is to produce answers to the given problems with as
little code as possible. This is a war; better get your A-game on board!!
 </div>


		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
            <ul class="checboxlist">
              This event consists of two rounds:<br>
<li>1. ROUND-1 (ELIMINATOR)</li>
<li>2. ROUND-2 (FINAL)</li>
            </ul>
          </div>


          <div class="evencon_box">
            <h3>ROUND-1 (ELIMINATOR)</h3>
            The First Round is a screening round comprising of an Aptitude cum Programming Quiz
that will push you to think on your feet and get the best out.Teams Have to Report MNIT,
Jaipur for the eliminator Quiz.</div>

		  <div class="evencon_box">
            <h3>Format</h3>
 <ul class="checboxlist">
<li>TIME : 60 minutes</li>
<li>Number of questions : 40</li>
</ul>
			</div>

			<div class="evencon_box">
            <h3>Judgement Criteria</h3>
 Each Correct Answer carries 3 marks and Wrong Answer will deduce 1 mark.
			</div>

			 <div class="evencon_box">
            <h3>Rules and Regulations:</h3>
            <ul class="checboxlist">

<li>1. Bringing pens to the event is mandatory. No pens will be provided from our side.</li>
<li>2. Team of maximum 2 members.</li>
<li>3. Top 30-35 teams will advance to Round 2.</li>
            </ul>
          </div>



		   <div class="evencon_box">
            <h3>ROUND-2 (FINAL)</h3>
This will be an onsite finale in which top performers of the first round will participate.
</div>

		  <div class="evencon_box">
            <h3>Format</h3>
			6 programming questions:
			 <ul class="checboxlist">
<li>Two Easy Questions</li>
<li>Two Medium Questions</li>
<li>Two Hard Questions</li>
<br>
VENUE: Programming lab in Computer Center (200 PCs with Internet Connectivity.)<br>
TIME: 3 hrs

</ul>
			</div>

			<div class="evencon_box">
            <h3>Judgement Criteria</h3>
In addition to the correctness of code and the number of correct questions solved, weightage will also be given to the number of characters of the source code of the program. Time taken to solve problems does not matter.
			</div>

			 <div class="evencon_box">
            <h3>Rules and Regulations:</h3>
            <ul class="checboxlist">

<li>1. Only ‘C’ Programming language is allowed.</li>
<li>2. Team size of maximum 2 members.</li>
<li>3. Coding test on Hackerearth.</li>
<li>4. No electronic gadgets are allowed.</li>
<li>5. Bringing pens to the event is mandatory. No pens will be provided from our side.</li>
<li>6. Every Team member must have sphinx id.</li>
<li>7. Decision of organizers will be final.</li>
            </ul>
          </div>

                    <div class="evencon_box">
            <h3>Prizes worth : TBA</h3>
            <h3>Date : TBA </h3>
        </div>


		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
              <tr>
                  <td>Suryaprakash Agarwal</td>
                  <td>7016268414</td>
				  <td>2017uec1231@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Ravi Saraswat</td>
                  <td>9068995332</td>
				   <td>2017uec1633@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Himanshu Gwalani</td>
                  <td>8209487925</td>
				   <td>2017ucp1356@mnit.ac.in</td>
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
            <a href="computer_science.php?event=Reading-between-the-lines"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade Blind-code  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BLIND CODE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
            Welcome to the ultimate challenge of Blind Coding.
Are you confident enough to code simple programs without looking at your monitor screen?
Then You Are At Right Place !
Blind coding is a C programming event where competitors need to write the program by
switching off monitors.
Beware! You can&#39;t see the bugs you produce. </div>


		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
            <ul class="checboxlist">
              This event consists of two rounds:<br>
<li>1. ROUND-1 (ELIMINATOR)</li>
<li>2. ROUND-2 (FINAL)</li>
            </ul>
          </div>


          <div class="evencon_box">
            <h3>ROUND-1 (ELIMINATOR)</h3>
            The First Round is a screening round comprising of an Aptitude cum Programming Quiz
that will need you to scratch on your head.Teams Have to Report MNIT, Jaipur for the
eliminator Quiz.</div>

		  <div class="evencon_box">
            <h3>Format</h3>
 <ul class="checboxlist">
<li>TIME : 30 minutes</li>
<li>Number of questions : 20</li>
</ul>
			</div>

			<div class="evencon_box">
            <h3>Judgement Criteria</h3>
 Each Correct Answer carries 3 marks and Wrong Answer will deduce 1 mark.
			</div>

			 <div class="evencon_box">
            <h3>Rules and Regulations:</h3>
            <ul class="checboxlist">

<li>1. Bringing pens to the event is mandatory. No pens will be provided from our side.</li>
<li>2. Team of maximum 2 members.</li>
<li>3. Top 30-35 teams will advance to Round 2.</li>
            </ul>
          </div>



		   <div class="evencon_box">
            <h3>ROUND-2 (FINAL)</h3>
This will be an onsite finale in which top performers of the first round will participate.
</div>

		  <div class="evencon_box">
            <h3>Format</h3>
			2 programming questions:
			 <ul class="checboxlist">
<li>One Easy Questions</li>
<li>one Medium Questions</li>
<br>
VENUE: Programming lab in Computer Center (200 PCs with Internet Connectivity.)<br>
TIME: 3 hrs

</ul>
			</div>

			<div class="evencon_box">
            <h3>Judgement Criteria</h3>
            The Judging will be made on the basis of score that you achieved in the onsite contest. In
case of tie , there will be manually checking of your codes and teams which have least
no. Of errors in their code would be declared as winner.
			</div>

			 <div class="evencon_box">
            <h3>Rules and Regulations:</h3>
            <ul class="checboxlist">

<li>1. Only ‘C’ Programming language is allowed.</li>
<li>2. Team size of maximum 2 members.</li>
<li>3. Coding test on Hackerearth.</li>
<li>4. No electronic gadgets are allowed.</li>
<li>5. Bringing pens to the event is mandatory. No pens will be provided from our side.</li>
<li>6. Every Team member must have sphinx id.</li>
<li>7. Decision of organizers will be final.</li>
            </ul>
          </div>

                    <div class="evencon_box">
            <h3>Prizes worth : TBA</h3>
            <h3>Date : TBA </h3>
        </div>


		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
              <tr>
                  <td>Suryaprakash Agarwal</td>
                  <td>7016268414</td>
				  <td>2017uec1231@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Ravi Saraswat</td>
                  <td>9068995332</td>
				   <td>2017uec1633@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Tapan Goyal</td>
                  <td>8384859398</td>
				   <td>2017ucp1582@mnit.ac.in</td>
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
            <a href="computer_science.php?event=Blind-code"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade Binary-battle  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BINARY BATTLE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
            Hey folks! Sphinx’19 presents Binary-Battle, a one-on-one programming competition.
Are you fans of head-on challenges then you are at the right place!
Let us know how well you are and test your skills to win exciting prizes.</div>


		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
            <ul class="checboxlist">
              This event consists of two rounds:<br>
<li>1. Online Elimination Round</li>
<li>2. Onsite Final</li>
            </ul>
          </div>


          <div class="evencon_box">
            <h3>ONLINE ELIMINATION ROUND</h3>
            It will be a 3 hour Online Elimination Round. The online round will be held on
hackerearth. However you need to register prior to the competition. For registrations
visit <a href="http://www.sphinxmnit.org/" style="color:blue"> www.sphinxmnit.org </a>. You will also need a hackerearth account to participate. For
hackerearth account visit <a href="https://www.hackerearth.com/" style="color:blue"> www.hackerearth.com </a>.
Top 16 participats will be qualified according to their rankings.</div>

		  <div class="evencon_box">
            <h3>Steps for complete registration for Round 1 (Elimination Round) :</h3>
 <ul class="checboxlist">
<li>Register yourself at our website and obtain SPHINX ID</li>
<li>Register your team at <b>Binary Battle</b> under Core Love -&gt; Computer Science
category using your SPHINX ID</li>
<li>Register yourself at  <b>hackerearth</b> page at the link hackerearth registration link</li>
</ul>
			</div>

			<div class="evencon_box">
            <h3>Judgement Criteria</h3>
            The winner of each head-on will be decided by the scores of the teams. However if the
score of both the teams is same then the team which achieved the score first would
advance to the next round.
			</div>

			 <div class="evencon_box">
            <h3>Rules and Regulations:</h3>
            <ul class="checboxlist">

<li>1. Please do not discuss strategy, suggestions or tips in the comments during a live contest.</li>
<li>2. Decision of organizers will be final.</li>
<li>3. Participants are requested to bring their valid identity proof during event.</li>
<li>4. This is a team contest – maximum of 2 team members is allowed.</li>
<li>5. Plagiarism by any means will lead to immediate disqualification of the participant.</li>
<li>6. Be on time for onsite round.</li>
<li>7. Pairs will be formed by organizers randomly.</li>
<li>8. Decision of organizers will be final.</li>
            </ul>
          </div>



		   <div class="evencon_box">
            <h3>ONSITE FINAL</h3>

            <br>
<b>VENUE</b>: Malaviya National institute of Technology, Jaipur.<br>
<b>QUALIFICATION</b>: To participate in this round you have to register for Sphinx 3.0 and also
secure a rank within the top 16 teams in Online Round.
<br><br>

    <b>CONTEST</b>        This will be a one on one contest.
Out of 16 selected teams, 8 pairs will be formed randomly.
These pairs of teams will compete against each other head on and the winner out of the
two teams will advance to the next round.
So, in next stage there will be (16/2 = 8) teams.
This will go on (8 pairs =&gt; 4 pairs =&gt; 2 pairs =&gt; 1 pair) in each consecutive stage.
In each stage pairs will be formed randomly by organiser.
</div>

</ul>
			</div>

			<div class="evencon_box">
            <h3>Judgement Criteria</h3>
            The winner of each head-on will be decided by the scores of the teams. However if the
score of both the teams is same then the team which achieved the score first would
advance to the next round.
			</div>

			 <div class="evencon_box">
            <h3>Rules and Regulations:</h3>
            <ul class="checboxlist">

<li>1. Only ‘C’ Programming language is allowed.</li>
<li>2. Team size of maximum 2 members.</li>
<li>3. Coding test on Hackerearth.</li>
<li>4. No electronic gadgets are allowed.</li>
<li>5. Bringing pens to the event is mandatory. No pens will be provided from our side.</li>
<li>6. Every Team member must have sphinx id.</li>
<li>7. Decision of organizers will be final.</li>
            </ul>
          </div>

                    <div class="evencon_box">
            <h3>Prizes worth : TBA</h3>
            <h3>Date : TBA </h3>
        </div>


		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
              <tr>
                  <td>Suryaprakash Agarwal</td>
                  <td>7016268414</td>
				  <td>2017uec1231@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Himanshu Gwalani</td>
                  <td>8209487925</td>
				   <td>2017ucp1356@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Ritika Mor</td>
                  <td>9588649104</td>
				   <td>2017uec1194@mnit.ac.in</td>
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
            <a href="computer_science.php?event=Binary-battle"  class="btn btn-input regist-popshow">Register Now</a>
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
	position:absolute; width:22%; top:150px; left:39%;
}
.rbtlc{
    width: 300px;
}
.rbtle{
   height: 320px;
}


</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/computer_science.png" class="title_img">
  <section class="contentbox_pwr" style="">
    <div>
      <div class="ourtemamanin_wrp" style="width:100%;     border-radius:0px 0px 0px 0px; padding-top: 25px;">

        <div class="eventmain_wrp">
          <div class="container">
            <div class="row">
               <img src="" class="team-icon">


              <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box">
                   <center> <div class="card_box">CODE-OF-WAR</div></center>
					<p class="content_p"><br><br>Sphinx’19 presents Code-of-War, a competitive programming competition for the
students. This is the right place to test your skills and winning exciting prizes. If you
love algorithms, let us know how well you know!</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Code-of-war"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="computer_science.php?event=Code-of-war" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
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
                   <div class="evnt_cont_box rbtle" style="  ">
                   <center> <div class="card_box rbtlc" style="">READING BETWEEN THE LINES</div></center>
					<p class="content_p"><br><br>Hey Folks!! Ever wondered how Google gives lakhs of results in just milliseconds with so
much accuracy!! Every single extra space matters a lot! Likewise: “You have to give
accurate results with minimum code characters!!” This competition focuses on short
and succinct code. The Challenge is to produce answers to the given problems with as
little code as possible. This is a war; better get your A-game on board!!</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Reading-between-the-lines"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="computer_science.php?event=Reading-between-the-lines" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
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
                   <center> <div class="card_box">BLIND CODE</div></center>
					<p class="content_p"><br>Welcome to the ultimate challenge of Blind Coding.
Are you confident enough to code simple programs without looking at your monitor screen?
Then You Are At Right Place !
Blind coding is a C programming event where competitors need to write the program by
switching off monitors.
Beware! You can&#39;t see the bugs you produce.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Blind-code"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="computer_science.php?event=Blind-code" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
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
                   <center> <div class="card_box">BINARY BATTLE</div></center>
					<p class="content_p"><br><br>Hey folks! Sphinx’19 presents Binary-Battle, a one-on-one programming competition.
Are you fans of head-on challenges then you are at the right place!
Let us know how well you are and test your skills to win exciting prizes.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Binary-battle"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="computer_science.php?event=Binary-battle" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
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
