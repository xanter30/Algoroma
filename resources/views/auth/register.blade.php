@section('content')
<div>
    <form>
        <div class="form-group">
            <label for="usernameInput">Логин</label>
            <input class="form-control" id="usernameInput" placeholder="Введите логин">
        </div>
        <div class="form-group">
            <label for="passwordInput">Пароль</label>
            <input type="password" class="form-control" id="passwordInput" placeholder="Введите пароль">
        </div>
        <div class="form-group">
            <label for="passwordRepeatInput">Повторите пароль</label>
            <input type="password" class="form-control" id="passwordRepeatInput" placeholder="Повторите пароль">
        </div>
        <button type="submit" class="btn btn-primary">Регистрация</button>
    </form>
<div>
@endsection
