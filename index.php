<?php

    header ("Content-type: image/png");

    $handle = ImageCreate (1000, 500) or die ("Cannot Create image");

    $noir = ImageColorAllocate ($handle, 0, 0, 0); // Noir

    $blanc = ImageColorAllocate ($handle, 255, 255, 255); // Blanc

    $vert = ImageColorAllocate ($handle, 0, 255, 0); // Vert

    $bleu = ImageColorAllocate ($handle, 0, 0, 255); // Bleu

    // Rond
    imagefilledellipse($handle, 100, 250, 50, 50, $blanc);
    imagefilledellipse($handle, 900, 250, 50, 50, $blanc);
    imagefilledellipse($handle, 500, 100, 50, 50, $blanc);
    imagefilledellipse($handle, 500, 400, 50, 50, $blanc);

    // Vert
    imagefilledrectangle($handle, 150, 150, 850, 350, $vert);

    // Bleu
    imagefilledrectangle($handle, 200, 175, 800, 325, $bleu);

    ImageString ($handle, 5, 450, 250, "Bonjour", $blanc);

    ImagePng ($handle);