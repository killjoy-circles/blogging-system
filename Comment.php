<!-- Comment.php -->

<?php

class Comment {
    public $commentId;
    public $content;
    public $author;

    public function displayInfo() {
        echo "Comment ID: $this->commentId\n";
        echo "Content: $this->content\n";
        $this->author->displayInfo();
    }
}
