@extends('layout.index')

@section('content')
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
        </tr>
        @foreach ($femaleMembres as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->age }}</td>
                <td>{{ $item->gender }}</td>
                <td>
                    <form action="/{{ $item->id }}/delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
