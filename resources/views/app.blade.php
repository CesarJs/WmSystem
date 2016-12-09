<!DOCTYPE html>
<?php $url="http://localhost:8000/";?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>WebMEstre System - @yield('title')</title>

    <!-- Bootstrap -->
    <link href="http://localhost:8000/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost:8000/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

      <main>
      <div class="container">
        <head>
        Topo
          <nav>
           Menu 
            @yield('sidebar')
          </nav>
        </head>
      </div>
      
        <section>
          <head>

            @yield('titulo')
          </head>
          <article>
            @yield('content')
          </article>
          <footer>
            
          </footer>
          
        </section>
        
        
        <asside>@yield('asside')</asside>
        
        <div class="container-fluid">
            <footer class="footer">        
                <div class="row">
                    <div class="col-md-4 text-center">
                      <div class="col-md-12"><h3>wmSystem 2.0</h3></div>
                      <div class="col-md-12"><p><small>Saiba mais...</small></p></div>
                      <div class="col-md-12"><p><small>by WebMEstre</small></p></div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="col-md-12"><h3>Contato</h3></div>
                        <div class="col-md-12"><p><small>Sugestões</small></p></div>
                        <div class="col-md-12"><p><small>Reclamações</small></p></div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="col-md-12"><h3>Tutoriais</h3></div>
                        <div class="col-md-12"><p><small>Adicionar</small></p></div>
                        <div class="col-md-12"><p><small>Editar</small></p></div>
                        <div class="col-md-12"><p><small>Deletar</small></p></div>
                        <div class="col-md-12"><p><small>Destaques</small></p></div>
                    </div>
                </div>          
            </footer>
        </div>
    </main>

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost:8000/js/bootstrap.min.js"></script>
    <script src="http://localhost:8000/js/main.js"></script>
  </body>
</html>