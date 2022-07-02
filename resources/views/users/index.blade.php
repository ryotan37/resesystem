@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">スタッフ一覧</div>
                    <table width="100%" border="1">
                        <thead>
                        <tr style="background-color: lightgray">
                            <td>ID</td>
                            <td>名前</td>
                            <td>役職</td>
                            <td>施術可能メニュー</td>
                        </tr>
                        </thead>
                        @foreach($users as $user)  {{-- Controllerから渡された users を foreach で回す --}}
                            <tr>
                                <td>{{ $user->user_id }}</td> {{-- 各要素を表示 --}}
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->position->name }}</td>
                                <td>{{ $user-> }}</td>  <!-- 施術可能メニューの一覧を表示 -->
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection