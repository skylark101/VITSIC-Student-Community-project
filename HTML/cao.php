<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Architecture and Organisation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
    <link rel='stylesheet' href='https://themify.me/wp-content/themes/themify-v32/themify-icons/themify-icons.css'>
    <link rel="stylesheet" href="../CSS/test-style.css">
    
    <script>
        function disp(str) {
            var disp = document.getElementById(str);
            if (disp.style.visibility == "hidden") {
                disp.style.visibility = "visible";
            } else {
                disp.style.visibility = "hidden";
            }
        }

        function disp2(str)
  {
    var disp=document.getElementById(str);
    var dispp=document.getElementById('nam');
    if (disp.style.display=="none"){
      disp.style.display="block";
      dispp.style.display="none";
    }
    else{
      disp.style.display="none";
      dispp.style.display="block";
    }
  }
       
    </script>
</head>

<body>
    <div class="head">
        <h2><i onclick="disp('nav')" style="font-size: 8mm;color:black" ; class="fa fa-ellipsis-v"></i><a href="main.php"><span id="clg"> VIT</span>SIC</h2></a>
            <h1 style="flex:2;color:black;text-align:center">MOCK TEST PORTAL</h1>
            <div id="cred">
                <div id="nam">
            <?php

session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    echo "<span id ='credential'>Welcome," .$_SESSION['username']."</span>";
}
?>
                </div>
      <button onclick="disp2('log')" style="color:red;" id="bt-off"><i class="fa fa-user"></i></button>
      <div id="log">
        See You Again ,<span id="name"><b><?php echo "<span id ='credential'>".$_SESSION['username']."</span>"; ?></b></span> <br>
                    <a href="index.php"><button id="bt-log">Log Out</button></a>
                </div>
            </div>
    </div>
    <div id="nav">
        <div class="prev-pap">
            <a href="prev_pap.php"><button id="bt-icons"><i class="fa fa-book"></i></button></a>
        </div>
        <div class="ddl1">
            <ul>
                <h2 id="head1" style="width:300px;">Previous Year Papers</h2> <br>
                <a href="">
                    <li>Engineering Chemistry</li>
                </a>
                <a href="">
                    <li>Engineering Physics</li>
                </a>
                <a href="">
                    <li>Digital Logic and Design</li>
                </a>
                <a href="">
                    <li>Database Management and Systems</li>
                </a>
                <a href="">
                    <li>Web Programming</li>
                </a>
                <a href="">
                    <li>Data Structures and Algorithm</li>
                </a>
                <a href="">
                    <li>Software Engineering</li>
                </a>
                <a href="">
                    <li>Networks and Communication</li>
                </a>
                <a href="">
                    <li>Theory of Computation</li>
                </a>
                <a href="">
                    <li>Computer Architecture</li>
                </a>
                <a href="">
                    <li>Calculus for Engineers</li>
                </a>
                <a href="">
                    <li>Statistics for Engineers</li>
                </a>
            </ul>
        </div>
        <div class="mock-test">
            <a href="mock.php"><button id="bt-icons"><i class="fa fa-pencil-square-o"></i></button></a>
        </div>
        <div class="ddl2">
            <ul>
                <h2 id="head2" style="width:300px;">Mock Tests</h2> <br>
                <a href="echem.php">
                    <li>Engineering Chemistry</li>
                </a>
                <a href="ephy.php">
                    <li>Engineering Physics</li>
                </a>
                <a href="dld.php">
                    <li>Digital Logic and Design</li>
                </a>
                <a href="dbms.php">
                    <li>Database Management and Systems</li>
                </a>
                <a href="iwp.php">
                    <li>Web Programming</li>
                </a>
                <a href="dsa.php">
                    <li>Data Structures and Algorithm</li>
                </a>
                <a href="sw.php">
                    <li>Software Engineering</li>
                </a>
                <a href="net.php">
                    <li>Networks and Communication</li>
                </a>
                <a href="toc.php">
                    <li>Theory of Computation</li>
                </a>
                <a href="cao.php">
                    <li>Computer Architecture</li>
                </a>
                <a href="caleng.php">
                    <li>Calculus for Engineers</li>
                </a>
                <a href="steng.php">
                    <li>Statistics for Engineers</li>
                </a>
            </ul>
        </div>

        <div class="grade-pred">
            <a href="grade.php"><button id="bt-icons"><i class="fa fa-sort-numeric-desc"></i></button></a>
        </div>

        <div class="ddl3">
            <h3>Grade Prediction</h3>
            <p>Easily know your future grade just by entering few genuine details. Highly benefitial with an efficiency of <span id="eff"><b>95%</b></span></p>
            <a href="grade.php"><button>Predict my grade</button></a>
        </div>
        <div class="counsel">
            <a href="counsel.php"><button id="bt-icons"><i class="fa fa-child"></i></button></a>
        </div>

        <div class="ddl4">
            <h3>Online Counselling</h3>
            <p>Your own personal Advisor and Guide</p>
            <a href="counsel.php"><button>Appointment</button></a>
        </div>

        <div class="doubt">
      <a href="doubt.php"><button id="bt-icons"><i class="fa fa-question-circle"></i></button></a>
    </div>
    <div class="ddl5">
      <h3>Doubts and Discussion</h3>
      <p>Join the community and get your doubts cleared</p>
      <a href="doubt.php"><button>Doubt ?</button></a>
    </div>

        <div class="video-lec">
            <a href="video.php"><button id="bt-icons"><i class="fa fa-video-camera"></i></button></a>
        </div>
        <div class="ddl6">
            <h2>Video Lectures</h2> <br>
            <ul>
                <a href="https://drive.google.com/drive/folders/1mQO9ZGwxTVae-pJ2njRL5Th5R3l-pmpw?usp=sharing">
                    <li>Hypertext Markup Language</li>
                </a>
                <a href="https://drive.google.com/drive/folders/1mQO9ZGwxTVae-pJ2njRL5Th5R3l-pmpw?usp=sharing">
                    <li>Cascading Style Sheets</li>
                </a>
                <a href="https://drive.google.com/drive/folders/19dzOOhKMGI71o04H80hwQuQ4r_xYBGbg?usp=sharing">
                    <li>Javascript</li>
                </a>
                <a href="https://drive.google.com/drive/folders/1ZGa1y9IL64GqhNwQ4dVbH2gAw0E6Ytx5?usp=sharing">
                    <li>PHP</li>
                </a>
                <a href="https://drive.google.com/drive/folders/16SPdElIGN3ZSnqQDtHI84_uoyCkWOzad?usp=sharing">
                    <li>Rest APIs</li>
                </a>
                <a href="https://drive.google.com/drive/folders/1U5qt8wJx_2ZPDfIRQs8FrimtDkfi4vXC?usp=sharing">
                    <li>Django</li>
                </a>
                <a href="https://drive.google.com/drive/folders/1PPn1tn70lWCr4IfK4pNhPS94f2o7XYtQ?usp=sharing">
                    <li>Data Science</li>
                </a>
                <a href="https://drive.google.com/drive/folders/10I1g1CtJY21MNAFPG8bFQRQU6aDFIoUp?usp=sharing">
                    <li>Ethical Hacking</li>
                </a>
                <a href="https://drive.google.com/drive/folders/1hzJ93lWoopUiHjXrJ5GbB1pMlBjxeQ2Y?usp=sharing">
                    <li>React Native</li>
                </a>
                <a href="https://drive.google.com/drive/folders/16WWINbh_VJzFZ65HPZ9SXAY_T9GPgw3a?usp=sharing">
                    <li>Machine Learning</li>
                </a>
                <a href="https://drive.google.com/drive/folders/1sOOG-0W0yiyvegbd2G9wtcDcerEay_ID?usp=sharing">
                    <li>Mongo DB</li>
                </a>
                <a href="https://drive.google.com/drive/folders/14hP6XBkroBCDA9n-tifQ76085tDpFKSq?usp=sharing">
                    <li>Android Development</li>
                </a>
            </ul>
        </div>
    </div>

    <!-- ----------------------MAIN CONTENT-------------------- -->
    <section class="quiz">
        <div class=" home-box custom-box ">
            <h3>Instructions: Lorem ipsum dolor sit amet.</h3>
            <p>Subject : Computer Architecture and Organisation/p>
            <p>Total Number of questions: <span class="total-question"></span></p>
            <button type="button" class="btn1" onclick="startQuiz()"> Start Quiz</button>
        </div>

        <div class="quiz-box custom-box hide ">
            <div class="question-number">

            </div>
            <div class="question-text">

            </div>
            <div class="option-container">

            </div>
            <div class="next-question-button">
                <button type="button" class="btn1" onclick="next()">Next</button>
            </div>
            <div class="answer-indicator">

            </div>
        </div>
        <div class="result-box custom-box hide">
            <h1>Quiz Result</h1>
            <table>
                <tr>
                    <td>Total Questions</td>
                    <td><span class="total-question"></span></td>
                </tr>
                <tr>
                    <td>Attempt</td>
                    <td><span class="total-attempt"></span></td>
                </tr>
                <tr>
                    <td>Correct</td>
                    <td><span class="total-correct"></span></td>
                </tr>
                <tr>
                    <td>Wrong</td>
                    <td><span class="total-wrong"></span></td>
                </tr>
                <tr>
                    <td>Percentage</td>
                    <td><span class="percentage"></span></td>
                </tr>
                <tr>
                    <td>Your Total score</td>
                    <td><span class="total-score"></span></td>
                </tr>
            </table>
            <button type="button" class="btn1" onclick="tryAgainQuiz()">Try Again</button>
            <button type="button" class="btn1" onclick="gotoHome()">Go To Home</button>
        </div>
    </section>


    <footer class="new_footer_area bg_color">
        <div class="new_footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                            <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                                <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                                <button class="btn btn_get btn_get_two" type="submit">Subscribe</button>
                                <p class="mchimp-errmessage" style="display: none;"></p>
                                <p class="mchimp-sucmessage" style="display: none;"></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Services</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="video.php">Video Lectures</a></li>
                                <li><a href="mock.php">Mock Test</a></li>
                                <li><a href="doubt.php">Doubts and Discussion</a></li>
                                <li><a href="grade.php">Grade Prediction</a></li>
                                <li><a href="counsel.php">Online Counselling</a></li>
                                <li><a href="prev_pap.php">Previous Year Papers</a></li>
                                <li><a href="main.php">Exams related Updates</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Term &amp; conditions</a></li>
                                <li><a href="#">Reporting</a></li>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Support Policy</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">Our Social Media Handles</h3>
                            <div class="f_social_icon">
                                <a href="#" class="fab fa-facebook"></a>
                                <a href="#" class="fab fa-twitter"></a>
                                <a href="#" class="fab fa-linkedin"></a>
                                <a href="#" class="fab fa-instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bg">
                <div class="footer_bg_one"></div>
                <div class="footer_bg_two"></div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-7">
                        <p class="mb-0 f_400">© VITSIC Inc.. 2020 All rights reserved.</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <script src="../js/question.js"></script>
    <script src="../js/app.js"></script>

</body>

    </html>