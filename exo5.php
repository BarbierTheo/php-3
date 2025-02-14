<?php 
    $month = "Mars";
    $totalDays = 31;
    $specialDay = 17;

?>


<!-- https://css-tricks.com/a-calendar-in-three-lines-of-css/ -->


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo5</title>

    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
        }
        header {
            display: flex;
            align-items: center;
            font-size: 1rem;
            justify-content: center;
            margin-bottom: 2em;
            background: #000;
            color: #fff;
            min-height: 10vh;
            text-align: center;
        }

        ul,
        ol {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-gap: 1em;
            margin: 0 auto;
            max-width: 64em;
            padding: 0;
        }

        li {
            display: flex;
            align-items: center;
            justify-content: center;
            list-style: none;
            margin-left: 0;
            font-size: 1.5rem;
        }

        ul.weekdays {
            margin-bottom: 1em;
        }

        ul.weekdays li {
            height: 4vw;
        }

        ol.day-grid li {
            background-color: white;
            border: gray 1px solid; 
            height: 12vw;
            max-height: 125px;
        }

        ul.weekdays abbr[title] {
            border: none;
            font-weight: 800;
            text-decoration: none;
        }

        @media all and (max-width: 800px) {

            ul,
            ol {
                grid-gap: .25em;
            }

            ul.weekdays li {
                font-size: 0;
            }

            ul.weekdays>li abbr:after {
                content: attr(title);
                font-size: 1rem;
                text-align: center;
            }
        }

        .day-grid > li:nth-child(7n), .day-grid > li:nth-child(7n-1) {
            background-color:rgb(170, 170, 170);
        }

        /* pour sélectionner la 7ème colonne dans day-grid */

        .special {
            background-color: cadetblue !important;
        }
        
    </style>
</head>

<body>




    <div class="calendar">
        <header>
            <?= "<h1>".mb_strtoupper($month, "UTF8")."</h1>" ?>
        </header>

        <ul class="weekdays">
            <li>
                <abbr>Lundi</abbr>
            </li>
            <li>
                <abbr>Mardi</abbr>
            </li>
            <li>
                <abbr>Mercredi</abbr>
            </li>
            <li>
                <abbr>Jeudi</abbr>
            </li>
            <li>
                <abbr>Vendredi</abbr>
            </li>
            <li>
                <abbr>Samedi</abbr>
            </li>
            <li>
                <abbr>Dimanche</abbr>
            </li>
        </ul>

        <ol class="day-grid">
            <!-- <li>29</li> -->
             <?php 
             for ($i = 1; $i <= $totalDays; $i++) {
                
                // bien penser syntaxe c'est pas "condition ? echo : echo;" mais plutôt placer la ternaire dans l'echo
                echo ($i !== $specialDay ? "<li class='days'>$i</li>" : "<li class='days special'>$i</li>");


             }
             ?>
        </ol>

    </div>



</body>

</html>