@extends('master/master')

@section('title', 'Dashboard')

@section('content')
    <div class="col-12 pt-2">
        <img src="{{asset('assets/frontImage.jpg')}}" class="img-fluid" style="width: 100%; ">
    </div>

    <div class="card mb-0">
        <div class="row">
            @foreach ($articles->take(2) as $index=>$articles)
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
                                <button class="btn btn-outline-primary rounded-pill px-5 my-5">Read more...</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach  
        </div>    
    </div>

@endsection