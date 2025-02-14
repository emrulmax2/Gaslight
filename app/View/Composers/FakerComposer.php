<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Fakers\Activities;
use App\Fakers\Departments;
use App\Fakers\Products;
use App\Fakers\Users;

class FakerComposer
{
    /**
     * Bind data to view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view): void
    {

        $view->with('activities', Activities::fakeActivities());
        $view->with('departments', Departments::fakeDepartments());
        $view->with('products', Products::fakeProducts());
        $view->with('users', Users::fakeUsers());
    }
}
