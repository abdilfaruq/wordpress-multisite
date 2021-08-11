# Install WordPress Multisite on Local Server

Tools yang harus disiapkan:

1. Laragon
2. PHP
3. WordPress

### Install WordPress

1. Masuk ke ```Laragon```, klik kanan kemudian klik ```Quick App``` dan pilih ```WordPress```.
2. Isi nama Project, kemudian tunggu instalasi dan ekstrak WordPress yang sudah otomatis dari Laragon.


### Enabling the Multisite Feature

Masuk ke Folder ```c:\laragon\MultiSite``` tergantung instalasi Laragon masing-masing lalu buka File ```wp-config.php``` dan edit, tepat dibawah ```define('WP_DEBUG', false);```
```ssh
/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
```


### Setting Network

Masuk ke Dashboard ```WordPress```, pilih menu ```Tools > Network Setup```, kemudian pilih ```sub-direktori``` dan untuk ```Network Title``` silahkan isi sesuai yang diinginkan. Kemudian ```Install```.


### Edit File wp-config and .htaccess

1. Ubah File ```wp-config.php``` di Folder ```c:\laragon\MultiSite``` tergantung instalasi Laragon masing-masing, tepat dibawah ```define( 'WP_ALLOW_MULTISITE', true );```
```ssh
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'multisite.test');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
```

2. Masih di Folder ```c:\laragon\MultiSite``` edit File ```.htaccess``` edit perintah menjadi seperti dibawah ini:
```ssh
RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteBase /
RewriteRule ^index\.php$ - [L]

# add a trailing slash to /wp-admin
RewriteRule ^([_0-9a-zA-Z-]+/)?wp-admin$ $1wp-admin/ [R=301,L]

RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^ - [L]
RewriteRule ^([_0-9a-zA-Z-]+/)?(wp-(content|admin|includes).*) $2 [L]
RewriteRule ^([_0-9a-zA-Z-]+/)?(.*\.php)$ $2 [L]
RewriteRule . index.php [L]
```

##
**Selesai**.