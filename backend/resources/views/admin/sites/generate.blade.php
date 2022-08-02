@extends('layouts.master-site')
@section('css')
    {!!html_entity_decode($newConfig['style'])!!}
@endsection

@section('html')
    {!!html_entity_decode($newConfig['html'])!!}
@endsection

@section('js_handle')
    {!!html_entity_decode($newConfig['js_handle'])!!}
@endsection
