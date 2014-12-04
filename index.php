<?php
	
	
	include ('header.php');
	
	if(isset ($_GET['page'])){ 
	
		$page = $_GET['page'] ;
	
		if ($page =='accueil'){
			include ('accueil.php');
		}
		elseif ($page =='cause'){
			include ('cause.php');
		}
		elseif ($page =='Don'){
			include ('don.php');
		}
		elseif ($page =='association'){
			include('association.php');
		}
		elseif ($page =='2048'){
			include('2048.php');
		}
		elseif ($page =='dons_direct'){
			include('dons_direct.php');
		}
		elseif ($page =='dons_indirect'){
			include('dons_indirect.php');
		}
		/*elseif ($page =='contact'){
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
		*/
		
		
		else{ include ('404.php');}
	}
	
	
	
	include('footer.php');

?>