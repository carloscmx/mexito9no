<?php
$titulo=" Ejercicio 1 ADA 2";
$subtitulo=" Práctica 1 ADA 2- Redimensiónar imagen.";
$instruccion=" Seleccione una imagen para cargar en el servidor redimensionada al tamaño deseado.";
$objetivo=" Realiza una la redimensión de una imagen que se suba al servidor (la aplicación será capaz de
crear la imagen física en los tamaños de 300x300px y 600x600px).";
$validarinput=0;

include_once("masterpage/head.php");
?>

<form action="#" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<lable class="">Seleccione una imagen:</lable><br>
				<input type="file" name="upload_image" class="form-control" required placeholder="Seleccione una imagen" />
			</div>

			<input type="submit" name="form_submit" class="btn btn-primary" value="Generar" />
			<?php

			function resizeImage300($resourceType, $image_width, $image_height)
			{
				$resizeWidth = 300;
				$resizeHeight = 300;
				$imageLayer = imagecreatetruecolor($resizeWidth, $resizeHeight);
				imagecopyresampled($imageLayer, $resourceType, 0, 0, 0, 0, $resizeWidth, $resizeHeight, $image_width, $image_height);
				return $imageLayer;
			}
			function resizeImage600($resourceType, $image_width, $image_height)
			{
				$resizeWidth = 600;
				$resizeHeight = 600;
				$imageLayer = imagecreatetruecolor($resizeWidth, $resizeHeight);
				imagecopyresampled($imageLayer, $resourceType, 0, 0, 0, 0, $resizeWidth, $resizeHeight, $image_width, $image_height);
				return $imageLayer;
			}
			if ($_FILES) {
				if (is_array($_FILES)) {
					$fileName = $_FILES['upload_image']['tmp_name'];
					$sourceProperties = getimagesize($fileName);
					$resizeFileName = time();
					$uploadPath = "recursos/descargas/";
					$fileExt = pathinfo($_FILES['upload_image']['name'], PATHINFO_EXTENSION);
					$uploadImageType = $sourceProperties[2];
					$sourceImageWidth = $sourceProperties[0];
					$sourceImageHeight = $sourceProperties[1];
					switch ($uploadImageType) {
						case IMAGETYPE_JPEG:
							$resourceType = imagecreatefromjpeg($fileName);
							$imageLayer = resizeImage300($resourceType, $sourceImageWidth, $sourceImageHeight);
							imagejpeg($imageLayer, $uploadPath . "thump300_" . $resizeFileName . '.' . $fileExt);
							$imageLayer = resizeImage600($resourceType, $sourceImageWidth, $sourceImageHeight);
							imagejpeg($imageLayer, $uploadPath . "thump600_" . $resizeFileName . '.' . $fileExt);
							echo '<br><br><p>Resultado de la imagen</p><br><img src="recursos/descargas/thump300_' . $resizeFileName . '.' . $fileExt . '" alt="">';
							echo '<br><img src="recursos/descargas/thump600_' . $resizeFileName . '.' . $fileExt . '" alt="">';
							break;

						case IMAGETYPE_GIF:
							$resourceType = imagecreatefromgif($fileName);
							$imageLayer = resizeImage300($resourceType, $sourceImageWidth, $sourceImageHeight);
							imagegif($imageLayer, $uploadPath . "thump300_" . $resizeFileName . '.' . $fileExt);
							$resourceType = imagecreatefromgif($fileName);
							$imageLayer = resizeImage600($resourceType, $sourceImageWidth, $sourceImageHeight);
							imagegif($imageLayer, $uploadPath . "thump600_" . $resizeFileName . '.' . $fileExt);
							echo '<br><br><p>Resultado de la imagen</p><br><img src="recursos/descargas/thump300_' . $resizeFileName . '.' . $fileExt . '" alt="">';
							echo '<br><img src="recursos/descargas/thump600_' . $resizeFileName . '.' . $fileExt . '" alt="">';
							break;

						case IMAGETYPE_PNG:
							$resourceType = imagecreatefrompng($fileName);
							$imageLayer = resizeImage300($resourceType, $sourceImageWidth, $sourceImageHeight);
							imagepng($imageLayer, $uploadPath . "thump300_" . $resizeFileName . '.' . $fileExt);
							$imageLayer = resizeImage600($resourceType, $sourceImageWidth, $sourceImageHeight);
							imagepng($imageLayer, $uploadPath . "thump600_" . $resizeFileName . '.' . $fileExt);
							echo '<br><br><p>Resultado de la imagen</p><br><img src="recursos/descargas/thump300_' . $resizeFileName . '.' . $fileExt . '" alt="">';
							echo '<br><img src="recursos/descargas/thump600_' . $resizeFileName . '.' . $fileExt . '" alt="">';
							break;

						default:
							$imageProcess = 0;
							break;
					}
					move_uploaded_file("hola", $uploadPath . $resizeFileName . "." . $fileExt);
					$imageProcess = 1;
					
				}
				
			}

			?>
		</form>



	<?php
include_once("masterpage/footer.php");
?>

