<html>
    <head>
        <title>My first PHP Website</title>
    </head>
    <body bgcolor="green">
        <h2><u>Login Page</u></h2>
        <a href="index.php">Click here to go back</a><br/><br/>
        <form action="checklogin.php" method="POST">
           Enter Username: <input type="text" name="username" required="required" /> <br><br><br/>
           Enter password: <input type="password" name="password" required="required" /> <br><br><br/>
           <input type="submit" value="Login"/>
        </form>
    </body>
</html>
