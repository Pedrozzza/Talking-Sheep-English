<?php namespace App\Providers;

use View;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    public function boot()
    {
        View::composer('inc.navbar', function($view){

            if(Auth()->user()) {

                $user = Auth()->user()->id;
        
                $messages = Message::where('user_id', $user)->orderBy('created_at', 'DESC')->get();
                
                $messages_count = count($messages);
    
                $view->with('count', $messages_count);
            }
            
        });    
    }


    public function register()
    {
        //
    }
}