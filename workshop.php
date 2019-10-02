<?php
include('config.php');
$db=new Database();
$conn=$db->db_connect();
if(isset($_REQUEST['event']))
{
	$min="";
	$max="";
	$event=mysqli_real_escape_string($conn,$_REQUEST['event']);
	if($event=="ethical-hacking"){
		$min=1;
		$max=1;
	} else if($event=="robotics") {  
		$min=1;
		$max=1;
	} else if($event=="machine-learning") {
		$min=1;
		$max=1;
	} else if($event=="iot") {
		$min=1;
		$max=1;
	} else if($event=="aerodynamics") {
		$min=1;
		$max=1;
	}else if($event=="industrial-automation") {
		$min=1;
		$max=1;
	}
	else if($event=="digital-marketing") {
		$min=1;
		$max=1;
	}
	 else
	{
		header("Location:workshop");
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
        <input type="hidden" name="event_type" value="Workshop">
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


<div class="modal fade ethical-hacking modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ETHICAL HACKING AND CYBER SECURITY</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview:</h3>
                Information security and ethical hacking is the latest buzz word in the industry. In the past five years, the percentage of hacking crimes, data thefts, data losses, viruses and other cyber crimes have increased exponentially. Ethical hacking is described as the technical art of a networking expert to penetrate networks and computer systems with the purpose of finding and fixing security vulnerabilities. It is also called as white-hat hacking in which professionals scan, test, hack and secure their own systems.
        </div>
        
        <div class="evencon_box">
            <h3>Prerequisites:</h3>
			  There are no prerequisites to attend this workshop.
		</div>
		  
		<div class="evencon_box">
            <h3>Topics:</h3>
			<ul class="checboxlist">
			    <li>1. Network concept</li>
                <li>2. Ethical hacking & cyber security & overview</li>
                <li>3. VPN technology</li>
                <li>4. Information gathering</li>
                <li>5. Windows, Linux hacking & security</li>
                <li>6. Data recovery</li>
                <li>7. Steganography and cryptography</li>
                <li>8. Fake calling & SMS</li>
                <li>9. Denial of service attack (DOS – attack)</li>
                <li>10. Google hacking and Google hacking database</li>
                <li>11. E-mail/social sites hacking and security issues</li>
                <li>12. SQL Injection (Website hacking)</li>
                <li>13. Kali-Linux training with fully live Demo</li> 
                <li>14. Hacking by viruses, Trojans, key loggers</li>
                <li>15. Wireless hacking</li>
                <li>16. Wi-Fi Jammer</li>
                <li>17. Scanning</li>
                <li>18. VAPT</li>
                <li>19. Security</li>
                <li>20. Cyber crime case study</li>
                <li>21. Overview of cyber law</li>
			</ul>  
		</div>
		
<div class="evencon_box">		
	  <h3>Benefits:</h3>
	  <ul class="checboxlist">
	    <li>Internship/Placement Opportunities</li>
        <li>Real Time Project Option</li>
	  </ul>
 </div>
       
	<div class="evencon_box">		
	  <h3>Note:</h3>
	    Students are required to bring laptop and pendrive during the workshop.
    </div>	
		
		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Sumit Kumar</td>
                  <td>7073357606</td>
				  <td>2016ucp1459@mnit.ac.in</td>
                </tr>
                <tr>
                  <td>Shubham Verma</td>
                  <td>8290271273</td>
				  <td>2016uec1073@mnit.ac.in</td>
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
            <a href="workshop?event=ethical-hacking"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
            </div>
                </div>
        
        
<div class="modal fade robotics  modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ROBOTICS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview:</h3>
                Robotics is the branch of mechanical engineering, electrical engineering and computer science that deals with the design, construction, operation, and application of robots, as well as computer systems for their control, sensory feedback, and information processing.
These technologies deal with automated machines that can take the place of humans in dangerous environments or manufacturing processes, or resemble humans in appearance, behavior, and/or cognition.
        </div>
        
        <div class="evencon_box">
            <h3>Prerequisites:</h3>
			  There are no prerequisites to attend this workshop.
		</div>
		  
		<div class="evencon_box">
            <h3>Topics:</h3>
			<ul class="checboxlist">
			       <li>1. Introduction to Robots</li>
			            <ul class="checboxlist">
                        <li>What are Robots?</li>
                        <li>Types of Robots</li>
                        <li>What is Robotics Engineering?</li>
                        </ul>
                    <li>2. Microcontroller</li>
                        <ul class="checboxlist">
                        <li>Microcontroller vs Microprocessor</li>
                        <li>Basics of Microcontroller</li>
                        <li>Arduino Microcontroller</li>
                        <li>Arduino IDE and Overview</li>
                        <li>Why Arduino?</li>
                        <li>Arduino Installation</li>
                        <li>Interfacing LED</li>
                        </ul>
                    <li>3. Communication Protocol</li>
                        <ul class="checboxlist">
                        <li>Communication Protocols</li>
                        <li>I2C & SPI</li>
                        </ul>
                    <li>4. Basics of Arduino Programming</li>
                        <ul class="checboxlist">
                        <li>LED Blinking</li>
                        <li>LED Matrix</li>
                        <li>Switch</li>
                        <li>Sensors Interfacing (Digital and Analog)</li>
                        <li>Motor Control</li>
                        </ul>
                    <li>5. Person Follower Robot MCU</li>
                    <li>6. Bluetooth Controlled Robot</li>
                    <li>7. HOME AUTOMATION</li>
                    <li>8. Task based Ques</li>
                    <li>9. Obstacle Avoider</li>
			</ul>  
		</div>
		
<div class="evencon_box">		
	  <h3>Benefits:</h3>
	  <ul class="checboxlist">
	    <li>Internship/Placement Opportunities</li>
        <li>Real Time Project Option</li>
	  </ul>
 </div>
       
<!--	<div class="evencon_box">		
	  <h3>Note:</h3>
	    Students are required to bring laptop and pendrive during the workshop.
    </div>      -->
		
		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Sumit Kumar</td>
                  <td>7073357606</td>
				  <td>2016ucp1459@mnit.ac.in</td>
                </tr>
                <tr>
                  <td>Shubham Verma</td>
                  <td>8290271273</td>
				  <td>2016uec1073@mnit.ac.in</td>
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
            <a href="workshop?event=robotics"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
            </div>
                </div>


<div class="modal fade machine-learning modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MACHINE LEARNING</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview:</h3>
            This course aims to provide an introduction to the basic principles, techniques, and applications of Machine Learning. Programming assignments are used to help clarify basic concepts. The course covers the principles, design and implementation of learning programs that improve their performance on some set of tasks with experience. 
            Upon successful completion of the course, students will have a broad understanding of machine learning algorithms and their use in data-driven knowledge discovery and program synthesis. Students will have designed and implemented several machine learning algorithms in Python. Students will also be able to identify, formulate and solve machine learning problems that arise in practical applications. 
            Students will have a knowledge of the strengths and weaknesses of different machine learning algorithms (relative to the characteristics of the application domain) and be able to adapt or combine some of the key elements of existing machine learning algorithms to design new algorithms as needed. You will have an understanding of the current state of the art in machine learning and be able to begin to conduct original research in machine learning.
        </div>
        
        <div class="evencon_box">
            <h3>Prerequisites:</h3>
			  There are no prerequisites to attend this workshop.
		</div>
		  
		<div class="evencon_box">
            <h3>Topics:</h3>
			<ul class="checboxlist">
			       <li>1. Introduction to Python:   
The course is designed to provide Basic knowledge of Python. Python programming is intended for software engineers, system analysts, program managers and user support personnel who wish to learn the Python programming language to increase program solving capabilities.
Python Basics - Strings, libraries, lists, tuples, dictionaries, functions, file handling.
                    </li>
                    <li>2. Anaconda & Python Development environment setup:
Using Scientific libraries in python- Numpy, Scipy, Matplotlib and pandas
                    </li>
                <li>3. Simple liner regression ,Multiple Linear regression, Decision tree and random forest classification, Logistic regression.</li>
			</ul>  
		</div>
		
<div class="evencon_box">		
	  <h3>Benefits:</h3>
	  <ul class="checboxlist">
	    <li>Internship/Placement Opportunities</li>
        <li>Real Time Project Option</li>
	  </ul>
 </div>
       
<!--	<div class="evencon_box">		
	  <h3>Note:</h3>
	    Students are required to bring laptop and pendrive during the workshop.
    </div>      -->
		
		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Sumit Kumar</td>
                  <td>7073357606</td>
				  <td>2016ucp1459@mnit.ac.in</td>
                </tr>
                <tr>
                  <td>Shubham Verma</td>
                  <td>8290271273</td>
				  <td>2016uec1073@mnit.ac.in</td>
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
            <a href="workshop?event=machine-learning"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
            </div>
                </div>
                

<div class="modal fade iot modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">IOT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview:</h3>
            The Internet of Things (IoT) is the network of physical devices, vehicles, buildings and other items embedded with electronics, software, sensors, actuators, and network connectivity that enable these objects to collect and exchange data, creating opportunities for more direct integration of the physical world into computer-based systems, resulting in efficiency improvements, economic benefits, and reduced human exertions
        </div>
        
        <div class="evencon_box">
            <h3>Prerequisites:</h3>
			  There are no prerequisites to attend this workshop.
		</div>
		  
		<div class="evencon_box">
            <h3>Topics:</h3>
			<ul class="checboxlist">
			    <li>1. Introduction to IOT</li>
                <li>2. Introduction to Arduino</li>
                <li>3. Introduction to wireless devices(hc05,esp8266)</li>
                <li>4. Basic programming of electronic devices</li>
                <li>5. Interfacing of the devices with Bluetooth</li>
                <li>6. Controlling of rgb through android app</li>
                <li>7. Controlling of lcd through android app</li>
                <li>8. Basic Home automation through android app</li>
                <li>9. Introduction to node mcu Esp8266</li>
                <li>10. Installation and setting of node mcu</li>
                <li>11. Interfacing of devices with esp8266</li>
                <li>12. Online connection of the esp8266</li>
                <li>13. Programming of the device control with esp8266</li>
                <li>14. Sending data on internet through esp8266</li>
			</ul>  
		</div>
		
<div class="evencon_box">		
	  <h3>Benefits:</h3>
	  <ul class="checboxlist">
	    <li>Internship/Placement Opportunities</li>
        <li>Real Time Project Option</li>
	  </ul>
 </div>
       
<!--	<div class="evencon_box">		
	  <h3>Note:</h3>
	    Students are required to bring laptop and pendrive during the workshop.
    </div>      -->
		
		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Sumit Kumar</td>
                  <td>7073357606</td>
				  <td>2016ucp1459@mnit.ac.in</td>
                </tr>
                <tr>
                  <td>Shubham Verma</td>
                  <td>8290271273</td>
				  <td>2016uec1073@mnit.ac.in</td>
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
            <a href="workshop?event=iot"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
            </div>
                </div>                

<div class="modal fade aerodynamics modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AERODYNAMICS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview:</h3>
            Aerodynamics is the way air moves around things. The rules of aerodynamics explain how an airplane is able to fly. Anything that moves through air reacts to aerodynamics. A rocket blasting off the launch pad and a kite in the sky react to aerodynamics. Aerodynamics even acts on cars, since air flows around cars.
        </div>
        
        <div class="evencon_box">
            <h3>Prerequisites:</h3>
			  There are no prerequisites to attend this workshop.
		</div>
		  
		<div class="evencon_box">
            <h3>Topics:</h3>
			<ul class="checboxlist">
			    <li>1. Introduction to Aeromodelling</li>
                <li>2. Introduction to Aerodynamics</li>
                <li>3. Principle of Aerodynamics (Bernoulli theorem of pressure)</li>
                <li>4. Types of Forces used to fly an aircraft</li>
                <li>5. Types of aircraft</li>
                <li>6. Types of wings</li>
                <li>7. Parts of Aircraft</li>
                <li>8. Black Box</li>
                <li>9. Introduction to Balsa wood and craft</li>
                <li>10. Crafting of Balsa plane</li>
                <li>11. Flying of Balsa Plane</li>
                <li>12. Introduction to RC Plane</li>
                <li>13. Components of RC plane</li>
                <li>14. </li>Virtual Flying practice on Real Flight Software</li>
                <li>15. Mapping of RC Plane</li>
			</ul>  
		</div>
		
<div class="evencon_box">		
	  <h3>Benefits:</h3>
	  <ul class="checboxlist">
	    <li>Internship/Placement Opportunities</li>
        <li>Real Time Project Option</li>
	  </ul>
 </div>
       
<!--	<div class="evencon_box">		
	  <h3>Note:</h3>
	    Students are required to bring laptop and pendrive during the workshop.
    </div>      -->
		
		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Sumit Kumar</td>
                  <td>7073357606</td>
				  <td>2016ucp1459@mnit.ac.in</td>
                </tr>
                <tr>
                  <td>Shubham Verma</td>
                  <td>8290271273</td>
				  <td>2016uec1073@mnit.ac.in</td>
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
            <a href="workshop?event=aerodynamics"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
            </div>
                </div>


    <div class="modal fade industrial-automation modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Advanced Industrial Automation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview:</h3>
            The most used guiding force behind an Automated Industrial Plant is a "Programmable Logic Controller" generally known as A PLC. PLCs along with certain other necessary ingredients like Sensors, Motors, Actuators, Valves, Conveyors, Boilers, Computers and many more makes a Real Automated Manufacturing Plant. <br>
            The main objective of PLC Workshop is to make the aspiring engineers acquainted with the conceptual as well as practical knowledge of the Industrial Automation & latest technologies being used to achieve  industrial automation. The idea of organizing this workshop is to inculcate the basic fundamentals of automation in the students and provide them with a platform to work on in the near future.        
        </div>
        
        <div class="evencon_box">
            <h3>Prerequisites:</h3>
			  There are no prerequisites to attend this workshop.
		</div>
		  
		<div class="evencon_box">
            <h3>Topics:</h3>
			<ul class="checboxlist">
			    <li>1. Introductory & Theoretical session
			    <ul class="checboxlist">
                    <li>Introduction to Automation</li>
                    <li>Definition of Real Time Automation Systems</li> 
                    <li>Careers in Automation Systems</li>
                    <li>Techniques used for Automation</li>
                    <li>Sciences Involved, Terminologies used</li>
                    <li>Brief Description of a Automation Control System</li>
                </ul> </li>
                <li>2. Controller
                <ul class="checboxlist">
                    <li>Brief introduction about relay and contactor</li>
                    <li>Concept of Starter like star – delta their applications in industry.</li>
                </ul> </li>
                <li>Getting familiar with PLC
                    <li>Introduction with PLC-SCADA</li>
                    <li>Brief Introduction to Basic Analog & Digital Electronics</li>
                    <li>Basic Concept of Processing & Controlling</li>
                    <li>Concept of PLC and Classification of PLCs</li>
                    <li>PLC & their Functional Architectures</li>
                    <li>Addressing Format</li>
                    <li>Software description and installation</li>
                    <li>Communication protocols and cables used in PLC</li>
                    <li>Programming Language of a PLC</li>
                </ul> </li>
                <li>Introduction of IOT in industrial Automation
                    <li>Introduction of IOT System</li>
                    <li>Need of IOT in Industrial Automation</li>
                    <li>Protocols used in industrial communication</li>
                    <li>Working with controller in different Network / wifi</li>
                </ul> </li>
                <li>Programming based on Timer and counter
                    <li>Use Of reset Command</li>
                    <li>Counter Instruction</li>
                    <li>Use Compare Instructions</li>
                    <li>Mathematical Concept ADD, SUB, MUL, DIV, SCL and etc.</li>
                </ul> </li>
                <li>Getting familiar with SCADA 
                    <li>Introduction to SCADA Software</li>
                    <li>Creating new SCADA Project</li>
                    <li>Graphical Designing of industrial projects</li>
                    <li>Tag Substitutions</li>
                    <li>Alarm system </li>
                    <li>Represent data on Trends</li> 
                    <li>Introduction to graphic Properties like filling, location, orientation, Visibility etc.</li>
                    <li>Recipe Management</li>
                    <li>Interfacing sensor with PLC</li>
                </ul> </li>
                <li>Practical  
                    <li>Operating Motor using PLC</li>
                    <li>Beverage Industry Prototype (Operating Different load according to time)</li> 
                    <li>Fault and Load sharing system</li>
                    <li>Home Automation</li>
                    <li>Industrial process graphical designing on SCADA. (Beverage Plant, Power plant etc.)</li>
                </ul> </li>
			</ul>  
		</div>
		
<div class="evencon_box">		
	  <h3>Benefits:</h3>
	  <ul class="checboxlist">
	    <li>Internship/Placement Opportunities</li>
        <li>Real Time Project Option</li>
	  </ul>
 </div>
       
	<div class="evencon_box">		
	  <h3>Note:</h3>
	    Students are required to bring laptop and pendrive during the workshop.
    </div>      
		
		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Sumit Kumar</td>
                  <td>7073357606</td>
				  <td>2016ucp1459@mnit.ac.in</td>
                </tr>
                <tr>
                  <td>Shubham Verma</td>
                  <td>8290271273</td>
				  <td>2016uec1073@mnit.ac.in</td>
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
            <a href="workshop?event=industrial-automation"  class="btn btn-input regist-popshow">Register Now</a>
         <?php } else
		 { ?>
			 <a href="javascript:;" data-toggle="modal" data-target="#loginbox" class="btn btn-input regist-popshow" data-dismiss="modal">Register Now</a>
		<?php  }?>
        </div>
		</div>
          </div>
            </div>
                </div>        
    

<div class="modal fade digital-marketing modalevent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DIGITAL MARKETING</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <div class="eventdetail_wpr">
         <div class="evencon_box">
            <h3>Overview:</h3>
            Have you ever given a thought to the concept of Digital Marketing? Are you not fascinated by the ways in which things/ products/ services etc. are marketed digitally with use of Internet? Well, in case you are wondering how all of this works, we bring to you a mini-guide that will help you know more about a career in Digital Marketing.<br>
            Digital Marketing is nothing but the process of promoting of products or brands and organisations through the internet that are accessed in more than one forms of digital channels and electronic media like personal computers, cell phones or smartphones, tablets and many futuristic devices, that effectively engage and manage a relationship with stakeholders and customers online. 
        </div>
        
        <div class="evencon_box">
            <h3>Prerequisites:</h3>
			  There are no prerequisites to attend this workshop.
		</div>
		  
		<div class="evencon_box">
            <h3>Topics:</h3>
			<ul class="checboxlist">
			    <li>Digital marketing fundamentals</li>
                <li>History of search and social platforms</li>
                <li>Search Engine optimization (Onpage and Offpage )- Keyword research activities</li>
                <li>Content Marketing (outreach, guest post and paid post)</li>
                <li>Search Engine Marketing, competitor analysis</li>
                <li>Analytics and webmaster activities</li>
                <li>Pay-per-click (PPC) advertising</li>
                <li>Display advertising</li>
                <li>Social media marketing (SMM)- Facebook ads, LinkedIn ads, Instagram ads etc.</li>
                <li>Online reputation management (ORM) Activities</li>
			</ul>  
		</div>
		
<div class="evencon_box">		
	  <h3>Benefits:</h3>
	  <ul class="checboxlist">
	    <li>Internship/Placement Opportunities</li>
        <li>Real Time Project Option</li>
	  </ul>
 </div>
       
<!--	<div class="evencon_box">		
	  <h3>Note:</h3>
	    Students are required to bring laptop and pendrive during the workshop.
    </div>      -->
		
		  <div class="evencon_box">
            <h3>Contact Us:</h3>
            <p>For any queries:</p>
            <div class="pptable">
              <table>
                <tr>
                  <td>Sumit Kumar</td>
                  <td>7073357606</td>
				  <td>2016ucp1459@mnit.ac.in</td>
                </tr>
                <tr>
                  <td>Shubham Verma</td>
                  <td>8290271273</td>
				  <td>2016uec1073@mnit.ac.in</td>
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
            <a href="workshop?event=digital-marketing"  class="btn btn-input regist-popshow">Register Now</a>
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
position:absolute; width:17%; top:100px; left:42%;
}
.sponser_img{
position:absolute; width:5%; top:185px; left:52%;height:6%;
}
.sponser_text{
position:absolute;top:180px; left:41%;color:white;
}
</style>


