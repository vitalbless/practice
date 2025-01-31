@extends('app')

@section('title', 'Home')

@section('content')
    @include('pages.home.sections.hero.hero')
    @include('pages.home.sections.future-tech.future-tech')
    @include('pages.home.sections.blog.blog')
    @include('pages.home.sections.resources.resources')
    @include('pages.home.sections.reviews.reviews')
@endsection
