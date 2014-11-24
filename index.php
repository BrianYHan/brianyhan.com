
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Brian Y Han | Home</title>
    <!-- Styles -->
   <!--  <link href="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type='javascript'> -->

    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!--<script src="js/cvJS.js"></script>-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800italic,800' rel='stylesheet' type='text/css'>
    <link href="stylesheets/print.css" media="print" rel="stylesheet" type="text/css" /> 
    <link href="stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="stylesheets/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/bootstrap.css">



    <link rel="stylesheet" href="stylesheets/font-awesome/css/font-awesome.min.css">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/favicon.png">
  
	<style>
	
 .hexagonblue {
    width: 100px;
    height: 55px;
    position: relative;
	margin:auto;
	float:none;
}


.hexagonblue, .hexagonblue:before, .hexagonblue:after {
    background: #CDAC6A;
    -moz-box-shadow: 0 0 10px rgba(0,0,0,0.8);   
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.8);   
    box-shadow: 0 0 10px rgba(0,0,0,0.8);   
}
.hexagonblue:before, .hexagonblue:after {
    content: "";
    position: absolute;
    left: 22px;
    width: 57px;
    height: 57px;
    -moz-transform: rotate(145deg) skew(22.5deg);
    -webkit-transform: rotate(145deg) skew(22.5deg);
    transform: rotate(145deg) skew(22.5deg);
}
.hexagonblue:before {
    top: -29px;
}
.hexagonblue:after {
    top: 27px;
}
.hexagonblue span {
    position: absolute;
    top: 0;
    left: 0;
    width: 100px;
    height: 55px;
    background:#CDAC6A;
    z-index: 1;
}


.ribbon {

  height:200px;
  width:300px;
  background: #222;
	
  -webkit-box-shadow: 0px 0px 8px rgba(0,0,0,0.3);
  -moz-box-shadow:    0px 0px 8px rgba(0,0,0,0.3);
  box-shadow:         0px 0px 8px rgba(0,0,0,0.3);
  position: relative;
  z-index: 90;
}

.ribbon-wrapper-green {
  width: 85px;
  height: 88px;
  overflow: hidden;
  position: absolute;
  opacity:1;
  top: -3px;
  right: -3px;
}

