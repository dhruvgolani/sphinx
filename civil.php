<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="Seismic"){
		$min=2;
		$max=4;
	} else if($event=="Civiq") {
		$min=1;
		$max=3;
	} else
	{
		header("Location:civil");
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
        <input type="hidden" name="event_type" value="Civil">
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

<div class="modal fade Seismic  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SEISMIC</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
			It is an event where participants can present their earthquake- resistant building ideas, make models and test these for stability in earthquakes.You don’t need to be a Civil Engineer to participate- It is a platform for learning and
innovation for everyone.
</div>
          <div class="evencon_box">
            <h3>Team formation: </h3>
          The team can consist of minimum 2 members and maximum 4 members.
		  </div>

		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
            <ul class="checboxlist">
              The event will be conducted in two phases:<br>
<li>1. PHASE 1 </li>
<li>2. PHASE 2 </li>
            </ul>
          </div>

          <div class="evencon_box">
            <h3>PHASE 1</h3>
            This will be a written elimination round consisting of questions related to aptitude and general building designing, building material, etc.
 </div>

  <div class="evencon_box">
            <h3>PHASE 2 </h3>
	  <p>
      It contains actual implementation or designing of building model with given raw materials. <br>
	  The materials required for the event will be provided on the spot for the event. <br>
	  1. Standard wooden ice cream sticks (nearly 120mm*12mm*2mm), threads and fevicol will be provided at the time of event. <br>
	  2. The ceiling should be made of Popsicle sticks.<br>
	  3. Height of building should be in between 40-50 cm. The height of single floor should be at least 10cm. <br>
	  4. A cardboard will be provided as base for the structure. The teams have to attach the structure to it. <br>
	  5. The base and ceiling of the building should be of max 20cm*20cm dimensions.<br>
	  6. Maximum number of sticks that can be used is 400. <br>
      7. The thickness of adjacent sticks should not be more than thickness of 3 sticks. <br>
	  </p>
 </div>

		<div class="evencon_box">
            <h3>Penalties:</h3>
			<ul class="checboxlist">
				<li>1. All teams will be given 250 points at starting.</li>
				<li>2. If height of building is found less than 40 cm, then 80 points will be deducted.
				<li>3. Any other dimension of the building other than the specified dimension,will result in deduction of 20 points.</li>
				<li>4. Use of any sticking material other than fevicol will lead to disqualification.</li>
				<li>5. Use of fevicol to provide strength to popsicles will lead to disqualification.</li>
				<li>6. If the building does not meet the specified requirements then penalty will be imposed or the team can be disqualified.</li>
				<li>7. Come to the event with a fully prepared idea of construction of building and make sure that the dimensions of each and every element are within range.</li>
				<li>8. If the floor height is less than 10 cm, then 20 points for a single floor would be deducted.</li>
			</ul>
			</div>

			 <div class="evencon_box">
            <h3>Testing:</h3>
			<ul class="checboxlist">
				<li>1. Shaking table will be used to stimulate earthquake.</li>
				<li>2. Some weight will be placed on structure and then tested for earthquake in this round.</li>
				<li>3. Finally the structure will be loaded and the load bore by the structure/weight of the structure ratio will be calculated.</li>
			</ul>

			<h3>Judging Criteria:</h3>
			<p>Model will be judged on the following basis:</p>
            <ul class="checboxlist">
				<li>1. Originality and Innovation</li>
				<li>2. Technical Content</li>
				<li>3. Practical Applicability</li>
            </ul>
        </div>

        <div class="evencon_box">
            <h3>Note:</h3>
			<p>The decision of the judges and the organizers shall be final and abiding.</p>
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
                  <td>Sakshi Maheshwari</td>
                  <td>8875069885</td>
				  <td>2016ucp1617@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Akshit Chawla</td>
                  <td>9696409592</td>
				   <td>2016uce1154@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Muskan</td>
                  <td>9057330872</td>
				   <td>2016uce1237@mnit.ac.in</td>
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
            <a href="civil?event=Seismic"   class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade Civiq  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CIVIQ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview</h3>
          As it is rightly said “The road to success is always under construction!”.So, we present you ‘CIVIQ’, an event that will test your knowledge about civil engineering.
</div>
          <div class="evencon_box">
            <h3>Team formation: </h3>
			The team can consist of a maximum of 3 members.
		  </div>

		   <div class="evencon_box">
            <h3>Structure of the event:</h3>
            <ul class="checboxlist">
              This event will be held in 3 rounds.<br>
<li>1. ROUND 1</li>
<li>2. ROUND 2</li>
<li>3. ROUND 3</li>
            </ul>
          </div>

          <div class="evencon_box">
            <h3>ROUND 1:</h3>
            First round will be of MCQ’s without negative marking.
			Only 20 teams will be selected after this round.
			</div>

	<div class="evencon_box">
            <h3>ROUND 2:</h3>
		Second round will consist of MCQ’s and true/false or one word problems with negative marking. Only 7 teams will be selected after this round.
	</div>

	<div class="evencon_box">
        <h3>ROUND 3:</h3>
		<ul class="checboxlist">
		<li>1. 7 teams qualifying round 1 and round 2 will play this round.</li>
		<li>2. 10 points will be awarded for every correct answer.</li>
		<li>3. 5 points will be deducted for each wrong answer.</li>
		<li>4. Questions shall be in the form of multiple choice, visuals and specific-answer question may be of descriptive type.</li>
	</div>

	<div class="evencon_box">
        <h3>Rules and Regulations:</h3>
            <ul class="checboxlist">
				<li>1. A team shall consist of max three students.</li>
				<li>2. The students are supposed to bring pens with them.</li>
				<li>3. Participants shall not be allowed to bring mobile phones or other electronic instruments.</li>
				<li>4. The decision of the organizers will be final and will not be subjected to any change.</li>
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
                  <td>Sakshi Maheshwari</td>
                  <td>8875069885</td>
				  <td>2016ucp1617@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Shrishti Aggarwal</td>
                  <td>9461155261</td>
				   <td>2016uce1174@mnit.ac.in</td>
                </tr>

                <tr>
                  <td>Muskan</td>
                  <td>9057330872</td>
				   <td>2016uce1237@mnit.ac.in</td>
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
            <a href="civil?event=Civiq"  class="btn btn-input regist-popshow">Register Now</a>
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
	position:absolute; width:12%; top:150px; left:43.5%;
}
.siesmic{
    height:260px;
}
.civiqe{
    height:280px;
}
.civiqc{
    width: 220px;
}

</style>

<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/civil.png" class="title_img">
  <section class="contentbox_pwr" style=" ">
    <div>
      <div class="ourtemamanin_wrp" style="width:100%;     border-radius:0px 0px 0px 0px; padding-top: 25px;">

        <div class="eventmain_wrp">
          <div class="container">
            <div class="row">
               <img src="" class="team-icon">


              <div class="col-md-12 col-sm-12">
                <div class="eventbox_wrp">
                   <div class="evnt_cont_box seismic" style="">
                   <center> <div class="card_box" >SEISMIC</div></center>
					<p class="content_p">Sputnik suffers hypersomnia and dreams about solving everyday problems when asleep. Once in a
dream he finds himself in a place called &#39;AMARA Island’ that is facing frequent earthquakes due to
seismic disturbances deep down earth. People have no clue and their houses are unable to
withstand the devastating force of nature. So if you think your design can withstand earthquakes
come help Sputnik by showing us your skills in SEISMIC.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Seismic"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="civil?event=Seismic" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
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
                   <div class="evnt_cont_box civiqe" style=" ">
                   <center> <div class="card_box civiqc" style="">CIVIQ</div></center>
					<p class="content_p">Sputnik recently saw a documentary about Burj Khalifa and was surprised to see the construction of the massive
building that stands tall with all the peculiarities in the famous ‘Dubai heat’. As a curious kid he now starts exploring
more about various other big buildings, tunnels, dams, roads and bridges. He likes to explore designs, constructions
and other maintenance related work of these BIG projects. Here’s your chance to face a unique quiz ‘CIVIQ’ designed
by Sputnik to test your knowledge about Civil Engineering.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".Civiq"><span>More Detail</span></a>
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="civil?event=Civiq" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a>
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
