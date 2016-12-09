
@extends('app')

@section('title','Pagina Teste')

@section('sidebar')

  @parent

<div  class="element1">  
<span class="glyphicon glyphicon-filter" aria-hidden="true"></span>

  <ul>
    <li><a href="">Teste1</a></li>
    <li><a href="">Teste1</a></li>
    <li><a href="">Teste1</a></li>
  </ul>
 
  
  
  

</div>
@endsection

@section('content')
<div class="container">
  <div class="row">
              <?php 
                 echo '<div class="col-sm-6 col-md-4">
                                  <div class="thumbnail">
                                    
                                    <div class="caption">
                                    <div class="form-group">
                                    </div>
                                      <p class="text-center"><a href="'.$url.'admin/produtos/adicionar" class="btn btn-success btn-lg" role="button">Adicionar Novo</a></p>
                                    </div>
                                  </div>
                                </div>
                              
                                ';   
                for ($i=0; $i < count($listarProdutos); $i++) { 
                /* echo ' <div class="col-md-4">
                        <div class="thumbnail">
                          <img class="img-responsive" src="http://localhost:8000/img/'.$listarProdutos[$i][2].'">
                          <div class="caption">
                            <h3>'.$listarProdutos[$i][0].'</h3>
                            <p>'.$listarProdutos[$i][1].'</p>
                            <p><a href="#" class="btn btn-primary" role="button">Editar</a> <a href="#" class="btn btn-default" role="button">Visualizar</a></p>
                          </div>
                        </div>
                        ';*/
                        echo '<div class="col-sm-6 col-md-4">
                                  <div class="thumbnail">
                                    <img class="img-responsive" src="http://localhost:8000/img/'.$listarProdutos[$i][2].'">
                                    <div class="caption">
                                    <div class="form-group">
                                      <div class="col-sm-12">
                                        <input type="text" disabled class="form-control" style="font-weight: bold;" value="'.$listarProdutos[$i][0].'">
                                      </div>
                                    </div>
                                      <p class="text-center"><a href="'.$url.'admin/produtos/editar/'.$listarProdutos[$i][3].'" class="btn btn-primary btn-lg" role="button">Editar</a></p>
                                    </div>
                                  </div>
                                </div>
                              
                                ';
                   /* echo '<div class="col-md-4">
                              <div class="row">
                                <div class="col-md-12">'.$listarProdutos[$i][0].'</div>
                                <div class="col-md-12"><img class="img-responsive" src="http://localhost:8000/img/'.$listarProdutos[$i][2].'"></div>
                                <div class="col-md-12">'.$listarProdutos[$i][1].'</div>
                              </div>
                          </div>';*/
                  }
                ?>
              </div>
</div>
@endsection