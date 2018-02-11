<!DOCTYPE <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
        <title><?= $title ?></title>
        <link rel="stylesheet" href="public/libs/bootstrap/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       
</head>

<h1>espace admin</h1>

<h2>formulaire d'incription</h2>

<body class="text-center">
    <form name="form_connect" id="form_connect" class="form-signin"  action="index.php?action=connectionMember" method="post">
      <div class="container">
        <div class="row-lg-6">
          <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
          <label for="mail" class="sr-only">adresse mail</label>
          <input type="email" id="mail" name="mail" class="form-control" placeholder="adresse mail" required="" autofocus="">
          <label for="pass" class="sr-only">mot de passe</label>
          <input type="password" id="pass" name="pass" class="form-control" placeholder="mot de passe" required="">
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" id="remember-me" name="remember-me" value="remember-me"> se souvenir de moi 
            </label>
          </div>
          <button name="button" id="button" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
        </div>  
      </div>    
    </form>
  

</body>

</html>