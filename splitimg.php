


<?php


$source = @imagecreatefromjpeg( "img/1.jpg" );
$source_width = imagesx( $source );
$source_height = imagesy( $source );

$width = $source_width/4;
$height = $source_height/4;

for( $col = 0; $col < 4; $col++)
{
	for( $row = 0; $row < 4; $row++)
	{
		$fn = sprintf( "img/img_%d.png", $row*4+$col+1 );
		echo( "$fn\n" );
		
		$im = @imagecreatetruecolor( $width, $height );
		imagecopyresized( $im, $source, 0, 0,
			$col * $width, $row * $height, $width, $height,
			$width, $height );
		
		imagejpeg( $im, $fn );
		imagedestroy( $im );
	}
}
?>