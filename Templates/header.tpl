<!DOCTYPE html>
    <html lang="en">
    <head>
        <base href="{BASE_URL}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <title>Document</title>
    </head>
    <body>
        <nav>
        {if !isset($smarty.session.USER_ID)}
            <a href='login'>Login</a>
            {else}
            <a href='logout'>User: {$smarty.session.USER_EMAIL} Logout</a>
        {/if}
        </nav>
        <h1 class="">Aerolineas TUDAI</h1>

        <nav class="navegacionprincipal">
                <a href='home'>Vuelos</a>
                <a href='verdestinos'>Destinos</a>
        </nav>