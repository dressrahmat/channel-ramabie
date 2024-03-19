<div>
    <table class="mt-8 w-full">
        <thead>
            <tr>
                <th class="p-2 whitespace-nowrap border border-spacing-1">#</th>
                <th class="p-2 whitespace-nowrap border border-spacing-1">Action</th>
                <th class="p-2 whitespace-nowrap border border-spacing-1">ID</th>
                <th class="p-2 whitespace-nowrap border border-spacing-1">Name</th>
                <th class="p-2 whitespace-nowrap border border-spacing-1">Email</th>
                <th class="p-2 whitespace-nowrap border border-spacing-1">Address</th>
            </tr>
        </thead>
        <tbody>
            @isset($data)
            @foreach ($data as $customer)
                <tr>
                    <td class="p-2 text-center whitespace-nowrap border border-spacing-1">{{ $loop->iteration }}</td>
                    <td class="p-2 whitespace-nowrap border border-spacing-1"></td>
                    <td class="p-2 text-center whitespace-nowrap border border-spacing-1">{{ $customer->id }}</td>
                    <td class="p-2 whitespace-nowrap border border-spacing-1">{{ $customer->name }}</td>
                    <td class="p-2 whitespace-nowrap border border-spacing-1">{{ $customer->email }}</td>
                    <td class="p-2 whitespace-nowrap border border-spacing-1">{{ $customer->address }}</td>
                </tr>
            @endforeach
            @endisset
        </tbody>
    </table>
</div>
