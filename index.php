<?php

require_once 'classes/Exercicio3/Exercicio3.php';

$files = [
    'music.mp4',
    'video.mov',
    'image.jpeg',
    'text.txt',
    'document.doc',
];

$exercicio3 = new Exercicio3();
$extensions = $exercicio3->getArrayOfExtensions($files);
$exercicio3->printExtensions($extensions);
