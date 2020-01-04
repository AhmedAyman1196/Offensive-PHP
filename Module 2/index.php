<html>
  <body>
	Only press if first time using the website
	make sure you have mysql up and a user called 'user' </br>with password 'password' , and database called 'site' this button will create a table called users
 	<form action="create.php" method="post">
         <input type="submit" value = "Create table">
      </form>

      <form action="register.php" method="post">
         <input type="submit" value = "Register">
      </form>

	<form action="search.php" method="get">
		<input type = "text"  name = "key"> 
        	 <input type="submit" value = "Search">
      </form>
	</br></br></br>

	<h1>
	<?php
	if( isset($_COOKIE['done']) && $_COOKIE['done'] == 'yes' ) 
	{
		echo "User created succefully ";
	}else if( isset($_COOKIE['allSet'])  && $_COOKIE['allSet'] == 'yes') 
	{
		echo "All set up";
	}	
	?>
	</h1>
      </body>
</html>
