@extends('layouts.default')  
@section('content')
  <div class="app-container">
    <div class="row mb-4">
      <div class="col-md-12 text-right">
          <a href="/vcard/create" class="btn btn-primary">Add Vcard</a>
      </div>
    </div>
    
    @foreach($vcards as $vcard)
    <div class="row">
      <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{ $vcard->about_compnay_name }}</h5>
              </div>
              <div class="card-footer text-right">
                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
              </div>  
            </div>
      </div>
    </div>
   @endforeach
   
    
  </div>
  
@endsection
 