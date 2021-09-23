@extends('layouts.home')

@section('title', 'Sub Page Title')

@section('sidebar')

    <div style="background-color:olive;height: 160px;" class="col-md-4">
        <ul>
            <li>Bilgisayar</li>
            <li>Elektronik</li>
            <li>Ev eşyası</li>

        </ul>
    </div>

@endsection

@section('slider')
    <div style="background-color:lightgreen;height: 160px;" class="col-md-8">
        <h1>Slider</h1>
        asdasdasdasd
    </div>
@endsection


@section('content')
    <div style="background-color: lightsalmon;height: 150px;text-align: center">
        <h1>İçerik Alanı</h1>
        ürünler
        <br>
        ürün A
    </div>
@endsection
