<?php
    include("config.php");
$q_id=$_GET['id'];
if($_SESSION['user_id']!='')
{
    $user_id=$_SESSION['user_id'];
}
if(isset($_POST['submit']))
{
    $rep_content=$_POST['content'];
    
    $rep_ins_qry=mysql_query("insert into reply_dtl (user_id,q_id,content,created_dtm) values('$user_id','$q_id','$rep_content',now())");
    
    if($rep_ins_qry)
    {
        ?>
        <script>
            alert("Your Answer is posted Successfully");
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert("Cant Post Your Answer");
        </script>
        <?php
    }
    
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>View Question</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>
     <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
</head>
<body>
    <div class="container header">
    	<div class="col-lg-12">
    		<a class="brand" href="#"><img src="img/a1.png"></a>
    	</div>
    </div>
        <div class="container-fluid">
            <?php include("header.php")?>
        </div>
   <div class="container ">
        <div class="row">
            <div class="col-sm-12">
                <br>
                
               <?php
                $sel_latest_qry=mysql_query("select ques_dtl.*, user_dtl.name from ques_dtl inner join user_dtl on ques_dtl.user_id=user_dtl.user_id where ques_dtl.q_id='$q_id'");
                if(mysql_num_rows($sel_latest_qry)>0)
                {
                while($sel_latest_qry_arr=mysql_fetch_array($sel_latest_qry))
                {
                ?>
                <blockquote>
  <a href="view-question.php?id=<?=$sel_latest_qry_arr['q_id']?>"><h2><?=$sel_latest_qry_arr['sub']?></h2></a>
  <p>By <?=$sel_latest_qry_arr['name']?> On <?=$sel_latest_qry_arr['created_dtm']?></p>
  <div><?=$sel_latest_qry_arr['des']?></div>
</blockquote>
                <?
                }
                
                if($sel_latest_qry)
                {
                    ?>
                    <h3>Answers</h3>
                    <?
                    $reply_qry=mysql_query("select reply_dtl.* , user_dtl.name from reply_dtl inner join user_dtl on reply_dtl.user_id=user_dtl.user_id where reply_dtl.q_id='$q_id'");
                    while($reply_qry_arr=mysql_fetch_array($reply_qry))
                    {
                        ?>
                        <h4><i>Replyed by <?=$reply_qry_arr['name']?></i></h4>
                        <div class="col-lg-12 ">
                            <?=$reply_qry_arr['content']?>
                        </div>
                        <?
                    }
                }
                ?>
                <form method="post">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Reply</label>
                    
                  </div>
                    <textarea name="content" id="editor1" rows="10" cols="80">
                Your ideas/information
                    </textarea>
                   <div class="form-group">
                       <button name="submit" type="submit" class="btn btn-primary">Reply</button>
                       <a href="discussion.php" class="btn btn-warning">Back</a>
                   </div>
                </form>
                <?
                
                }
                else
                {
                    echo "<h2>Sorry! Data Not Found</h2>";
                }
              ?>
               
            </div>
        </div>
    </div>
     <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
</body>
</html>
