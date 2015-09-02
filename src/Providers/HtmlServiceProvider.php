<?php

namespace ShyamAchuthan\Laravel5Boostrap3Form\Providers;

use ShyamAchuthan\Laravel5Boostrap3Form\Html\FormBuilder as FormBuilder;
use Illuminate\Html\HtmlServiceProvider as IlluminateHtmlServiceProvider;

class HtmlServiceProvider extends IlluminateHtmlServiceProvider {

    /**
     * Register the form builder instance.
     *
     * @return void
     */
    protected function registerFormBuilder()
    {
        $this->app->bindShared('form', function($app)
        {
            $form = new FormBuilder($app['html'], $app['url'], $app['session.store']->getToken());

            return $form->setSessionStore($app['session.store']);
        });
    }

}