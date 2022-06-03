<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Counselling</title>
  <link rel="stylesheet" href="../CSS/counsel_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
<link rel='stylesheet' href='https://themify.me/wp-content/themes/themify-v32/themify-icons/themify-icons.css'>
  <script>

    function disp(str)
    {
      var disp=document.getElementById(str);
      if (disp.style.visibility=="hidden"){
        disp.style.visibility="visible";
      }
      else{
        disp.style.visibility="hidden";
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
      var back = document.getElementById('content');
      back.style.opacity='1.0';
    }
    
    
    function disp3(str){
      var back = document.getElementById('content');
      back.style.opacity='0.15';
      document.getElementById('c-name').innerHTML=str;
      document.getElementById('form1').style.display='block';
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    
    function disp4(str){
      var back2 = document.getElementById('content');
      back2.style.opacity='0.15';
      document.getElementById('cname').innerHTML=str;
      document.getElementById('form2').style.display='block';
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

    function disp5(str){
      document.getElementById(str).style.display='none';
      var back = document.getElementById('content');
      back.style.opacity='1.0';
    }
  </script>
</head>
<body>
  <div class="head">
    <h2><i onclick="disp('nav')" style="font-size: 8mm;color:black"; class="fa fa-ellipsis-v"></i><a style="text-decoration: none;" href="main.php"><span id="clg"> VIT</span><span style="color:black">SIC</span></a></h2>
    <h1>YOUR COUNSEL</h1>
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
        <a href=""><li>Engineering Chemistry</li></a>
        <a href=""><li>Engineering Physics</li></a>
        <a href=""><li>Digital Logic and Design</li></a>
        <a href=""><li>Database Management and Systems</li></a>
        <a href=""><li>Web Programming</li></a>
        <a href=""><li>Data Structures and Algorithm</li></a>
        <a href=""><li>Software Engineering</li></a>
        <a href=""><li>Networks and Communication</li></a>
        <a href=""><li>Theory of Computation</li></a>
        <a href=""><li>Computer Architecture</li></a>
        <a href=""><li>Calculus for Engineers</li></a>
        <a href=""><li>Statistics for Engineers</li></a>
      </ul>
    </div>
    <div class="mock-test">
      <a href="mock.php"><button id="bt-icons"><i class="fa fa-pencil-square-o"></i></button></a> 
    </div>
    <div class="ddl2">
      <ul>
        <h2 id="head2" style="width:300px;">Mock Tests</h2> <br>
        <a href="echem.php"><li>Engineering Chemistry</li></a>
        <a href="ephy.php"><li>Engineering Physics</li></a>
        <a href="dld.php"><li>Digital Logic and Design</li></a>
        <a href="dbms.php"><li>Database Management and Systems</li></a>
        <a href="iwp.php"><li>Web Programming</li></a>
        <a href="dsa.php"><li>Data Structures and Algorithm</li></a>
        <a href="sw.php"><li>Software Engineering</li></a>
        <a href="net.php"><li>Networks and Communication</li></a>
        <a href="toc.php"><li>Theory of Computation</li></a>
        <a href="cao.php"><li>Computer Architecture</li></a>
        <a href="caleng.php"><li>Calculus for Engineers</li></a>
        <a href="steng.php"><li>Statistics for Engineers</li></a>
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
        <a href="https://drive.google.com/drive/folders/1mQO9ZGwxTVae-pJ2njRL5Th5R3l-pmpw?usp=sharing"><li>Hypertext Markup Language</li></a>
        <a href="https://drive.google.com/drive/folders/1mQO9ZGwxTVae-pJ2njRL5Th5R3l-pmpw?usp=sharing"><li>Cascading Style Sheets</li></a>
        <a href="https://drive.google.com/drive/folders/19dzOOhKMGI71o04H80hwQuQ4r_xYBGbg?usp=sharing"><li>Javascript</li></a>
        <a href="https://drive.google.com/drive/folders/1ZGa1y9IL64GqhNwQ4dVbH2gAw0E6Ytx5?usp=sharing"><li>PHP</li></a>
        <a href="https://drive.google.com/drive/folders/16SPdElIGN3ZSnqQDtHI84_uoyCkWOzad?usp=sharing"><li>Rest APIs</li></a>
        <a href="https://drive.google.com/drive/folders/1U5qt8wJx_2ZPDfIRQs8FrimtDkfi4vXC?usp=sharing"><li>Django</li></a>
        <a href="https://drive.google.com/drive/folders/1PPn1tn70lWCr4IfK4pNhPS94f2o7XYtQ?usp=sharing"><li>Data Science</li></a>
        <a href="https://drive.google.com/drive/folders/10I1g1CtJY21MNAFPG8bFQRQU6aDFIoUp?usp=sharing"><li>Ethical Hacking</li></a>
        <a href="https://drive.google.com/drive/folders/1hzJ93lWoopUiHjXrJ5GbB1pMlBjxeQ2Y?usp=sharing"><li>React Native</li></a>
        <a href="https://drive.google.com/drive/folders/16WWINbh_VJzFZ65HPZ9SXAY_T9GPgw3a?usp=sharing"><li>Machine Learning</li></a>
        <a href="https://drive.google.com/drive/folders/1sOOG-0W0yiyvegbd2G9wtcDcerEay_ID?usp=sharing"><li>Mongo DB</li></a>
        <a href="https://drive.google.com/drive/folders/14hP6XBkroBCDA9n-tifQ76085tDpFKSq?usp=sharing"><li>Android Development</li></a>
      </ul>
    </div>
  </div>
  <div id="content">
  <div class="cards">

    <div class="item1">
      <div class="inner">
      <div class="show">
        <img src="../pics/c1.jpg" alt="">
        <h4> 
          <br> <b>Dr. P. T. Sunderam</b><br>
          <br> <h5> <b>Experience</b> : 20 years</h5> <br>
        </h4>
      </div><br>
      <div class="back">
      <p style="font-size:4.5mm">
        Dr. Sunderam is one of the leading Counseling and Relationship Psychologist in India, whose goal is to guide both individuals and couples as they implement the skills that will allow their relationships to flourish.
      <br> <br><b>Expertise : </b></br>NLP, Emotional Freedom Therapy, Time Line Therapy, Neuro-Semantics, Silva mind control of therapy.
      </p>  
         <div class="btn">
           <button onclick="disp3('Dr. P. T. Sunderam')" id="bt-app">Appointment</button>
           <button onclick="disp4('Dr. P. T. Sunderam')" id="bt-msg">Message <i class="fa fa-envelope"></i></button>
         </div> 
        </div>
        </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
    </div>

    <div class="item2">
      <div class="inner">
      <div class="show">
        <img style="width:60%" src="../pics/c2.jpg" alt="">
        <h4> 
          <br> <b>Prof. G. B. Singh</b> <br>
          <br> <h5> <b>Experience : </b> 9 years</h5> <br>
        </h4>
      </div><br>
      <div class="back">
      <p>
        Prof. G. B. Singh, with his expertise and high skill levels, has combined a soothing touch with years  <h5> of experience which allow hi</h5>m to help his patients’ lives take a turn for the better on an everyday basis.
        <br><br> <b>Expertise : </b>Any symptom of dyslexia or any form of learning disability, which most likely are wide-ranging, genetically based neurological conditions.
      </p>  
      <div class="btn">
        <button onclick="disp3('Prof. G. B. Singh')" id="bt-app">Appointment</button>
        <button onclick="disp4('Prof. G. B. Singh')" id="bt-msg">Message <i class="fa fa-envelope"></i></button>
      </div> 
    </div>
    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
    </div>

    <div class="item3">
      <div class="inner">
      <div class="show">
        <img style="width:70%" src="../pics/c3.png" alt="">
        <h4> 
          <br> <b>Ms. Rashi Anand Laskari</b> <br>
          <br> <h5> <b>Experience : </b> 5 years</h5> <br>
        </h4>
      </div><br>
      <div class="back">
      <p style="font-size: 5mm;">
        Graduated in the University of Mumbai as a Psychologist in 2011, Dr. Rashi Anand Laskari is a renowned professional in the field of Mental Health Care located in Mumbai.
        <br><br> <b>Expertise : </b>Adolescent Counsellor , Mental Health Care , senior psychiatrist.
      </p> 
      <div class="btn">
        <button onclick="disp3('Ms. Rashi Anand Laskari')" id="bt-app">Appointment</button>
        <button onclick="disp4('Ms. Rashi Anand Laskari')" id="bt-msg">Message <i class="fa fa-envelope"></i></button>
      </div>
    </div>
    </div> 
    </div>

    <div class="item4">
      <div class="inner">
      <div class="show">
        <img style="width:65%" src="../pics/c4.jpg" alt="">
        <h4> 
          <br> <b>Mr. A. D. Mahapatra</b> <br>
          <br> <h5> <b>Experience : </b> 17 years</h5> <br>
        </h4>
      </div><br>
      <div class="back">
      <p style="font-size:5mm">
        He is affiliated with hospitals and clinics in the area, remarking Best Treatment Without Medicine. He provides remedial cure to psychological disorders.
        <br><br> <b>Expertise : </b>psychological disorders, personality problems, unhappiness causes, bad habits, behavior problems, emotional problems.
      </p> 
      <div class="btn">
        <button onclick="disp3('Mr. A. D. Mahapatra')" id="bt-app">Appointment</button>
        <button onclick="disp4('Mr. A. D. Mahapatra')" id="bt-msg">Message <i class="fa fa-envelope"></i></button>
      </div>  
    </div>
    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
    </div>

    <div class="item5">
      <div class="inner">
      <div class="show">
        <img style="width:60%" src="../pics/c5.jpg" alt="">
        <h4> 
          <br> <b>Mrs. Arthai Selvan</b> <br>
          <br> <h5> <b>Experience : </b> 13 years</h5> <br>
        </h4>
      </div><br>
      <div class="back">
      <p style="font-size:4.5mm">
        A national certified counselor and a licensed clinical psychologist from the United States and India respectively, located in Hyderabad.She runs an you tube channel named simple tools for intential living (STIL).
        <br><br> <b>Expertise : </b>Mindfulness informed therapy and based therapies, intuitive eating counseling, cognitive behavior therapy.
      </p> 
      <div class="btn">
        <button onclick="disp3('Mrs. Arthai Selvan')" id="bt-app">Appointment</button>
        <button onclick="disp4('Mrs. Arthai Selvan')" id="bt-msg">Message <i class="fa fa-envelope"></i></button>
      </div> 
    </div> 
    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
    </div>

    <div class="item6">
      <div class="inner">
      <div class="show">
        <img style="width:65%" src="../pics/c6.jpg" alt="">
        <h4> 
          <br> <b>Mrs. Hema Sampath</b> <br>
          <br> <h5> <b>Experience : </b>12 years</h5><br>
        </h4>
      </div><br>
      <div class="back">
      <p style="font-size:4.5mm">
        She believes that everyone has ups and downs in life, and most of the times one can handle it by themselves. However, when one is not able to overcome by themselves nor their near and dear ones are seemed to be helpful, a new beginning is required.
        <br><br> <b>Expertise : </b>Counseling Psychologist, Educational Psychologist, Health Psychologist and Psycho-Oncologist.
      </p>  
      <div class="btn">
        <button onclick="disp3('Mrs. Hema Sampath')" id="bt-app">Appointment</button>
        <button onclick="disp4('Mrs. Hema Sampath')" id="bt-msg">Message <i class="fa fa-envelope"></i></button>
      </div>
    </div>
    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
    </div>

    <div class="item7">
      <div class="inner">
      <div class="show">
        <img style="width:60%" src="../pics/c7.jpg" alt="">
        <h4> 
          <br> <b>Dr. Lakshmi T Rajan</b> <br>
          <br> <h5> <b>Experience : </b>12 years</h5><br>
        </h4>
      </div><br>
      <div class="back">
      <p style="font-size:4.5mm">
        Through her research, she has developed Mind Management and Delta State Meditation, which has brought very important results in the treatment of psychological disorders and has given hope of life to many people.
        <br><br> <b>Expertise : </b>Psychological Counselling , Psychotherapy and Counseling.
      </p>  
      <div class="btn">
        <button onclick="disp3('Dr. Lakshmi T Rajan')" id="bt-app">Appointment</button>
        <button onclick="disp4('Dr. Lakshmi T Rajan')" id="bt-msg">Message <i class="fa fa-envelope"></i></button>
      </div>   
    </div>
    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
    </div>

    <div class="item8">
      <div class="inner">
      <div class="show">
        <img style="width:65%;height:60%;" src="../pics/c8.jpg" alt="">
        <h4> 
          <br><b>Ms. Chhaya Jain</b></span> <br>
          <br> <h5> <b>Experience : </b>8 years</h5><br>
        </h4>
      </div><br>
      <div class="back">
      <p style="font-size:4.5mm">
        She is a trusted Counseling Psychologist that provides personal treatment to people in stress, tension, depression, etc., to make them overcome these conditions in order to live peaceful life.
        <br><br> <b>Expertise : </b>Counseling Psychologist, Educational Psychologist, Health Psychologist and Psycho-Oncologist.
      </p>  
      <div class="btn">
        <button onclick="disp3('Ms. Chhaya Jain')" id="bt-app">Appointment</button>
        <button onclick="disp4('Ms. Chhaya Jain')" id="bt-msg">Message <i class="fa fa-envelope"></i></button>
      </div>    
    </div> 
    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
    </div>

    <div class="item9">
      <div class="inner">
      <div class="show">
        <img style="width:70%" src="../pics/c9.jpg" alt="">
        <h4> 
          <br> <b>Dr. Dattaram Satpute</b> <br>
          <br> <h5> <b>Experience : </b>19 years</h5><br>
        </h4>
      </div><br>
      <div class="back">
      <p style="font-size: 5mm;">
        He is MS in Counseling and Psychotherapy, D.Sc. in Psychotherapy and member of the American Counsellors Association.
        <br><br> <b>Expertise : </b>Psychometric testing, stress treatment, parent counseling career counselling.
      </p>  
      <div class="btn">
        <button onclick="disp3('Dr. Dattaram Satpute')" id="bt-app">Appointment</button>
        <button onclick="disp4('Dr. Dattaram Satpute')" id="bt-msg">Message <i class="fa fa-envelope"></i></button>
      </div>
    </div>
    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
    </div>
  </div>

  <div class="extra">
    <p>Meanwhile, know more about: <a style="text-decoration: none;" href="anxiety.php">Anxiety</a> | <a style="text-decoration: none;" href="stress.php">Stress</a> | <a style="text-decoration: none;" href="depression.php">Depression</a> </p>
  </div>
</div>

  <div id="form1">
    <form action="#" method="POST" onsubmit="return false">
      <i id="cut" style="color:red" onclick="disp2('form1')" class="fa fa-cut"></i>
      <label style="margin-left:-24px;" for="name">Name</label> <br>
      <input type="text"> <br>

      <label for="mail">Email</label> <br>
      <input type="text"> <br>

      <label for="number">Contact</label> <br>
      <input type="text"> <br> <br>
      
      <label for="c_name">Counsellor Selected : </label> <span id="c-name"></span> <br>
      
      <label for="msg">Remarks for Counsellor</label> <br>
      <textarea name="msg1" id="msg1" cols="30" rows="5"></textarea> <br>

      <center><button onclick="disp5('form1')" id="bt-set">SET-UP <i class="fa fa-send"></i></button></center>
    </form>
  </div>
  <div id="form2">
    <form action="#" method="POST" onsubmit="return false">
      <i id="cut" style="color:red" onclick="disp2('form2')" class="fa fa-cut"></i>
      <label style="margin-left:-24px;" for="name">Name</label> <br>
      <input type="text"> <br>

      <label for="mail">Email</label> <br>
      <input type="text"> <br>

      <label for="number">Contact</label> <br>
      <input type="text"> <br> <br>
      
      <label for="c_name">Counsellor Selected : </label> <span id="cname"></span> <br>
      
      <label for="msg">Message</label> <br>
      <textarea name="msg2" id="msg2" cols="30" rows="5"></textarea> <br>

      <center><button onclick="disp5('form2')" id="bt-set">SEND <i class="fa fa-send"></i></button></center>
    </form>
  </div>

  <footer class="new_footer_area bg_color">
    <div class="new_footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                        <p>Don’t miss any updates of our new Lectures and Contests!</p>
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
</body>
  </html>

