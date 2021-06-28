<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Homepage</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='homepage.css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:ital,wght@0,500;1,300&display=swap" rel="stylesheet">
    <script src='homepage.js' defer></script>
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
        <span class='benvenuto'>Benvenuto/a {{ $user }}!<span class='testo'>Buona Permanenza {{$user}}</span></span>
        <a class='logout' href='logout'>Esci dalla sessione</a>
        <h1 class='intestazione'>FiereItalia: Acquista un Biglietto o Allesti la tua Fiera</h1>
        <h1>Organizzazione ed Allestimenti Fieristici</h1>
        <!--<a class='button'><em>Approfondisci</em></a> -->
    </header>

    <section>
        <div id='box1'>
            <div class='box1-cont'>
                <h1>Eventi Internazionali: </h1>
                <h2>FiereItaliaEvent/Mission Statement</h2>
                <p>
                </p>
            </div>

            <div class='box1-img'><img/> </div>
        </div>

        <div id="box2">
            <div class='box2-cont'>
                <h1>Partecipa ad una fiera: </h1>
                <h2>FiereItalia/Mission Statement</h2>
                <p>
                </p>
            </div>
            <div class='box2-img'><img /></div>
        </div>

        <div id='box3'>
            <div class='box3-cont'>
                <h1>Fiere In Programma:</h1>
                <h3>Non perderti nessun nostro evento!! </h3>
                <!--<a class='buy'> Acquista Un Biglietto </a>-->
            </div>
        </div>
</section>


<article class='article1-preferiti hidden'>
        <h1><img class='preferiti_intestazione' src='images/preferiti-intestazione.png'>
            Preferiti:</h1>

        <section class='section-preferiti'>
        </section>
    </article>

<article class='content'>
    <section class='event-view'>
    </section>
</article>

<article class="modale hidden">
    
</article>

    <footer>
        <p>
            <img src='images/logo_small.png'>
            <span class='matricola'>Cipriano Mario O46002221</span>
            <span class='uni'>Università:UNICT</span>
        </p>
    </footer>


</body>

</html>