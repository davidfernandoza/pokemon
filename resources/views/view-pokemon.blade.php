@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
		<pokemon :pokemon_id="{{$pokemonId}}"/>
    </div>
</div>
@endsection
