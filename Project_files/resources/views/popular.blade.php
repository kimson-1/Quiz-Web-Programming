@extends('master/master')

@section('title','Popular')

@section('content')

    <h1 class="m-5 pt-5">Popular</h1>
    
    <div class="card mb-0">
        <div class="row">
            @foreach ($articles as $index=>$article)
                <div class="col-4 mb-5">
                    <img src="{{asset($article->image)}}" class="round" style="width:100%">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h3 class="card-title">{{ $article->Title }}</h3>
                        <p>{{ \Carbon\Carbon::parse($article->releaseDate)->format('d M Y') }} | by: {{ explode(' ',$article->writer->Name)[0] }}</p>
                        <h5 class="card-text">{{ $article->Description }}</h5>
                        <div class="text-end">
                            <a href="{{route('detail.show', $article->Title)}}">
                                <button class="btn btn-outline-primary rounded-pill px-5 mt-3">Read more...</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach  
            {{$articles->links()}}
        </div>    
    </div>