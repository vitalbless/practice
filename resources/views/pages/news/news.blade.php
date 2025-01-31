@extends('app')

@section('title', 'News')

@section('content')
    @include('pages.news.sections.climate.climate')
    @include('pages.home.sections.blog.blog')
    @include('pages.news.sections.videos.video')
@endsection
