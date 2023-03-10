<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $title = $_POST['title'];
  $author = $_POST['author'];
  $category = $_POST['category'];
  $story = $_POST['story'];

  // Validate the form data
  $errors = array();
  if (empty($title)) {
    $errors[] = 'Please enter a title.';
  }
  if (empty($author)) {
    $errors[] = 'Please enter an author.';
  }
  if (empty($category)) {
    $errors[] = 'Please select a category.';
  }
  if (empty($story)) {
    $errors[] = 'Please enter a story.';
  }

  // If there are no errors, add the story to the database or file
  if (empty($errors)) {
    // Add the story to the database or file
    // ...

    // Redirect the user to the homepage or the story page
    header('Location: index.php');
    exit;
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <?php include('header.php'); ?>
    <div class="content">
      <h1>Add a Story</h1>
      <?php if (!empty($errors)): ?>
        <div class="errors">
          <?php foreach ($errors as $error): ?>
            <p><?php echo $error; ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      <form method="POST" action="add_story.php">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br>
        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required><br>

        <label for="category">Category:</label>
        <select id="category" name="category" required>
          <option value="">Select a category</option>
          <option value="horror">Horror</option>
          <option value="comedy">Comedy</option>
          <option value="love">Love</option>
        </select><br>

        <label for="story">Story:</label>

