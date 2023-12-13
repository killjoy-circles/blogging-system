<!-- Author.php -->

<?php

class Author {
    public $authorId;
    public $name;
    public $email;

    public function displayInfo() {
        echo "Author ID: $this->authorId\n";
        echo "Name: $this->name\n";
        echo "Email: $this->email\n";
    }
}
