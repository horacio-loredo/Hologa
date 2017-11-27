<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <link href="css/index.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
      <!--  Android 5 Chrome Color-->
      <meta name="theme-color" content="#f57c00">
      <title>Hologa - Index</title>
    </head>
    <body class="grey lighten-4">



      <div class="intro deep-orange darken-3 z-depth-1">
        <h1 class="grey-text text-lighten-5">Te damos la bienvenida a Hologa</h1>
        <a  href="dashboard.php" class="waves-effect waves-blue btn white-text">Entrar</a>
      </div>

 <div class="container about">
        <h5>about me</h5>
        <h6>let me introduce my self</h6>
        <hr>
        <div class="row">
          <div class="col s12 m4 l4">
            <h6>Story</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="col s12 m4 l4">
            <h6>Profile</h6>
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <img src="http://labs.qnimate.com/portfolio-materialize/images/profile.png" width="64" height="64">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
              </div>
              <div class="card-action">
                <a href="#">Link</a>
                <a href='#'>Link</a>
              </div>
            </div>
          </div>
          <div class="col s12 m4 l4">
            <h6>current jobs</h6>
            <ul class="collapsible">
              <li class="active">
                <div class="collapsible-header"><i class="mdi-av-web"></i>Designer</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="mdi-editor-format-align-justify"></i>Developer</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="mdi-av-play-shopping-bag"></i>Video Editor</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li>
              <li>
                <div class="collapsible-header"><i class="mdi-editor-insert-comment"></i>Support Asst.</div>
                <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="container portfolio">
        <h5>portfolio</h5>
        <h6>MY LATEST PROJECTS</h6>
        <hr>
        <div class="row">
          <div class="col s12 m12 l12 portfolio-holder">
            <img class="materialboxed" src="http://labs.qnimate.com/portfolio-materialize/images/project.png">
            <img class="materialboxed" src="http://labs.qnimate.com/portfolio-materialize/images/project.png">
            <img class="materialboxed" src="http://labs.qnimate.com/portfolio-materialize/images/project.png">
            <img class="materialboxed" src="http://labs.qnimate.com/portfolio-materialize/images/project.png">
            <img class="materialboxed" src="http://labs.qnimate.com/portfolio-materialize/images/project.png">
            <img class="materialboxed" src="http://labs.qnimate.com/portfolio-materialize/images/project.png">
          </div>
        </div>
      </div>
<div class="container contact">
        <h5>contact</h5>
        <h6>get in touch with me</h6>
        <hr>
        <div class="row">
          <div class="col s12 m6 l6">
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s6">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">E-Mail</label>
                  </div>
                </div>
                <textarea class="materialize-textarea" placeholder="Your Message" required></textarea>
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                  <i class="mdi-content-send right"></i>
                </button>
              </form>
            </div>
          </div>
          <div class="col s12 m6 l6 contact-holder">
            <h6 class="mdi-action-home">Address</h6>
            <p>City complete</p>
            <h6 class="mdi-hardware-phone-android">Numero Telefonico</h6>
            <p>+00 00000000</p>
            <h6 class="mdi-action-open-in-browser">Website</h6>
            <p>gmail.com</p>
          </div>
        </div>
      </div>
        <footer>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">Link</a>
            </div>
          </div>
        </footer>



  </body>
  </html>


  <script>
    $(".button-collapse").sideNav();
  </script>
