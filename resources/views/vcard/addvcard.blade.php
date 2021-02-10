@extends('layouts.default')  
@section('content')
  <div class="app-container">
    <h3 class="text-center"> Setup Vcard </h3>
    <hr>
    <div class="row">
      <div class="col-md-3">
        <ul class="list-group">
          <li class="list-group-item"> <a href="/vcard/create">About</a> </li>
          <li class="list-group-item"> <a href="/vcard/create/service">Service</a> </li>
          <li class="list-group-item"> <a href="/vcard/create/gallery">Gallery</a> </li>
        </ul>
      </div>
      <div class="col-md-9">
            @if($section == 'service')
                @include('vcard.service')
            @elseif($section == 'gallery')
                @include('vcard.gallery')
            @else
                @include('vcard.about')
            @endif
      </div>
    </div>
  </div>
 @endsection