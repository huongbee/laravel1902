@extends('layout.app')
@section('content')
<div>
    <b>This is content of Home page</b>
    <h3>
        @if($age>=20)
            {{$name}}
        @else 
            Bé hơn 20 tuổi
        @endif
    </h3>
    
    {{$menu}}
</div>
@endsection
@section('title','Home page')
