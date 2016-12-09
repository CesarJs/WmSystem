<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class ProductsController extends Controller
{
    public function index(){
    	$listarProdutos=array();
    	$produtos=Product::all();
    	foreach ($produtos as $produtoAtual) {
    		$listarProdutos[]=[''.$produtoAtual->nome,''.$produtoAtual->descricao,'sf.jpeg'];
    	}
    	
    	return view('produtos.index',compact('listarProdutos'),['titulo'=>'Produtos']);
    	
    }

    public function find($id){
     	$listarProdutos=array();
    	$produtos2=Product::find($id);
    	$produtos=[[''.$produtos2->nome,''.$produtos2->descricao,'sf.jpeg']];
    	
    	return view('produtos.editar',compact('produtos2'),compact('produtos'),['titulo'=>'Produtos']);
    	
    }

    public function update(){
              // if($_GET){
               $id = $request->id;// $_GET['id'];
                $nome   =$request->nome ;// $_GET['nome'];
                $descricao  =$request->descricao ;// $_GET['descricao'];
                $especificacao  =$request->especificacao ;// $_GET['especificacoes'];
                $cat1   =$request->ct1 ;// $_GET['ct1'];
                $cat2   =$request->ct2 ;// $_GET['ct2'];
                $cat3   =$request->ct3 ;// $_GET['ct3'];
                $preco  = $request->preco ;//$_GET['preco'];
                if ($request->status==true) {
                   $status = '1';
                }else{
                    $status='0';
                }


                //Validações
                if($nome == ""){
                    echo json_encode(["status"=>false,"msg"=>"<p class='btn bg-danger text-danger'>Digite o nome!</p>","tag"=>'nome']);exit;
                }

             

                //gravar no banco
               $rtn= TRUE;//Product::alterar($id,$nome,$descricao,$especificacao,$cat1,$cat2,$cat3,$preco,$status);
               
               if ($rtn==true) {

                   echo json_encode(["status"=>true,"msg"=>"<p class='btn bg-success text-success'>Produto alterado com Sucesso!!</p>"]);exit;
               }else{
                echo json_encode(["status"=>true,"msg"=>"<p class='btn bg-danger text-danger'>Õcorreu algum erro! Tente novamente, se o erro persistir entre em contato com o suporte.".$status."</p>"]);exit;
               }

                
           // }
    }
}
