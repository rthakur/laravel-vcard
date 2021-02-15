<h1 class="text-center bg-dark text-white">About</h1>

@if( Session::has('notification_warning') )
  <div class="alert alert-warning" role="alert">
    {{ Session::get ('notification_warning')  }}
  </div>
@endif

<form action="/vcard/about/store" method="post">
  @csrf
  <input type="hidden" name="id" value="{{ $vcard? $vcard->id : ''}}">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>company Name</label>
      <input type="text" name="about_compnay_name" value="{{ $vcard? $vcard->about_compnay_name : '' }}" class="form-control" placeholder="Enter Company Name" >
      @if($errors->has('about_compnay_name')){{$errors->first('about_compnay_name')}} @endif
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="about_email" value="{{ $vcard? $vcard->about_email : '' }}" class="form-control" id="inputEmail4" placeholder="Email" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="about_address" value="{{ $vcard? $vcard->about_address : '' }}"  class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-row">
    <div class="form-group col-md-5">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" value="{{ $vcard? $vcard->about_city : '' }}" name="about_city" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" name="about_state" class="form-control">
        <option selected>Choose...</option>
        <option>..</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">Zip</label>
      <input type="text" name="about_zip" value="{{ $vcard? $vcard->about_zip : '' }}" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary btn-sm" name="button">{{ $vcard? 'Update' : 'Save'}} and next</button>
  </div>
</form>
