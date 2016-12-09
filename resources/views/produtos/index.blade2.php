<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>{{$titulo}}</title>

    <!-- Bootstrap -->
    <link href="http://localhost:8000/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <main>
        <head>
          <nav>
            
          </nav>
        </head>
        <section>
          <head>
            <h1>{{$titulo}}</h1>
          </head>
          <article>
              <div class="row">
              <?php 
                    
                for ($i=0; $i < count($produtos); $i++) { 
                    echo '<div class="col-md-4">
                              <div class="row">
                                <div class="col-md-12">'.$produtos[$i][0].'</div>
                                <div class="col-md-12"><img class="img-responsive" src="http://localhost:8000/img/'.$produtos[$i][2].'"></div>
                                <div class="col-md-12">'.$produtos[$i][1].'</div>
                              </div>
                          </div>';
                  }
                ?>
              </div>
          </article>
          <footer>
            
          </footer>
          
        </section>
        <asside></asside>
        <footer>
          
        </footer>
    </main>
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>