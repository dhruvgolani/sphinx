<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="Chem-extravaganza"){
		$min=2;
		$max=2;
	} else if($event=='Design-it') {
		$min=1;
		$max=3;
	} else {
		header("Location:chemical");
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
        <input type="hidden" name="event_type" value="Chemical">
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






<div class="modal fade Chem-extravaganza  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CHEMICAL EXTRAVAGANZA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
         A chemical engineer is someone who knows enough physics/mechanics to confuse a chemist, enough chemistry to confuse a physicist/mechanical engineer and enough mathematics to confuse himself. Here we will test your knowledge in all aspects of chemical engineering.
</div>
          <div class="evencon_box">
            <h3>Team formation: </h3>
         Each team should consist of 2 members.
		  </div>
		  
		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
            <ul class="checboxlist">
              This event will be held in 4 rounds:<br>
<li>1. ROUND 1 (CHEM-QUIZ)</li>
<li>2. ROUND 2 (AMAZING REACTIONS))</li>
<li>3. ROUND 3 (INDUSTRIAL SAFETY HAZARDS CASE STUDY)</li>
<li>4. ROUND 4 (START UP)</li>
            </ul>
          </div>
		  
          <div class="evencon_box">
            <h3>ROUND 1 (CHEM-QUIZ)</h3>
            Gear up to test your concepts of chemical engineering as well as its application and win exciting prizes.
			<ul class="checboxlist">
			<li>The quiz will be conducted in a pen and paper format.</li>
			<li>Questions in the quiz will be objective type.</li>
			<li>Any act of use of unfair means will lead to disqualification of team.</li>
			<li>The topics would include mental aptitude, basic mathematics and chemical engineering theory and practical.</li>
			</ul>

 </div>
 
 <div class="evencon_box">
            <h3>Judging Criteria:</h3>
            <ul class="checboxlist">
             
<li>1. Maximum number of questions solved with accuracy.</li>
<li>2. Grading will be done in accordance with the maximum score achieved by a participating team.</li>
<li>3. There will be negative marking. </li>
            </ul>
          </div>
 
  <div class="evencon_box">
            <h3>Rules and Regulations:</h3>
            <ul class="checboxlist">
             
<li>1. Maximum points for this round will be 10.<li>
<li>2. Same chemicals will be provided to all teams.</li>
<li>3. A time of half an hour will be provided.</li>
<li>4. All teams must bring the required safety equipment like lab coats themselves.</li>
            </ul>
          </div>
 
 
 
 <div class="evencon_box">
            <h3>ROUND 3 (INDUSTRIAL SAFETY HAZARDS CASE STUDY)</h3>
           Industries are prone to tragedies and losses (monetary as well as of life and limb to workers) unless proper safety measures and equipment, proper relief facilities aren’t provided. It is the job of an engineer to identify these problems and suggest means to solve them.
<br>The selected contestants would be provided with a problem statement at the time of the round. They have to identify the possible hazards and/or which safety measures need to be installed including legislation to reduce any lurking hazards.

 </div>
 
 <div class="evencon_box">
            <h3>Judging Criteria:</h3>
            <ul class="checboxlist">
             
<li>1. Here the number of acceptable ideas, their description and ingenuity would be considered for final decision.</li>

            </ul>
          </div>
 
  <div class="evencon_box">
            <h3>Rules and Regulations:</h3>
            <ul class="checboxlist">
             
<li>1. Maximum points for this round will be 20.<li>
<li>2. Same problem statement will be provided to all teams.</li>
<li>3. A time of 1 hour will be provided. Mobile Phones will be collected after first 15 min.</li>
            </ul>
          </div>
		  
		  <div class="evencon_box">
            <h3>Useful Links:</h3>
            <ul class="checboxlist">
             
<li>1. <a href="http://www.osha.gov/archive/Publications/osha3091.html">www.osha.gov/archive/Publications/osha3091.html.</a><li>
<li>2. <a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC3299102/">www.ncbi.nlm.nih.gov/pmc/articles/PMC3299102/</a></li>
            </ul>
          </div>
		  

 <div class="evencon_box">
            <h3>ROUND 4 (START UP)</h3>
          Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. Here is a platform for all the entrepreneurs who love chemical engineering to put their minds together and improve the valuation of the raw materials mentioned to provide the maximum profits.
<br>The selected contestants would be provided with a problem statement at the time of the round. The budget, raw materials and requirements will be mentioned. The participants have to propose the industry to be set up and valuation of the final products and all other costs in order to maximize the profits.

 </div>
 
 <div class="evencon_box">
            <h3>Judging Criteria:</h3>
            <ul class="checboxlist">
             
<li>1. Here the profit and the operating cost will be considered for the final decision.</li>

            </ul>
          </div>
 
  <div class="evencon_box">
            <h3>Rules and Regulations:</h3>
            <ul class="checboxlist">
             
<li>1. Maximum points for this round will be 20.<li>
<li>2. Same problem statement will be provided to all teams.</li>
<li>3. A time of 1 hour will be provided. Mobile Phones will be collected after first 10 min.</li>
            </ul>
          </div>
		  
		  <div class="evencon_box">
            <h3>Note:</h3>
            <ul class="checboxlist">
             
<li>1. The decision of the judges and the organizers shall be final and abiding.</li>
<li>2. The students are supposed to bring pens along with them for various rounds.</li>

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
                  <td>Shivam Chandna</td>
                  <td>9571506644</td>
				  <td>2016uch1628@mnit.ac.in</td>
                </tr>
           
                <tr>
                  <td>Anishka Agarwal</td>
                  <td>8094003331</td>
				   <td>2016uch1573@mnit.ac.in</td>
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
            <a href="chemical?event=Chem-extravaganza"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modal fade Design-it  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DESIGN IT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
         The Chemical Industry can do very less without the instruments and equipments that are in place  and  is  in  continuous need  for  improvement and ingenious innovations that  help improve efficiency and  reduce cost. Keeping this issue in mind the ‘DESIGN IT’ competition aims at addressing the above issue.
</div>
          <div class="evencon_box">
            <h3>Team formation: </h3>
         The team can consist of maximum 3 members.
		  </div>
		  
		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
            <ul class="checboxlist">
              The contestants are required to create an equipment/model for the purpose of one of the following challenges:<br>
<li>1. The conversion of inlet turbulent flow from a flow input to perfectly laminar outlet flow.</li>
<li>2. Design an equipment to measure the viscosity of test fluid.</li>
<li>3. Design a Heat Exchanger to give the maximum thermal efficiency.<li>
<li>4. Design a cooling tower to reduce water temperature.</li>
<li>5. Design a setup for water purification.</li>
            </ul>
          </div>
		  
          <div class="evencon_box">
            <h3>FORMAT (1):</h3>
			<ul class="checboxlist">
			<li>1. The team has to design a model which can produce an outlet of water having laminar flow.</li>
			<li>2. The outlet stream of water will be collected in a beaker and participants have to calculate the Reynold’s number of the flow hence showing that the final flow is laminar.</li>
		</ul>
 </div>
 
 <div class="evencon_box">
            <h3>Judging Criteria:</h3>
           <ul class="checboxlist">
			<li>1. Here the final flow of water will be tested.</li>
			<li>2. The judging parameters would be the consistency of laminar flow, model parameters, and range. The more optimized the model, better the chances of winning.</li>
			<li>3. Participants will be asked to provide a brief overview of the model to the judges, and will need to answer technical questions based on the model and its working theory.</li>
			</ul>
          </div>
		  
		  <div class="evencon_box">
            <h3>FORMAT (2):</h3>
			<ul class="checboxlist">
			<li>1. The team has to design a viscometer which will measure approximately the viscosity of the provided fluid.</li>
			<li>2. Participants have to bring the entire setup and only fluid supply will be provided.</li>
		</ul>
 </div>
 
 <div class="evencon_box">
            <h3>Judging Criteria:</h3>
           <ul class="checboxlist">
			<li>1. Here the final height of water will be tested.</li>
			<li>2. The judging parameters would be the maximum height reached, model parameters, and power consumption. The more optimized the model, better the chances of winning.</li>
			<li>3. Participants will be asked to provide a brief overview of the model to the judges, and will need to answer technical questions based on the model and its working theory.</li>
			</ul>
          </div>
		  
		  
		  <div class="evencon_box">
            <h3>FORMAT (3):</h3>
			<ul class="checboxlist">
			<li>1. The team has to design a model which can produce an overall cooling effect.</li>
			<li>2. The outlet stream of water will be collected in a beaker and participants have to measure the final stream temperature to observe the extent of overall cooling.