.ribbon-green {
  font: bold 15px Sans-Serif;
  color: #333;
  text-align: center;
  text-shadow: rgba(255,255,255,0.5) 0px 1px 0px;
  -webkit-transform: rotate(45deg);
  -moz-transform:    rotate(45deg);
  -ms-transform:     rotate(45deg);
  -o-transform:      rotate(45deg);
  position: relative;
  padding: 7px 0;
  left: -5px;
  top: 15px;
  width: 120px;
  background-color: #BFDC7A;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#BFDC7A), to(#8EBF45)); 
  background-image: -webkit-linear-gradient(top, #BFDC7A, #8EBF45); 
  background-image:    -moz-linear-gradient(top, #BFDC7A, #8EBF45); 
  background-image:     -ms-linear-gradient(top, #BFDC7A, #8EBF45); 
  background-image:      -o-linear-gradient(top, #BFDC7A, #8EBF45); 
  color: #6a6340;
  -webkit-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
  -moz-box-shadow:    0px 0px 3px rgba(0,0,0,0.3);
  box-shadow:         0px 0px 3px rgba(0,0,0,0.3);
}

.ribbon-green:before, .ribbon-green:after {
  content: "";
  border-top:   3px solid #6e8900;   
  border-left:  3px solid transparent;
  border-right: 3px solid transparent;
  position:absolute;
  bottom: -3px;
}

.ribbon-green:before {
  left: 0;
}
.ribbon-green:after {
  right: 0;
}
.navbar-fixed-top .container{
  width: 970px;
}
	</style>
  </head>

  <body data-spy="scroll" data-target=".navbar">

	<!--Nav Bar -->
    <div class="navbar navbar-inverse navbar-fixed-top animated fadeInDownBig">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.php">Brian Yong Han</a>
                <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                        <li><a class="scroll" href="#home">Home</a></li>
                        <li><a class="scroll" href="#work">Projects</a></li>
                        <li><a class="scroll" href="#about">About Me</a></li>
                        <li><a class="scroll" href="#interactiveCV">CV</a></li>
                        <li><a class="scroll" href="#references">References</a></li>
                        <li><a class="scroll" href="#news">News</a></li>
                          <!--     <li><a class="scroll" href="calendar.php">Clog</a></li> -->
                        <li><a class="scroll" href="#contact">Contact</a></li>
                        <li><a href="files/portfolio-master.zip">Portfolio</a></li>
<!--                         <li><a href="files/neffheadwear.zip">Neff</a></li>
 -->                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>`
    
    <!--Home Section -->
    <section id="home">
    	<div class="container">
        	<div class="row-fluid">
        		<div class="span12 text-center hero-text fadeOnLoad" style="display:none;">
        			<h1><span style="font-size:100px; color:white;">Brian Yong Han</span></h1>
        			<a class="btn btn-large btn-grey scroll" href="#work"><i class="icon-chevron-down"></i> See My Work</a>
        		</div>
        	</div>
    	</div>
    </section>
    
    
    <!--Work Section -->
    <section id="work">
    	<div class="container">
    		<div class="row-fluid">
    			<div class="span12 text-left" style="color:white">
    				<h1 class="section-title"><img src="img/blue-line.png" alt="blue-line">My Work</h1>
    			</div>
    		</div>
    		
    		<div class="row-fluid row-work">
    			
    			<!--Portfolio Thumbnail One - Set Images to 930px by 590px -->
    			<div class="span4 item">
    				<a class="work" href="http://sheltered-taiga-9686.herokuapp.com/" >
    					<img src="img/screenshots/abcCourseDirectory.png" alt="ABC's Home" class="work-images" style="width:100%; clear:fix">
    					<div class="project-title text-center"><p>THE ABC'S OF MONEY</p></div>
    				</a>
    			</div>
    			
    			<!--Portfolio Thumbnail Two - Set Images to 930px by 590px -->
    			<div class="span4 item">
    				<a class="work" href="http://www.acedentallabs.com">
    					<img src="img/screenshots/aceShipping.png" alt="Ace Home" class="work-images" style="width:100%">
    					<div class="project-title text-center"><p>ACE DENTAL LAB</p></div>
    				</a>
    			</div>
    			
    			<!--Portfolio Thumbnail Three - Set Images to 930px by 590px -->
    			<div class="span4 item">
 
    				<a class="work" href="img/upc_store_wireframe.pdf">
                      <!--<div style="width:300px; height: 160px; margin-bottom:40px;"><br/><br/>
                      
                        </div>-->
                       <!--<div class="ribbon">
       <div class="ribbon-wrapper-green"><div class="ribbon-green">YAY</div></div></div>-->
       		<!--<div class="hexagonblue"  alt="Your Project" class="work-images">																																																									
                        	<span style="color:white"><center>Gold medal for the next person to hire me!</center></span>
                        </div>-->
                        <img src="img/screenshots/bulletinBoardWFSC.jpg" alt="Wireframes man!" style="width:100%;" >

    					<div class="project-title text-center"><p>UX Samples</p></div>
    				</a>
    			</div>
    		
    		
    	</div>
    </section>
    
    
    <!--About Me -->
    <section id="about">
    	<div class="blue-overlay">
        	<div class="container">
        		<div class="row-fluid">
        		<div class="span12 text-left">
                    <h1 class="section-title"><img src="img/blue-line.png" alt="blue-line">About Me</h1>
                </div>
        			
        			<div class="span3 aboutBlock" style="margin-right:20px; padding-top:10px">
        				<!--Client Logo - Set Images to 170px by 100px-->
        				<a href="http://usc.edu"><img src="img/USCbig.png" alt="USC logo"></a>
        			</div>
        			
        			<div class="span2 aboutBlock" style="padding-top:20px;">
        				<!--Client Logo - Set Images to 170px by 100px-->
        				<a href="https://github.com/BrianYHan"><img src="img/github.png" alt="Github logo"></a>
        			</div>
        			
        			<div class="span3 aboutBlock" style="padding-top:10px;">
        				<!--Client Logo - Set Images to 170px by 100px-->
        				<a href="http://www.linkedin.com/pub/brian-han/66/a9b/1b3"><img src="img/linkedin.png" alt="Linkedin Logo"></a>
        			</div>
        			
        			<div class="span3 aboutBlock" style="margin-top:-40px; margin-left:-10px">
        				<!--Client Logo - Set Images to 170px by 100px-->
        				<a href="https://www.facebook.com/profile.php?id=1823422"><img src="img/facebook.png" alt="Img Title"></a>
        			</div>
        		</div>
        	</div>
    	</div>
    </section>
    
    
    <!--Services Section -->
    <section id="interactiveCV">
    	<div class="container">
    		<div class="row-fluid">
    			<div class="span12 text-left">
                    <h1 class="section-title" ><img src="img/blue-line.png" alt="blue-line"><a href="CVs/BrianHanCV3_serif.pdf">Download CV</a></h1>
                    
                </div>
            </div>
                
              <div class="section " id="section2" style="padding-top:20px">

          <div class="row-fluid">   
    

        <div class="span12">
          <center>
            

<!--      <form>
                <input type="text" id="searchbox" placeholder="Search" />
                <span id="find" type="button" value="Scroll To Anchor">
                  <input type="button" value="Submit" onClick="showcvBox(document.getElementById('searchbox').value)" style="margin-bottom:20px" />
                </span>
              </form> -->
        </div>
        
        </div>
      
                
            <div id="cvBox" ><a id="findlink" href="#find"></a>
              <h3 id="experience" cvCategory="work-experience cv"> <a>Experience</a><span id="jobHover">&nbsp; Display </span> </h3>                
                 <hr />

              <div class="work-experience cv" id="uscTA">  
                <h4>University of Southern California <p class="pull-right">Los Angeles, CA</p></h4>
                  <h5>Teaching Assistant – Viterbi Engineering <p class="pull-right">Aug 2012 – March 2013</p></h5>
                    <ul>
                      <li>Supported Professors' instruction during ITP Department lectures</li>
                        <ul>
                          <li>Sat in during ITP 104: Introduction to Web Publishing lecture</li>
                          <li>Determined students who needed help during lecture and caught them up with the rest of class </li>
                          <li>Acted as grader for exams and assignments </li>
                          <ul> 
                            <li>Professors: 
                              <li>Patrick Dent <a href="mailto:dent@usc.edu?Subject=Hello%20Patrick">dent@usc.edu</a> </li> 
                              <li>Chi So <a href="mailto:chiso@usc.edu?Subject=Hello%20Chi">chiso@usc.edu</a></li>
                          </ul>
                            </li>
                        </ul>
                    <li>Conducted office hours to assist students</li>
                        <ul>
                            <li>Office hours for ITP 104: Introduction to Web Publishing, ITP 499: Advanced Web Publishing, ITP 300: Database and Development, ITP 310 : Design for User Experience</li>
                            <li>Worked with students to find solutions for class assignments and labs</li>
                        </ul>
                    <li>Made class website through which Professor uploaded Video lectures, assignments, and labs</li>
                </ul> 
              </div>
              <div class="work-experience cv" id="abcs">                 
                <h4> Natalie Pace | The ABCs of Financial Literacy <p class="pull-right"> Los Angeles CA</p></h4>
                  <h5 >Chief Application Designer <p class="pull-right">January 2013-Present</p></h5>
                    <ul>
                      <li> Worked with Financial Guru Natalie Pace to design application for Juniors and Seniors in High School </li>
                      <li> Led Front-end Application Design Team using Javascript, Jquery, and Sass CSS Preprocessor</li>
                      <li> Led Back-end Application Design Team using Ruby and Ruby on Rails framework</li>
                      <li> Assisted in development of 'Choose Your Own Ending' game that reinforce financial literacy principles taught by application</li>
                    </ul>
              </div>  
              <div class="work-experience cv" id="cft">                                
                <h4>California Federation of Teachers <p class="pull-right">Los Angeles, CA</p></h4>
                  <h5 >Campaign Organizer<p class="pull-right">June – December 2012</p></h5>
                    <ul>
                        <li>Helped organize union members in traditionally inactive local unions</li>
                        <li>Led teams during phonebanking</li>
                        <li>Directed and opened all Orange County charter meetings</li> 
                    </ul> 
              </div>
                  
  
                  
                  <div class="work-experience cv" id="teaching"> 
                     <h4>Private and Classroom Tutor<p class="pull-right">Orange County | Los Angeles CA</p></h4>
                     
                     <h5 >SAT Math | AP US & World History | English Composition | Conversational English <p class="pull-right">June 2008 - August 2012</p></h5>
                                          
                     <ul>
                      <li>SAT Math (2010-2012)
                        <ul>
                          <li>Taught Ages 14-17 in Private and Classroom settings</li>
                          <li>Courses taught: Algebra, Geometry, Calculus and Trigonometry</li>
                        </ul>  
                      </li>
                      <li>English Composition (2009-2012)
                        <ul>
                          <li>Taught Ages 8-17 in Private and Classroom settings</li>
                          <li>Created curriculum based around composition, reading comprehension and vocabulary</li>
                          <li>Coordinated monthly meetings with parents</li>
                        </ul>  
                      </li>
                      <li>AP US & World History (2009-2012)
                        <ul>
                          <li>Taught Ages 14-16 in Classroom setting</li>
                          <li>Created curriculum for based around composition and document analysis</li>
                          <li>95% pass-rate on AP exams, 80% of students received 5/5</li>
                        </ul>  
                      </li>
                      <li>Conversational English (2009-2012)
                        <ul>
                          <li>Taught Ages 7-18 in Private and Classroom setting</li>
                          <li>Courses taught: Conversational English, Grammar, Vocabulary, Reading Comprehension</li>
                          <li>ESL Students ranged from Chinese, Mexican, and Korean </li>
                        </ul>  
                      </li>
                    </ul>
                  </div>
                
              <h3 id="education"><a>Education </a><span id="eduHover"> &nbsp; Display </span> </h3>


              <hr />
                <div id="usc" >
                  <h4 >UNIVERSITY OF SOUTHERN CALIFORNIA <p class="pull-right">January 2010-May 2013</p></h4>
                    <h5 >BA History</h5>
                    <h5 >Minor: Interactive Web Development</h5>
                      <ul>
                          <li> GPA: 3.3 | Phi Sigma Theta National Honors Society | Phi Theta Kappa Honors Society | Dean's List (2010-2013) | </li>
                          <li> Extracurriculars: Member of Best Buddies, Worked as Tutor for Children with disabilities through No Child Left Behind Act </li>
                      </ul>
                </div>
                   
                <div id="bc">                                
                   <h4>NORTHEASTERN UNIVERSITY <p class="pull-right">September 2008 – Aug 2009</p></h4>
                        <ul>
                            <li>Assisted Professor Clay McShane of the History department with Research</li>
                        </ul>
                </div>

               <h3 id="prog"><a>Skills | Programming </a><span id="skillsHover"> &nbsp;Display </span> </h3>
                <hr />
                <div id="skills" >
              
                  <h4 >LANGUAGES </h4>  
                      <ul>
                        <li>HTML, HTML5 </li>
                        <li>CSS, SASS, LESS </li>
                        <li>JAVASCRIPT, JQUERY</li>
                        <li>PHP</li>
                        <li>Python</li>
                        <li>Ruby</li>
                      </ul>
             

                  <h4 >FRAMEWORKS</h4>
                    <ul>
                      <li> Bootstrap, CodeIgniter, Ruby on Rails, Drupal </li>
                    </ul>
                  <h4 >APPLICATIONS</h4>
                    <ul>
                      <li> Adobe Dreamweaver, InDesign, Illustrator, & Photoshop </li>
                    </ul>
                </div>
                                              
                
                 <h3 id="random"><a>Personal Details</a> <span id="randomHover">&nbsp; Display </span> </h3>
                 
                 <hr />
                  <ul>                    
                      <div id="pets">
                        <li><h5 >Pets:</h5> I have 3 pets, a Shih Tzu named Molly, a Yorkie named Baby, and a cat named Samuel L Catson. </li>
                        <li>I'm pretty sure they all hate me except for the Shih Tzu</li>
                      </div>
                      
                      <div id="languages">
                        <li><h5 > Languages:</h5>English, Korean, Spanish, Italian</li>
                      </div>
                    </ul>
                </div>    
        <br /> 
  </div>


    		</div>
    	
    </section>
    
    
    <!--Call To Action-->
    <section id="call-to-action">
    	<div class="container">
    		<div class="row-fluid call-to-action">
    			<div class="span8">
    				<h4>Ready To Get Started With A New Project?</h4>
    			</div>
    			
    			<div class="span4 text-center"><br /><br />
    				<a class="btn btn-large btn-red scroll" href="mailto:brianyhan@gmail.com"><i class="icon-envelope"></i> Contact Me</a>
    			</div>
    		</div>
    	</div>
    </section>
    
    
    <!--Reference Section-->
    <section id="references">
        <div class="container">
            <div class="row-fluid">
    			<div class="span12 text-left">
    				<h1 class="section-title dark-grey"><img src="img/blue-line.png" alt="blue-line">References</h1>
    			</div>
        	</div>
        	
        	<div class="row-fluid">
        		<div class="span12">
        		
        			<ul class="ch-grid">
						
				      
            <!--Reference One-->
						<li>
							<div class="ch-item ch-img-1">
								<div class="ch-info">
									<h3>Megan Hultgrien</h3>
									<p><br>Designer 
                    <a class="scroll" href="mailto:meganhultgrien@gmail.com">
                      <i class="icon-envelope"></i>
                      Contact Megan
                    </a>
                  </p>
								</div>
							</div>
	
							<!--Fall Back for Mobile Devices-->
							<div class="references-info-mobile hidden-desktop"><h3>Megan Hultgrien</h3>
								<p>Designer<br/> 
                  <a class="scroll" href="mailto:meganhultgrien@gmail.com">
                      <i class="icon-envelope"></i>
                      Contact Megan
                    </a>
                  </p>
              </div>      
						</li>
						
						
						<!--Reference Two-->
						<li>
							<div class="ch-item ch-img-2">
								<div class="ch-info">
									<h3>Patrick Dent</h3>
									<p>Professor | USC
                   <a class="scroll" href="mailto:dent@usc.edu">
                      <i class="icon-envelope"></i>
                      Contact Patrick
                    </a>
                  </p>
                </div>
              </div>
              
              <!--Fall Back for Mobile Devices-->
              <div class="references-info-mobile hidden-desktop"><h3>Patrick Dent</h3>
                <p>Professor | USC<br/> 
                  <a class="scroll" href="mailto:dent@usc.edu">
                      <i class="icon-envelope"></i>
                      Contact Patrick
                    </a>
                  </p>
              </div> 
            </li>
						
						
						<!--Reference Three-->
			       <li>
              <div class="ch-item ch-img-3">
                <div class="ch-info">
                  <h3>Kabir Kang</h3>
                  <p>Web Developer
                   <a class="scroll" href="mailto:kangkabir@gmail.com">
                      <i class="icon-envelope"></i>
                      Contact Kabir
                    </a>
                  </p>
                </div>
              </div>
              
              <!--Fall Back for Mobile Devices-->
              <div class="references-info-mobile hidden-desktop"><h3>Kabir Kang</h3>
                <p>Web Developer<br/> 
                  <a class="scroll" href="mailto:kangkabir@gmail.com">
                      <i class="icon-envelope"></i>
                      Contact Kabir
                    </a>
                  </p>
              </div> 
            </li>
            
						
						
						<!--Reference Four-->
						<li>
							<div class="ch-item ch-img-4">
								<div class="ch-info">
									<h3>James Ruhle</h3>
									<p>Web Developer
                   <a class="scroll" href="mailto:jruhlebsn@live.com">
                      <i class="icon-envelope"></i>
                      Contact James
                    </a>
                  </p>
                </div>
              </div>
              
              <!--Fall Back for Mobile Devices-->
              <div class="references-info-mobile hidden-desktop"><h3>James Ruhle</h3>
                <p>Web Developer<br/> 
                  <a class="scroll" href="mailto:jruhlebsn@live.com">
                      <i class="icon-envelope"></i>
                      Contact James
                    </a>
                  </p>
              </div> 
            </li>
						
					</ul>
			
        		</div>
        	</div>
        </div>
    </section>
    
    
    <!--News Section-->
    <section id="news">
        <div class="container">
          <div class="row-fluid">
    			 <div class="span12 text-center">
    			   <h1 class="section-title">
              <img src="img/blue-line.png" alt="blue-line">The B-Han Times
            </h1>
    			</div>
        </div>
        	
        	<div class="row-fluid">
            	
            	<!--Latest News-->
            	<div class="span6">
            	   <h5> News</h5>
            	       
          	            <!--News Article One-->
                     <div class="row-fluid news-article">
                         <div class="span2 date pull-left">
                             <span class="day">17</span><br />
                             <span class="month">May</span>
                         </div>
                         
                         <div class="span9 text-left newsText">
                             <div class="headlines"><h4>Graduation!</h4>
                             <p>I'm a college graduate!</p>
                             <a class="more pull-right" href="calendar.php">More</a></div>
                         </div>
                     </div>

                    <!--News Article Two-->
             
                     
                     <!--News Article Three-->
                     <div class="row-fluid news-article">
                         <div class="span2 date pull-left">
                             <span class="day">12</span><br />
                             <span class="month">Jul</span>
                         </div>
                         
                         <div class="span9 text-left newsText2">
                               <div class="headlines2"><h4>Birfday</h4>
                             <p>The big 25! Quarter Centurian!</p>
                             <a class="more pull-right" href="calendar2.php">More</a></div>
                         </div>
                     </div>
                     
              </div><!--End Latest News-->
            	
            	<!--Twitter & Instagram-->
            	<div class="span5 offset1">
            		<!-- <h5>From Twitter</h5>
						<div class="twitter-feed text-left">
							<ul id="twitter_update_list" class="rotate"></ul> -->
					
            	   
					<h5>From Instagram</h5>
					<div class="instagram-feed">
					
					<!--Visit "Snapwidget.com" - Use Settings: 80px wide for images, 3x2 for the grid, and FadeOut on Hover-->
					<!-- SnapWidget -->
					<a href="http://instagram.com/brianyhan"><img src="img/instagramPic.png"></a>
					
					</div><!--End Instagram Feed Container-->
            	
            	</div>
        	</div>
    	</div>	

    </section>
    
    
    <!--Contact Section-->
  
    <section id="contact">
    	<div class="container">
    		<div class="row-fluid">
    			<div class="span12 text-left">
                <br>
      <br>
          <br>
      <br>
    				<h1 class="section-title"><img src="img/blue-line.png" alt="blue-line">Contact Me</h1>
    			</div>
        	</div>	
    		
    		<div class="row-fluid">
    			
    			<!--Contact Info-->
    			<div class="span6 text-left">
    				<h5>Snail Mail</h5>
    				<p>1168 East Little Drive <br />
    				Placentia, CA 92870</p>
    				<p class="tel"><i class="icon-phone icon-large"></i> &nbsp; 714.900.1650</p><br />
    				
    			 </div>
          <div class="span6 text-left">
            <h5>Find Me On</h5>
            <ul class="socialize">
              <li><a class="twitter" href="https://twitter.com/Br1anHan" target="_blank"><i class="icon-twitter icon-2x"></i></a></li>&nbsp;&nbsp;
              <li><a class="facebook" href="https://www.facebook.com/profile.php?id=1823422" target="_blank"><i class="icon-facebook icon-2x"></i></a></li>&nbsp;&nbsp;
              <li><a class="google" href="https://plus.google.com/110480429567609983498/posts" target="_blank"><i class="icon-google-plus icon-2x"></i></a></li>&nbsp;&nbsp;
              <li><a class="instagram" href="http://instagram.com/brianyhan" target="_blank"><i class="icon-camera-retro icon-2x"></i></a></li>&nbsp;&nbsp;
              <li><a class="linkedin" href="http://www.linkedin.com/pub/brian-han/66/a9b/1b3" target="_blank"><i class="icon-linkedin icon-2x"></i></a></li>&nbsp;&nbsp;
            </ul>
            <a class="btn btn-large btn-red scroll" href="mailto:brianyhan@gmail.com"><i class="icon-envelope"></i> Contact Me</a>
          </div>
    		
    	</div>        	
    </section>
    
    <footer>
    	<div class="container">
    		<div class="row-fluid">
    			<div class="span4 offset4 text-center">
	            	<p>&copy;Brian Y Han<br />
	            
	            	<a href="http://www.brianyhan.com"><!-- <img src="img/footer-logo.png" alt="Brian Han Logo"> --></a>
    			</div>
    		</div>
    	</div>
    </footer>
    
    <a href="#" class="scrollToTop hidden-phone"><i class="icon-chevron-up"></i></a>
    
    
    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.backstretch.js"></script>
    <script src="js/rotate.js"></script>
    <script src="js/twitter-feed.js"></script> 
    <script src="js/cvJS.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!--Twitter Handle - Insert your Twitter username below ex: (screen_name=USERNAME&include) -->
    <!--<script src="https://api.twitter.com/1/statuses/user_timeline.json?screen_name=Br1anHan&amp;include_rts=true&amp;count=1&amp;callback=twitterCallback2" type="text/javascript"></script>-->
  
  <script>
      $('.newsText a').click(function() {
      var url=$(this).attr('href');
      $('.headlines').load(url + ' .newsText');
      return false;
      }); //end click
    </script>

  <script>
      $('.newsText2 a').click(function() {
      var url=$(this).attr('href');
      $('.headlines2 ').load(url + ' .newsText2');
      return false;
      }); //end click
    </script>
    <script>
	$(document).ready(function() {
	$.backstretch([
	      // "img/universe1000.jpg",
	      "img/pleiades-wittich.jpg",
          "img/endeavorCockpit1000.jpg"
	      ], {
	        fade: 1000,
	        duration: 3000
	    });
	});
	</script>  

    </body>
</html>