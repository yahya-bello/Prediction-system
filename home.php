<html>
<head>
<title>Login Page</title>
<style>
    body{
        background-image: url(img/home.jpg);
        background-size: cover;
    }
   h1{
       float: left;
       color: white;
       font-family: Georgia, 'Times New Roman', Times, serif;
       padding: 50px;
   }
   .btncre{
          border:"0";
          float: right;
          margin-top: 75px;
          margin-right: 80px;
   }
   .btncre2{
          border:"0" ;
          float: right;
          margin-top: 200px;
          margin-right:0px;
          color: white;
          padding: 10px;
   }
   h2{
       color: white;
       font-family: Georgia, 'Times New Roman', Times, serif;
       font-size: 12px;
   }
   #username{margin: 15px;}
   #password{margin: 15px;}
   a{color: red; font-family: Georgia, 'Times New Roman', Times, serif;}
   .l{margin: 10px; padding: 6px;}
</style>
</head>
<body>
<h1> Prediction System</h1>
<script type="text/javascript">
function valid(){
	if(document.getElementById("username").value==""){
		alert("Please enter UserName");
		document.getElementById("username").focus();
		return false;	
	}
	if(document.getElementById("password").value==""){
		alert("Please enter UserName");
		document.getElementById("password").focus();
		return false;	
	}
	return true;
}
</script>
<table class="btncre">
<form name="sign1" action="Registration.php">
<tr><td><input type="submit" name="SIGN UP" value="SIGN UP"/></td></tr>
</form>
</table>	
</br></br></br></br>
<table class="btncre2">
<form method="POST" action="Login.php" onSubmit="return valid()">
<tr><td colspan="2"><b><strong>USER LOGIN</strong></b></td></tr>
<tr><td>Username</td><td>:</td><td><input type="text" id="username" name="username" size="20"></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" id="password" name="password" size="20"></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" class="l" value="Login"></td></tr>
</form>
<tr><td colspan="2"><a href="forgotpassword.html">Forgot Password?</a></td>
</table>
</bodys>
</html>