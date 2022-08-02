@extends('layouts.master-site')
@section('css')
    {!!html_entity_decode($config['style'])!!}
@endsection

@section('html')
    {!!html_entity_decode($config['html'])!!}
@endsection

@section('js_handle')
    {!!html_entity_decode($config['js_handle'])!!}
@endsection
