<x-layout>
    <x-slot name="heading">Product List</x-slot>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
            </tr>
        </thead>

        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['category'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>