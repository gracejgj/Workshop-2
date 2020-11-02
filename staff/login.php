	<!DOCTYPE html>
	<html>
	<head>
	<title>Employee Login | Tapau's Delivery System</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
	</head>
	
	<body>	
		<div class="main-content">
		<center>
        <form class="form-login" method="post" action="login2.php">
            <div class="form-email">
                <div class="form-background">

                    <div class="form-title">
                        <h1>Log in</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Username</span>
                            <input type="username" name="username" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <button type="submit" name="submit" >Log in</button>
                    </div>
					<center><h4>Back to HOMEPAGE</h4></center><br><center><a class="w3-button w3-white w3-border w3-round-large" href="../index.php" role="button" >TDS</a></center>	
                </div>     
            </div>
			
        </form>
		</center>
	<div class="sub_local">
	
	</div>
	<br/>
		 <script type="text/JavaScript">

var message="NoRightClicking";
function defeatIE() {if (document.all) {(message);return false;}}
function defeatNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;}
else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;}
document.oncontextmenu=new Function("return false")
</script>
    </div>

	</body>
	</html>