@extends('master/master')

@section('title',$categoryName)

@section('content')
    <h2 class="m-5"> {{$categoryName}} </h2>
    
    <div class="card mb-0">
        <div class="row">
            @foreach ($articles as $index=>$articles)
                <div class="col-4 mb-5">
                    <img src="{{asset($articles->image)}}" class="round" style="width:100%">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h3 class="card-title">{{ $articles->Title }}</h3>
                        <p>{{ \Carbon\Carbon::parse($articles->releaseDate)->format('d M Y') }} | by: {{ explode(' ',$articles->writer->Name)[0] }}</p>
                        <h5 class="card-text">{{ $articles->Description }}</h5>
                        <div class="text-end">
                            <a href="{{route('detail.show', $articles->Title)}}">
                                <button class="btn btn-outline-primary rounded-pill px-5 mt-3">Read more...</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach  
        </div>    
    </div>

@endsection