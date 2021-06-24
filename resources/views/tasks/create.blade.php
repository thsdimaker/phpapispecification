@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
	<div class="px-64">
		<h1 class="font-bold text-3xl">글 작성</h1>
		<form action="/tasks" method="POST">
			@csrf
			<label class="block" for="title">제목</label>
			<input class="border border-gray-800 w-full @error('title') border border-red-700 @enderror" type="text" name="title" id="title" required value="{{ old('title') ? old('title') : '' }}"><br>
			@error('title')
				<small class="text-red-700">{{ $message }}</small>
			@enderror

			<label class="block" for="body">내용</label>
			<textarea class="border border-gray-800 w-full @error('body') border border-red-700 @enderror" name="body" id="body" cols="30" rows="10" required>{{ old('body') ? old('body') : '' }}</textarea><br>
			@error('body')
				<small class="text-red-700">{{ $message }}</small>
			@enderror

			<button class="bg-blue-600 text-white px-4 py-2 float-right">제출</button>
		</form>
	</div>
@endsection
