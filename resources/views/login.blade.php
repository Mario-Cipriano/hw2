
<html>

<head>
    <meta charset='utf-8'> 
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>FiereItalia Mario Cipriano (O46002221)</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Login</title>
    <link rel='stylesheet' type='text/css' media='screen' href='login.css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:ital,wght@0,500;1,300&display=swap" rel="stylesheet">
    <script src='login.js' defer></script>
</head>

<body>
<article class='article-form'>
<div class='sfondo'>
 <img src='images/logo_large.png'>
</div>
<div class='form'>
<h1 class='titolo'>Accedi con il tuo account:</h1>
<form method='Post' name='login'>
@csrf
    <label >Username:</label>
    <input type='text' name='username'></input>
    <label >Password:</label>
    <input type='password' name='password'></input>
    <input class='login' type='submit' name='login' value='Login'></input>
</form>
<label class='no-account'> Non hai un account? <a class='signup' href="signup">Iscriviti</a></label>
<div id='controllo'>
@if (isset($errore))
    {{ $errore }}
    @endif</div>
</div>
</article>



</body>

</html>