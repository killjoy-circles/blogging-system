<!-- BloggingSystem.php -->

<?php

// Include class files
require_once 'Post.php';
require_once 'Author.php';
require_once 'Comment.php';

// Create authors
$author1 = new Author();
$author1->authorId = 1;
$author1->name = "Alice";
$author1->email = "alice@example.com";

$author2 = new Author();
$author2->authorId = 2;
$author2->name = "Bob";
$author2->email = "bob@example.com";

// Create comments
$comment1 = new Comment();
$comment1->commentId = 101;
$comment1->content = "Great post!";
$comment1->author = $author1;

$comment2 = new Comment();
$comment2->commentId = 102;
$comment2->content = "I enjoyed reading this.";
$comment2->author = $author2;

// Create posts
$post1 = new Post();
$post1->postId = 1001;
$post1->title = "Introduction to PHP";
$post1->content = "This is a brief introduction to PHP.";
$post1->author = $author1;
$post1->comments[] = $comment1;

$post2 = new Post();
$post2->postId = 1002;
$post2->title = "Advanced PHP Techniques";
$post2->content = "Explore advanced PHP techniques in this post.";
$post2->author = $author2;
$post2->comments[] = $comment2;

// Display information
echo "Post Information:\n";
$post1->displayInfo();
echo "\n";
$post2->displayInfo();
