<?php

namespace ShadowRaven\LaravelPDFMerger\Providers;

use Illuminate\Support\ServiceProvider;
use ShadowRaven\LaravelPDFMerger\PDFMerger;

class PDFMergerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->singleton('PDFMerger', function ($app) {
          $pdfMerger = new PDFMerger($app['files']);
          return $pdfMerger;
      });
    }
}
