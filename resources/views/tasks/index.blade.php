@extends('layout.main')

@section('content')
    <div class="container">
        <a href="/create">ADD TASKS</a>

        <table border="1">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                            <a href="/edit/{{ $task->id }}">EDIT</a>
                            <a href="/destroy/{{ $task->id }}" onclick="return confirm('u sure wanna delete this record?')">DELETE</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection