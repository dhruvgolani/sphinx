<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="Cadastrophe"){
		$min=1;
		$max=3;
	} else if($event == "fusion360") {
	    $min=1;
	    $max=1;
	} else if($event == "Quiz") {
	    $min=2;
	    $max=2;
	} else if($event == "Vend") {
	    $min=2;
	    $max=3;
	} else
	{
		header("Location:socevents");
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
        <input type="hidden" name="event_type" value="SOC events">
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

<div class="modal fade Cadastrophe  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CADastrophe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
         CAE Society presents to you “CADastrophe”, a design challenge that will spur you to think outside the box and prove your mettle and creativity.
		 </div>
		 
		 <div class="evencon_box">
            <h3>Team Formation</h3>
You can participate individually or as a team (Maximum 3 members).         
		 </div>
         
		  
		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
			You will have to create a 3D model using Autodesk AutoCAD, Inventor and Fusion 360.A problem statement will be provided based on which you will have to provide the following files:
            <ul class="checboxlist">
<li>3D model file of any above-listed software.</li>
<li>Rendered images in .jpeg format.</li>
<li>A Presentation file of the design including the feasibility, manufacturing details and estimated cost report.</li>
<br>
The problem statement will be released on the social media pages of CAE Society and SPHINX 2.0 a few days prior to the start of the fest.
<br>
There will be a presentation round in which the participants will be required to give a short presentation of their design and submit the above-mentioned files

            </ul>
          </div>
		  
		  
          <div class="evencon_box">
            <h3>Judging Criteria</h3>
            Design of the product will be evaluated on the basis of: 
 <ul class="checboxlist">
<li>Creativity and originality of design concept.</li>
<li>Feasibility of design & design validations.</li>
<li>Use of the Product Design application tools for modelling, Visualization and Rendering of the product.</li>


 
 </ul>
			</div>
		  
		
			
			 <div class="evencon_box">
            <h3>Rules and Regulations</h3>
            <ul class="checboxlist">
             
<li>Any duplicate/existing product design/idea or Copyright ideas/design will stand for rejection.</li>
<li>The Product Design must be compatible with manufacturing and ready to use. </li>
<li>The decision of organizers will be final. </li>


            </ul>
          </div>
		  
		   <div class="evencon_box">
            <h3>Registration Fee</h3>
            <ul class="checboxlist">
<li>Free of Cost</li>
            </ul>
          </div>
		  
		 
          <div class="evencon_box">
            <h3>Venue</h3>
            <ul class="checboxlist">
           <li>Computer Centre (Prabha Bhawan), MNIT Jaipur.</li>

            </ul>
          </div>
		  
		   <div class="evencon_box">
            <h3>Problem Statement</h3>
            <ul class="checboxlist">
           <li>AGRICULTURE TOOLS AND DEVICES</li>
           <p>To improve small farmers in reducing costs, optimizing efforts, improve earning abilities,
thereby to earn sustainable livelihood.</p>
<li>SOLAR/WIND ENERGY BASED EQUIPMENTS</li>
<p>Design a daily-life sustainable device that operates using renewable energy.</p>
<li>MULTI-PURPOSE FURNITURE FOR OFFICE/HOME</li>
<p>Design a versatile and multifunctional furniture which can serve different purposes, being
compact at the same time.</p>

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
                  <td>Siddharth Singh </td>
                  <td>9460248138</td>
				  <td>2016ume1165@mnit.ac.in</td>
                </tr>
           
                <tr>
                  <td>Tushar Singh Chauhan </td>
                  <td>9950223731</td>
				   <td>2016ume1519@mnit.ac.in</td>
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
            <a href="socevents?event=Cadastrophe"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade Vend modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Vendeurpreneur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
         Hey buddies!!  Ever wondered why personal selling is a major element of marketing!! Or why sales managers always have their pockets full!! This is an event about knowing your influencing and convincing power to create the need for the people out there, who ultimately provide you with profits and huge experience of trading. 
		 </div>
		 
		 <div class="evencon_box">
            <h3>General Rules</h3>
		<ul class="checboxlist">
<li>Every team must include 3 members.</li>
<li>Every participant has to bring their college ID cards.</li>
<li>Initially a token amount of Rs. “X” will be provided to each team.</li>
<li>The team has to buy items available in the Shop Stores, in the best way they can utilize their token money.</li>
<li>Items will be disclosed on the spot and involve your skill how you can sell that product with earning maximum profit.</li>
<li>There will be 3 counters for the event: 
<ul class="dot">
    <li>Counter 1(Shop Store 1): where items for Round 1 will be provided</li>
    <li>Counter 2(Shop Store 2): where items for Round 2 will be provided</li>
    <li>Bank: where you can take loans @ interest rate of 6% and deposit your money @ interest rate of 5% </li>
</ul></li>
<li>If a team has taken any loan, they will be charged 6% for every 15 minutes, till you pay back your loan and if the team is keeping their money with the bank, the bank will provide an interest of 5% on the deposited amount. </li>

            </ul>
          </div>
		  
		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
			The event will include 2 rounds:
			<h4>Round 1:</h4>
            <ul class="checboxlist">
<li>Teams will buy their products from Shop Store 1 with the token money given. The Initial 30 minutes will be provided for Planning, Buying and Modification of the product (if any) and next 45 minutes will be given to go into market and sell your products.
</li><li>After completion of the 1st round (75 minutes from the start), each team has to assemble at the Shop stores.
</li><li>If teams have sold all their items before the time provided, you can buy the Round 1 items again from the profit which you have earned. This will continue till the time slot for 1st round gets over.
</li><li>The teams have to sell all the products purchased for 1st round, only after that the round will be considered completed. 
</li><li>If the team is taking more than 1 hour to sell the products, for every 1 minute delay a penalty of Re. 1 would be charged.</li>


            </ul>
            <br>
            <h4>Round 2:</h4>
            <ul class="checboxlist">
                <li>Teams will buy products from Shop Store 2(can also buy from Shop Store 1, if products in Store 1 are available) with the profit earned in the 1st round, and 60 minutes will be provided for selling those products.
</li><li>If teams have sold all their items before the time provided, you can buy the items again from the profit which you have earned. This will continue till the time slot for 2nd round gets over.
</li><li>Final results will be declared only after all the teams have submitted their profit amounts to the organizers.
</li><li>If after the completion of 2nd round, the teams are left with unsold products then they have to resell the products to the shop stores and the amount equal to the product price will be deducted from the total profit of the team.</li>

            </ul>
          </div>
		  
		  
          <div class="evencon_box">
            <h3>Judging Criteria</h3>
            The final profit of a team will be calculated after deducting the cost incurred for purchasing the items (which includes the initial virtual token money also) from the total revenue generated.
			</div>
		  
		
			
			 <div class="evencon_box">
            <h3>Rules and Regulations</h3>
            *Rules are subjected to change according to the participation in the event.
          </div>
		  
          
		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Nikita Kataria </td>
                  <td>9414543011</td>
				  <td>2017pbm5002@mnit.ac.in</td>
                </tr>
           
                <tr>
                  <td>Pragya Batra </td>
                  <td> 7597508363</td>
				   <td>2017pbm5016@mnit.ac.in</td>
                </tr>
                 <tr>
                  <td>Sahil Saini</td>
                  <td>9041644045</td>
				   <td>2017pbm5037@mnit.ac.in</td>
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
            <a href="socevents?event=Vend"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade Quiz modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quizopedia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
         Do you have what it takes to show your business brain? Now we are giving you a platform to showcase your intellect in business sector which includes current scenario of business focused on developing the business world knowledge. Event shows the knowledge of the participants towards the industries , companies and product. 
                           <br>“Knowledge is of no value unless you put it into practice”

         </div>
		  
		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
			The event will include 3 rounds:
			<h4>Round 1:</h4>
            <ul class="checboxlist">
<li>Only team entries are eligible with 2 members.
</li><li>The round consists of 20 questions related to Business and Management 
</li><li>Every question will be displayed on projector for 1 minute. 
</li><li>Every team has to answer the quiz on the sheet provided.
</li><li>No negative marking for incorrect answers
</li><li>Only 6 teams will be selected for the second round</li>



            </ul>
            <br>
            <h4>Round 2:</h4>
            <ul class="checboxlist">
                <li>A question will be fired and the team who presses the buzzer first get to answer first.
</li><li>After pressing the buzzer, you will only get maximum 30 seconds for answering the question
</li><li>Questions may also involve Audio/Video clips
</li><li>In case of tie between two or more teams further questions would be asked for final selection.
</li><li>Only two teams will be selected for the final round</li>
         </ul>
          
		  <h4>Round 3:</h4>
            <ul class="checboxlist">
                <li>Both the teams will be provided with a product on spot.
</li><li>5 minutes will be allotted to the teams for preparation of advertisement of the product.
</li><li>The maximum time allotted for advertisement will be 2 minutes.
 </li><li>Final Judgment will be taken by the Jury and audience voting.</li>
</ul>
          </div>
		  
         
          
		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Nikita Kataria </td>
                  <td>9414543011</td>
				  <td>2017pbm5002@mnit.ac.in</td>
                </tr>
           
                <tr>
                  <td>Pragya Batra </td>
                  <td> 7597508363</td>
				   <td>2017pbm5016@mnit.ac.in</td>
                </tr>
                 <tr>
                  <td>Sahil Saini</td>
                  <td>9041644045</td>
				   <td>2017pbm5037@mnit.ac.in</td>
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
            <a href="socevents?event=Quiz"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade fusion360 modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fusion360 Workshop</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
This advanced workshop on FUSION360 will help the attendees to
explore the further features of this versatile software which will
enhance their designing capability.		 </div>
		 
		 <div class="evencon_box">
            <h3>Structure of Workshop</h3>
            The structure of the workshop is -
            <ol>
                <li>September 27 th , 2018 – Day 1 - WORKSHOP (3 hours)</li>
                <li>September 28 th , 2018 – Day 2 - WORKSHOP (3 hours)</li>
                <li>September 29 th , 2018 – Day 3 - On-spot Problem Statement (3 hours)</li>
            </ol>
		 </div>
		
         
		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Amit Kabdal </td>
                  <td>8003163575</td>
                </tr>
           
                <tr>
                  <td>Purushottam Sharma </td>
                  <td>8946936808</td>
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
            <a href="socevents?event=fusion360"  class="btn btn-input regist-popshow">Register Now</a>
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

</style>
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/socevents.png" class="title_img">
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
                   <center> <div class="card_box">Quizopedia</div></center>
					<p class="content_p">Sputnik strongly believes that business is extremely important to a country's economy because businesses provide both goods and services and jobs.
 So to familiarise ourselves with the skills that are required in  the business environment and the impact these skills can have on our own lives and on society, Sputnik has organized a business quiz,"Quizopedia", which provides an ideal platform to showcase your intellect in business sector and will highlight your continuous efforts in developing  the  modern business world</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Quiz"><span>More Detail</span></a> 
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="socevents?event=Quiz" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a> 
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
                   <center> <div class="card_box">Vendeurpreneur</div></center>
					<p class="content_p">Sputnik is an able and talented salesperson . He gets selected for an interview for the post of senior sales manager at a well reputed company,which is in fact  his dream job. So ,to fulfill the dreams of people like him, Sputnik organized "Vendeurpreneur",to test one's influencing  and convincing power.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Vend"><span>More Detail</span></a> 
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="socevents?event=Vend" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a> 
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
                   <center> <div class="card_box">CADastrophe</div></center>
					<p class="content_p">Its&#39; Pixel&#39;s, our dear Sputnik&#39;s friend&#39;s birthday. Having no clue regarding what to gift her and
being a CAD geek, Sputnik presents her a CAD layout. Now annoyed by Sputnik, Pixel
challenge her to design an arduous layout. Now as poor Alex is busy convincing Pixel,its up
to you figure out the problem.Help Sputnik out.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Cadastrophe"><span>More Detail</span></a> 
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="socevents?event=Cadastrophe" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a> 
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
                   <center> <div class="card_box">FUSION 360 Workshop</div></center>
					<p class="content_p">This advanced workshop on FUSION360 will help the attendees to
explore the further features of this versatile software which will
enhance their designing capability.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".fusion360"><span>More Detail</span></a> 
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="socevents?event=fusion360" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a> 
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
