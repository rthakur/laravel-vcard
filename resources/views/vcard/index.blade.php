@extends('layouts.default')  
@section('content')
  <div class="app-container">
    <div class="row mb-4">
      <div class="col-md-12 text-right">
          <a href="/vcard/create" class="btn btn-primary">Add Vcard</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Business 1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <div class="card-footer text-right">
                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
              </div>  
            </div>
      </div>
    </div> 
  </div>
  
@endsection
 