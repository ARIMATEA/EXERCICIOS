<?php
		try {
		$pdo=new PDO("mysql:host=localhost;dbname=bd_livros","root","");	
		} catch (PDOException $e) {
		echo $e->getMessage();
		}
	$autor=$_GET["autor"];
	$buscasegura=$pdo->prepare("INSERT INTO tb_autores(autor)VALUES(autor);
	$buscasegura->bindValue(':autor',$autor);  
	echo $autor
	$buscasegura->execute();
	/* TAG COM ERRO */
?>