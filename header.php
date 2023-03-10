<!DOCTYPE html>
<html>
  <head>
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </header>
    
    <div class="content">
      <h1>Add a Story</h1>
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
        <textarea id="story" name="story" rows="10" required></textarea><br>

        <input type="submit" value="Add Story">
      </form>
    </div>

    <footer>
      <p>&copy; 2023 My Story</p>
    </footer>
  </body>
</html>

