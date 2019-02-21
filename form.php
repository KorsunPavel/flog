<?php 
if(!isset($_SESSION['login'])) {
echo "<form action='./scriptlogin.php' method='POST'>
<div>
    <label for='login'>Login</label>
    <input type='text' id='login' name='login' >
</div>
<div>
    <label for='password'>Password</label>
    <input type='password' name='password' id='password'>
</div>
<div>
    <input type='submit' value='Submit' name='submitbtn'>
</div>
<a href='./registrationform.php'>Registration</a>
</form>";
} else {
echo "<h2>Test</h2>";
} 
?>
