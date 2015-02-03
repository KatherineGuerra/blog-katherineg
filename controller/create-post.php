<?php
/*use the = sign to assign to a value*/
/*INPUT_POST means were sending in information*/
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

echo "<P>Title: $title</p>";
echo "<p>Post: $post</p<";