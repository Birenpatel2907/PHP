RewriteEngine On

RewriteCond % {REQUEST_FILENAME} !-f

RewriteCond % {REQUEST_FILENAME} !-d

RewriteRule ^ (.*)$ control.php/$1 [L]