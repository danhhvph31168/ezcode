@extends('layouts.master')
@section('content')
    @include('layouts.banner')
    <main>
        <section class="popular-places" id="popular">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span>Popular Places</span>
                            <h2>Integer sapien odio</h2>
                        </div>
                    </div>
                </div>
                <div class="row" style="width: 90%;margin: auto">
                    @foreach ($courses as $item)
                        <div class="col-md-4 mt-5" style="margin-bottom: 30px">
                            <div class="card">
                                <img class="card-img-top" src="{{ $item['c_thumbnail'] }}" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $item['c_name'] }}</h4>
                                    <p class="card-text">{{ $item['c_price'] }} $</p>
                                    <a href="/courses/{{ $item['id'] }}" class="btn btn-primary">Xem chi tiet</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
