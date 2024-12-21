<?php

require __DIR__ . '/vendor/autoload.php';

use App\Database;

$db = new Database();

$books = $db->getBooks();

if (!empty($books)) {
    foreach ($books as $book) {
        echo "ID: " . $book['id'] . "<br>";
        echo "Title: " . $book['title'] . "<br>";
        echo "Author: " . $book['author'] . "<br>";
        echo "Published Year: " . $book['published_year'] . "<br>";
        echo "Genre: " . $book['genre'] . "<br><br>";
    }
} else {
    echo "Нет книг в базе данных.";
}
