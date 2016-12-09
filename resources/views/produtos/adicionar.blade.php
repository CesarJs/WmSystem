@extends('app')

@section('title','Novo Produto')



@section('content')

@section('titulo')
  <div class="container">
    <h1>Novo Produto </h1>
  </div>
@endsection

<div class="container">
    <div class="row">
    <div id="msg"></div>
        <form class="form" id="novoProduto" method="GET"> 

          <?php 
            foreach ($produtos2 as $key => $value) {
                          $valor='';
                          $nome='';
                          $rslt=0;
                          $tam=10;
                          $type="text";
                           if ($value!="" && $value!= null) {
                             //$valor='value="'.$value.'"';
                           }
                           //Switch de configuração da tabela
                           switch ($key) {
                             case 'id':
                               $rslt=1;//decide o que fazer, verificar os if após o switch
                               break;
                               case 'nome':
                               $valor.='';//pode inserir classes e mais
                               $nome='Nome';
                               $tam=10;//insere o tamanho do campo do formulario sem informa o padrão é 10 baseado nos grid bootstrap
                               break;
                               case 'descricao':
                               $rslt=3;
                               $valor.='';//pode inserir classes e mais
                               $nome='Descrição';
                               $tam=10;//insere o tamanho do campo do formulario sem informa o padrão é 10 baseado nos grid bootstrap
                               break;
                               case 'especificacoes':
                               $valor.='';//pode inserir classes e mais
                               $nome='Epecificações';
                               $tam=10;//insere o tamanho do cmapo do formulario sem informa o padrão é 10 baseado nos grid bootstrap
                               break;
                               case 'created_at':
                                $valor.='disabled value="'.date("Y-m-d H:i:s").'"';
                               $tam=4;
                               $nome='Data de Cadastro';
                               break;
                               case 'updated_at':
                               $valor.='disabled value="'.date("Y-m-d H:i:s").'"';
                               $nome='Data de Alteração';
                               $tam=4;
                               break;
                               case 'ct1':
                               $valor.='';//pode inserir classes e mais
                               $nome='Categoria 1';
                               $tam=4;//insere o tamanho do cmapo do formulario sem informa o padrão é 10 baseado nos grid bootstrap
                               break;
                               case 'ct2':
                               $valor.='';//pode inserir classes e mais
                               $nome='Categoria 2';
                               $tam=4;
                               break;
                               case 'ct3':
                               $valor.='';//pode inserir classes e mais
                               $nome='Marca';
                               $tam=4;
                               break;
                               case 'preco':
                               $valor.='';//pode inserir classes e mais
                               $nome='Preço';
                               $tam=4;
                               break;
                               case 'status':
                               $nome='Status';
                               $valor=$value>0? 'CHECKED':'';
                               $tam=4;
                               $rslt=2;
                               break;
                             
                             default:
                               $valor.='';//pode inserir classes e mais
                               $nome='Nome';
                               $tam=10;//insere o tamanho do campo do formulario sem informa o padrão é 10 baseado nos grid bootstrap
                               break;
                           }
                           if ($rslt==0) {
                             echo ' <div class="form-group">
                                  <label for="'.$key.'" class="col-sm-2 control-label" id="L'.$key.'">'.$nome.'</label>
                                  <div class="col-sm-'.$tam.'">
                                  <input type="'.$type.'" class="form-control" name="'.$key.'" '.$valor.' id="'.$key.'" placeholder="'.$nome.'">
                                  </div>
                                </div>';
                           }else if($rslt==1){
                              echo '<input type="hidden" class="form-control" name="'.$key.'" value="'.$value.'"  id="'.$key.'">';
                           }else if($rslt==2){
                              echo ' 
                              <div class="col-md-12">
                              <div class="form-group">
                                  <label for="'.$key.'" class="col-sm-2 control-label">'.$nome.'</label>
                                  <div class="col-sm-'.$tam.'">
                                    <div class="checkbox">
                                      <label>
                                        <input name="'.$key.'" type="checkbox" '.$valor.' >
                                        Habilitar
                                      </label>
                                      
                                    </div>
                                  </div>
                                </div>
                                </div>';
                           }else if($rslt==3){

                              echo ' <div class="form-group">
                                  <label for="'.$key.'" class="col-sm-2 control-label">'.$nome.'</label>
                                  <div class="col-sm-'.$tam.'">
                                  <textarea class="form-control" name="'.$key.'" '.$valor.' id="'.$key.'" rows="6"></textarea>
                                  
                                  </div>
                                </div>';
                           }else{
                            echo ' <div class="form-group">
                                  <label for="'.$key.'" class="col-sm-2 control-label" id="L'.$key.'">'.$nome.'</label>
                                  <div class="col-sm-'.$tam.'">
                                  <input type="'.$type.'" class="form-control" name="'.$key.'" '.$valor.' id="'.$key.'" placeholder="'.$nome.'">
                                  </div>
                                </div>';
                           }
                           
                         } 
          ?>

          <div class="form-group">
            <div class="col-md-12 text-center">
              <button type="submit" class="btn btn-success">Salvar Alterações</button>
              <button type="reset" class="btn btn-danger">Cancelar Alterações</button>
            </div>
          </div>
      </form>
                <?php 
                  /*
                  for ($i=0; $i < count($produtos); $i++) { 
                      echo '<div class="col-md-4">
                                <div class="row">
                                  <div class="col-md-12">'.$produtos[$i][0].'</div>
                                  <div class="col-md-12"><img class="img-responsive" src="http://localhost:8000/img/'.$produtos[$i][2].'"></div>
                                  <div class="col-md-12">'.$produtos[$i][1].'</div>
                                </div>
                            </div>';
                    }*/
                  ?>
    </div>
  </div>
  
@endsection