<!--top nav end-->

<!--
<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/workshops.png" class="title_img">
   <section class="contentbox_pwr" style="">
    <div class="about_box_mainwrp" style="width:100%;">
        <div class="about_text_wrp" style="width:100%;">
          <p>Sputnik is a tech savvy person. and is determined to learn, analyze and create all the
technologies he can dream of. So he decides to conduct a workshop, giving us an
insight into all the modern technologies including Robotics , Aerodynamics, Ethical
hacking and Internet of things for us to gain practical wisdom and to have an
uncompromised learning experience.</p>
        </div>
        <div class="about_text_wrp">
        
        </div>
 
    </div>
  </section>
</div>
<?php
if(isset($_SESSION['suc_msg']))
{ ?>
<script>
alert("<?=$_SESSION['suc_msg'];?>");
</script>
<?php unset($_SESSION['suc_msg']); } ?>
</div>
</div>
<?php
	include('footer.php');
?>
</body>
</html>         -->


<div id="slide-1" class="slide" data-0="transform: translate(0%,-10%);" style="width:100%;">
<img src="images/workshops.png" class="title_img">
<h3 class="sponser_text">Powered By </h3><img src="images/workshop-sponser.jpg" class="sponser_img">

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
                   <center> <div class="card_box" width="300px">Ethical Hacking and Cyber Security</div></center>
					<p class="content_p">Information security and ethical hacking is the latest buzz word in the industry. In the past five years, the percentage of hacking crimes, data thefts, data losses, viruses and other cyber crimes have increased exponentially. Ethical hacking is described as the technical art of a networking expert to penetrate networks and computer systems with the purpose of finding and fixing security vulnerabilities.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".ethical-hacking"><span>More Detail</span></a> 
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="workshop?event=ethical-hacking" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a> 
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
                   <center> <div class="card_box">ROBOTICS</div></center>
					<p class="content_p">Robotics is the branch of mechanical engineering, electrical engineering and computer science that deals with the design, construction, operation, and application of robots, as well as computer systems for their control, sensory feedback, and information processing.
