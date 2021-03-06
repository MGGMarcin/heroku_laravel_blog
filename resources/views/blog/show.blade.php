@extends('layouts.app')

@section('content')
    <div class="d-flex mt-5"></div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-4 border-b border-gray-200">
        <div class="d-grid d-md-block">
            <a href="/blog" class="btn btn-primary">Go back</a>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">

        <div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $post->title }}
            </h2>
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">
                    {{ $post->user->name }}
                </span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>
            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->description }}
            </p>
        </div>
        
    </div>

@endsection