</li>
		</ul>
 </div>
 
 <div class="evencon_box">
            <h3>Judging Criteria:</h3>
           <ul class="checboxlist">
			<li>1. Here the final temperature of fluid will be tested.</li>
			<li>2. The judging parameters would be the maximum temperature drop reached, model parameters, and ingenuity of model. The more optimized the model, better the chances of winning.</li>
			<li>3. Participants will be asked to provide a brief overview of the model to the judges, and will need to answer technical questions based on the model and its working theory.</li>
	</ul>
          </div>
		  
		  
		  
		  <div class="evencon_box">
            <h3>FORMAT (4):</h3>
			<ul class="checboxlist">
			<li>1. The team has to design a model which can produce an overall cooling effect for water which will be provided at the exit temperature of a general industry and to cool it down to below room temperature.</li>
			<li>2. The outlet stream of water will be collected in a beaker and participants have to measure the final stream temperature to observe the extent of overall cooling.</li>
		</ul>
 </div>
 
 <div class="evencon_box">
            <h3>Judging Criteria:</h3>
           <ul class="checboxlist">
			<li>1. Here the final temperature of fluid will be tested.</li>
			<li>2. The judging parameters would be the maximum temperature drop reached, model parameters, and ingenuity of model. The more optimized the model, better the chances of winning.</li>
			<li>3. Participants will be asked to provide a brief overview of the model to the judges, and will need to answer technical questions based on the model and its working theory.</li>
	</ul>
          </div>
		  
		  <div class="evencon_box">
            <h3>FORMAT (5):</h3>
			<ul class="checboxlist">
			<li>1. The team has to design a model which can reduce the characteristics of wastewater provided to within required parameters.</li>
		</ul>
 </div>
 
 <div class="evencon_box">
            <h3>Judging Criteria:</h3>
           <ul class="checboxlist">
			<li>1. The outlet stream of water will be collected in a beaker and the parameters need to be within the prescribed range:
			  <ul>
<li>1. TDS reduced to less than 50% of provided</li>
<li>2. TSS reduced to 10% of provided</li>
<li>3. Turbidity between 30-50 NTU</li>
<li>4. TOC reduced to less than 30% of original.</li>
</ul>
			<li>2. Participants will be asked to provide a brief overview of the model to the judges, and will need to answer technical questions based on the model and its working theory.</li>
			</ul>
          </div>
		  
		  
 
  <div class="evencon_box">
            <h3>Rules and Regulations:</h3>
            <ul class="checboxlist">
             
<li>1. The team has to design a model which can produce the desired result.<li>
<li>2. Only measuring cylinder and utilities will be provided.</li>
            </ul>
          </div>
		  
		   <div class="evencon_box">
            <h3>Useful Links:</h3>
            <ul class="checboxlist">
             
<li><a href="https://www.youtube.com/watch?v=VLncP2OQSig">1. www.youtube.com/watch?v=VLncP2OQSig</a></li>
<li><a href="https://www.youtube.com/watch?v=52bId73YRc8">2. www.youtube.com/watch?v=52bId73YRc8</a></li>
<li><a href="https://www.youtube.com/watch?v=qHh8hLxXGgc">3. www.youtube.com/watch?v=qHh8hLxXGgc</a></li>
<li><a href="https://www.youtube.com/watch?v=ZKrPT0_vSug">4. www.youtube.com/watch?v=ZKrPT0_vSug</a></li>
<li><a href="https://www.youtube.com/watch?v=mEExlOX458Y">5. www.youtube.com/watch?v=mEExlOX458Y</a></li>

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
                  <td>Shivam Chandna</td>
                  <td>9571506644</td>
				  <td>2016uch1628@mnit.ac.in</td>
                </tr>
           
                <tr>
                  <td>Anishka Agarwal</td>
                  <td>8094003331</td>
				   <td>2016uch1573@mnit.ac.in</td>
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
            <a href="chemical?event=Design-it"   class="btn btn-input regist-popshow">Register Now</a>
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
	position:absolute; width:17%; top:150px; left:41.5%;
}
.designit{
    height:220px;
}
</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/chemical.png" class="title_img">
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
                   <center> <div class="card_box" style="width:280px;">CHEMICAL EXTRAVAGANZA</div></center>
					<p class="content_p">Sputnik considers himself a great chemist and wants to prove that, ‘’a chemical engineer
is someone who knows enough physics to confuse a chemist, enough chemistry to
confuse physicst and enough math to confuse himself&quot; he says, &quot;and the only one who
can bridge between all three is a chemical engineer&quot;. He throws an ultimatum to
everyone who considers themselves as chemical engineers to defeat him in “CHEMICAL
EXTRAVAGANZA” . Are you ready to prove yourself a chemist, come knock him down!</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Chem-extravaganza"><span>More Detail</span></a> 
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="chemical?event=Chem-extravaganza"  class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a> 
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
                   <div class="evnt_cont_box designit" style="    ">
                   <center> <div class="card_box" style="">DESIGN IT</div></center>
					<p class="content_p">As a part of educational tour, Sputnik visits a CHEMICAL industry and finds out that a lot of
wastage of energy and materials takes place every day there. The curious mind of Sputnik starts
finding out ways to improve efficiency and reduce cost in industries. Help Sputnik to find
solutions to various industrial problems with help of models/equipments in DESIGN IT.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Design-it"><span>More Detail</span></a> 
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="chemical?event=Design-it"  class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a> 
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
