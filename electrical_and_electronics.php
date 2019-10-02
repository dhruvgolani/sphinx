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
	} else if($event=='Electrabug') {
		$min=1;
		$max=2;
	} else if($event=='Pluggedin') {
		$min=1;
		$max=2;
	}
	else{
		header("Location:electrical_and_electronics");
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
            <h3>Overview</h3>
          Design is thinking, made visible. With this theme, we present you “DIGILOG”, an event based on analog and digital circuit design and behaviour.
</div>
          <div class="evencon_box">
            <h3>Team formation: </h3>
          The team can consist of maximum 2 members.
		  </div>
		  
		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
            <ul class="checboxlist">
              The event consists of three rounds:<br>
<li>1. ROUND 1 (PEN-PAPER TEST)</li>
<li>2. ROUND 2 (PEN-PAPER TEST)</li>
<li>3. ROUND 3 (PRACTICAL)</li>
            </ul>
          </div>
		  
          <div class="evencon_box">
            <h3>ROUND 1 (PEN-PAPER TEST)</h3>
            This will be a written elimination round consisting of questions related to aptitude and basic electronics. This round will be of 45 minutes. The test will consist of MCQ's along with negative marking.
It will consist of 30 questions: 10 of logical reasoning, 10 of analog and 10 of digital.
 </div>
 
  <div class="evencon_box">
            <h3>ROUND 2 (PEN-PAPER TEST)</h3>
      Teams selected from first round will have to go through second round quiz consisting of some circuit solving problems. This round will be of 1:30 hours. The questions will consist of MCQ's and integer types. Teams will have to solve the circuits on paper and submit it to the examiner/coordinator present there on the spot.
 </div>
 
   <div class="evencon_box">
            <h3>ROUND 3 (PRACTICAL)</h3>
      This round will be the final round of the event. Teams will have to design the circuit which will be provided to them on the spot (practical). The circuit will be evaluated taking into consideration the neatness of designing, the correctness and efficiency of it.
This round will be of 2 hours.
 </div>
 
		  <div class="evencon_box">
            <h3>Note:</h3>
Total points will be calculated as the cumulative of first, second and final round, on the basis of that winner will be decided.

			</div>
			
			 <div class="evencon_box">
            <h3>Rules and Regulations:</h3>
            <ul class="checboxlist">
             
<li>1. Every team has to register for SPHINX.</li>
<li>2. The final decision of judges and event coordinators shall be treated as final and binding to all.</li>
<li>3. The participants are supposed to bring pens with them.</li>
<li>4. Any malpractice will be strictly treated and will be submitted to "SPHINX COMMITTEE (on spot examiner/coordinators)".</li>
<li>5. Time sense will be appreciated.</li>
            </ul>
          </div>
		  
		  
		  
		 
          <div class="evencon_box">
            <h3>Prerequisites:</h3>
            <ul class="checboxlist">
      
A basic knowledge of digital and analog circuitry is necessary.

            </ul>
          </div>
		  
		  
			 <div class="evencon_box">
            <h3>Judging Criteria:</h3>
            <ul class="checboxlist">
             
<li>1. Level I evaluatation will be based on number of questions answered correctly.</li>
<li>2. Level II evaluatation will be based on the solution and approach to a given question.</li>
<li>3. Level III evaluatation will be based on output, time taken and efficiency of the solution.</li>
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
                  <td>Samihan Nandedkar</td>
                  <td>7972228793</td>
				  <td>2016uec1051@mnit.ac.in</td>
                </tr>
           
                <tr>
                  <td>Raju Raj Purohit</td>
                  <td>9587026256</td>
				   <td>2016uec1146@mnit.ac.in</td>
                </tr>
                
                <tr>
                  <td>Varun Raj</td>
                  <td>9912396355</td>
				   <td>2016uec1094@mnit.ac.in</td>
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
            <a href="electrical_and_electronics?event=Digilog"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade Electrabug  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ELECTRA-BUG</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
          We step up, we transform. With this motivation, we present you ‘ELECTRA-BUG’, an event to test your understanding of electrical and electronics concepts.

</div>
          <div class="evencon_box">
            <h3>Team formation: </h3>
          The team can consist of maximum 2 members.
		  </div>
		  
		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
            <ul class="checboxlist">
              The event consists of two rounds:<br>
<li>1. ROUND 1</li>
<li>2. ROUND 2</li>

            </ul>
          </div>
		  
          <div class="evencon_box">
            <h3>ROUND 1</h3>
            This will be a written elimination round consisting of questions related to aptitude and basic electrical and electronics. This will be of 45 minutes. This will consist of 30 questions:  10 of logical reasoning, 10 of analog and 10 of digital.
 </div>
 
   <div class="evencon_box">
            <h3>ROUND 2</h3>
    This round will be the final round of the event. Teams will have to solve and debug circuits (pen and paper based). This will be one and half hour test. Teams will have to solve the circuits on paper and submit it to the examiner/coordinator present there on the spot.
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
            <h3>Prerequisites:</h3>
            <ul class="checboxlist">
      
A basic knowledge of electrical and electronics is necessary.

            </ul>
          </div>
		  
		  
			 <div class="evencon_box">
            <h3>Judging Criteria:</h3>
            <ul class="checboxlist">
             
<li>1. Level I will be evaluated based on number of questions answered correctly.</li>
<li>2. Level II will be evaluated on the solution and approach to a given question.</li>
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
                  <td>Ashish Dhinwa</td>
                  <td>7232857290</td>
				  <td>2016uec1087@mnit.ac.in</td>
                </tr>
           
                <tr>
                  <td>Vivek Kumar</td>
                  <td>9570752678</td>
				   <td>2016uee1442@mnit.ac.in</td>
                </tr>
                
                <tr>
                  <td>Raju Raj Purohit</td>
                  <td>9587026256</td>
				   <td>2016uec1146@mnit.ac.in</td>
                </tr>
                
                <tr>
                  <td>Varun Raj</td>
                  <td>9912396355</td>
				   <td>2016uec1094@mnit.ac.in</td>
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
            <a href="electrical_and_electronics?event=Electrabug"  class="btn btn-input regist-popshow">Register Now</a>
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
            <h3>Overview</h3>
         Electrical Science has revealed to us the true nature of light , has provided us with innumerable appliances and instruments of precision, and has thereby vastly added to the exactness of our knowledge. With this in mind, we present you ‘Plugged In’, an event that will test the teams on the basis of their understanding of high voltage circuits, their ability to find the bugs in a given circuit and application of electrical science principles in day to day life. 


</div>
          <div class="evencon_box">
            <h3>Team formation: </h3>
          The team can consist of maximum 2 members.
		  </div>
		  
		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
            <ul class="checboxlist">
              The event consists of two rounds:<br>
<li>1. ROUND 1</li>
<li>2. ROUND 2</li>

            </ul>
          </div>
		  
          <div class="evencon_box">
            <h3>ROUND 1</h3>
             It will be a qualifying round. It will be a pen paper test consisting of MCQs based upon Reasoning, Aptitude and Basic Electrical Engineering.
	<ul class="checboxlist">
	<li>There will be 30 MCQs in the paper: 10 based on aptitude and logical reasoning and 20 on basic electrical engineering.</li>
	<li>Question paper will be provided to the teams and answer has to be marked on the same sheet.</li>
	<li>The paper will be of 45 minutes.</li>
	<li>Calculators won’t be allowed.</li>
	<li>Only teams clearing the set cut-off will qualify for next round. Cut-off will be decided after considering the performance of teams in this round</li>
	<li>There might be provision of negative marking for few sections of the question paper.</li>
	
	</ul>
	
	</div>
	
	 <div class="evencon_box">
            <h3>ROUND 2</h3>
             This will be the final round consisting of problems from the electrical science based on finding faults in a circuit, to understand the cause behind a particular electrical problem and find its solution. There will also be problems on design and analysis of electrical circuit. This round will be of 2 hours and will again be a pen paper test.
<br>The question paper will consist of questions in 3 categories:

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
             
<li>1. For Round 1, teams will be judged on the basis of no. of correct attempts in paper.</li>
<li>2. For Round 2, teams will be judged on basis of their understanding of electrical circuits and their behaviors, their designing approach and ability to find faults  in an electrical circuit and their understanding of operation and behavior of electrical machines.</li>
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
                  <td>Samihan Nandedkar</td>
                  <td>7972228793</td>
				  <td>2016uec1051@mnit.ac.in</td>
                </tr>
           
                <tr>
                  <td>Vivek Kumar</td>
                  <td>9570752678</td>
				   <td>2016uee1442@mnit.ac.in</td>
                </tr>
                
                <tr>
                  <td>Raju Raj Purohit</td>
                  <td>9587026256</td>
				   <td>2016uec1146@mnit.ac.in</td>
                </tr>
                
                <tr>
                  <td>Varun Raj</td>
                  <td>9912396355</td>
				   <td>2016uec1094@mnit.ac.in</td>
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
            <a href="electrical_and_electronics?event=Pluggedin"  class="btn btn-input regist-popshow">Register Now</a>
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
                    <a href="electrical_and_electronics?event=Digilog" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a> 
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
                   <center> <div class="card_box electrac" style="">ELECTRA-BUG</div></center>
					<p class="content_p">Sputnik has caught the electronics bug and constantly tinkers with electronic circuits to debug them
and learn good design practices. In his quest to understand electronic and electrical circuits, Sputnik
realizes that basic aptitude and analytical skills, coupled with knowledge of analog and digital
concepts is essential. He sets forth a challenge to find other likeminded ‘Electra bugs’ like him who
are passionate about the circuits that power the world around us.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Electrabug"><span>More Detail</span></a> 
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="electrical_and_electronics?event=Electrabug" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a> 
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
                    <a href="electrical_and_electronics?event="Pluggedin" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a> 
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
