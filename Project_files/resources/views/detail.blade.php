@extends('master/master')

@section('title',$articles->Title)

@section('content')
    <link rel="stylesheet" href="{{asset('css/detail.css')}}">

    <h2 class="m-5"> {{$articles->Title}} </h2>
    <div class="text-center">
        <img src="{{asset($articles->image)}}" class="round" style="width:40%">
    </div>
    <div class="custom-padding">
        <p>{{ \Carbon\Carbon::parse($articles->releaseDate)->format('d M Y') }} | by: {{ $articles->writer->Name }}</p>
        <h5 class="mb-5" style="font-weight: normal; text-align:justify">{!! $articles->Content !!}</h5>
    </div>
@endsection