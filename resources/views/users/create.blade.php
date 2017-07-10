@extends('layouts/app');


@section('content')

    <h1>회원가입</h1>
    <h2>이용약관</h2>
    <h3>이이이이이이이이ㅣ</h3>
    <hr/>

    <form action="{{route('users.store')}}" method="POST" class="form__auth" >
        {!! csrf_field() !!}

        <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}" >
            <input type="text" name="name" class="form-control" placeholder="성명" value="{{old('name')}}" autofocus/>
            {!!  $errors->first('name', '<span class="form-error">:message</span>') !!}
        </div>
        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}" >
            <input type="text" name="email" class="form-control" placeholder="이메일" value="{{old('email')}}" autofocus/>
            {!!  $errors->first('email', '<span class="form-error">:message</span>') !!}
        </div>
        <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}" >
            <input type="password" name="password" class="form-control" placeholder="비밀번호" value="" autofocus/>
            {!!  $errors->first('name', '<span class="form-error">:message</span>') !!}
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-lg btn-block" type="submit">가입하기</button>
        </div>
    </form>

    @stop
