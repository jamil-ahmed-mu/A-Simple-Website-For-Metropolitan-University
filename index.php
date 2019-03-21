<!DOCTYPE HTML>
<html>
<head>
    <title>Project_200</title>
	<meta name="author" content="Jamil Rabbii" />
	<meta name="university" content="Metropolitan University,Sylhet" />
    <meta name="Keyword" content="Top University at Syleht,Best varsity at sylhet,list of univarsity at sylhet" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="shortcut icon" href="img/fav.jpg" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="css/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
      <div class="main fix">
                <!--............TOP HEADER.................-->
            <div class="header_color">
                <div class="top_header fix">
                     <div class="call_us fix">
                        <p><i class="fa fa-phone" aria-hidden="true"></i> Call Us on 017711880355</p>
                     </div>
                   <div class="top_header_menu fix">
                        <ul>
                            <li><a href="#munews">News</a></li>
                            <li><a href="">Event</a></li>
                            <li><a href="contruct_us.php">Contract Us</a></li>
                            <li><a href="register.php"><i class="fa fa-user"></i>Register</a></li>
                            <li><a href="signin.php"><i class="fa fa-sign-in"></i>Sign in</a></li>
                        </ul>
                   </div>   
                 </div>
             </div>
             <!--............MAIN HEADER................. -->
             <div class="main_header">
                <div class="logo animated zoomIn">
                    <img src="img/logo.png" alt="university logo"/> <br/>
                    <h3><i>Enter to learn,Exit to lead</i></h3>
                </div>
                <div class="main_menu">
                    <ul>
                        <li><a href="">HOME</a></li>
                        <li><a href="about_us.php">ABOUT US</a></li>
                        <li><a href="">EVENT</a>
                             <ul>
                                <li><a href="">Our Event</a></li>
                                <li><a href="">Even List</a></li>
                                <li><a href="">Event Detail</a></li>
                             </ul>  
                        </li>
                        <li><a href="">BLOG</a></li>
                        <li><a href="courses.php">COURSES</a>
                            <ul>
                                <li><a href="courses.php">Our Cours</a></li>
                                <li><a href="courses.php">Course List</a></li>
                                <li><a href="courses.php">Course Detail</a></li>
                             </ul>  
                        </li>
                        <li><a href="">TEACHERS</a>
                             <ul>
                                <li><a href="">Our Teacher</a></li>
                                <li><a href="">Our Teacher Detail</a></li>
                             </ul> 
                        </li>
                         <li><a href="">GALARY</a></li>
                        <li><a href="">PAGES</a></li>
                        <li><a href="contruct_us.php">CONTRACT US</a>
                            <ul>
                                <li><a href="">E-mail</a></li>
                                <li><a href="">Phone</a></li>
                             </ul> 
                        </li>
                        <li><a> <i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
             </div>
            <!--............BANNER................. -->
             <div class="slider">
                <script>
                    	var i = 0;
                    	var images = [];
                    	var time = 2000;
                    
                    	images[0] = 'img/parmanent_campus1.jpg';
                    	images[1] = 'img/mu.jpg';
                    	images[2] = 'img/h.jpg';
                    
                    	// Change Image
                    	function changeImg(){
                    		document.slide.src = images[i];
                    
                    		if(i < images.length - 1){
                    			i++;
                    		} else {
                    			i = 0;
                    		}
                    
                    		setTimeout("changeImg()", time);
                    	}
                    
                    	window.onload = changeImg;
                    
                    </script>
                    <img name="slide" width="100%" height="550">
             </div>  
             <!--............COURSE CATEGORIES RIGHT................. -->
             <div class="courses fix">
                <div class="coursearea_right fix">
                       <h1>COURSE CATEGORIES</h1>
                       <div class="cmnmargin">
                            <div class="boxcolor1 fix">
                                 <div class="singlecoursebox  fix">
                                      <div class="courselogo fix">
                                         <i class="fa fa-line-chart" aria-hidden="true"></i>
                                      </div>
                                      <div class="courseshortnote fix">
                                          <h3>BUSINESS</h3>
                                          <p>Business Trends changing<br/>with latest courses are available with us.</p>
                                      </div>
                                 </div>
                             </div>
                         </div>
                          <div class="cmnmargin">
                             <div class="boxcolor2">
                                  <div class="singlecoursebox fix">
                                      <div class="courselogo fix">
                                          <i class="fa fa-btc" aria-hidden="true"></i>
                                      </div>
                                      <div class="courseshortnote fix">
                                          <h3>ACCOUNTING</h3>
                                           <p>Accounting need to be perfect. Come and join with us with best resources.</p>
                                      </div>
                                 </div>
                             </div>
                         </div>
                         <div class="cmnmargin">
                             <div class="boxcolor3 fix">
                                  <div class="singlecoursebox fix">
                                      <div class="courselogo fix">
                                          <i class="fa fa-laptop" aria-hidden="true"></i>
                                      </div>
                                      <div class="courseshortnote fix">
                                         <h3>SCIENCE & TECHNOLOGY</h3>
                                        <p>Latest technologies online courses are available with new courses.</p>
                                      </div>
                                 </div>
                              </div>
                          </div>
                          <div class="cmnmargin">
                              <div class="boxcolor4 fix">
                                  <div class="singlecoursebox fix">
                                      <div class="courselogo fix">
                                         <i class="fa fa-medkit" aria-hidden="true"></i>
                                      </div>
                                      <div class="courseshortnote fix">
                                        <h3>HEALTH & PSYCHOLOGY</h3>
                                        <p>Learn about the Health & Psychology with the complete presentation.</p>
                                      </div>
                                 </div>
                             </div>
                         </div>
                          <div class="cmnmargin">
                              <div class="boxcolor5 fix">
                                  <div class="singlecoursebox fix">
                                      <div class="courselogo fix">
                                           <i class="fa fa-coffee" aria-hidden="true"></i>
                                      </div>
                                      <div class="courseshortnote fix">
                                        <h3>FOOD & DRINKING</h3>
                                        <p>Get the best eating education and practice by taking online courses.</p>
                                      </div>
                                 </div>
                              </div>
                           </div>
                          <div class="cmnmargin">
                              <div class="boxcolor6 fix">
                                 <div class="singlecoursebox fix">
                                      <div class="courselogo fix">
                                           <i class="fa fa-eye" aria-hidden="true"></i>
                                      </div>
                                      <div class="courseshortnote fix">
                                        <h3>CREATIVE ARTS & MEDIA</h3>
                                        <p>Come and explore your creative arts and media by going further.</p>
                                      </div>
                                 </div>
                             </div>
                         </div>
                    </div>
                      <!--............COURSE CATEGORIES RIGHT................. -->
                    <div class="coursearea_left fix">
                        <h1>COURSE CATEGORIES</h1>
                        <div class="formdata fix">
                            <form action="">
           					    <input type="text" placeholder="Name"/> <br />
                                <input type="text" placeholder="Email"/><br />
                                <select>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option> 
                               </select><br />
                               <select>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option> 
                               </select><br />
                               <select>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option> 
                               </select><br />
                               <select>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option>
                                    <option>Select</option> 
                               </select><br />
                               <input type="text" placeholder="Enter Your Key Words"/><br />
                               <input type="submit" value="SEARCH FOR COURSES"/>
                            </form>
                        </div>
                    </div>
               </div>
                <!--............MU HAVE................. -->
               <div class="varsity">
                 <div class="varimg">
                    <img src="img/mu.jpg" alt="campus_picture"/>
                 </div>
                 <div class="we_have">
                   <h1>Welcome To Metropolitan University</h1>
                   <div class="facilities">
                      <i class="fa fa-book" aria-hidden="true"></i>
                      <h3>BOOKS & LIBRARY</h3>
                      <p>World Largest books and library center is here where you can study the latest trends of the education.</p>
                      <a href="">View More</a>
                      <img src="img/libary.JPG" alt="Books And libary img"/>
                   </div>
                    <div class="facilities">
                     <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                      <h3>Learn Courses</h3>
                      <p>World Largest books and library center is here where you can study the latest trends of the education.</p>
                      <a href="">View More</a>
                      <img src="img/learncourse.jpg" alt="Learn Course img"/>
                   </div>
                    <div class="facilities">
                      <i class="fa fa-google" aria-hidden="true"></i>
                      <h3>Instructor</h3>
                      <p>World Largest books and library center is here where you can study the latest trends of the education.</p>
                      <a href="">View More</a>
                      <img src="img/intractor12.jpg" alt="Instructor img"/>
                   </div>
                 </div>
              </div> 
              <div class="all_course">
                <div class="course">
                    <h1>Our Course</h1>
                    <div class="title_course">
                        <ul>
                            <li><a href=""><span>All</span></a></li>
                            <li><a href="">CSE</a></li>
                            <li><a href="">EEE</a></li>
                            <li><a href="">Economics</a></li>
                            <li><a href="">English</a></li>
                            <li><a href="">BBA</a></li>
                            <li><a href="">Management</a></li>
                            <li><a href="">Others</a></li>
                        </ul>
                    </div>
                </div>
              </div>
              <div class="curimg">
                 <div class="si_cr_img">
                    <img src="img/cse.jpg" alt="image"/>
                    <h3 class="animated slideInRight"><a href="courses.html">CSE</a></h3>
                    <p>The B.Sc. Engineering (CSE) programme is a 48(forty-eight)-months study of 12 semesters for regular students.
                       A student should complete at least 148 credits to be a graduate.
                       The program is intended for students who want to obtain a sound theoretical and technical knowledge in Computer Science.
                       The job market in Computer science and information technology is robust and growing in a geometrical manner in Bangladesh and throughout
                       the world.Over the next several decades, Computer Scientists will continue reshaping the world in which we live.</p>
                 </div>
                 <div class="si_cr_img">
                    <img src="img/bba.jpg" alt="image"/>
                    <h3 class="animated slideInLeft"><a href="courses.html">BBA</a></h3>
                    <p>In today’s era of business, the core of sustainable success is the available of competent managers.
                      The prime objective of this 4 year honours programme at the MU is to produce blue-chip business graduates who can confidently shoulder the  
                       managerial responsibilities in private, and government organizations as well as in the not-for-profit sectors.The crying need for BBA
                       graduates will only increase in the days ahead.is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
                       industry's standard dummy text ever since the 1500s, when</p>
                 </div>
                  <div class="si_cr_img">
                    <img src="img/english.jpg" alt="image"/>
                    <h3 class="animated bounceInLeft"><a href="courses.html">English</a></h3>
                    <p>The era of post-modern English has now more than ever wider peripheries of needs, richer ideas to explore and better prospects to share.
                        English now means more than a literature or a language and is considered a gateway to teaching ,creative writing ,journalism, information 
                        technology ,management and administration.Metropolitan University offers Bachelor of Arts in English and Masters of Arts in English
                        (preliminary and Final).
                        The course have been designed to equip our students with the kind of expertise they would require to face life as global citizens.</p>
                 </div>
              </div>
                <!-- ............message................-->
              <div class="message">
                        <div class="from">
                          <h1>Message From The Chairman</h1>
                          <img src="img/Mr.ToufiqueRahman.jpg" alt="image"/>
                          <h4>Dr. Toufique Rahman Chowdhury</h4>
                          <p>The Metropolitan University has traversed a length of thirteen years since its inception in May 2003.A decade or a couple of years added to that can hardly set a tradition, yet our promises of imparting proper and adequate higher education have started bearing fruits. We have been able to make our presence felt, that is to say, we exist and we are growing as we have planned and expected. The launching of the Website of the University is definitely a forward leap; we now open up our doors to the global students.We are working here with devotion and with a vision for a bright tomorrow. We believe that the tomorrow will be visibly shining. Please lend us your support to help us grow as we have chalked out. </p>
                          </div>
                        <div class="from">
                          <h1>Message From The Vice Chancellor</h1>
                          <img src="img/ViceChancellor_ Dr. SalehUddin.jpg" alt="image"/>
                          <h4>Prof. Md. Saleh Uddin Ph D</h4>
                          <p>Metropolitan University was established in 2003 with the mission of providing quality tertiary education at an affordable cost. Located, far away from the nation's capital, in the holy city of Sylhet, the university has been engaged in shaping up the future citizens of the country, in grooming them as 'whole' human beings imbued with values, love for their country and roots, and equipped with proper knowledge and expertise in related fields. Thirteen years is not a great stretch of time to reach any peak but we are determined to make it. We pledge to go ahead with the vision of making Metropolitan University an enviable seat of academic excellence. </p>
                       </div>
                       <div class="from">
                         <h1>Latest News</h1>
                         <!-- ............news................-->
                         <div id="munews"></div>
                         <div class="news">
                            <img src="img/news1.jpg" alt="image"/>
                            <h3>Iqbal Sobhan Chowdhury visited Metropolitan University’s Permanent Campus</h3>
                            <p>Adviser of Honorable Prime Minister, editor of The Daily Observer and chairman of DBC News, prominent journalist Mr.Iqbal Sobhan Chowdhury recently visited Metropolitan University’s permanent campus at Bateshwar...<a href="http://munews24.com/iqbal-sobhan-chowdhury-visited-metropolitan-universitys-permanent-campus" target="_blank">Read More</a></p>
                            
                            <img src="img/news2.jpg" alt="image"/>
                           <h3>Tech Fest 2017</h3>
                           <p>The two-day long tech festival 'Tech Fest 2017' is going to start on 13th November 2017 in Metropolitan University. The tech festival will b...<a href="http://munews24.com/cse-tech-fest-2017/" target="_blank">Read More</a></p>
                           
                           <img src="img/news3.jpg" alt="image"/>
                           <h3>Dr. Toufique Rahman Chowdhury Gets the Best Taxpayer Award</h3>
                           <p>Honorable Chairman of Board of Trustees Dr. Toufique Rahman Chowdhury is awarded by the government of Bangladesh as the best taxpayer of 2016-17 fiscal year.He...<a href="http://munews24.com/dr-toufique-rahman-chowdhury-gets-the-best-taxpayer-award/" target="_blank">Read More</a></p>
                           
                               <img src="img/news4.jpeg" alt="image"/>
                               <h3>Reception Ceremony of LDF</h3>
                               <p>Metropolitan University Leadership Development Forum (LDF) has arranged a renovation ceremony for new leaders who have recently joined LDF. The program was started...<a href="http://munews24.com/reception-ceremony-of-ldf/" target="_blank">Read More</a></p>
                               
                               <img src="img/news5.jpg" alt="image"/>
                               <h3>Prize Giving Ceremony of Techfest 2017</h3>
                               <p>The two-day long tech festival ‘Tech Fest 2017' has ended on 14th November 2017 in Metropolitan University.
