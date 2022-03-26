@extends('layouts.index')

@section('title', $metaTitle)
@section('keywords', $metaKeywords)
@section('description', $metaDescription)

@section('content')
    <p>{!! $title !!}</p>
    <p>{!! $description !!}</p>
    <p>
        <a href="/contact">{!! $link !!}</a>
    </p>
@stop
