<!-- Post.php -->

<?php

class Post {
    public $postId;
    public $title;
    public $content;
    public $author;
    public $comments = [];

    public function displayInfo() {
        echo "Post ID: $this->postId\n";
        echo "Title: $this->title\n";
        echo "Content: $this->content\n";
        $this->author->displayInfo();
        echo "Comments:\n";
        foreach ($this->comments as $comment) {
            $comment->displayInfo();
        }
    }
}
