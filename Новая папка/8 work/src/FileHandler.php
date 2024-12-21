<?php

namespace FileHandler;

class FileHandler
{
    public function readFile(string $filename): string
    {
        if (!file_exists($filename)) {
            return "Ошибка: файл не найден.";
        }

        $content = file_get_contents($filename);

        if ($content === false) {
            return "Ошибка: не удалось прочитать файл.";
        }

        return $content;
    }
}
