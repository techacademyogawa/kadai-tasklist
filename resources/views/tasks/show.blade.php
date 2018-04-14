@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>
    
    <table class="table kadai-tasklist">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
    
     <p>{!! link_to_route('tasks.edit', 'このタスク編集', ['id' => $task->id], ['class' => 'btn btn-default']) !!}</p>
      
    　{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        　{!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
   　  {!! Form::close() !!}

@endsection