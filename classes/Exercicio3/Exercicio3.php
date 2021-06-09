<?php

class Exercicio3
{
    private static function getFileExtension($file)
    {
        $explode = explode('.', $file);
        $extension = $explode[1];
        return "." . $extension;
    }

    public function getArrayOfExtensions(array $files) : array
    {
        $extensions = [];

        foreach ($files as $file) {
            array_push($extensions, self::getFileExtension($file));
        }

        /**
         * asc ordering the array by value
         */
        sort($extensions);

        return $extensions;
    }

    public function printExtensions(array $extensions) : void
    {
        foreach ($extensions as $key => $extension) {
            echo intval($key) + 1 . " $extension<br>";
        }
    }
}
