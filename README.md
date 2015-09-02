# Laravel5Bootstrap3Form
Form builder for Laravel5 based on bootstrap3 form controls

composer require shyam-achuthan/laravel5bootstrap3form

add / replace form facade with 
'Form'      => ShyamAchuthan\Laravel5Bootstrap3Form\Html\FormFacade::class,
in the config/app.php

add/replace htmlservice provider (Illuminate\Html\HtmlServiceProvider) with 

\ShyamAchuthan\Laravel5Bootstrap3Form\Providers\HtmlServiceProvider::class


##Usage
Form::input($type,$name,$value,$options_array,$label)
###Blade Template

    {{ \Form::open() }}
    {{ \Form::input('text',"username", "",['placeholder'=>"Enter Username"],'Email / Username') }}
    {{ \Form::close() }}

###Output

     <div class="form-group">
     <input placeholder="Enter Username" class="form-control" name="username" type="text" value="" id="username"> 
     </div>

###Disable Bootstrap Form and use Illuminate Html default methods
  \Form::disable_bootstrap();
###Enable Bootstrap form after disabling
  \Form::enable_bootstrap();
  
