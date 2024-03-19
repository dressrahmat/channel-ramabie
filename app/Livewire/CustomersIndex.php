<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\View\View;
use Livewire\Attributes\Title;

class CustomersIndex extends Component
{
    #[Title('Customers')]
    public function render() : View
    {
        return view('livewire.customers-index');
    }
}
