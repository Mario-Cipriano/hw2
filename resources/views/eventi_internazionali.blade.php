



<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Eventi Internazionali</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='csrf-token' content="{{ csrf_token() }}">
    <link rel='stylesheet' type='text/css' media='screen' href='eventi_internazionali.css'>
    <script src='eventi_internazionali.js' defer></script>
</head>

<body>
    <header>
        <div id='overlay'>

        </div>
        <nav>
            <div id='flex-cont'>
                <img src='images/logo_small.png'>
                <a href='home'>Home</a>
                <a href='eventi_internazionali'>Eventi Internazionali</a>
                <a href='concerti'>Concerti</a>
                <a href='crea_eventi'>Crea Eventi</a>
                <a class='style' href='logout'>Logout</a>
                <div id="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>

        </nav>

        <h1 class='titolo'>Eventi Internazionali</h1>
        <h3 class='sottotitolo'>Che aspetti! Cerca il tuo evento:</h3>

    </header>
    <form>
        <h1>Ricerca Eventi Internazionali</h1>
        <label>Inserisci nome evento:<input type='text' name='event' id='event'>
        <input type='submit' id='submit' value='Cerca'></label>
    </form>

    <article class='carrello-view hidden'>
    <h1><img class='carrello_intestazione' src='images/carrello_white.png'>Carrello:  </h1>


<section class='section-carrello'>
</section>
</article> 

    <article id="event-view">
    </article>
    <article id="modale" class="hidden">
    </article>
    <footer>
        <span>Mario Cipriano O46002221</span>
    </footer>

    




</body>

</html>

