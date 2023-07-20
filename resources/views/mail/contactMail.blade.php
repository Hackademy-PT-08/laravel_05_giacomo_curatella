<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gentile, {{ $name }}</h1>
    <p>grazie per averci contattato!</p>
    <p>Un nostro operatore gestirà prima possibile la sua richiesta.</p>
    <p>Di seguito le riepiloghiamo i dati inseriti: </p>
    <ul>
        <li>Nome e Cognome: {{ $name }}</li>
        <li>Indirizzo e-mail: {{ $mail }}</li>
        <li>Il tuo messaggio: {{ $user_message}}</li>
    </ul>
    <p>Saluti dallo staff di <a href="">Videogiochi.it</a></p>
</body>
</html>