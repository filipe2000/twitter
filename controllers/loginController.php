<?php

class loginController extends controller
{
	
	function __construct()
	{
		parent:: __construct();
		
	}
	public function index()
	{	//logar
		$dados=array();
		if(isset($_POST['email']) && !empty($_POST['email']))
		{	
		$email=addslashes($_POST['email']);
		$senha=	md5($_POST['senha']);
		$u= new usuarios();
		if($u->fazerLogin($email,$senha))
		{
			header("Location: /twitter");
		}
		}
		$this->loadView('login',$dados);		
	}
	public function cadastro()
	{
		$dados = array();
		if(isset($_POST['nome']) && !empty($_POST['nome']))
		{
		$nome=addslashes($_POST['nome']);
		$email=addslashes($_POST['email']);
		$senha=	md5($_POST['senha']);
		if(!empty($nome) && !empty($email) && !empty($senha))
		{
			$u= new usuarios();
			if(!$u->usuarioExist($email))
			{	//cadastrar e logar ao mesmo tempo
				$_SESSION['twlg']=$u->insertUser($nome,$email,$senha);
				header("Location: /twitter");
			}else
			{
				$dados['aviso']="Este usuario já existe";
			}
		}else
		{
			$dados['aviso']= "Preencha os cados.";
		}
		}
		$this->loadView('cadastro',$dados);
	}
	public function logout(){
		unset($_SESSION['twlg']);
		header("Location: /twitter");
	}
}

?>