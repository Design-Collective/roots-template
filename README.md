#DC Roots Base Template

Wordpress development starter theme based on roots/bedrock and Bootstrap. Uses Grunt-Libsass for ultra-fast parsing, includes Icomoon webfont.
 
##1. Prepare site directory

```
cd ~/Sites
git clone https://github.com/Design-Collective/brokenhomme myproject

cd myproject

copy .env.example .env

nano .env
```

##2. Install PHP dependencies

```
composer install
```

##3. Install WP

Visit http://localhost/myprojectt

##4. Install Grunt dependencies in theme

```
cd web/app/themes/mytheme
npm install
```

##5. Install JS / Bower dependencies

```
bower install
```

##6. Compile JS and CSS

Run grunt for the first time to generate the initial CSS and JS files. You can run ```

```
grunt watch
```