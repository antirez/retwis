<div id="welcomebox">
<div id="registerbox">
<h2>Register!</h2>
<b>Want to try Retwis? Create an account!</b>
<form method="POST" action="register.php">
<table>
<tr>
  <td>Username</td><td><input type="text" name="username"></td>
</tr>
<tr>
  <td>Password</td><td><input type="password" name="password"></td>
</tr>
<tr>
  <td>Password (again)</td><td><input type="password" name="password2"></td>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" name="doit" value="Create an account"></td></tr>
</table>
</form>
<h2>Already registered? Login here</h2>
<form method="POST" action="login.php">
<table><tr>
  <td>Username</td><td><input type="text" name="username"></td>
  </tr><tr>
  <td>Password</td><td><input type="password" name="password"></td>
  </tr><tr>
  <td colspan="2" align="right"><input type="submit" name="doit" value="Login"></td>
</tr></table>
</form>
</div>
Hello! Retwis is a very simple clone of <a href="http://twitter.com">Twitter</a>, as a demo for the <a href="http://code.google.com/p/redis/">Redis</a> key-value database. Key points:
<ul>
<li>Redis is a key-value DB, and it is <b>the only DB used</b> by this application, no MySQL or alike at all.</li>
<li>This application can scale horizontally since there is no point where the whole dataset is needed at the same point. With consistent hashing (not implemented in the demo to make it simpler) different keys can be stored in different servers.</li>
<li>The source code of this application, and a tutorial explaining its design, is available <a href="http://code.google.com/p/redis/wiki/TwitterAlikeExample">here</a>.
<li>PHP and the Redis server communicate using the PHP Redis library client written by Ludovico Mangocavallo and included inside the Redis tar.gz distribution.
</ul>
</div>
