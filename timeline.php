<?
include("retwis.php");
include("header.php");
?>
<h2>Timeline</h2>
<i>Latest registered users (an example of sorted sets)</i><br>
<?
showLastUsers();
?>
<i>Latest 50 messages from users aroud the world!</i><br>
<?
showUserPosts(-1,0,50);
include("footer.php")
?>
