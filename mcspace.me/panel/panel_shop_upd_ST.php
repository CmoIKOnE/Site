<? require_once "../cnt.php";

//cfg

$table = "shop_ST";
$link = "https://mcspace.me/panel/index.php?act=skytech_shop";


//


$request = $_POST;
$itemNumber = 	safeGet($request, 'itemNumber');
$itemTitle = 	safeGet($request, 'itemTitle');
$itemMod = 		safeGet($request, 'itemMod');
$itemPrice = 	safeGet($request, 'itemPrice');
$id_item = 		safeGet($request, 'id_item');
$icon = 		safeGet($request, 'icon');

if(isset($itemNumber)){
	if(!empty($itemNumber)){
		$sql = "SELECT ".$table." WHERE itemNumber=$itemNumber";
		$result = $pdo->exec($sql);
		if($result === false){
			$sql1 = "SELECT ".$table." WHERE itemTitle=$itemTitle";
			$result1 = $pdo->exec($sql1);
			if($result1 === false){
				if(isset($itemTitle)){	
					if(!empty($itemTitle)){	
						$itemTitleEN = translitRU_EN($itemTitle);
						$sql = "UPDATE ".$table." SET itemTitle='$itemTitleEN' WHERE itemNumber=$itemNumber";
						$result = $pdo->query($sql);
						if(isset($itemMod)){
							if(!empty($itemMod)){
								$sql = "UPDATE ".$table." SET itemMod='$itemMod' WHERE itemNumber=$itemNumber";
								$result = $pdo->query($sql);
								if(isset($id_item)){
									if(!empty($id_item)){
										$sql = "UPDATE ".$table." SET id_item='$id_item' WHERE itemNumber=$itemNumber";
										$result = $pdo->query($sql);
										if(isset($icon)){
											if(!empty($icon)){
												$sql = "UPDATE ".$table." SET icon='$icon' WHERE itemNumber=$itemNumber";
												$result = $pdo->query($sql);
												if(isset($itemPrice)){
													if(!empty($itemPrice)){
														$fix_replace_price = str_replace(",", ".", $itemPrice);
														$sql = "UPDATE ".$table." SET itemPrice='$fix_replace_price' WHERE itemNumber=$itemNumber";
														$result = $pdo->query($sql);
														header('Location: '.$link.'&yes');
														exit();
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
}
