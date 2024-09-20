
@extends('tamplates.main')

@section('main')

   @include('components/movie',['movie'=>$movie,'categories'=>$categories])

@endsection

