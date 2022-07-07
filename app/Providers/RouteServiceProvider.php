<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends \Illuminate\Foundation\Support\Providers\RouteServiceProvider
{
    protected $namespace = '';
    protected $basePath = __DIR__ . '/../../';


    public function boot()
    {
        parent::boot();
        $this->namespace = sprintf('%s\App\Http\Controllers', env('ROOT_NAMESPACE', 'Unchained'));
    }

    public function map()
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
        $this->mapChannelRoutes();
        $this->mapConsoleRoutes();
    }

    protected function mapWebRoutes()
    {
        Route::middleware('web')->namespace($this->namespace)->group($this->basePath . 'routes/web.php');
    }

    protected function mapApiRoutes()
    {
        Route::prefix('api')->middleware('api')->namespace($this->namespace)->group($this->basePath . 'routes/api.php');
    }

    protected function mapChannelRoutes()
    {
        Route::prefix('admin')->namespace($this->namespace)->group($this->basePath . 'routes/channels.php');
    }

    protected function mapConsoleRoutes()
    {
        Route::prefix('manager')->namespace($this->namespace)->group($this->basePath . 'routes/console.php');
    }
}
