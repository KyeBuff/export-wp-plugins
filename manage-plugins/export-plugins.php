<?php 

$files_folders = scandir('../wp-content/plugins');
$plugins = [];

foreach ($files_folders as $plugin) {
	if($plugin !== '.' && $plugin !== '..' && $plugin !== 'index.php') {
		$plugins[] = $plugin;
	}
}

$json = json_encode($plugins);

$json_file = fopen('../plugins.json', 'w+'); 

fwrite($json_file, $json);
