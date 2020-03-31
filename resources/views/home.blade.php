@extends('layouts.master')

@section('content')

    <!-- Breadcrumbs -->
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="/" class="breadcrumbs__url">Главная</a>
            </li>

            <li class="breadcrumbs__item breadcrumbs__item--current">
                {{ __('Dashboard') }}
            </li>
        </ul>
    </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                        <div class="col-md-6 mb-30">
                            <h6>Укажите разделы для рассылки новостей</h6>
                            <ul class="checkbox">
                                <li>
                                    <input type="checkbox" class="checkbox-input" name="checkbox" id="checkbox1" value="1" checked="checked">
                                    <label for="checkbox1">Политика</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="checkbox-input" name="checkbox" id="checkbox2" value="2">
                                    <label for="checkbox2">Обжество</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="checkbox-input" name="checkbox" id="checkbox3" value="3">
                                    <label for="checkbox3">Наука</label>
                                </li>
                            </ul>
                        </div>
<br>
                        <div class="col-md-6 mb-30">
                            <aside class="widget widget_mc4wp_form_widget">

                                <p class="newsletter__text">
                                    <i class="ui-email newsletter__icon"></i>
                                    Подписаться на ежедневные новости
                                </p>
                                <form class="mc4wp-form" method="post">
                                    <div class="mc4wp-form-fields">
                                        <div class="form-group">
                                            <input type="email" name="EMAIL" placeholder="Ваш email" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-lg btn-color" value="Подписаться">
                                        </div>
                                    </div>
                                </form>
                            </aside>
                        </div>

                </div>
            </div>
        </div>
    </div>
<br><br>
@endsection
