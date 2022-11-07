<?php
require_once "../cnt.php";

// cfg
$table = "donate_ST";
$link = "https://mcspace.me/panel/index.php?act=skytech_donate";
//

if(isset($_POST['redM'])){
		if(!empty($_POST['redM'])){
			$sql = "UPDATE ".$table." SET price_m=".$_POST['redM']." WHERE donat='RedStone'";
			$result = $pdo->query($sql);			
			if(isset($_POST['redF'])){	
				if(!empty($_POST['redF'])){
					$sql = "UPDATE ".$table." SET price_f=".$_POST['redF']." WHERE donat='RedStone'";
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
	} elseif(isset($_POST['lapisM'])){
		if(!empty($_POST['lapisM'])){
			$sql = "UPDATE ".$table." SET price_m=".$_POST['lapisM']." WHERE donat='Lapis'";
			$result = $pdo->query($sql);
			if(isset($_POST['lapisF'])){
				if(!empty($_POST['lapisF'])){
					$sql = "UPDATE ".$table." SET price_f=".$_POST['lapisF']." WHERE donat='Lapis'";
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
	} elseif(isset($_POST['goldM'])){
		if(!empty($_POST['goldM'])){
			$sql = "UPDATE ".$table." SET price_m=".$_POST['goldM']." WHERE donat='Gold'";
			$result = $pdo->query($sql);
			if(isset($_POST['goldF'])){
				if(!empty($_POST['goldF'])){
					$sql = "UPDATE ".$table." SET price_f=".$_POST['goldF']." WHERE donat='Gold'";
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
	} elseif(isset($_POST['diamondM'])){
		if(!empty($_POST['diamondM'])){
			$sql = "UPDATE ".$table." SET price_m=".$_POST['diamondM']." WHERE donat='Diamond'";
			$result = $pdo->query($sql);
			if(isset($_POST['diamondF'])){
				if(!empty($_POST['diamondF'])){
					$sql = "UPDATE ".$table." SET price_f=".$_POST['diamondF']." WHERE donat='Diamond'";
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
	} elseif(isset($_POST['emeraldM'])){
		if(!empty($_POST['emeraldM'])){
			$sql = "UPDATE ".$table." SET price_m=".$_POST['emeraldM']." WHERE donat='Emerald'";
			$result = $pdo->query($sql);
			if(isset($_POST['emeraldF'])){
				if(!empty($_POST['emeraldF'])){
					$sql = "UPDATE ".$table." SET price_f=".$_POST['emeraldF']." WHERE donat='Emerald'";
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
	} elseif(isset($_POST['donModM'])){
		if(!empty($_POST['donModM'])){
			$sql = "UPDATE ".$table." SET price_m=".$_POST['donModM']." WHERE donat='DonMod'";
			$result = $pdo->query($sql);
			if(isset($_POST['donModF'])){
				if(!empty($_POST['donModF'])){
					$sql = "UPDATE ".$table." SET price_f=".$_POST['donModF']." WHERE donat='DonMod'";
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
	header('Location: '.$link.'&yes');
	exit();
?>