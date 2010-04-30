<?php 
include('inc-plugin-db.php');

 $action= $_GET['action'];
 
 switch(strtolower($action)){
 
	case "sc_county":
		 $_POST['county'];
		 $_POST['boundary'];
		
		$price_from = $_POST['price_from'];
		$price_to = $_POST['price_to'];
		
		$bed_from = $_POST['bed_from'];
		$bed_to = $_POST['bed_to'];
		
		$bath_from = $_POST['bath_from'];
		$bath_to = $_POST['bath_to'];
		
		$property_type = $_POST['ck_prop_type'];
		
		$structure_size = $_POST['struc_from'];
		$structure_to = $_POST['struc_to'];
		
		$lot_from = $_POST['lot_from'];
		$lot_to = $_POST['lot_to'];
		
		$yr_from = $_POST['yr_from'];
		$yr_to = $_POST['yr_to'];
		
		$key = $_POST['keyword'];
		
		$list_type=$_POST['ck_lst_type'];
		$fc_type=$_POST['ck_for_type'];
		$rcts_type=$_POST['ck_rcts_type'];
			
		$sql='';
		$sql.='SELECT * FROM wp_greatrealestate_listings ';
		$sql.='WHERE '.$COL_PRICE.' BETWEEN '.$price_from.' AND '.$price_to.' ';
		$sql.='AND '.$COL_BEDROOMS.' BETWEEN '.$bed_from.' AND '.$bed_to.' ';
		$sql.='AND '.$COL_BATHROOMS.' BETWEEN '.$bath_from.' AND '.$bath_to.' ';
		$sql.='AND '.$COL_PROPERTY_TYPE.'='.$property_type.' ';
		$sql.='AND '.$COL_STRUCTURE_SIZE.' BETWEEN '.$structure_size.' AND '.$structure_to.' ';
		$sql.='AND '.$COL_LOT_SIZE.' BETWEEN '.$lot_from.' AND '.$lot_to.'';
		$sql.='AND '.$COL_YEAR_.' BETWEEN '.$yr_from.' AND '.$yr_to.' ';
		$sql.='AND '.$COL_KEYWORD.' LIKE '.$key.' ';
		$sql.='AND '.$COL_LISTING_TYPE.'='.$list_type.' ';
		$sql.='AND '.$COL_RCTS_SOLD.'='.$rcts_type.'; ';
		echo $sql;
	
	break;
	
	default:
	
	break;
 }
?>