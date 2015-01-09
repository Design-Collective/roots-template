#DC Roots Base Template

Wordpress development starter theme based on [roots/bedrock](https://github.com/roots/bedrock) and Bootstrap. Uses [Grunt-Libsass](https://www.npmjs.com/package/grunt-libsass) for ultra-fast parsing (with Compass mixins bautifully supplied by [Compass-Mixins](https://github.com/Igosuki/compass-mixins)) and includes Icomoon webfont.
 
##1. Prepare site directory


```
$ cd ~/Sites
$ git clone https://github.com/Design-Collective/roots-template myproject

$ cd myproject
```

Enter your local development variables (database. A MAMP example has been added to make it easier.

```
$ copy .env.example .env

$ nano .env
```

##2. Install PHP dependencies
This installs Wordpress and some awesome plugins we've added.

```
$ composer install
```

Then, install the development dependencies into your theme folder.


```
$ cd web/app/themes/mytheme
$ npm install
$ bower install
```

##3. Install WP

Visit [http://localhost/myproject/web](http://localhost/myproject/web) and complete the WordPress installation.


##4. Compile JS and CSS

Run grunt for the first time to generate the initial CSS and JS files, or run ```grunt watch```.