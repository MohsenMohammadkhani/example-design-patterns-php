<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use src\behaviour\Mediator\EventDispatch\EventDispatcher;
use src\behaviour\Mediator\EventDispatch\Logger;
use src\creational\AbstractFactory\DocumentFactory\DocumentFactory;
use src\creational\AbstractFactory\DocumentFactory\HTMLDocument\HTMLDocumentFactory;
use src\creational\AbstractFactory\FormBuilder\FormUIBuilder;
use src\creational\AbstractFactory\FormBuilder\Providers\Bootstrap\BootstrapFormUIFactory;
use src\creational\factoryMethod\publisher\InstagramPublisherFactory;
use src\creational\factoryMethod\publisher\MessagePublisher;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MessagePublisher::class, InstagramPublisherFactory::class);
        $this->app->bind(FormUIBuilder::class, BootstrapFormUIFactory::class);
        $this->app->bind(DocumentFactory::class, HTMLDocumentFactory::class);

        $eventDispatcher = new EventDispatcher();
        $eventDispatcher->attach('user:deleted', new Logger());
        $this->app->singleton(EventDispatcher::class, $eventDispatcher);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
