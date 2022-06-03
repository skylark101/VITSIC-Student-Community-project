
<?php

$connect = new PDO('mysql:host=localhost:3307;dbname=vitsic','root','');

$query = "
SELECT * FROM tbl_comment 
WHERE parent_comment_id = '0' 
ORDER BY comment_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '
 <div class="comments-container">

 <ul id="comments-list" class="comments-list">
   <li>
     <div class="comment-main-level">
       <!-- Avatar -->
       <div class="comment-avatar"><img style="position:absolute" src="../pics/2.png" alt=""></div>
       <!-- Contenedor del Comentario -->
       <div class="comment-box">
         <div class="comment-head">
           <h6 class="comment-name by">By <b>'.$row["comment_sender_name"].'</b>  </h6>
           <span><i>on '.$row["date"].'</i></span>
           <i class="fa fa-reply"></i>
           <i class="fa fa-heart"></i>
         </div>
         <div class="comment-content">
         '.$row["comment"].'
         </div>
       </div>
     </div>
</div>
<div class="aajamere" align="center" ><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>


 ';
 $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "
 SELECT * FROM tbl_comment WHERE parent_comment_id = '".$parent_id."'
 ";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <ul class="comments-list reply-list">
   <li>
     <!-- Avatar -->
     <div class="comment-avatar"><img style="position:absolute" src="../pics/1.png" alt=""></div>
     <!-- Contenedor del Comentario -->
     <div class="comment-box">
       <div class="comment-head">
         <h6 class="comment-name">Replied By <b>'.$row["comment_sender_name"].'</b></h6>
         <span><i>'.$row["date"].'</i></span>
         <i class="fa fa-reply"></i>
         <i class="fa fa-heart"></i>
       </div>
       <div class="comment-content">
       '.$row["comment"].'
       </div>
     </div>
     
   </li>
   <div class="aajamere" align="right"><button type="button" class="btn btn-success" id="'.$row["comment_id"].'">Reply</button></div>
   </ul>
   ';
   $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
  }
 }
 return $output;
}

?>
