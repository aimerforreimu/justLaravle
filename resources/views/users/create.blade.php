@extends('layouts.default')
@section('title','注册')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h5>注册</h5>
            </div>
            <div class="panel-body">
                @include('shared._errors')
                <form action="{{route('users.store')}}" method="post">
                    <div class="form-group">
                        <label for="name">名称</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="email">邮箱</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="password">密码</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">确认密码</label>
                        <input type="password" name="password_confirmation" class="form-control" value="{{old('password_confirmation')}}">
                    </div>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-success">注册</button>
                    <hr>
                    已经有账号啦？快去<a href="{{ route('login') }}">登录</a>
                </form>
            </div>
        </div>
    </div>
@stop