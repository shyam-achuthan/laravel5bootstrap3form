<?php

namespace ShyamAchuthan\Laravel5Bootstrap3Form\Providers;

use ShyamAchuthan\Laravel5Bootstrap3Form\Html\FormBuilder as FormBuilder;
use Collective\Html\HtmlServiceProvider as IlluminateHtmlServiceProvider;

class HtmlServiceProvider extends IlluminateHtmlServiceProvider {

    /**
     * Register the form builder instance.
     *
     * @return void
     */
    protected function registerFormBuilder()
    {
        $this->app->singleton('form', function($app)
        {
            $form = new FormBuilder($app['html'], $app['url'], $app['view'],$app['session.store']->getToken());

            return $form->setSessionStore($app['session.store']);
        });
    }

}
