@extends('layout')

@section('content')
    <div class="container">
        <h1>Movie database</h1>
        <div class="row">
            <form class="col s12 card" method="get" action="{{route("result.show")}}">
                <div class="row card-content">
                    <div class="card-title">Search for a title</div>
                    <div class="col s12 m10 input-field">
                        <input type="text" name="query" id="query" class="validate" required>
                        @if($errors->has('query'))
                            {{$errors->first('query')}}
                        @endif
                    </div>
                    <div class="col s12 m2 input-field">
                        <button class="btn blue accent-3" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection