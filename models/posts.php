<?php
class posts extends model
{
	public function inserirPost($msg)
	{
		$id_usuario=$_SESSION['twlg'];
		$sql="insert into tb_posts set id_user = '$id_usuario', data_post= NOW(), msg= '$msg'";
		$this->db->query($sql);

	}
	public function getFeed($lista, $limit)
	{
		$array= array();
		//saber se tem alguem na lista
		if(count($lista)>0)
		{
			$sql="select *, 
			(select u.nome from tb_usuario u where u.id_user=p.id_user) as nome 
			from tb_posts p where p.id_user in (".implode(',', $lista).") order by p.data_post desc limit ".$limit;
			$sql=$this->db->query($sql);
			if($sql->rowCount()>0)
			{
				$array=$sql->fetchAll();
			}
		}

		return $array;
	}
}

?>