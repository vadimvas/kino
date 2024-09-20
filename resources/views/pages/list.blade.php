@extends('tamplates.main')

@section('main')
    @include('components/list',['movies'=>$movies,'categories'=>$categories])
@endsection