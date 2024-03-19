<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Livewire\Attributes\On;
use App\Livewire\CustomersTable;
use App\Livewire\Forms\CustomerForm;

class CustomersEdit extends Component
{
    public CustomerForm $form;

    public $modalCustomerEdit = false;

   #[On('form-edit')] 
    public function set_customer(Customer $id)
    {
        $this->form->setCustomer($id);
        $this->modalCustomerEdit = true;
    }

    public function edit()
    {
        $this->validate();
        $update = $this->form->update();

        is_null($update) ? $this->dispatch('notify', title: 'success', message: 'data berhasil diupdate') : $this->dispatch('notify', title: 'failed', message: 'data gagal diupdate');

        $this->dispatch('dispatch-customer-create-edit')->to(CustomersTable::class);
    }


    public function render()
    {
        return view('livewire.customers-edit');
    }
}
