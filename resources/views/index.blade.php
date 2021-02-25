@extends('layout')

@section('content')
    @if ($errors->any())
        <div class='mx-4 mt-4'>
            <h3>入力に誤りがあります</h3>
            <ul>
                @foreach ($errors->all() as $error)
                    <li class='list-group-item-danger'>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @isset($bulletins)
        @foreach($bulletins as $bulletin)
        <div class='mx-4'>
            <p class='mb-0'>FROM:{{ $bulletin->name }}</p>
            <p class='mb-0'>{{ $bulletin->text }}</p>
            <hr>
        </div>
        @endforeach
    @endisset


    <form action="/" method='POST'>
        <div class="form-group mb-3 mx-4">
            <label for="name" class="form-label">Your name</label>
            <input type="text" class="form-control" id="name" name='name' placeholder="Who are you">
        </div>
        <div class="form-group mx-4">
            <label for="text" class="form-label">text</label>
            <textarea class="form-control" id="text" name='text' rows="3"></textarea>
        </div>   
        {{ csrf_field() }}
        <div class='mx-4 my-1'>
            <input class="btn btn-outline-dark" type="submit" value="投稿">
        </div>

    </form>

    
@endsection('content')
