@extends('layouts.master')

@section('content')

    <!-- Breadcrumbs -->
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="{{route('index')}}" class="breadcrumbs__url">Главная</a>
            </li>

            <li class="breadcrumbs__item breadcrumbs__item--current">
                О проекте
            </li>
        </ul>
    </div>

    <div class="main-container container" id="main-container">
        <!-- post content -->
        <div class="blog__content mb-72">
            <h1 class="page-title">About</h1>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="entry__article">
                        <p>iPrice Group report offers insights on daily e-commerce activity in the Philippines and Southeast. Statistically, you stand a better chance for success if you have some sort of strategic ask in almost everything that you do -- in-person, on the phone, over email, or on social media.</p>

                         <blockquote><p>“Dreams and dedication are powerful combination.”</p></blockquote>

                        <p>This strategy uses the Ben Franklin Effect: When people do you a favor, they are more likely to do another. When you meet someone you yourself might be able to assist, ask for their help and, at the same time (e.g. in the same conversation) offer yours. And make a point to be of service even if others might not be able to help you immediately.</p>


                    </div>
                </div>
            </div>
        </div> <!-- end post content -->

@endsection
