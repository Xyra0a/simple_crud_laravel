@extends('layout.main')

@section('content')
    <div class="container">
        <h1>THIS IS EDIT FORM</h1>
        <a href="/">BACK</a>
        <form action="/update/{{ $tasks->id }}" method="post">
            @csrf
            <div class="input_container">
                <label for="">TITLE</label>
                <input type="text" name="title" maxlength="20" value="{{ $tasks->title }}">
            </div>

            <div class="input_container">
                <label for="">DESCRIPTION</label>
                <textarea name="description" id="" cols="30" rows="10">{{ $tasks->description }}</textarea>
            </div>

            <button type="submit">SUBMIT</button>
        </form>
    </div>
@endsection