These technologies deal with automated machines that can take the place of humans in dangerous environments or manufacturing processes, or resemble humans in appearance, behavior, and/or cognition.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".robotics"><span>More Detail</span></a> 
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="workshop?event=robotics" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a> 
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
                   <center> <div class="card_box">MACHINE LEARNING</div></center>
					<p class="content_p">This course aims to provide an introduction to the basic principles, techniques, and applications of Machine Learning. Programming assignments are used to help clarify basic concepts. The course covers the principles, design and implementation of learning programs that improve their performance on some set of tasks with experience. </p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".machine-learning"><span>More Detail</span></a> 
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="workshop?event=machine-learning" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a> 
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
                   <center> <div class="card_box">IOT</div></center>
					<p class="content_p">The Internet of Things (IoT) is the network of physical devices, vehicles, buildings and other items embedded with electronics, software, sensors, actuators, and network connectivity that enable these objects to collect and exchange data, creating opportunities for more direct integration of the physical world into computer-based systems, resulting in efficiency improvements, economic benefits, and reduced human exertions.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".iot"><span>More Detail</span></a> 
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="workshop?event=iot" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a> 
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
                   <center> <div class="card_box">AERODYNAMICS</div></center>
					<p class="content_p">Aerodynamics is the way air moves around things. The rules of aerodynamics explain how an airplane is able to fly. Anything that moves through air reacts to aerodynamics. A rocket blasting off the launch pad and a kite in the sky react to aerodynamics. Aerodynamics even acts on cars, since air flows around cars.</p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".aerodynamics"><span>More Detail</span></a> 
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="workshop?event=aerodynamics" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a> 
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
                   <center> <div class="card_box">ADVANCED INDUSTRIAL AUTOMATION</div></center>
					<p class="content_p">The most used guiding force behind an Automated Industrial Plant is a "Programmable Logic Controller" generally known as A PLC. PLCs along with certain other necessary ingredients like Sensors, Motors, Actuators, Valves, Conveyors, Boilers, Computers and many more makes a Real Automated Manufacturing Plant. </p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".industrial-automation"><span>More Detail</span></a> 
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="workshop?event=industrial-automation" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a> 
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
                   <center> <div class="card_box">DIGITAL MARKETING</div></center>
					<p class="content_p">Digital Marketing is nothing but the process of promoting of products or brands and organisations through the internet that are accessed in more than one forms of digital channels and electronic media like personal computers, cell phones or smartphones, tablets and many futuristic devices, that effectively engage and manage a relationship with stakeholders and customers online. </p>
                    <div class="event_btn"> <a href="#" class="event_left_btn btn2 btn2-5 btn2-5b icon-more-detail" data-toggle="modal" data-target=".digital-marketing"><span>More Detail</span></a> 
                    <?php
		if(isset($_SESSION["user_sphinx_sp"]))
		{
			?>
                    <a href="workshop?event=digital-marketing" class="event_left_btn btn2 btn2-5 btn2-5b icon-register"><span>Register</span></a> 
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
