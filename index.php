<?php

include 'includes/autoload.php';

$files = [
    'music.mp4',
    'video.mov',
    'image.jpeg',
    'text.txt',
    'document.doc',
];

$exercicio3 = new Exercicio3\Exercicio3();
$extensions = $exercicio3->getArrayOfExtensions($files);
$exercicio3->printExtensions($extensions);
