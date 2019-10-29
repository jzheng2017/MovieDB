@extends('layout')

@section('content')
    <div class="container">
        <h1> {{ucfirst($items->Info[0]->Type)}}s similar to {{$items->Info[0]->Name}}</h1>

        @foreach($items->Results as $item)
            <div class="col s12 m12">
                <h2 class="header">{{$item->Name}}</h2>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">
                            <p>
                                {{$item->wTeaser}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection