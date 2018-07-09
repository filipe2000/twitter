<?php
class usuarios extends model
{

	private $uid;
	public function __construct($id='')
	{	//definui um construct deve executá-lo, senão executará o do model
		parent:: __construct();
		if(!empty($id)){
		$this->uid=$id;	
		}
		
	}
	public function isLogged()
	{
		if(isset($_SESSION['twlg'])&& !empty($_SESSION['twlg']))
		{
			return true;
		}else
		{
			return false;
		}
	}
	public function usuarioExist($email)
	{
		$sql="select * from tb_usuario where email='$email'";
		$sql=$this->db->query($sql);
		if($sql->rowCount()>0)
		{
			return true;
		}else
		{
			return false;
		}
	}
	public function insertUser($nome,$email,$senha)
	{
		$sql="insert into tb_usuario set nome='$nome', email='$email', senha='$senha'";
		$this->db->query($sql);
		$id=$this->db->lastInsertId();
		return $id;
	}
	public function fazerLogin($email, $senha)
	{
		$sql="select * from tb_usuario where email='$email' and senha='$senha'";
		$sql=$this->db->query($sql);
		if($sql->rowCount()>0)
		{
			$sql=$sql->fetch();
			$_SESSION['twlg']=$sql['id_user'];
			return  true;
		}else
		{
			return false;
		}
	}
	public function getNome()
	{
		if(!empty($this->uid))
		{
			$sql="select nome from tb_usuario where id_user ='".($this->uid)."' ";
			$sql=$this->db->query($sql);
			if($sql->rowCount()>0)
			{
			$sql=$sql->fetch();
			return $sql['nome']	;
			}
		}
	}

	public function getCountSeguido()
	{
		$sql="select * from tb_relacionamentos where id_seguidor ='".($this->uid)."' ";
		$sql=$this->db->query($sql);
		return $sql->rowCount();
	}
	public function getCountSeguidores()
	{
		$sql="select * from tb_relacionamentos where id_seguido ='".($this->uid)."' ";
		$sql=$this->db->query($sql);
		return $sql->rowCount();
	}
	public function getUsuarios($limit)
	{	/* selecionar tudo do usuario, 
			contar de relacionamentos
			onde este usuario é seguidor e algum usuario for seguido*/
		$array= array();
		$sql="select 
		*, 
		(select count(*) from tb_relacionamentos r 
		where r.id_seguidor = '".($this->uid)."' and r.id_seguido=u.id_user) as seguido
		from tb_usuario u where u.id_user !='".($this->uid)."' limit $limit";
		$sql=$this->db->query($sql);
		if($sql->rowCount()>0)
		{
			$array=$sql->fetchAll();
		}
		return $array;
	}
	public function getSeguidos()
	{
		$array = array();
		$sql="select id_seguido from tb_relacionamentos where id_seguidor ='".($this->uid)."' ";
		$sql=$this->db->query($sql);
		if($sql->rowCount()>0)
		{	$sql=$sql->fetchAll();
			foreach($sql as $seg)
			{
				$array[]=$seg['id_seguido'];
			}
		}
		return $array;
	}
}



?>