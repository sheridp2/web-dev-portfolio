<!DOCTYPE html>
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/png" sizes="16x16" href="assets/Patrick-Sheridan-logo.png">

    <link rel="stylesheet" href="main.css">
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="logo" href="#"><img src="assets/Patrick-Sheridan-logo.png"></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="#">Home</a></li>
        <li><a href="#" target="_blank">Blog</a></li>

        <li class="dropdown">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="https://github.com/sheridp2" target="_blank">Linkedin</a></li>
        <li><a href="https://www.linkedin.com/in/patrick-sheridan" target="_blank">Github</a></li>
        <li><a href="./assets/Patrick-Sheridan-Resume.pdf" target="_blank">Resume</a></li>
      </ul>
    </div>
  </div>
</nav>

    <div class="jumbotron">
      <div class="container">
        <h1>Patrick Sheridan</h1>
        <h2>Web Developer</h2>
      </div>
    </div>

    <section class="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">About</h2>
            <h3 class="section-subheading text-muted">Learn more about Patrick Sheridan</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Environmental Scientist</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-code fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">JavaScript Web Development</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-keyboard-o fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Blog Writter</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="skills">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Skill</h2>
          </div>
        </div>
        <div>
          <div class="col-md-4">
            <ul class="list-group">
              <li class="list-group-item text-center">JavaScript</li>
              <li class="list-group-item text-center">Angular</li>
              <li class="list-group-item text-center">React</li>
              <li class="list-group-item text-center">Node.js</li>
              <li class="list-group-item text-center">MongoDB</li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-group">
              <li class="list-group-item text-center">Express</li>
              <li class="list-group-item text-center">HTML5</li>
              <li class="list-group-item text-center">CSS</li>
              <li class="list-group-item text-center">Git</li>
              <li class="list-group-item text-center">GitHub</li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-group">
              <li class="list-group-item text-center">Heroku</li>
              <li class="list-group-item text-center">Mocha/Chai</li>
              <li class="list-group-item text-center">Bootstrap</li>
              <li class="list-group-item text-center">Raspberry Pi</li>

            </ul>
          </div>
        </div>
      </div>
    </section>

    <div class="projects">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading">Projects</h2>
              </div>
            <div class="row">
            <div class="col-md-4">
              <div class="thumbnail">
                <h3>Pseudo-Pet</h3>
                <a href="https://paw-sibilites-frontend.herokuapp.com" target="_blank"><img src="./assets/pseudo-pet.png"></a>
                <p>Description of project</p>
                <a href="https://github.com/G4-Final-Project/PAWS-ibilities-frontend" target="_blank">Front-End Github Repo</a><br>
                <a href="https://github.com/G4-Final-Project/PAWS-ibilities-backend" target="_blank">Back-End Github Repo</a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail">
                <h3>Do You Even Steam?</h3>
                <a href="https://do-you-even-steam.herokuapp.com/" target="_blank"><img src="./assets/steam.png"></a>
                <p>Description of project</p>
              </div>
            </div>
            <!-- <div class="col-md-4">
              <div class="thumbnail">
                <h3>Project 1</h3>
                <a href="#"><img src="./assets/bird.jpg"/></a>
                <p>Description of project</p>
              </div>
            </div> -->
          </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
