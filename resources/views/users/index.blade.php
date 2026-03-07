<x-layout>
    <x-slot name="heading">User List</x-slot>


<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ data_get($user, 'id') }}</td>
                <td>{{ data_get($user, 'name') }}</td>
                <td>{{ data_get($user, 'gender') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</x-layout>