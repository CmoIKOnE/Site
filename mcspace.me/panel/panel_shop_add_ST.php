<?
require_once "../cnt.php";

//cfg

$table = "shop_ST";
$link = "https://mcspace.me/panel/index.php?act=skytech_shop";


//


$itemTitle = 	safeGet($_POST, 'itemTitle');
$itemMod = 		safeGet($_POST, 'itemMod');
$itemPrice = 	safeGet($_POST, 'itemPrice');
$id_item = 		safeGet($_POST, 'id_item');
$icon = 		safeGet($_POST, 'icon');
$itemTitleEN = translitRU_EN($itemTitle);
$iconTitleEN = translitRU_EN($icon);
$sql = "SELECT * FROM ".$table." WHERE itemTitle='$itemTitleEN' LIMIT 1";
$query = $pdo->query($sql);
$count = $query->rowCount();

if($count !== 1){
	if(isset($itemTitle)){	
		if(!empty($itemTitle)){
			if(isset($itemMod)){
				if(!empty($itemMod)){
					if(isset($itemPrice)){
						if(!empty($itemPrice)){
							if(isset($id_item)){
								if(!empty($id_item)){
									if(isset($icon)){
										if(!empty($icon)){
											$fix_replace_price = str_replace(",", ".", $itemPrice);			
											$sql = "INSERT INTO ".$table." (itemTitle, itemMod, itemPrice, id_item, icon) 
											VALUES ('$itemTitleEN', '$itemMod', $fix_replace_price, $id_item, '$iconTitleEN')";
											$result = $pdo->exec($sql);
											if($result == 1){ header('Location: '.$link.'&yes'); exit(); } 
											else { header('Location: '.$link.'&no'); exit(); } 
																								
										} else {
											header('Location: '.$link.'&no');
											exit();	
										}												
									} else {
										header('Location: '.$link.'&no');
										exit();	
									}												
								} else {
									header('Location: '.$link.'&no');
									exit();	
								}												
							} else {
								header('Location: '.$link.'&no');
								exit();	
							}												
						} else {
							header('Location: '.$link.'&no');
							exit();	
						}
					} else {
						header('Location: '.$link.'&no');
						exit();	
					}
				} else {
					header('Location: '.$link.'&no');
					exit();	
				}
			} else {
				header('Location: '.$link.'&no');
				exit();	
			}
		} else {
			header('Location: '.$link.'&no');
			exit();	
		}		
	} else {
		header('Location: '.$link.'&no');
		exit();	
	}	
} else {
	header('Location: '.$link.'&have');
	exit();	
}	
