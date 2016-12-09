<?php

use App\Product;

if($_GET){
    $id = $_GET['id'];
    $nome   = $_GET['nome'];
    $descricao  = $_GET['descricao'];
    $especificacao  = $_GET['especificacoes'];
    $cat1   = $_GET['ct1'];
    $cat2   = $_GET['ct2'];
    $cat3   = $_GET['ct3'];
    $preco  = $_GET['preco'];
    if ($_GET['status']==true) {
       $status = '1';
    }else{
        $status='0';
    }
    


    //Validações
    if($nome == ""){
        echo json_encode(["status"=>false,"msg"=>"<p class='btn bg-danger text-danger'>Digite o nome!</p>","tag"=>'nome']);exit;
    }

 

    //gravar no banco
   $rtn= Product::alterar($id,$nome,$descricao,$especificacao,$cat1,$cat2,$cat3,$preco,$status);
   
   if ($rtn==true) {

       echo json_encode(["status"=>true,"msg"=>"<p class='btn bg-success text-success'>Produto alterado com Sucesso!!</p>"]);exit;
   }else{
    echo json_encode(["status"=>true,"msg"=>"<p class='btn bg-danger text-danger'>Õcorreu algum erro! Tente novamente, se o erro persistir entre em contato com o suporte.".$status."</p>"]);exit;
   }

    
}


