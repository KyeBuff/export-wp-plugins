# WP Plugin Management scripts

SSH into the vagrant environment and navigate to the manage-plugins folder.

```
cd /var/www/public/manage-plugins
```

## How it works

Plugin machine names are exported to the plugins.json in the public folder which can stored on Git.

The import script reads from this json file and runs the WP CLI install plugin script.

### Export plugins

Inside the manage-plugins folder run: 

```
php export-plugins.php
```

### Import plugins

Inside the manage-plugins folder run: 

```
php import-plugins.php
```

