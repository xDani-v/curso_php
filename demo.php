<?php
//constantes 
define('a1', 3);

//const local
const NombreCompleto = "Daniel Jazmany Villano Escobar";

//variables
$name = "Daniel";
$idDev = true;
$age = 35;



$output = "Mi nombre es  $name ";
$output .= "y tengo  $age";

$isOld = $age > 50;
//$outputage = $isOld ? 'Eres viejo' : 'eres joven';

$outputAge = match (true) {
    $age < 5 => "Eres un bebe $name",
    $age < 10 => "Eres un niño $name",
    $age < 18 => "Eres un adolecente $name",
    $age <= 18 => "Eres un adulto $name",
    $age < 40 => "Eres un adulto viejo $name",
    default => "se siente el conocimiento $name",
};

$bestLanguages = ["php", "javascript", "python", "java", "c#"];

$persona = [
    "nombre" => "Daniel",
    "apellido" => "Villano",
    "edad" => 35,
    "profesion" => "Desarrollador",
    "lenguajes" => ["php", "javascript", "python", "java", "c#"],
    "esDesarrollador" => true
];
?>
<p><? echo json_encode($persona, JSON_PRETTY_PRINT); ?></p>
<ul><? foreach ($bestLanguages as $key => $lenguaje) : ?>
        <li><?= $key . " " . $lenguaje ?></li>
    <? endforeach; ?>
</ul>
<h2><?= $outputAge ?></h2>
<h3><? "el mejor lenguaje es $bestLanguages[0]" ?></h3>
<h1>
    <?= $output ?>

</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>