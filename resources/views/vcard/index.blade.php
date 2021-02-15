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
                <a href="/vcard/{{ $vcard->id }}/edit" class="btn btn-primary btn-sm edit-vcard">Edit</a>
                <a href="/vcard/{{ $vcard->id }}/delete" class="btn btn-danger btn-sm delete-vcard">Delete</a>
              </div>
            </div>
      </div>
    </div>
   @endforeach
   {{ $vcards->links() }}
  </div>
@endsection
@push('scripts')
<script>
        $('.delete-vcard').click(function(event) {
          event.preventDefault();
          const url = $(this).attr('href');

          swal({
           title: 'Are you sure you want to delete ?',
           text: "If you delete this, it will be gone forever.",
           icon: "warning",
           buttons: true,
           dangerMode: true,
          })
          .then(function(value) {
              if (value) {
                window.location.href = url;
                swal("Poof! Your vCard has been deleted!", {
                  icon: "success",});
              } else {
                swal("Your Vcard is safe!");
              }
          });
        });
</script>
@endpush
