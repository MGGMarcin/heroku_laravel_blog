@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session()->has('message'))
            <div class="d-flex mt-5"></div>
            <div class="my-4">
                <p class="text-gray-50 bg-green-500 rounded-2xl px-8 py-4">
                    {{ session()->get('message') }}
                </p>
            </div>
        @endif
        <div class="w-4/5 m-auto text-center mt-5">
            <div class="py-5 border-b border-gray-200">
                <h1 class="text-6xl">
                    Your Posts
                </h1>
            </div>
        </div>
        <table class="table table-dark table-striped my-5">
            <thead>
                <tr>
                    <th class="px-4" scope="col">Title</th>
                    <th class="px-4" scope="col">Description</th>
                    <th class="px-4" scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="align-middle px-4" scope="row">
                        ---   
                    </th>
                    <td class="align-middle px-4">
                        ---
                    </td>
                    <td class="align-middle px-4 w-1/5">
                        <a href="/blog/create" class="btn btn-primary btn-sm">Add new</a>
                    </td>
                </tr>
                @foreach ($posts as $post)
                    <tr>
                        <th class="align-middle px-4" scope="row">
                            <span class="d-inline-block text-truncate" style="max-width: 150px;">
                                {{ $post->title }}
                            </span>    
                        </th>
                        <td class="align-middle px-4">
                            <span class="d-inline-block text-truncate" style="max-width: 150px;">
                                {{ $post->description }}
                            </span>
                        </td>
                        <td class="align-middle px-4 w-1/5">
                            <a href="/blog/{{ $post->slug }}" class="btn btn-primary btn-sm">View</a>
                            <a href="/blog/{{ $post->slug }}/edit" class="btn btn-primary btn-sm">Edit</a>
                            <a class="btn btn-danger btn-sm">
                                <form action="/blog/{{ $post->slug }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">Delete</button>
                                </form>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
