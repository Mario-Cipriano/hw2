<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Homepage</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='create_event.css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:ital,wght@0,500;1,300&display=swap" rel="stylesheet">
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
                <a href='create_event'>Crea Evento</a>
                <a class='style' href='logout'>Logout</a>
                <div id="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
       
        </nav>
        <h1>Crea La Tua Fiera</h1>
    </header>

    <section>
    <form name='create' method='post' action="{{route('newEvent')}}">
       @csrf
        <label> Image <input type='file' id='img' name='immagine' accept='image/*'></input></label><br>
        <label> Titolo <input type='text' name='titolo'></input></label><br>
        <label> settore <input type='text' name='settore'></input></label><br>
        <label> Descrizione <input type='text' name='descrizione'></input></label><br>
        <label> &nbsp <input type='submit' value='Inserisci' id='inserisci'></input></label><br>
    </form>
   
    <footer>
        <p>
            <img src='images/logo_small.png'>
            <span class='matricola'>Cipriano Mario O46002221</span>
            <span class='uni'>Università:UNICT</span>
        </p>
    </footer>


</body>

</html>
