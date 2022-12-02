<html>
    <head>
        <title>Beer Recipe Log</title>
        <link rel="stylesheet" href="main.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    </head>
<body class="bgcolor">
    <div>
        <img src="photos/BP_Logo.jpg" alt="Logo" width="125" height="100">
    </div>
    <div class="container">
    <form method="post" action="submit.php">
        <div id="div_login">
            <h1>Beer Recipe Log - Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" style="margin-left: 10px;"/>
            </div>
            <div>
                <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password" style="margin-left: 10px;"/>
            </div>
            <div>
                <button class="btn btn-outline-success" type="submit" value="Submit" name="submitBtn" id="submitBtn">Submit</button>
                <a class="btn btn-outline-info" href="newAccount.php" style="margin-left: 35px;">Create New Account</a>
                <a class="btn btn-outline-warning" href="resetPassword.php" style="float: right;">Password Reset</a>
            </div>                     
        </div>
    </form>
</div>
</body>
</html>