<?php

namespace App\Livewire\Select2;

use Livewire\Component;
use App\Models\Customer;

class Select2Index extends Component
{
    public $city = 'CF';
    public $customer = 15;
    public function render()
    {
        $customers = Customer::get();
        return view('livewire.select2.select2-index', compact('customers'));
    }
}
