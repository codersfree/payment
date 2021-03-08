<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Invoices extends Component
{

    protected $listeners = ['render'];

    public function render()
    {
        $invoices = auth()->user()->invoices();

        return view('livewire.invoices', compact('invoices'));
    }
}
