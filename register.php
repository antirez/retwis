<?
include("retwis.php");

# Form sanity checks
if (!gt("username") || !gt("password") || !gt("password2"))
    goback("Every field of the registration form is needed!");
if (gt("password") != gt("password2"))
    goback("The two password fileds don't match!");

# The form is ok, check if the username is available
$username = gt("username");
$password = gt("password");
$r = redisLink();
if ($r->hget("users",$username))
    goback("Sorry the selected username is already in use.");

# Everything is ok, Register the user!
$userid = $r->incr("next_user_id");
$authsecret = getrand();
$r->hset("users",$username,$userid);
$r->hmset("user:$userid",
    "username",$username,
    "password",$password,
    "auth",$authsecret);
$r->hset("auths",$authsecret,$userid);

$r->zadd("users_by_time",time(),$username);

# User registered! Login her / him.
setcookie("auth",$authsecret,time()+3600*24*365);

include("header.php");
?>
<h2>Welcome aboard!</h2>
Hey <?=utf8entities($username)?>, now you have an account, <a href="index.php">a good start is to write your first message!</a>.
<?
include("footer.php")
?>
