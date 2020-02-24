//URL amigables
Options +FollowSymlinks
RewriteEngine On

RewrieteBase /php/poo/proyecto/mexflix

//Condicionales si algun directorio o archivo con la ruta que se forma en la url amigable no va a generar sino q va acceder al archivo o directorio
RewriteCond %{SCRIPT_FILENAME} !-d
RewriteCond %{SCRIPT_FILENAME} !-f

//Cambiar las variables en la URL amigable
Rewrite ^(.*) index.php?r=$1 [L]
Rewrite ^(.*)-(.*)$ index.php?r=$1&q=$2 [L]