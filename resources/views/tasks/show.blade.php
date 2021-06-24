@extends('layouts.app')

@section('title', 'Task detail')

@section('content')
	<div class="px-64 mt-4">
		<div class="flex">
			<h1 class="font-bold text-3xl flex-1">상세 글 목록</h1>
			<div class="flex-initial">
				<a href="/tasks/{{ $task->id }}/edit">
					<button class="bg-green-500 text-white hover:bg-green-600 px-4 py-1">수정</button>
				</a>
				<form method="POST" action="/tasks/{{ $task->id }}" class="float-right ml-2">
					@method('DELETE')
					@csrf
					<button class="bg-red-500 text-white hover:bg-red-600 px-4 py-1">삭제</button>
				</form>
			</div>
		</div>

		제목: {{ $task->title }} <small class="float-right">게시날짜 : {{ $task->created_at }}</small> <br>
		<small class="float-right">수정날짜 : {{ $task->updated_at }}</small>
		<br>
		본문 <div class="border p-3">{{ $task->body }}</div>
	</div>
@endsection
