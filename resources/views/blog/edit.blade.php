@extends('layouts.app')

@section('content')
<div class="container">
    <div class="w-full m-auto py-20">
        @if ($errors->any())
            <div class="w-full m-auto">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="mb-4 text-gray-50 bg-red-700 rounded-2xl px-8 py-4">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Edit post</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            This information will be displayed publicly so be careful what you share.
                        </p>
                    </div>
                </div>
                <div class="md:mt-0 md:col-span-2">
                    <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                                <div>
                                    <label for="title" class="block text-sm font-medium text-gray-700">
                                        Title
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="title" name="title" rows="2"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{ $post->title }}</textarea>
                                    </div>
                                </div>

                                <div>
                                    <label for="description" class="block text-sm font-medium text-gray-700">
                                        Description
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="description" name="description" rows="6"
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{ $post->description }}</textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
