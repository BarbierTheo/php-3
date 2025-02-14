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
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bold;
        }
        header {
            display: flex;
            font-size: 1.3rem;
            margin-left: 10rem;
            color: red;
            min-height: 10vh;
            text-align: center;
        }

        ul,
        ol {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-gap: 1em;
            margin: 0 auto;
            max-width: 32em;
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
            height: 6vw;
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
            color : gray;
        }

        /* pour sélectionner la 7ème colonne dans day-grid */

        .special {
            color : white !important;
            background-color: red;
            border-radius: 1rem;
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
                <abbr>L</abbr>
            </li>
            <li>
                <abbr>M</abbr>
            </li>
            <li>
                <abbr>M</abbr>
            </li>
            <li>
                <abbr>J</abbr>
            </li>
            <li>
                <abbr>V</abbr>
            </li>
            <li>
                <abbr>S</abbr>
            </li>
            <li>
                <abbr>D</abbr>
            </li>
        </ul>

        <ol class="day-grid">
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