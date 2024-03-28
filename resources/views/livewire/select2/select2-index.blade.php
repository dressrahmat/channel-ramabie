<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Select2') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">

                <h3 class="text-3xl font-bold">Livewire 3 With Select2</h3>
                
                <div class="mt-5" wire:ignore>
                    <label for="city">City</label>
                    <select 
                    x-init="$($el).select2({
                        placeholder: 'select an option',
                    });
                    $($el).on('change', function(){
                        $wire.set('city', $($el).val())
                    });
                    $($el).val($($el).val())
                    $($el).trigger('change')
                    "
                    wire:model.live="city" id="city" class="select2">
                        <option></option>
                        <option value="AL">Alabama</option>
                        <option value="CF">California</option>
                        <option value="TB">Tuban</option>
                    </select>
                </div>
                
                <div class="mt-5" wire:ignore>
                    <label for="customer">Customer</label>
                    <select 
                    x-init="$($el).select2({
                        placeholder: 'select an option',
                    });
                    $($el).on('change', function(){
                        $wire.set('customer', $($el).val())
                    });
                    $($el).val($($el).val())
                    $($el).trigger('change')
                    "
                    wire:model.live="customer" id="customer" class="select2">
                        <option></option>
                        @foreach ($customers as $cs)
                        <option value="{{$cs->id}}">{{$cs->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <br>
            <p>City : {{$city}}</p> 
            <p>Customer : {{$customer}}</p>
        </div>
    </div>
</div>