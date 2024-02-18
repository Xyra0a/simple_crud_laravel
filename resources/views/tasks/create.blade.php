@extends('layout.main')

@section('content')
    <div class="container">
        <h1>THIS IS CREATE FORM</h1>
        <a href="/">BACK</a>
        <form action="/store" method="post">
            @csrf
            <div class="input_container">
                <label for="">TITLE</label>
                <input type="text" name="title" maxlength="20">
            </div>

            <div class="input_container">
                <label for="">DESCRIPTION</label>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </div>

            <button type="submit">SUBMIT</button>
        </form>
    </div>
@endsection