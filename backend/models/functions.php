<?php
	function getPictures()
	{
		$dirname = 'static/img/pictures/'; 
		$dir = opendir($dirname); 
		$i = 0;
	
		while($file = readdir($dir)) {
			$p = explode(".",$file);
			if($file != '.' && $file != '..' && !is_dir($dirname.$file) && $p[1] =='jpg' || $p[1] =='png' || $p[1] =='gif') 
			{ 
				echo '<img width="100" src="'.$dirname.$file.'" alt="'.$file.'" title="'.$file.'"><a href="index.php?action=delete&pic='.$file.'">Delete</a>'.'<br />';
				$i = $i+1;
			}
			
		}
		if($i < 9)
		{
			echo "<form action='index.php?action=addPicture' method='post' enctype='multipart/form-data' autocomplete='off'><input type='hidden' name='MAX_FILE_SIZE' value='3000000' /><input type='file' id='pic' name='pic'/><br/><input type='submit' value='ADD PICTURE'></form>";
		}
		
		//echo $i;
		closedir($dir);
	}
	
	function getVideoLinks()
	{
		$file = fopen ("static/videos/links.txt", "a+");
		//echo filesize("static/videos/links.txt");
		$i = 0;
		if($file && filesize("static/videos/links.txt") != 0)
		{
				while(!feof($file))
				{
					$link = fgets($file);
					echo $link.'<a href="index.php?action=deleteLink&link='.$link.'">Delete</a><br/>';
					
					
					
					$i++;
					
				}
				fclose ($file);
				echo 'Notre fichier contient : '.$i.' liens de vidéos';
		}
		else
		{
			echo "Pas de lien de vidéos.";
		}
	}


	function getVideos()
	{
		$file = fopen ("backend/static/videos/links.txt", "r");
		//echo filesize("static/videos/links.txt");
		$i = 0;
		if($file && filesize("backend/static/videos/links.txt") != 0)
		{
			while(!feof($file))
			{
				$link = fgets($file);
				echo '
					<object class="videos" type="application/x-shockwave-flash" data="'.$link.'">
						<param name="movie" value="'.$link.'" />
						<param name="allowFullScreen" value="true"></param>
						<param name="wmode" value="transparent" />
					</object>
				';
				$i++;	
			}
			fclose ($file);
		}
	}
		
	function setVideoLinks($link)
	{
		$file = fopen ("./static/videos/links.txt", "a+");
		if($file)
		{
			$formatted = str_replace(array("https","watch?","="),array("http","","/"),$link);
			if(filesize("static/videos/links.txt") != 0)
				$linkUp = "\r\n".$formatted;
			else
				$linkUp = $formatted;
			fputs($file, $linkUp);
		}
		fclose ($file);
	}
	
	function deleteVideoLinks($linkToDelete)
	{
		//echo $linkToDelete;
		$file = fopen ("static/videos/links.txt", "r");
		$links = array();
		$i  = $r  = 0;
		$nl = 0;
		
		while(!feof($file))
		{
			$link = fgets($file);
			
				$str = strval(str_replace("\r\n","",$link));
				if($str != $linkToDelete)
					$links[$i] = $str;
				else
					$links[$i] = "";
			$i++;
			
		}
		fclose ($file);
			
		var_dump($links);
		
		$length = sizeof($links);
		$file2 = fopen("static/videos/links.txt", "w+");
		if($length != 0)
		{
			for($j = 0; $j < $length; $j++)
			{
				if($j == 0)
				{
					if($links[$j] != "")
						fputs($file2, $links[$j]);
						//echo $links[$j];
					else
						fputs($file2, "");
						//echo "toto";
				}
				else
				{
					if($links[$j] != "" && $links[$j-1] == "" && $j-1 == 0)
						//echo $links[$j];
						fputs($file2, $links[$j]);
					else if($links[$j] != "" && $links[$j-1] == "" && $j != 1)
						//echo " A La Ligne ---> ".$links[$j];
						fputs($file2, "\r\n".$links[$j]);
					else if($links[$j] != "" && $links[$j-1] != "")
						fputs($file2, "\r\n".$links[$j]);
						//echo " A La Ligne ---> ".$links[$j];
					else
						fputs($file2, "");
						//echo "toto";
				}
			}
		}
	}
	
	function imagethumb( $image_src , $image_dest = NULL , $max_size = 100, $expand = FALSE, $square = FALSE )
	{
		if( !file_exists($image_src) ) return FALSE;
	
		// Récupère les infos de l'image
		$fileinfo = getimagesize($image_src);
		if( !$fileinfo ) return FALSE;
	
		$width     = $fileinfo[0];
		$height    = $fileinfo[1];
		$type_mime = $fileinfo['mime'];
		$type      = str_replace('image/', '', $type_mime);
	
		if( !$expand && max($width, $height)<=$max_size && (!$square || ($square && $width==$height) ) )
		{
			// L'image est plus petite que max_size
			if($image_dest)
			{
				return copy($image_src, $image_dest);
			}
			else
			{
				header('Content-Type: '. $type_mime);
				return (boolean) readfile($image_src);
			}
		}
	
		// Calcule les nouvelles dimensions
		$ratio = $width / $height;
	
		if( $square )
		{
			$new_width = $new_height = $max_size;
	
			if( $ratio > 1 )
			{
				// Paysage
				$src_y = 0;
				$src_x = round( ($width - $height) / 2 );
	
				$src_w = $src_h = $height;
			}
			else
			{
				// Portrait
				$src_x = 0;
				$src_y = round( ($height - $width) / 2 );
	
				$src_w = $src_h = $width;
			}
		}
		else
		{
			$src_x = $src_y = 0;
			$src_w = $width;
			$src_h = $height;
	
			if ( $ratio > 1 )
			{
				// Paysage
				$new_width  = $max_size;
				$new_height = round( $max_size / $ratio );
			}
			else
			{
				// Portrait
				$new_height = $max_size;
				$new_width  = round( $max_size * $ratio );
			}
		}
	
		// Ouvre l'image originale
		$func = 'imagecreatefrom' . $type;
		if( !function_exists($func) ) return FALSE;
	
		$image_src = $func($image_src);
		$new_image = imagecreatetruecolor($new_width,$new_height);
	
		// Gestion de la transparence pour les png
		if( $type=='png' )
		{
			imagealphablending($new_image,false);
			if( function_exists('imagesavealpha') )
				imagesavealpha($new_image,true);
		}
	
		// Gestion de la transparence pour les gif
		elseif( $type=='gif' && imagecolortransparent($image_src)>=0 )
		{
			$transparent_index = imagecolortransparent($image_src);
			$transparent_color = imagecolorsforindex($image_src, $transparent_index);
			$transparent_index = imagecolorallocate($new_image, $transparent_color['red'], $transparent_color['green'], $transparent_color['blue']);
			imagefill($new_image, 0, 0, $transparent_index);
			imagecolortransparent($new_image, $transparent_index);
		}
	
		// Redimensionnement de l'image
		imagecopyresampled(
			$new_image, $image_src,
			0, 0, $src_x, $src_y,
			$new_width, $new_height, $src_w, $src_h
		);
	
		// Enregistrement de l'image
		$func = 'image'. $type;
		if($image_dest)
		{
			$func($new_image, $image_dest);
		}
		else
		{
			header('Content-Type: '. $type_mime);
			$func($new_image);
		}
	
		// Libération de la mémoire
		imagedestroy($new_image); 
	
		return TRUE;
	}
?>