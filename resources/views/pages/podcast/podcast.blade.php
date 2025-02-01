@extends('app')

@section('title', 'Podcast')

@section('content')
    @include('pages.podcast.sections.podcasts-title')
    @include('pages.podcast.sections.podcasts-videos')
@endsection
