<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>

    <link rel="stylesheet" href="components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">


    <script src="components/jquery/dist/jquery.min.js"></script>
    <script src="components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
	  <script src="js/searchjs.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-28692846-4', 'auto');
      ga('send', 'pageview');

    </script>
  </head>

  <?php 
        function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
      ?>

 <body>

    <div class="container">
      
      <div class="header">
        <h3 class="text-muted">SearchJS</h3>
        <a class="back-link" href="../../"><i class="fa fa-chevron-circle-left"></i> Back to Projects</a>
      </div>


      <div class="jumbotron">
        <input type="text" data-search-js-input="static-list" />
      </div>

      <div class="jumbotron">
        <div data-search-js-container="static-list">
            <div data-search-js-value="Malik Roper">Malik Roper</div>
            <div data-search-js-value="Socorro Cranford">Socorro Cranford</div>
            <div data-search-js-value="Marge Tenney">Marge Tenney</div>
            <div data-search-js-value="Tifany Soto">Tifany Soto</div>
            <div data-search-js-value="Phyllis Kan">Phyllis Kan</div>
            <div data-search-js-value="Jonna Merkle">Jonna Merkle</div>
            <div data-search-js-value="Onie Schatz">Onie Schatz</div>
            <div data-search-js-value="Sharita Aarons">Sharita Aarons</div>
            <div data-search-js-value="Cindi Dewolfe">Cindi Dewolfe</div>
            <div data-search-js-value="Noel Chachere">Noel Chachere</div>
            <div data-search-js-value="Winston Haefner">Winston Haefner</div>
            <div data-search-js-value="Dani Beagle">Dani Beagle</div>
            <div data-search-js-value="Violet Bouley">Violet Bouley</div>
            <div data-search-js-value="Asuncion Quirk">Asuncion Quirk</div>
            <div data-search-js-value="Libby Gladwin">Libby Gladwin</div>
            <div data-search-js-value="Jestine Walczak">Jestine Walczak</div>
            <div data-search-js-value="Constance Lathem">Constance Lathem</div>
            <div data-search-js-value="Zandra Adkison">Zandra Adkison</div>
            <div data-search-js-value="Janay Bourland">Janay Bourland</div>
            <div data-search-js-value="Rae Awad 500-Secret-Code">Rae Awad</div>
        </div>
      </div>




      <div class="jumbotron">
        <input type="text" data-search-js-input="test-list" />
      </div>

  	  <div class="jumbotron">
        <div data-search-js-container="test-list">
          <?php
            for($i = 0; $i < 15; $i++){ 
              $string = generateRandomString();
          ?>
              
              <div data-search-js-value="<?php echo $string; ?>"><?php echo $string; ?></div>

          <?php
            }
          ?>
        </div>
      </div>
  
      <div class="jumbotron">
        <input type="text" data-search-js-input="second-list" />
      </div>

      <div class="jumbotron">
        <div data-search-js-container="second-list">
          <?php
            for($i = 0; $i < 25; $i++){ 
              $string = generateRandomString();
          ?>
              
              <div data-search-js-value="<?php echo $string; ?>"><?php echo $string; ?></div>

          <?php
            }
          ?>
      </div>
    </div>

    



    </div> <!-- /container -->
  </body>
</html>