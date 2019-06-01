<html>
<head>
	<link href="./css/bootstrap/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="./css/style.css" type="text/css" rel="stylesheet">
	<title>Add Account</title>
</head>

<body>
	<nav class="navbar navbar-dark bg-dark">
          <div class="dropdown">
              <a class="mainmenubtn">
                  <img src="img/logo.png" alt="" />
              </a>
              <div class="dropdown-child">
				  <a href="mainhome.php">Home</a>
                  <a href="+account.php">Add new Account</a>
                  <a href="#">Import New Data</a>
                  <a href="#">Buying List</a>
                  <a href="#">Transfer Stock</a>
                  <a href="#">List Stock</a>
                  <a href="#">Print Label Stock</a>
              </div>
          </div>
		  <form method="post" action="logout.php">
             <input type="submit" value="Logout" />
          </form>
    </nav>
    <br/><br/>
	
	<header >
		<h3 align="center">Add New Account</h3>
	</header>

    <form action="create.php" method="post" name="form1">
		
        <table class="jumbotron" width="600px" align="center" border="1">
            <tr class="bg-primary"> 
                <td>Username</td>
                <td><input type="text" name="user_id" placeholder="Username"></td>
            </tr>
			<tr> 
                <td>Password</td>
                <td><input type="password" name="pass" placeholder="Password"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" placeholder="Email"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $user_id = $_POST['user_id'];
		$pass = $_POST['pass'];
        $email = $_POST['email'];

        // include database connection file
        include_once("db_connect.php");

        // Insert user data into table
        $result = mysqli_query($connection, "INSERT INTO users(user_id,pass,email) VALUES('$user_id','$pass','$email')");

        // Show message when user added
        echo "Account was added. <a href='mainhome.php'>main home</a>";
    }
    ?>
</body>
</html>