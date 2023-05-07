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
        <nav class="navbar bg-info bg-opacity-25 px-5 rounded">
          <a class="navitem" href="index.php" aria-label="link to the home page">Home</a>
          <a class="navitem" href="post.php" aria-label="link to the Post page">Post</a>
          <a class="navitem" href="profile.php" aria-label="link your Profile page">Profile</a>
        </nav>
        <div class="row">
          <!--Posts appear here-->
          <div class="posts w-75 bg-secondary text-dark" style="height: 1000px;">
            <div class="bg-info text-dark h-25 px-5 bg-opacity-75 card">
              <div class="">
                <div class="card-title">Guest</div>
                <div class="card-subtitle">
                  <a class="text-dark" href="https://www.amazon.com/EVGA-GeForce-Gaming-11G-P4-2383-RX-Renewed/dp/B08FBLM6FG/ref=sr_1_1?keywords=GeForce+RTX+2080+Ti&qid=1682987587&sr=8-1">2080 TI</a>
                  <span class="px-10">Price: $750</span>
                  <span class="px-10">Release Date:  9/20/18</span><br>
                </div>
                <div class="h-50 card-text">It works good.</div>
                <span>4/29</span>
              </div>
            </div>
          </div>
          <div class="sort rounded bg-info w-25 h-25 bg-opacity-75" style="position: relative;">
            Sort By
            <div><br>
              <a class="sortNewest text-dark" href="index.html" aria-label="sorts by the newest">Newest</a><br><br>
              <a class="sortOldest text-dark" href="index.html" aria-label="sorts by the oldest">Oldest</a><br><br>
              <a class="sortLikes text-dark" href="index.html" aria-label="sorts by the Price">Price</a><br><br>
              <a class="sortDislikes text-dark" href="index.html" aria-label="sorts by the age">Age</a><br><br>
            </div>
          </div>
        </div>
    </main>
  </body>

</html>
