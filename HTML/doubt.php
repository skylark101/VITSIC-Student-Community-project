<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Doubt Section</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
}

</script>
 </head>
 <style>
  .panel panel-default .myrule{
    background-color: blue important;
  }
  
 /**
 * Oscuro: #283035
 * Azul: #03658c
 * Detalle: #c7cacb
 * Fondo: #dee1e3
 ----------------------------------*/
 * {
 	margin: 0;
 	padding: 0;
 	-webkit-box-sizing: border-box;
 	-moz-box-sizing: border-box;
 	box-sizing: border-box;
 }
 .head{
  display:flex;
  padding:15px;
  height:80px;
}
.head::after{
  content: "";
  background-image: url('../pics/nav-back.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  position: absolute;
  top:0;
  bottom:0;
  right:0;
  left:0;
  height:80px;
  z-index: -1;
  opacity: 0.85;
  filter:blur(1.5px)
}
button{
  outline:none;
  cursor: pointer;
}
.search input{
  width: 400px;
  height:30px;
  }
  .search{
    flex:3;
    margin-left:300px;
  }
  #clg{
    color:blue;
  }
  #cred{
    margin-right:60px;
    display:flex;
  }
  #bt-search{
    padding:5px;
    background-color: black;
    color:white;
    border-radius: 5px;
    height:30px;
    position: relative;
    top:3px;
  }
  .search i{
    margin-bottom: 4px;
  }
  #bt-search :hover{
    cursor: pointer;
  }
  #bt-off{
    color:red;
    background-color: lightgrey;
    padding:5px;
    width:30px;
    height:30px;
    border-radius: 50px;
    position:relative;
    left:30px;
    top:10px;
    border:none;
  }
  #bt-off:hover{
    cursor: pointer;
  }
  body{
    background-color: beige;
  }
  #nav{
    line-height: 10mm;
    width:40px;
    margin-left: 20px;
    margin-top: 20px;
    visibility: hidden; 
    position: relative;
    z-index:3;
  }
  #bt-icons{
    border:none;
    font-size: 8mm;
  }
  .prev-pap,.mock-test,.grade-pred,.counsel,.video-lec,.doubt{
    border-bottom: 2px solid black;
    border-right: 2px solid black;
    margin-bottom: 15px;
    cursor: pointer;
    background-color: white;
    border-radius: 10px;
  }
  i{
    cursor: pointer;
    margin-left:4px;
  }
  #bt-off i{
    position:relative;
    right:2px;
  }
  .ddl1,.ddl2,.ddl6{
    width:400px;
    line-height: 6mm;
    position: relative;
    bottom:5px;
    left:15px;
    padding:15px;
    display:none;
    color: white;
    border-radius: 10px;        
    background-image: url('../pics/spot.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
  .ddl1 li,.ddl2 li,.ddl6 li{
    list-style: none;
    border-bottom:2px solid black;
    border-right:2px solid black;
    margin-bottom: 8px;
    font-size: 6mm;
    color:white;
  }
  .ddl1 li:hover,.ddl2 li:hover,.ddl6 li:hover{
    transform: scale(1.07);
  }
  a{
    text-decoration: none;
    color:black;
  }
  .prev-pap:hover +.ddl1,
  .mock-test:hover+.ddl2,
  .grade-pred:hover+.ddl3,
  .counsel:hover+.ddl4,
  .doubt:hover+.ddl5,
  .video-lec:hover+.ddl6,
  .ddl1:hover,
  .ddl2:hover,
  .ddl3:hover,
  .ddl4:hover,
  .ddl5:hover,
  .ddl6:hover{
    display:block;
  }
  .ddl3,.ddl4,.ddl5{
    width:430px;
    line-height: 5mm;
    padding:8px;
    display: none;
    position:relative;
    bottom:15px;
    color:white;
    border-radius: 10px;
    background-image: url('../pics/spot.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
  .ddl3 h3,.ddl4 h3,.ddl5 h3{
    margin-bottom: 8px;
    border-bottom: black solid 2px;
    border-right: black solid 2px;
    width:230px;
  }
  .ddl3 button,.ddl4 button,.ddl5 button{
    padding:5px;
    margin-top: 8px;
    border-radius: 6px;
    cursor: pointer;
    background-image: url('../pics/images.jpg');
  }
  .ddl1{
    position: relative;
    left:40px;
    bottom:70px;
  }
  .ddl2{
    position: relative;
    bottom:100px;
    left:40px;
  }
  .ddl4{
    width:320px;
  }
  .ddl6{
    position:relative;
    bottom:300px;
    left:40px;
  }
  #log{
    border-radius: 5px;
    border:black solid 2px;
    position:relative;
    left:50px;
    padding:10px;
    background-color: cornsilk;
    height:50px;
    display:none;
    z-index:1;
  }
  #bt-log{
    position:relative;
    left:40px;
    top:10px;
    margin-bottom: 10px;
    border-radius: 5px;
    padding:3.5px;
    color:red;
    cursor:pointer;
  }


 a {
 	color: black;
	 text-decoration: none;
 }
 a:hover {
 	color: black;
	 text-decoration: none;
 }
ul {
	list-style-type: none;
}
ul a{
	text-decoration: none;
}
ul a:hover{
	text-decoration: none;
}
body {
	font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
	background: #dee1e3;
}
.nav i{
	color:black;
	background-color: white;
}

/** ====================
 * Lista de Comentarios
 =======================*/
.comments-container {
	margin: 60px auto 15px;
	width: 768px;
}

.comments-container h1 {
	font-size: 36px;
	color: #283035;
	font-weight: 400;
}

.comments-container h1 a {
	font-size: 18px;
	font-weight: 700;
}

.comments-list {
	margin-top: 30px;
	position: relative;
}

/**
 * Lineas / Detalles
 -----------------------*/
.comments-list:before {
	content: '';
	width: 2px;
	height: 100%;
	background: #c7cacb;
	position: absolute;
	left: 32px;
	top: 0;
}

.comments-list:after {
	content: '';
	position: absolute;
	background: #c7cacb;
	bottom: 0;
	left: 27px;
	width: 7px;
	height: 7px;
	border: 3px solid #dee1e3;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
}

.reply-list:before, .reply-list:after {display: none;}
.reply-list li:before {
	content: '';
	width: 60px;
	height: 2px;
	background: #c7cacb;
	position: absolute;
	top: 25px;
	left: -55px;
}


.comments-list li {
	margin-bottom: 15px;
	display: block;
	position: relative;
}

.comments-list li:after {
	content: '';
	display: block;
	clear: both;
	height: 0;
	width: 0;
}

.reply-list {
	padding-left: 88px;
	clear: both;
	margin-top: 15px;
}
/**
 * Avatar
 ---------------------------*/
.comments-list .comment-avatar {
	width: 65px;
	height: 65px;
	position: absolute;
	float: left;
	border: 3px solid #FFF;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	overflow: hidden;
}

.comments-list .comment-avatar img {
	width: 100%;
	height: 100%;
}

.reply-list .comment-avatar {
	width: 50px;
	height: 50px;
}

.comment-main-level:after {
	content: '';
	width: 0;
	height: 0;
	display: block;
	clear: both;
}
/**
 * Caja del Comentario
 ---------------------------*/
.comments-list .comment-box {
	width: 680px;
	float: right;
	position: relative;
	-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
	-moz-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
	box-shadow: 0 1px 1px rgba(0,0,0,0.15);
}

.comments-list .comment-box:before, .comments-list .comment-box:after {
	content: '';
	height: 0;
	width: 0;
	position: absolute;
	display: block;
	border-width: 10px 12px 10px 0;
	border-style: solid;
	border-color: transparent #FCFCFC;
	top: 8px;
	left: -11px;
}

.comments-list .comment-box:before {
	border-width: 11px 13px 11px 0;
	border-color: transparent rgba(0,0,0,0.05);
	left: -12px;
}

.reply-list .comment-box {
	width: 610px;
}
.comment-box .comment-head {
	background: #FCFCFC;
	padding: 10px 12px;
	border-bottom: 1px solid #E5E5E5;
	overflow: hidden;
	-webkit-border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
}

.comment-box .comment-head i {
	float: right;
	margin-left: 14px;
	position: relative;
	top: 2px;
	color: #A6A6A6;
	cursor: pointer;
	-webkit-transition: color 0.3s ease;
	-o-transition: color 0.3s ease;
	transition: color 0.3s ease;
}

.comment-box .comment-head i:hover {
	color: #03658c;
}

.comment-box .comment-name {
	color: #283035;
	font-size: 14px;
	font-weight: 700;
	float: left;
	margin-right: 10px;
}

.comment-box .comment-name a {
	color: #283035;
}

.comment-box .comment-head span {
	float: left;
	color: #999;
	font-size: 13px;
	position: relative;
	top: 1px;
}

.comment-box .comment-content {
	background: #FFF;
	padding: 12px;
	font-size: 15px;
	color: #595959;
	-webkit-border-radius: 0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
}

.comment-box .comment-name.by-author, .comment-box .comment-name.by-author a {color: #03658c;}
.comment-box .comment-name.by-author:after {
	content: 'autor';
	background: #03658c;
	color: #FFF;
	font-size: 12px;
	padding: 3px 5px;
	font-weight: 700;
	margin-left: 10px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}

.aajamere
{
	margin-left: 700px;
}

/** =====================
 * Responsive
 ========================*/
@media only screen and (max-width: 766px) {
	.comments-container {
		width: 480px;
	}

	.comments-list .comment-box {
		width: 390px;
	}

	.reply-list .comment-box {
		width: 320px;
	}
}
#credential{
	font-size:5mm;
	font-weight:bold;
	z-index:2;
	color:black;
}
.main_content{
	position:absolute;
	top:15%;
	left:10%;
}

 </style>
 <body>
 <div class="head">
    <h2><i onclick="disp('nav')" style="font-size: 30px;color:black" class="fa fa-ellipsis-v"></i><a style="text-decoration: none;" href="main.php"><span id="clg"> VIT</span>SIC</a></h2>
		<h2 style="flex:2;position:relative;bottom:10px" align="center"><a style="color:black;text-decoration:none" href="#">DOUBT SECTION</a></h2>
    <div id="cred"> 
<div id="nam">
    <?php

 
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
        <a style="text-decoration: none;" href=""><li>Engineering Chemistry</li></a>
        <a style="text-decoration: none;" href=""><li>Engineering Physics</li></a>
        <a style="text-decoration: none;" href=""><li>Digital Logic and Design</li></a>
        <a style="text-decoration: none;" href=""><li>Database Management and Systems</li></a>
        <a style="text-decoration: none;" href=""><li>Web Programming</li></a>
        <a style="text-decoration: none;" href=""><li>Data Structures and Algorithm</li></a>
        <a style="text-decoration: none;" href=""><li>Software Engineering</li></a>
        <a style="text-decoration: none;" href=""><li>Networks and Communication</li></a>
        <a style="text-decoration: none;" href=""><li>Theory of Computation</li></a>
        <a style="text-decoration: none;" href=""><li>Computer Architecture</li></a>
        <a style="text-decoration: none;" href=""><li>Calculus for Engineers</li></a>
        <a style="text-decoration: none;" href=""><li>Statistics for Engineers</li></a>
      </ul>
    </div>
    <div class="mock-test">
      <a href="mock.php"><button id="bt-icons"><i class="fa fa-pencil-square-o"></i></button></a> 
    </div>
    <div class="ddl2">
      <ul>
        <h2 id="head2" style="width:300px;">Mock Tests</h2> <br>
        <a style="text-decoration: none;" href="echem.php"><li>Engineering Chemistry</li></a>
        <a style="text-decoration: none;" href="ephy.php"><li>Engineering Physics</li></a>
        <a style="text-decoration: none;" href="dld.php"><li>Digital Logic and Design</li></a>
        <a style="text-decoration: none;" href="dbms.php"><li>Database Management and Systems</li></a>
        <a style="text-decoration: none;" href="iwp.php"><li>Web Programming</li></a>
        <a style="text-decoration: none;" href="dsa.php"><li>Data Structures and Algorithm</li></a>
        <a style="text-decoration: none;" href="sw.php"><li>Software Engineering</li></a>
        <a style="text-decoration: none;" href="net.php"><li>Networks and Communication</li></a>
        <a style="text-decoration: none;" href="toc.php"><li>Theory of Computation</li></a>
        <a style="text-decoration: none;" href="cao.php"><li>Computer Architecture</li></a>
        <a style="text-decoration: none;" href="caleng.php"><li>Calculus for Engineers</li></a>
        <a style="text-decoration: none;" href="steng.php"><li>Statistics for Engineers</li></a>
      </ul>
    </div>
    
    <div class="grade-pred">
      <a style="text-decoration: none;" href="grade.php"><button id="bt-icons"><i class="fa fa-sort-numeric-desc"></i></button></a> 
    </div>
    
    <div class="ddl3">
      <h3>Grade Prediction</h3>
      <p>Easily know your future grade just by entering few genuine details. Highly benefitial with an efficiency of <span id="eff"><b>95%</b></span></p>
      <a style="text-decoration: none;" href="grade.php"><button>Predict my grade</button></a>
    </div>

    <div class="counsel">
      <a style="text-decoration: none;" href="counsel.php"><button id="bt-icons"><i class="fa fa-child"></i></button></a> 
    </div>
    
    <div class="ddl4">
      <h3>Online Counselling</h3>
      <p>Your own personal Advisor and Guide</p>
      <a style="text-decoration: none;" href="counsel.php"><button>Appointment</button></a>
    </div>
    
    <div class="doubt">
      <a style="text-decoration: none;" href="doubt.php"><button id="bt-icons"><i class="fa fa-question-circle"></i></button></a>
    </div>
    <div class="ddl5">
      <h3>Doubts and Discussion</h3>
      <p>Join the community and get your doubts cleared</p>
      <a style="text-decoration: none;" href="doubt.php"><button>Doubt ?</button></a>
    </div>

    <div class="video-lec">
      <a style="text-decoration: none;" href="video.php"><button id="bt-icons"><i class="fa fa-video-camera"></i></button></a> 
    </div>
    <div class="ddl6">
      <h2>Video Lectures</h2> <br>
      <ul>
        <a style="text-decoration: none;" href="https://drive.google.com/drive/folders/1mQO9ZGwxTVae-pJ2njRL5Th5R3l-pmpw?usp=sharing"><li>Hypertext Markup Language</li></a>
        <a style="text-decoration: none;" href="https://drive.google.com/drive/folders/1mQO9ZGwxTVae-pJ2njRL5Th5R3l-pmpw?usp=sharing"><li>Cascading Style Sheets</li></a>
        <a style="text-decoration: none;" href="https://drive.google.com/drive/folders/19dzOOhKMGI71o04H80hwQuQ4r_xYBGbg?usp=sharing"><li>Javascript</li></a>
        <a style="text-decoration: none;" href="https://drive.google.com/drive/folders/1ZGa1y9IL64GqhNwQ4dVbH2gAw0E6Ytx5?usp=sharing"><li>PHP</li></a>
        <a style="text-decoration: none;" href="https://drive.google.com/drive/folders/16SPdElIGN3ZSnqQDtHI84_uoyCkWOzad?usp=sharing"><li>Rest APIs</li></a>
        <a style="text-decoration: none;" href="https://drive.google.com/drive/folders/1U5qt8wJx_2ZPDfIRQs8FrimtDkfi4vXC?usp=sharing"><li>Django</li></a>
        <a style="text-decoration: none;" href="https://drive.google.com/drive/folders/1PPn1tn70lWCr4IfK4pNhPS94f2o7XYtQ?usp=sharing"><li>Data Science</li></a>
        <a style="text-decoration: none;" href="https://drive.google.com/drive/folders/10I1g1CtJY21MNAFPG8bFQRQU6aDFIoUp?usp=sharing"><li>Ethical Hacking</li></a>
        <a style="text-decoration: none;" href="https://drive.google.com/drive/folders/1hzJ93lWoopUiHjXrJ5GbB1pMlBjxeQ2Y?usp=sharing"><li>React Native</li></a>
        <a style="text-decoration: none;" href="https://drive.google.com/drive/folders/16WWINbh_VJzFZ65HPZ9SXAY_T9GPgw3a?usp=sharing"><li>Machine Learning</li></a>
        <a style="text-decoration: none;" href="https://drive.google.com/drive/folders/1sOOG-0W0yiyvegbd2G9wtcDcerEay_ID?usp=sharing"><li>Mongo DB</li></a>
        <a style="text-decoration: none;" href="https://drive.google.com/drive/folders/14hP6XBkroBCDA9n-tifQ76085tDpFKSq?usp=sharing"><li>Android Development</li></a>
      </ul>
    </div>
  </div>
<div class="main_content">
  <br />
  <br />
  <div class="container">
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div></div>
 </body>
</html>

<script>
$(document).ready(function()
{
 
 $('#comment_form').on('submit', function(event)
 {
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>
