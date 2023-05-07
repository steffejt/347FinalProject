<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Joshua Steffen">
    <meta name="description" content="347Project">
    <link rel="stylesheet" media="screen" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
  </head>

  <body>
    <main>
        <!--navbar-->
        <nav class="navbar bg-info bg-opacity-25 px-5">
          <a class="navitem" href="index.php" aria-label="link to the home page">Home</a>
          <a class="navitem" href="post.php" aria-label="link to the Post page">Post</a>
          <a class="navitem" href="profile.php" aria-label="link your Profile page">Profile</a>
        </nav>
        <!--Input-->
        <div class="alert alert-primary">
          <div class="alert alert-secondary"><label for="link">Part name.</label><div id="TM"></div>
          <input type="text" id="link"><br></div>
          <div class="alert alert-secondary"><label for="price">Part price.</label><div id="TM"></div>
          <input type="number" id="price"><br></div>
          <div class="alert alert-secondary"><label for="review">Review.</label><div id="TM"></div>
          <input type="text" id="review"><br></div>
          <button type="submit" id="submit">Make post.</button>
          <!--Errors are posted here-->
          <div id="invalid"></div>
        </div>
    </main>
  </body>

  <script src="post.js"></script>
</html>
