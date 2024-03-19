<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Livewire\Attributes\On;

class CustomersTable extends Component
{
    #[On('dispatch-customer-create-save')]
    public function render()
    {
        $data = Customer::get();
        return view('livewire.customers-table', compact('data'));
    }
}
