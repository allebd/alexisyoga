<?php 
    include_once("includes/session.php");
    include_once("includes/config.php");
    
	$comment_blog = $_POST['comment_blog'];
	$comment_author = 'Anonymous';
	$comment_body =  mysql_real_escape_string(trim($_POST['comment_body']));
	$comment_date = date('Y-m-d');

	//Select Blog article comment
    $insertblog = "INSERT INTO `comment`(`comment_author`, `comment_body`, `comment_date`, `comment_blog`)
    			VALUES ('$comment_author','$comment_body','$comment_date','$comment_blog')";
	    $insertingblog = mysql_query($insertblog);


	header("Location:article.php?id=$comment_blog");

?>