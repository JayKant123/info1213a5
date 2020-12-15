<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blog Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/carousel.css">
  <link rel="stylesheet" href="css/blog.css">
  <link rel="stylesheet" href="css/layout.css">
</head>
<body>

    <nav id="navbar-no-margin" class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#">Resume.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>    
          </ul>
        </div>  
      </nav>
      
      <!--carousel-->
      
      <div id="demo" class="carousel slide" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/carousel/img3.JPG" width="1100" height="500">
              <div class="carousel-caption">
                <h3>Build your resume</h3>
              </div>   
            </div>
            <div class="carousel-item">
              <img src="images/carousel/img1.JPG" width="1100" height="500">
              <div class="carousel-caption">
                <h3>Find the best</h3>
                
              </div>   
            </div>
            <div class="carousel-item">
              <img src="images/carousel/img2.JPG" width="1100" height="500">
              <div class="carousel-caption">
                <h3>Resumes for all categories</h3>
              </div>   
            </div>
          </div>
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
        <hr>

        
        <!--blogs-->
<div class="header">
  <h2>Blogging Page</h2>
</div>

<div class="row" id="blogs">
  <div class="leftcolumn">
    <?php
        require("GetBlog.php");
    ?>
  </div>
  <div class="rightcolumn">
    <div class="partition">
      <h2>About Me</h2>
      <div class="img">
         <img src="images/carousel/img1.JPG">
    </div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>
    <div class="partition">
      <h3>Popular Post</h3>
      <div class="Title">Topic 1</div><br>
      <div class="Title">Topic 2</div><br>
      <div class="Title">Topic 3</div>
    </div>
    <div class="partition">
      <h2>Feedback:</h2>
      <form action="#">
        <div class="form-group">
          <textarea class="form-control" rows="5" id="feedback" name="text"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>    
  </div>
</div>

<div class="footer">
  <h2>Common Footer For All Pages</h2>
</div>
</body>
</html>
