@extends('layouts.app')

@section('content')

<div class="container-xxl">
  @include('partials.index-top-banner')
  @include('partials.index-top-mini-gallery')
  @include('partials.index-top-promo-cards')
  @include('partials.index-about-brand')
</div>
@endsection
