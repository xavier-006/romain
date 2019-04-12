
<html>
<head>
    <title>Login</title>
      <!-- Bootstrap core CSS -->
      <link href="/romain/view/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
     <link href="/romain/view/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="span4 offset4 well" style="margin:auto; ">
                <legend>Please Sign In</legend>
                <?php  
                    if($error == 1) {
                        print '  <div class="alert alert-danger"> ';
                        print  $error_msg;
                        print ' </div> ';
                    }         
                ?>

                <div id="error-username" class="alert alert-danger" style="display: none">
                     Le nom d'utilisateur ne peut contenir le caratère '|'
                </div>

                <div id="error-password" class="alert alert-danger" style="display: none">
                    Le mot de passe ne peut contenir le caratère '|'
                </div>

                <form method="POST" action="" accept-charset="UTF-8">
                    <input type="text" id="username" class="form-control span4" name="username" oninput="checkUsername()" placeholder="Username">
                    <input type="password" id="password" class="form-control span4" name="password" oninput="checkPassword()" placeholder="Password">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" value="1"> Remember Me
                    </label>
                    <button type="submit" name="submit" class="btn btn-info btn-block">Sign in</button>
                </form>    
            </div>
        </div>
    </div>
</body>
 
<script>

// Permet d'afficher un message d'erreur si jamais l'utilisateur tape le caractère | dans son username ou mot de passe
function checkUsername () {
    let username = document.getElementById('username').value;
    let errorUsername = document.getElementById('error-username');
    if (username.includes ('|')) {
        errorUsername.style.display = "block";
    } else {
        console.log('False');
        errorUsername.style.display = "none";
    }
}

function checkPassword () {
    let password = document.getElementById('password').value;
    let errorPassword = document.getElementById('error-password');
    if (password.includes ('|')) {
        errorPassword.style.display = "block";
    } else {
        errorPassword.style.display = "none";
    }
}



</script>

<!-- Latest compiled and minified JavaScript -->
<script src="/romain/view/vendor/jquery/jquery.min.js"></script>
<script src="/romain/view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
</html>