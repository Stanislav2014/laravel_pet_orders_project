<?php

namespace App\Providers;

use App\Repositories\OrganizationRepository;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class LoadServiceProvider extends ServiceProvider
{
    public function boot()
    {
        app()->singleton('organization', function (){
//            return (new OrganizationRepository())->loadOrganizationByHost();
        });
    }
}
