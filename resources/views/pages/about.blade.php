@extends('layouts.app')

@section('title')
About - {{ $settings['general']->site_title }}  
@endsection

@section('description')
Billys Burgers have been around since the beginning of time.
@endsection

@section('content')
    <div id="about-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>About Page</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Minus iusto maiores saepe deleniti vel ullam odit voluptatem
                        iure laboriosam porro ipsum hic delectus, quaerat at, corrupti
                        suscipit asperiores sit quod.
                    </p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Minus iusto maiores saepe deleniti vel ullam odit voluptatem
                        iure laboriosam porro ipsum hic delectus, quaerat at, corrupti
                        suscipit asperiores sit quod.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="/img/top-down.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection
