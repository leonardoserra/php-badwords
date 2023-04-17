
<?php
/*Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare */

//codice

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Badwords Killer</title>
        <link rel="stylesheet" href="./style/style.css" />
    </head>

    <body>
        <header>
            <h1>Badwords Killer</h1>
        </header>

        <main>
            <form action="./get_form.php" method="GET">
                <div class="paragraph">
                    <label  for="paragraph">Paragrafo:</label>
                    <input name="paragraph" type="text" id="paragraph" placeholder="scrivi un testo lungo..."/>
                </div>
                <div class="censorship">
                    <label for="censorship">Parola da censurare:</label>
                    <input name="censorship" type="text" id="censorship" placeholder="scrivi la parola da censurare..."/>
                </div>
                <button >Esegui</button>

            </form>
        </main>
    </body>
</html>