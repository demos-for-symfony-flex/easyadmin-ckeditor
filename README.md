# [symfony-flex-demo](https://symfony-flex-demo.github.io)/easyadmin-ckeditor

[![Build Status](https://travis-ci.org/symfony-flex-demo/easyadmin-ckeditor.svg?branch=master)](https://travis-ci.org/symfony-flex-demo/easyadmin-ckeditor)

## TODO
* Check [symfony.sh](https://symfony.sh/) for the appearence of a recipe for `friendsofsymfony/ckeditor-bundle` and if it is contrib or official, if it is contrib, adjust the `composer.json` for `extra": { "symfony": { "allow-contrib": true }}`

## Done
* CkEditor (`ckeditor-bundle`): `egeloen` -> FriendsOfSymfony
  * [*Finding a new home for IvoryCKEditorBundle*](http://symfony.com/blog/finding-a-new-home-for-ivoryckeditorbundle)

## Requirements
### ZipArchive (Zip extension)
* Error thrown while running command "ckeditor:install". Message: "Class 'ZipArchive' not found"
* debian: php7.1-zip, php5.6-zip
* http://www.php.net/manual/en/book.zip.php

## Documentation
* *[Integrating IvoryCKEditorBundle to Create a WYSIWYG Editor](https://symfony.com/doc/current/bundles/EasyAdminBundle/integration/ivoryckeditorbundle.html)*
* *[Getting started with IvoryCKEditorBundle](http://symfony.com/doc/master/bundles/IvoryCKEditorBundle)*
