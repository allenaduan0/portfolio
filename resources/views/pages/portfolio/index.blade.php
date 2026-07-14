@extends('layouts.app')

@section('content')
    @include('pages.portfolio.sections.hero')
    @include('pages.portfolio.sections.marquee')
    @include('pages.portfolio.sections.about')
    @include('pages.portfolio.sections.story')
    @include('pages.portfolio.sections.expertise')
    @include('pages.portfolio.sections.projects')
    @include('pages.portfolio.sections.experience')
    @include('pages.portfolio.sections.education')
    @include('pages.portfolio.sections.quick-answers')
    @include('pages.portfolio.sections.contact')
@endsection
