<?php
	
	
	include ('header.php');
	
	if(isset ($_GET['page'])){ 
	
		$page = $_GET['page'] ;
	
		if ($page =='accueil'){
			include ('accueil.php');
		}
		elseif ($page =='portfolio'){
			include ('portfolio.php');
		}
		elseif ($page =='CV'){
			include ('CV.php');
		}
		elseif ($page =='contact'){
			include ('contact.php');
		}
		elseif ($page =='administration'){
			include ('administration.php');
		}
		elseif ($page =='gestion'){
			include('gestion.php');
		}
		elseif ($page =='traitement'){
			include('traitement.php');
		}
		
		elseif ($page =='p2'){
			include('p2.php');
		}
		
		else{ include ('404.php');}
	}
	
	
	
	include('footer.php');

?>