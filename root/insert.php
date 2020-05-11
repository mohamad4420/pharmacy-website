<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		$statement = $connection->prepare("
			INSERT INTO prodect (name, information,price,type, image,pay,cart) 
			VALUES (:name, :information,:price,:type, :image,:pay,:cart)
		");
		$result = $statement->execute(
			array(
				':name'	=>	$_POST["name"],
				':information'	=>	$_POST["information"],
                ':price'	=>	$_POST["price"],
                 ':type'	=>	$_POST["type"],
                 ':pay'	=>	0,
                 ':cart'	=>	0,
				':image'		=>	$image
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Edit")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		else
		{
			$image = $_POST["hidden_user_image"];
		}
		$statement = $connection->prepare(
			"UPDATE prodect 
			SET name = :name, information = :information,price =:price,type =:type image = :image  
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':name'	=>	$_POST["name"],
				':information'	=>	$_POST["information"],
                ':price'	=>	$_POST["price"],
                 ':type'	=>	$_POST["type"],
				':image'		=>	$image,
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>