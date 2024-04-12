<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
#inicializar curl
$ch = curl_init(API_URL);
//indicar que queremos recibir el resultado y no solo mostrarla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// ejecutar peticion y guardar resultado
$result = curl_exec($ch);
$data = json_decode($result, true); //usamos a array asociativo

?>

<head>
    <title>La proxima pelicula de marvel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
</head>

<main>

    <div>
        <h2>La proxima pelicula de marvel</h2>
    </div>
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="300px" alt="Poster de <?= $data["title"]; ?>" style="border-radius: 16px;">
    </section>
    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> dias</h3>
        <p>La fecha de estreno es: <?= $data["release_date"]; ?></p>
        <p>Se encuentra en produccion: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    div {
        display: flex;
        justify-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>