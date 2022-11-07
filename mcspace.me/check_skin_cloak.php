<?php
require_once "cnt.php";

$uploadskindir = $_SERVER['DOCUMENT_ROOT'].'/skins/';
	if(isset($_POST['upload_skin'])){
		$apend = $_SESSION['user'].'.png';
		$uploadfile_skin = "$uploadskindir"."$apend";
		$imageinfo = getimagesize($_FILES['userfile']['tmp_name']);
		$explode = explode(".", $_FILES['userfile']['name']);
		if(exif_imagetype($_FILES['userfile']['tmp_name']) != IMAGETYPE_PNG) {header('Location: '.$account.'&notskinpng#loading');exit();}
		else if($imageinfo['mime'] != 'image/png') {header('Location: '.$account.'&notskinpng#loading');exit();}
		else if($_FILES['userfile']['type'] != 'image/png') {header('Location: '.$account.'&notskinpng#loading');exit();}
		else if($explode[count($explode)-1] != "png") {header('Location: '.$account.'&notskinpng#loading');exit();}
		else if($_FILES['upfile']['size'] > 50000) {header('Location: '.$account.'&sizeskin#loading');exit();}
		else if($_FILES['upfile']['size'] > 2000000) {header('Location: '.$account.'&maxsizeskin#loading');exit();}
		else if($imageinfo['mime'] != 'image/png') {header('Location: '.$account.'&notskinpng#loading');exit();}
		else if(($imageinfo["0"] > 2048 || $imageinfo["1"] > 1024 || $imageinfo["0"] < 64 || $imageinfo["1"] < 32)) {header('Location: '.$account.'&sizeHDskin#loading');exit();}
		else {
			$is_hd = 0;
			if($imageinfo["0"] > 64 && $imageinfo["1"] > 32) $is_hd = 1;
			if(is_uploaded_file($_FILES["userfile"]["tmp_name"])) {
				imagecreatetruecolor();
				$imageFILE = @imagecreatefrompng($_FILES['userfile']['tmp_name']);
				$background = imagecolorallocate($imageFILE, 0, 0, 0);
		        imagecolortransparent($imageFILE, $background);
		        imagealphablending($imageFILE, false);
		        imagesavealpha($imageFILE, true);
				if(!$imageFILE) {header('Location: '.$account.'&notuploadskin#loading');exit();}
				else {
					unlink($uploadfile_skin);
					imagepng($imageFILE, $uploadfile_skin);
					header('Location: '.$account.'&skinsuccess#loading');exit();
				}
				imagedestroy($imageFILE);
			}
		}
	}	
	/*----- ----- ----- ----- -----*/
	$uploadcloakdir = $_SERVER['DOCUMENT_ROOT'].'/cloaks/';
	if(isset($_POST['upload_cloak'])){
		$apend = $_SESSION['user'].'.png';
		$uploadfile_cloak = "$uploadcloakdir"."$apend";
		$imageinfo = getimagesize($_FILES['userfile']['tmp_name']);
		$explode = explode(".", $_FILES['userfile']['name']);
		if(exif_imagetype($_FILES['userfile']['tmp_name']) != IMAGETYPE_PNG) {header('Location: '.$account.'&notcloakpng#loading');exit();}
		else if($imageinfo['mime'] != 'image/png') {header('Location: '.$account.'&notcloakpng#loading');exit();}
		else if($_FILES['userfile']['type'] != 'image/png') {header('Location: '.$account.'&notcloakpng#loading');exit();}
		else if($explode[count($explode)-1] != "png") {header('Location: '.$account.'&notcloakpng#loading');exit();}
		else if($_FILES['upfile']['size'] > 50000) {header('Location: '.$account.'&sizecloak#loading');exit();}
		else if($_FILES['upfile']['size'] > 2000000) {header('Location: '.$account.'&maxsizecloak#loading');exit();}
		else if($imageinfo['mime'] != 'image/png') {header('Location: '.$account.'&notcloakpng#loading');exit();}
		else if(($imageinfo["0"] > 512 || $imageinfo["1"] > 256 || $imageinfo["0"] < 64 || $imageinfo["1"] < 32)) {header('Location: '.$account.'&sizeHDcloak#loading');exit();}
		else {
			$is_hd = 0;
			if($imageinfo["0"] > 64 && $imageinfo["1"] > 32) $is_hd = 1;
			if(is_uploaded_file($_FILES["userfile"]["tmp_name"])) {
				imagecreatetruecolor();
				$imageFILE = @imagecreatefrompng($_FILES['userfile']['tmp_name']);
				$background = imagecolorallocate($imageFILE, 0, 0, 0);
		        imagecolortransparent($imageFILE, $background);
		        imagealphablending($imageFILE, false);
		        imagesavealpha($imageFILE, true);
				if(!$imageFILE) {header('Location: '.$account.'&notuploadcloak#loading');exit();}
				else {
					unlink($uploadfile_cloak);
					imagepng($imageFILE, $uploadfile_cloak);
					header('Location: '.$account.'&cloaksuccess#loading');
					exit();
				}
				imagedestroy($imageFILE);
			}
		}
	}	
	/*----- ----- ----- ----- -----*/
	if(isset($_POST['delete_skin'])) {
		$apend = $_SESSION['user'].'.png';
		$uploadfile_skin_delete = "$uploadskindir"."$apend";
		if(file_exists($uploadfile_skin_delete)) unlink($uploadfile_skin_delete);
		header('Location: '.$account.'&defaultskin#loading');exit();
	}
	/*----- ----- ----- ----- -----*/
	if(isset($_POST['delete_cloak'])) {
		$apend = $_SESSION['user'].'.png';
		$uploadfile_cloak_delete = "$uploadcloakdir"."$apend";
		if(file_exists($uploadfile_cloak_delete)) unlink($uploadfile_cloak_delete);
		header('Location: '.$account.'&defaultcloak#loading');exit();
	}	
	/*----- ----- ----- ----- -----*/
	if(isset($_POST['download_skin'])) {
		$apend = $_SESSION['user'].'.png';
		$uploadfile_skin_download = "$uploadskindir"."$apend";
		if(file_exists($uploadfile_skin_download)) {
			header("Content-Type: application/octet-stream");
			header("Accept-Ranges: bytes");
			header("Content-Length: ".filesize($uploadfile_skin_download));
			header("Content-Disposition: attachment; filename=".$apend); 
			readfile($uploadfile_skin_download);
		}
		header('Location: '.$account.'&downloadskin#loading');exit();
	}	
	/*----- ----- ----- ----- -----*/
	if(isset($_POST['download_cloak'])) {
		$apend = $_SESSION['user'].'.png';
		$uploadfile_cloak_download = "$uploadcloakdir"."$apend";
		if(file_exists($uploadfile_cloak_download)) {
			header("Content-Type: application/octet-stream");
			header("Accept-Ranges: bytes");
			header("Content-Length: ".filesize($uploadfile_cloak_download));
			header("Content-Disposition: attachment; filename=".$apend); 
			readfile($uploadfile_cloak_download);
		} 
		header('Location: '.$account.'&downloadcloak#loading');exit();
	}	
	/*----- ----- ----- ----- -----*/
?>