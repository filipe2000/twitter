<?php

class relacionamento extends model
{
	public function seguir($seguidor, $seguido)
	{
		$sql="insert into tb_relacionamentos set id_seguidor= '$seguidor',  id_seguido='$seguido'";
		$this->db->query($sql);
	}
	public function desseguir($seguidor, $seguido)
	{
		$sql="delete from tb_relacionamentos where id_seguidor= '$seguidor' and  id_seguido='$seguido'";
		$this->db->query($sql);
	}
}


?>