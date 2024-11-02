@extends('master/master')

@section('title','Writers')

@section('content')

    <h2 class="m-5">Our Writers: </h2>

    <div class="container">
        <div class="row text-center justify-content-center">
            @foreach ($writer as $index=>$writer)
            <div class="col-md-4">
                <div class="card">
                    <div class="d-flex justify-content-center " style="height: 150px;">
                        <a href="{{route('writer.name.show',$writer->Name)}}">
                            <img src="{{ $writer->image }}" class="card-img-top rounded-circle border" style="width: 150px; height: 150px;">
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $writer->Name }}</h5>
                        <p class="card-text">{{ $writer->specialist }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


@endsection