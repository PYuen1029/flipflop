<!DOCTYPE html>
<html ng-app="FlipFlopApp">
  <head lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Angular-Gulp-Browserify-Starter</title>
    <!-- styles -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="/bower_components/fontawesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="/bower_components/animate.css/animate.css"/>
    <link rel="stylesheet" href="/css/main.css"/>
    <link rel="stylesheet" href="/css/homepage.css"/>
    <link rel="stylesheet" href="/css/modalDialog.css"/>
    <link rel="stylesheet" href="/css/submit.css"/>

  </head>
  <body>
    <div class="container-fluid">
      <nav class="main__nav">
        <div class1="main__header">
          <h1> FLIP FLOPS </h1>
          <p> A NobisNews Section </p>
        </div>
        <div class="main__navigation">
          <div class="main__navigation-home main__navigation-link"> 
            <a href="#!/">Home</a>
          </div>
          <div class="main__navigation-about main__navigation-link"> 
            <a href="#"> About</a> 
          </div>
          <div class="main__navigation-submit main__navigation-link"> 
            <a href="#!/submit"> Submit</a>
          </div>
        </div>
      </nav>
      <!-- views -->
      <div class="main__view-container">
        <div class="main__view" ng-view></div>
      </div>
    </div>
    <!-- scripts -->
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.5.8/angular-sanitize.js"></script>
    <script src="/build/js/bundled.js" type="text/javascript"></script>
  </body>
</html>