<?php 

$plugins_file = file_get_contents('../plugins.json');

$plugins_array = json_decode($plugins_file);

$command = 'wp plugin install ';

$existing_plugins = scandir('../wp-content/plugins');
$installed_plugins = [];

foreach ($plugins_array as $plugin) {
	if(in_array($plugin, $existing_plugins)){
		continue;
	}

	$installed_plugins[] = $plugin;
	$command .= $plugin . ' ';
}

$command .= '--activate';

$install = exec($command);

foreach ($installed_plugins as $plugin) {
	echo "Installed and activated " . $plugin . "\n";
}

echo "Plugins installed. \n";