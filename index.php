<?php

echo "<link rel='stylesheet' type='text/css' href='facialRecognition.css'>\n";

echo "<h1>Facial Analysis Research</h1>";
include_once 'header.php';

if ($loggedin) echo <<<_END
<div id = "body">
		<h2>Welcome $user</h2>
			<div id = "bodyText">
				<p id = "bodyPara">
					"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
					abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
					nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
					 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
					 in culpa qui officia deserunt mollit anim id est laborum."
					 "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
					abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
					nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
					 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
					 in culpa qui officia deserunt mollit anim id est laborum."
					 "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
					abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
					nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
					 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
					 in culpa qui officia deserunt mollit anim id est laborum."
					 "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
					abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
					nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
					 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
					 in culpa qui officia deserunt mollit anim id est laborum."
				</p>
		</div>
	</div>
	<div id = "buttonDiv">
		<form action = "takePhoto.html">
			<input type="submit" value = "Take Photo!" id = "regButton">
		</form>
	</div>
	
	<div id = "footer" >
		<h3>Contact Details</h3>
			<p id = footerText> 
				Email: owen.bishop32@gmail.com <br>
				Telephone: 07768149819
			</p>
	</div>
_END;
else           echo <<<_END
					<div id = "body">
						<h2>Welcome</h2>
							<div id = "bodyText">
								<p id = "bodyPara">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
									abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
									nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
									 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
									 in culpa qui officia deserunt mollit anim id est laborum.
									 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
									abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
									nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
									 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
									 in culpa qui officia deserunt mollit anim id est laborum.
									 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
									abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
									nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
									 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
									 in culpa qui officia deserunt mollit anim id est laborum.
									 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut l
									abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
									nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
									 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
									 in culpa qui officia deserunt mollit anim id est laborum.
								</p>
						</div>
					</div>
					<div id = "buttonDiv">
		<form action = "register.html">
			<input type="submit" value = "Register Here" id = "regButton">
		</form>
	</div>
	
	<div id = "footer" >
		<h3>Contact Details</h3>
			<p id = footerText> 
				Email: owen.bishop32@gmail.com <br>
				Telephone: 07768149819
			</p>
	</div>
_END;

				
?>				
				