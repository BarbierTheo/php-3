<?php

for ($i = 2000; $i <= 2025; $i++) {

    echo $i;
    echo " / ";
}

echo '<br><br>';

for ($i = 100; $i >= 0; $i--) {

    echo $i;
    echo " / ";
}

echo '<br><br>';

for ($i = 1; $i <= 99; $i++) {

    ($i % 2 == 0) ? print "" : print "$i / ";
}
