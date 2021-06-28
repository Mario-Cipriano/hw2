<html>
<head>
    <meta charset='utf-8'> 
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>FiereItalia Mario Cipriano (O46002221)</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Login</title>
    <link rel='stylesheet' type='text/css' media='screen' href='signup.css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:ital,wght@0,500;1,300&display=swap" rel="stylesheet">
    <script src='signup.js' defer></script>

</head>

<body>

<article class='article-form'>
<div class='sfondo'>
 <img src='images/logo_large.png'>
</div>
<div class='form'>
<h1 class='titolo'>Registra il tuo account:</h1>
<form method='Post'>
@csrf
   <label>Username:</label>
    <input class='username' type='text' name='username'></input>
    <label>Password:</label>
    <input type='password' name='password'></input>
    <label>Conferma Password:</label>
    <input type='password' name='confermapassword'></input>
    <input class='registrati' type='submit' name='registrati' value='Signup'></input>

</form>
<label class='account'> Hai già un account? <a class='accedi' href='login'>Accedi</a></label>
<div id='controllo'>
@if (isset($reg))
    {{ $reg }}
    @endif
</div>
<div id='pass-corta' class='hidden'>La password deve contenere minimo 8 caratteri</div>
<div id='special-char' class='hidden'>la password deve contenere minimo 1 carattere speciale: , # @ % & ! £ = - _ + - .</div>
<div id='usrinuso' class='hidden'>Username già in uso</div>
<div id='compilacampi' class='hidden'>Compila tutti i campi!</div>
<div id='confermapassword' class='hidden'>Le password inserite non sono le stesse!</div>
</div>
</article>
    
</body>

</html>