<?php 
$dir          = '128X128';
$file_display = array(
    'jpg',
    'jpeg',
    'png',
    'gif'
);

if (file_exists($dir) == false) {
    echo 'Directory \'', $dir, '\' not found!';
} else {
    $dir_contents = scandir($dir);

    foreach ($dir_contents as $file) {
        $file_type = strtolower(end(explode('.', $file)));

        if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
			
			?>
				<div class="row">
					<div class="col-md-2">
						<div style="text-align:center">
							<img src="<?=$dir . '/'.$file;?>"><br>
							<span><?=$file;?></span>
						</div>
					</div>
				</div>
			<?php 
           // echo '<img src="', $dir, '/', $file, '" alt="', $file, '" />';
        }
    }
}


?>