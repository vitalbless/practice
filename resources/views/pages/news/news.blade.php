@extends('app')

@section('title', 'News')

@section('content')
    @include('pages.news.sections.climate.climate')
    @include('pages.home.sections.blog.blog')
@endsection
