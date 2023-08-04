<?php
$magnitude = 4;
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600&family=Roboto&display=swap" rel="stylesheet">
    <script src="./public/assets/js/main.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Php Les Conditions</title>
</head>

<body>
    <header>
        <img src="./public/assets/img/php_logo.svg" alt="logo du langage php">
        <div>
            <h1>Exercice 4</h1>
        </div>

    </header>
    <main>
        <div id="question">
            <h2><span>Question</span><span id="chevron"><i class="fa-solid fa-chevron-down"></i></span></h2>
            <p>L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
                Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.</p>
        </div>
        <hr>
        <div id="answer" class="displayNone">
            <h2><span>Réponse</span></h2>
            <div>
                <p><?php switch ($magnitude) {
                        case '1':
                            echo 'Micro-séisme impossible à ressentir';
                            break;
                        case '2':
                            echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
                            break;
                        case '3':
                            echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
                            break;
                        case '4':
                            echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
                            break;
                        case '5':
                            echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
                            break;
                        case '6':
                            echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
                            break;
                        case '7':
                            echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
                            break;
                        case '8':
                            echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
                            break;
                        case '9':
                            echo 'Séisme capable de tout détruire sur une très vaste zone.';
                            break;
                        default:
                            echo 'Veuillez choisir une valeur compris entre 1 et 9';
                            break;
                    } ?></p>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy;<?php echo date("Y") ?> &#x25CF; La Manu &#x25CF; Alicia-88</p>
    </footer>
</body>

</html>