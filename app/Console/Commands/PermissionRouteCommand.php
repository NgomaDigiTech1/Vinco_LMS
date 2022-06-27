<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class PermissionRouteCommand extends Command
{
    protected $signature = 'permission:create-permission-routes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a permission routes.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return void
     */
    public function handle(): void
    {
        $routes = Route::getRoutes()->getRoutes();

        foreach ($routes as $route) {
            if ($route->getName() != '' && $route->getAction()['middleware']['0'] == 'web') {
                $permission = Permission::where('name', $route->getName())->first();
                if (is_null($permission)) {
                    permission::create(['name' => $route->getName()]);
                }
            }
        }
        $this->info('Permission routes added successfully.');
    }
}
