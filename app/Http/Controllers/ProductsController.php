<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class ProductsController extends Controller
{
    public function myUrl(){
       
    }
    public function index(){
    	$listarProdutos=array();
    	$produtos=Product::all();
    	foreach ($produtos as $produtoAtual) {
    		$listarProdutos[]=[''.$produtoAtual->nome,''.$produtoAtual->descricao,'sf.jpeg',$produtoAtual->id];
    	}
    	
    	return view('produtos.index',compact('listarProdutos'),['titulo'=>'Produtos','url'=>'http://localhost:8000/']);
    	
    }

    public function find($id){
     	$listarProdutos=array();
    	$produtos2=Product::find($id);
    	$produtos=[[''.$produtos2->nome,''.$produtos2->descricao,'sf.jpeg']];
    	
    	return view('produtos.editar',compact('produtos2'),compact('produtos'),['titulo'=>'Produtos']);
    	
    }
    public function adicionar(){
        $listarProdutos=array();
        $produtos2=Product::ultimo();
        $produtos2=$produtos2[0];
        //$produtos=[[''.$produtos2->nome,''.$produtos2->descricao,'sf.jpeg']];
        
        return view('produtos.adicionar',compact('produtos2'),['titulo'=>'Novo Produto']);
    }
    //produtos ajax

    public function update(){
              // if($_GET){
                $id = $_GET['id'];
                $nome   = $_GET['nome'];
                $descricao  = $_GET['descricao'];
                $especificacao  = $_GET['especificacoes'];
                $cat1   = $_GET['ct1'];
                $cat2   = $_GET['ct2'];
                $cat3   = $_GET['ct3'];
                $preco  = $_GET['preco'];
                if (isset($_GET['status'])) {
                   $status = '1';
                }else{
                    $status='0';
                }
                


               //Validações
                if($nome == ""){
                    echo json_encode(["status"=>false,"msg"=>"<p class='btn bg-danger text-danger'>Digite o nome!</p>","tag"=>'nome']);exit;
                }
             

                //gravar no banco
               $rtn=Product::alterar($id,$nome,$descricao,$especificacao,$cat1,$cat2,$cat3,$preco,$status);
             
               if ($rtn==true) {

                   echo json_encode(["status"=>true,"msg"=>"<p class='btn bg-success text-success'>Produto alterado com Sucesso!!</p>","alter"=>Product::find($id)->updated_at]);exit;
               }else{
                echo json_encode(["status"=>true,"msg"=>"<p class='btn bg-danger text-danger'>Ocorreu algum erro! Tente novamente, se o erro persistir entre em contato com o suporte.</p>"]);exit;
               }

                
           // }
    }

     public function novoProduto(){
              // if($_GET){
                $id = $_GET['id'];
                $nome   = $_GET['nome'];
                $descricao  = $_GET['descricao'];
                $especificacao  = $_GET['especificacoes'];
                $cat1   = $_GET['ct1'];
                $cat2   = $_GET['ct2'];
                $cat3   = $_GET['ct3'];
                $preco  = $_GET['preco'];
                if (isset($_GET['status'])) {
                   $status = '1';
                }else{
                    $status='0';
                }
                


               //Validações
                if($nome == ""){
                    echo json_encode(["status"=>false,"msg"=>"<p class='btn bg-danger text-danger'>Digite o nome!</p>","tag"=>'nome']);exit;
                }
                
                
                //gravar no banco
               $rtn = Product::add($nome,$descricao,$especificacao,$cat1,$cat2,$cat3,$preco,$status);

               

              if ($rtn->id >$id) {
                   
                   echo json_encode(["status"=>true,"msg"=>"<p class='btn bg-success text-success'>Produto Adicionado com Sucesso!!</p>","alter"=>$rtn->id]);exit;
               }else{
                echo json_encode(["status"=>true,"msg"=>"<p class='btn bg-danger text-danger'>Ocorreu algum erro! Tente novamente, se o erro persistir entre em contato com o suporte.</p>"]);exit;
               }

                
           // }
    }
}
