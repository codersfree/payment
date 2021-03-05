<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Subscriptions extends Component
{

    protected $listeners = ['render'];

    public function render()
    {
        return view('livewire.subscriptions');
    }

    public function newSubscription($name, $price){

        auth()->user()->newSubscription($name, $price)->create();

    }

    public function changingPlans($name, $price){
        auth()->user()->subscription($name)->swap($price);
    }

    public function cancellingSubscription($name){
        auth()->user()->subscription($name)->cancel();
    }

    public function resuminSubscription($name){
        auth()->user()->subscription($name)->resume();
    }

}
