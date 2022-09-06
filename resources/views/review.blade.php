@section('header')
Отзывы
@endsection

@section('main_content')
<h1>Отзывы</h1>

@if($errors->any())
<div class="alert alert-danger bg-danger text-white container">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="/review/check" method="post" class="container">
    @csrf
<input type="email" name="email" id="email" placeholder="Введите адрес своей электронной почты" class="form-control mb-3">
<input type="text" name="subject" id="subject" placeholder="Введите тему сообщения" class="form-control mb-3">
<textarea name="message" id="message" placeholder="Введите ваше сообщение" class="form-control mb-4"></textarea>
<button type="submit" class="btn bg-warning text-white">Отправить</button>
</form>

<h1>Все отзывы</h1>
@foreach($reviews as $el)
    <div class="alert alert-warning text-dark container">
        <h3 style="overflow: hidden;">{{ $el->subject }}</h3>
        <p style="overflow: hidden;">{{ $el->email }}</p>
        <p style="overflow: hidden;">{{ $el->message }}</p>
    </div>
@endforeach
    
@endsection

@extends('shab')