Tech festival ends through the prize...<a href="http://munews24.com/prize-giving-ceremony-of-techfest-2017/" target="_blank">Read More</a></p>
                         </div>
                       </div>
             </div>
             <!--...............footer...........-->
             <div class="footercolor">
               <div class="footer">
                    <h3>Convocation</h3>
                    <ul>
                        <li><a href="">&#10095; 2nd Convocation</a></li>
                        <li><a href="">&#10095; 1st Convocation</a></li>                        
                    </ul>
                    <hr />
                    <h3>Information About</h3>
                    <ul>
                        <li><a href="">&#10095;Metropolitan University</a></li>
                        <li><a href="">&#10095;Faculty Members</a></li>
                        <li><a href="">&#10095;IQAC</a></li>
                        <li><a href="">&#10095;Research & Analysis</a></li>
                        <li><a href="">&#10095;University Newspaper</a></li>
                    </ul>
               </div>
               <div class="footer">
                    <h3>Academic Affairs</h3>
                    <p>Standing for excellence and integrity is our goal. Click here for more information on our academic community.</p>
                    <hr />
                    <h3>Admissions</h3>
                    <p>Here at Campus we know how hard the application process can be, so we have provided a step by step guide here.</p>
                    <hr />
                    <h3>Policies and FAQs</h3>
                    <p>In case you run into any questions, check out our Policy and FAQ information.</p>
               </div>
               <div class="footer">
                    <h3>Undergraduate Programmes</h3>
                    <ul>
                        <li><a href="">&#10095;B.Sc. Engg. in CSE</a></li>
                        <li><a href="">&#10095;B.Sc. Engg. in EEE</a></li>
                        <li><a href="">&#10095;BBA</a></li>
                        <li><a href="">&#10095;B.Sc. in Economics</a></li>
                        <li><a href="">&#10095;B.A. (Hons.) in English</a></li>
                        <li><a href="">&#10095;LL.B. (Hons.)</a></li>
                        <li><a href="">&#10095;LL.B. (Preliminary & Final)</a></li>
                    </ul>
                    <hr />
                    <h3>Graduate Programmes</h3>
                    <ul>
                        <li><a href="">&#10095;M.Sc. in MIS</a></li>
                        <li><a href="">&#10095;MBA</a></li>
                        <li><a href="">&#10095;M.A. in English (Final)</a></li>
                        <li><a href="">&#10095;M.A. in English (Final)</a></li>
                        <li><a href="">&#10095;LL.M. (1 year & 2 year)</a></li>
                    </ul>
               </div>
                <div class="footer">
                    <h3>Short Programmes</h3>
                    <ul>
                         <li><a href="">&#10095;Android Application Development</a></li>
                         <li><a href="">&#10095;Microcontroller Programming</a></li>
                    </ul>
                    <hr />
                    <h3>City Campus</h3>
                    <p><i class="fa fa-home" aria-hidden="true"></i>Zindabazar, Sylhet-3100, Bangladesh</p>
                    <p><i class="fa fa-mobile" aria-hidden="true"></i>Telephone: +88-0821-713077-8</p>
                    <p><i class="fa fa-fax" aria-hidden="true"></i>Fax: +88-0821-713304</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i>Email: info@metrouni.edu.bd</p>
                    <hr />
                    <h3>Permanent Campus</h3>
                    <p><i class="fa fa-home" aria-hidden="true"></i>Bateshwar, Sylhet-3100, Bangladesh</p>
                    <p><i class="fa fa-mobile" aria-hidden="true"></i>Telephone: +88-0821-713077-8</p>
                </div>
                <div class="copyright">
               <hr />
                <span>&copy Metropolitan University 2017 </span>
                </div>
             </div>
             
        </div>
</body>
</html>