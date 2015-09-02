# Laravel5Bootstrap3Form
Form builder for Laravel5 based on bootstrap3 form controls

composer require shyam-achuthan/laravel5bootstrap3form

add / replace form facade with 
'Form'      => ShyamAchuthan\Laravel5Boostrap3Form\Html\FormFacade::class,
in the config/app.php

add/replace htmlservice provider (Illuminate\Html\HtmlServiceProvider) with 

\ShyamAchuthan\Laravel5Boostrap3Form\Providers\HtmlServiceProvider::class

