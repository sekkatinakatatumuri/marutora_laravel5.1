@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-offset-3 col-sm-6 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">ログイン</div>
            <div class="panel-body">
                {!! Form::open(['route' => 'login.post']) !!}
                    <div class="form-group">
                        {!! form::label('email', 'メールアドレス') !!}
                        {!! form::email('email', old('email'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! form::label('password', 'パスワード') !!}
                        {!! form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <div class="text-right">
                        <a href="{{ route('signup.get') }}" class="btn btn-info text-left">登録がお済でない方</a>
                        {!! form::submit('ログイン', ['class' => 'btn btn-success']) !!}
                    </div>
                {!! form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection