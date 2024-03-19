<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class CustomersIndex extends Component
{
    #[Title('Customers')]
    public function render(): View
    {
        return view('livewire.customers-index');
    }
}
