<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->

    @php
        $products = [
            (object) ['id' => 1, 'name' => 'Laptop', 'category' => 'Electronics'],
            (object) ['id' => 2, 'name' => 'Chair', 'category' => 'Furniture'],
            (object) ['id' => 3, 'name' => 'Book', 'category' => 'Education'],
        ];
    @endphp

    <h2>Products List</h2>

    <table border="1" cellpadding="8" cellspacing="0">
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
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<h1> Tasks</h1>
<ul>
    @foreach ($tasks as $task)
     <li>{{ $task}}</li>

    @endforeach
</ul>

<p>Global Variables:</p>
<p>{{ $sharedVariable }}</p>

<p>Product Key: {{ $productKey ?? 'N/A' }}</p>