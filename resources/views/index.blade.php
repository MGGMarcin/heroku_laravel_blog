@extends('layouts.app')

@section('content')

    <div class="d-flex text-center text-white bg-dark" style="height:100vh">
        <div class="cover-container d-flex mx-auto align-items-center">
            <div class="px-3">
                <h1>Just something here.</h1>
                <p class="lead">Cover is a one-page template for building simple and beautiful home pages.
                    Download, edit
                    the text, and add your own fullscreen background photo to make it your own.</p>
                <p class="lead">
                    <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white text-dark">Learn more</a>
                </p>
            </div>
        </div>
    </div>
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 mb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <p class="lead">
                    <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white text-dark">Learn more</a>
                </p>
            </div>
        </div>
    </div>

    

    <div class="py-15 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-blue-500 font-semibold tracking-wide uppercase">Something</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    A better way to learn
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in
                    accusamus quisquam.
                </p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                                <!-- Heroicon name: outline/globe-alt -->
                                <svg class="h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Competitive exchange rates</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit
                            eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                                <!-- Heroicon name: outline/scale -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">No hidden fees</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit
                            eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                                <!-- Heroicon name: outline/lightning-bolt -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Transfers are instant</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit
                            eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                                <!-- Heroicon name: outline/annotation -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Mobile notifications</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit
                            eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in...
        </h2>
        <span class="text-4xl font-extrabold block py-1">
            Ux Design
        </span>
        <span class="text-4xl font-extrabold block py-1">
            Project Management
        </span>
        <span class="text-4xl font-extrabold block py-1">
            Digital Strategy
        </span>
        <span class="text-4xl font-extrabold block py-1">
            Backend Development
        </span>
    </div>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Recent posts</h1>
                <p class="lead text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad libero nemo, quis blanditiis hic incidunt consequatur explicabo, et natus eum repellendus pariatur dolores assumenda facere enim in placeat doloribus sed.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 justify-content-center">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://cdn.pixabay.com/photo/2013/09/23/03/05/high-tech-185146_960_720.jpg" class="card-img-top" style="height:250px" alt="">
                        {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg> --}}

                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-primary my-2">View</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://cdn.pixabay.com/photo/2021/08/22/08/20/industry-6564530_960_720.jpg" class="card-img-top" style="height:250px" alt="">

                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-primary my-2">View</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://cdn.pixabay.com/photo/2017/08/06/05/44/people-2589186_960_720.jpg" class="card-img-top" style="height:250px" alt="">

                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-primary my-2">View</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
