<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
	public static function add($nome,$descricao,$especificacao=null,$cat1='Outros',$cat2=null,$cat3=null,$preco=99999,$status=1)
	{	
		/*return Product::create([
			'nome'=>''.$nome,
			'descricao'=>''.$descricao,
			'especificacoes'=>''.$especificacao,
			'ct1'=>''.$cat1,
			'ct2'=>''.$cat2,
			'ct3'=>''.$cat3,
			'preco'=>''.$preco,
			'status'=>''.$status
			]);

			*/
		$rtn = Product::create([ 
			'nome'=>$nome, 
			'descricao'=>$descricao, 
			'especificacoes'=>$especificacao, 
			'ct1'=>$cat1, 
			'ct2'=>$cat2, 
			'ct3'=>$cat3, 
			'preco'=>$preco, 
			'status'=>$status
			]);

		 return $rtn;
	}
	public static function alterar($id,$nome,$descricao,$especificacoes=null,$cat1='Outros',$cat2=null,$cat3=null,$preco=99999,$status=1)
	{	
		
		$registro=Product::find($id);
		$registro->nome=$nome;
		$registro->descricao=$descricao;
		$registro->especificacoes=$especificacoes;
		$registro->ct1=$cat1;
		$registro->ct2=$cat2;
		$registro->ct3=$cat3;
		$registro->status=$status;
		$registro->preco=$preco;
		$rtn=$registro->save();

		return $rtn;
	}
	public static function seleciona(){
		return DB::table('products')->get();
	}
	public static function ultimo(){

		 return DB::table('products')->orderBy('id', 'desc')->limit(1)->get();
		 /*saco*/
         
	}

    protected $fillable = [
        'nome', 'descricao','especificacoes', 'ct1','ct2','ct3','preco','status'
    ];
}
