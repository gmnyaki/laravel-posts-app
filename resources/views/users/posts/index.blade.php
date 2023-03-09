@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <div>
                <h1 class="text-lg font-medium mb-5"> {{$user->name }} posts </h1>
            	@if ($posts->count())
            		@foreach ($posts as $post )
            			<div class="mb-4">
            				<div class="mb-2"> {{ $post->body}} </div>
                            <div class="float-right">
                                <span>By</span> 
                                <span class="font-bold">{{ $post->user->name}}</span>
                                <span class="text-gray-600 text-sm"> {{ $post-> created_at->diffForHumans()}} </span>
                            </div>
        					@can('delete', $post)
            					<form action="{{ route('post.delete', $post->id) }}" method="post">
            						@csrf
            						@method('DELETE')
            						<button type="submit" class="text-blue-500"> Delete </button>
            					</form>
        					@endcan
            			</div>
            		@endforeach
            		  {{ $posts->links() }}
            	@else
            		<p> There are no posts at the moment. Please check back later. </p>
            	@endif
            </div>
        </div>
    </div>
@endsection