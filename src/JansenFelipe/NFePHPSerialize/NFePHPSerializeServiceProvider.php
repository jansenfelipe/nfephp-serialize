<?php

namespace JansenFelipe\NFePHPSerialize;

use Illuminate\Support\ServiceProvider;

class NFePHPSerializeServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {
        $this->package('JansenFelipe/nfephp-serialize');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton('nfephp_serialize', function() {
            return new \JansenFelipe\NFePHPSerialize\NFePHPSerialize;
        });
    }

}
