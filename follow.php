<?
include("retwis.php");

$r = redisLink();
if (!isLoggedIn() || !gt("uid") || gt("f") === false ||
    !($username = $r->hget("user:".gt("uid"),"username"))) {
    header("Location:index.php");
    exit;
}

$f = intval(gt("f"));
$uid = intval(gt("uid"));
if ($uid != $User['id']) {
    if ($f) {
        $r->zadd("followers:".$uid,time(),$User['id']);
        $r->zadd("following:".$User['id'],time(),$uid);
    } else {
        $r->zrem("followers:".$uid,$User['id']);
        $r->zrem("following:".$User['id'],$uid);
    }
}
header("Location: profile.php?u=".urlencode($username));
?>
