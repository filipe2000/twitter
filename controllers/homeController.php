<?php

class homeController extends controller
{
	
	public function __construct()
	{		
		parent:: __construct();
		$dados= array();
		$u= new usuarios();
		if(!$u->isLogged())	
			{
				header("Location:/twitter/login");	
			}		
	}
	public function index()
	{
		$p= new posts();
		$dados=array(
			'nome'
			);
		//verificar se o post foi enviado e não vazio
		if(isset($_POST['msg']) && !empty($_POST['msg']))
		{
			$msg=addslashes($_POST['msg']);			
			$p->inserirPost($msg);
		}
		$u= new usuarios($_SESSION['twlg']);
		$dados['nome']=$u->getNome();
		$dados['qtd_seguido']=$u->getCountSeguido();
		$dados['qtd_seguidores']=$u->getCountSeguidores();
		$dados['sugetao']=$u->getUsuarios(5);
		//pegar os usuarios que estão sendo seguidos pelo logado
		$lista=$u->getSeguidos();
		//add na lista o id logado para também exibir suas postagens
		$lista[]=$_SESSION['twlg'];
		//add feed da lista dos seguidos, 10 para o limite para exibição
		$dados['feed']=$p->getFeed($lista,10);
		$this->loadTemplate('home',$dados);
	}
	public function seguir($id)
	{
		if(!empty($id))
		{
				$r= new relacionamento();
				// id logado twlg seguirá o id da sugestao
				$r->seguir($_SESSION['twlg'], $id);
			
		}
		header("Location: /twitter");
	}

	public function desseguir($id)
	{
		if(!empty($id))
		{
				$r= new relacionamento();
				// id logado twlg 'seguidor' e o id da sugestao 'seguido'
				$r->desseguir($_SESSION['twlg'], $id);
			
		}
		header("Location: /twitter");
	}
}

?>