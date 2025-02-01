@extends('app')

@section('title', 'Contacts')

@section('content')
    <section class="contacts" aria-labelledby="contacts-title">
        @include('pages.contacts.sections.contacts-header')
        @include('pages.contacts.sections.contacts-body')
    </section>
@endsection
