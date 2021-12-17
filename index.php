<?php


if($_POST["message"]) {


mail("olekristianolaisen@gmail.com", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="/functions/main.js"></script>
    <script src="/functions/text.js"></script>


    <!--Egendefinert CSS-->
    <link rel="stylesheet" href="/styles/style.css" />
  </head>

  <!--BODY START-->
  <body>

    
     
     <div class="container-full"> 




    <section class="one">
      <div class="content">
        <div
          class="
            d-flex
            flex-column
            min-vh-100
            justify-content-center
            align-items-center
          "
        >
       <nav>
      
        <a href="javascript:jumpScroll1()" id="to_top">To Top</a>
        <a href="javascript:jumpScroll2()" id="experience">Experience</a>
        <a href="javascript:jumpScroll3()" id="about_me">About me</a>
        <a href="javascript:jumpScroll4()"id="contact">Contact</a>

    </nav>

          <h1 class="typewriterheadline">
            <span class="h1tagless">&lt;</span>
            <span class="h1tag">h1</span>
            <span class="h1tagless">&gt; </span>
            <span class="text_1"> Hi, I'm Ole Kristian.</span>
            <span class="text_2"> I'm a front-end developer from Norway.</span>
            <span class="h1tagless">&lt;/</span>
            <span class="h1tag">h1</span>
            <span class="h1tagless">&gt;</span>
          </h1>
          
    
        </div>
        
      </div>

      
    </section>

    <section class="two">
      <div class="headline">
      <h1 class="experience d-flex justify-content-center headline">About me</h1>

      <p class="experience d-flex justify-content-center">Hello! My name is Ole Kristian</p>
      </div>
    </section>

   

    

    <section class="three">
      <div class="headline">
      <h1 class="experience d-flex justify-content-center headline">Experience</h1>
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="container-fluid bg-3 text-center">
          <br />
          <div class="row">
            <div class="col-sm-3">
              <p>HTML</p>
              <div class="progress skill-bar">
                <div
                  class="progress-bar progress-bar-success"
                  role="progressbar"
                  aria-valuenow="90"
                  aria-valuemin="0"
                  aria-valuemax="100"
                >
                  <span class="skill"><i class="val"></i></span>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <p>SCSS</p>
              <div class="progress skill-bar">
                <div
                  class="progress-bar progress-bar-success"
                  role="progressbar"
                  aria-valuenow="80"
                  aria-valuemin="0"
                  aria-valuemax="100"
                >
                  <span class="skill"><i class="val"></i></span>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <p>JavaScript</p>
              <div class="progress skill-bar">
                <div
                  class="progress-bar progress-bar-success"
                  role="progressbar"
                  aria-valuenow="30"
                  aria-valuemin="0"
                  aria-valuemax="100"
                >
                  <span class="skill"><i class="val"></i></span>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <p>PHP</p>
              <div class="progress skill-bar">
                <div
                  class="progress-bar progress-bar-success"
                  role="progressbar"
                  aria-valuenow="40"
                  aria-valuemin="0"
                  aria-valuemax="100"
                >
                  <span class="skill"><i class="val"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br />

        <div class="container-fluid bg-3 text-center">
          <div class="row">
            <div class="col-sm-3">
              <p>SQL</p>
              <div class="progress skill-bar">
                <div
                  class="progress-bar progress-bar-success"
                  role="progressbar"
                  aria-valuenow="40"
                  aria-valuemin="0"
                  aria-valuemax="100"
                >
                  <span class="skill"><i class="val"></i></span>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <p>Bootstrap</p>
              <div class="progress skill-bar">
                <div
                  class="progress-bar progress-bar-success"
                  role="progressbar"
                  aria-valuenow="60"
                  aria-valuemin="0"
                  aria-valuemax="100"
                >
                  <span class="skill"><i class="val"></i></span>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <p>React</p>
              <div class="progress skill-bar">
                <div
                  class="progress-bar progress-bar-success"
                  role="progressbar"
                  aria-valuenow="30"
                  aria-valuemin="0"
                  aria-valuemax="100"
                >
                  <span class="skill"><i class="val"></i></span>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <p>Github</p>
              <div class="progress skill-bar">
                <div
                  class="progress-bar progress-bar-success"
                  role="progressbar"
                  aria-valuenow="70"
                  aria-valuemin="0"
                  aria-valuemax="100"
                >
                  <span class="skill"><i class="val"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="four">
      <div class="headline">
      <h1 class="experience d-flex justify-content-center headline">Contact</h1>

      <form method="post" action="subscriberform.php" class="experience d-flex justify-content-center">

      <!--Name-->
        <label for="name">Name:</label>
        <input type="text" name="name">

      <!--E-mail-->
      <label for="email">E-mail:</label>
      <input type="email" name="email">

      <label for="message">Your message:</label>
        <textarea name="message"></textarea>
        
        <input type="submit" class="submitbutton">
        
        
        </form>

      </div>
    </section>

    </div>

      </div> 

    
  </body>
</html>
