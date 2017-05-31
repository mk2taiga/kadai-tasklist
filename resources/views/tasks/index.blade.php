@extends('layouts.app')

@section('content')

    {!! link_to_route('tasks.create', 'タスクを新規作成') !!}

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>
            @endforeach
        </ul>
    @endif

@endsection