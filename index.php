<html>
    <head>
        <title>Beer Recipe Log</title>
        <link rel="stylesheet" href="main.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    </head>
<body>
    <div>
        <img src="photos/BP_Logo.jpg" alt="Logo" width="125" height="100">
    </div>
    <div class="container">
    <form method="post" action="submit.php">
        <div id="div_login">
            <h1>Brewing Log - Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <button class="btn btn-outline-success" type="submit" value="Submit" name="but_submit" id="but_submit">Submit</button>
                <a class="btn btn-outline-success" href="newAccount.php" style="float: right;">Create New Account</a>
            </div>                     
        </div>
    </form>
</div>
</body>
</html>