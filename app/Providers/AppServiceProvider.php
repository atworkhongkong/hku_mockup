<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $notifications = [
            8 => ['from' => '同事A', 'message' => '有新的轉介個案', 'create_date' => '2021-03-23', 'read' => false],
            7 => ['from' => '同事B', 'message' => '個案已結束', 'create_date' => '2021-03-21', 'read' => false],
            6 => ['from' => '同事D', 'message' => '個案已結束', 'create_date' => '2021-03-21', 'read' => false],
            5 => ['from' => '同事D', 'message' => '有新的轉介個案', 'create_date' => '2021-03-16', 'read' => true],
            4 => ['from' => '同事A', 'message' => '有新的轉介個案', 'create_date' => '2021-03-15', 'read' => true],
            3 => ['from' => '同事B', 'message' => '個案已結束', 'create_date' => '2021-03-12', 'read' => true],
            2 => ['from' => '同事C', 'message' => '有新的轉介個案', 'create_date' => '2021-03-10', 'read' => true],
            1 => ['from' => '同事A', 'message' => '個案已結束', 'create_date' => '2021-03-10', 'read' => true],
        ];
        view()->share('notifications', $notifications);
    }
}
