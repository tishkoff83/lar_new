@extends('layouts.master')

@section('content')

    <!-- Breadcrumbs -->
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="{{route('index')}}" class="breadcrumbs__url">Главная</a>
            </li>

            <li class="breadcrumbs__item breadcrumbs__item--current">
                {{ $obj->name }}
            </li>
        </ul>
    </div>

    <div class="main-container container" id="main-container">
        <!-- post content -->
        <div class="blog__content mb-72">
            <h1 class="page-title">{{ $obj->name }}</h1>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="entry__article">
                        <p>{{ $obj->body }}</p>


                    </div>
                </div>
            </div>
        </div> <!-- end post content -->


@endsection
