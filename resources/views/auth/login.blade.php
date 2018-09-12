@extends('layouts.app')
@section('content')
<div class="my-3 p-3 bg-white rounded shadow-sm">
    <form>
        <div class="form-group">
            <label for="usernameInput">Логин</label>
            <input class="form-control" id="usernameInput" placeholder="Введите логин">
        </div>
        <div class="form-group">
            <label for="passwordInput">Пароль</label>
            <input type="password" class="form-control" id="passwordInput" placeholder="Введите пароль">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="rememberInput">
            <label class="form-check-label" for="rememberInput">Запомнить</label>
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
<div>
@endsection
