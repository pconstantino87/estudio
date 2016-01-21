<?php 
namespace Estudio\Http\Controllers;

use \Estudio\Http\Requests;
use \Estudio\Cliente;
/**
* 
*/
class ClientesController extends Controller
{
	
	public function index(){
		//$clientes = Cliente::all();
		return view('clientes',['clientes'=> Cliente::all()]);
	}

	public function create(){
		
		return view('novo-cliente');
	}
}

