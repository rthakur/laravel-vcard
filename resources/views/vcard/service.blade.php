<h2 class="text-center bg-dark text-white">Manage Service</h2>
<div class="text-right">
  <a href="#" class="btn btn-success btn-sm mb-4 add-service">Add service</a>
</div>
<table class="table text-center">
   <thead>
     <tr>
       <th>product name</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     @foreach($vcard->service as $service)
     <tr>
       <td>{{ $service->title }}</td>
       <td>
         <a href="#" data-service="{{ $service }}" class="btn btn-primary edit-service"> Edit </a>
         <a href="/service/delete/{{$service->id}}" class="btn btn-danger delete-service"> Delete </a>
       </td>
     </tr>
     @endforeach
   </tbody>
 </table>
 <div class="form-group text-right">
   <a href="/vcard/create/gallery/{{$vcard?$vcard->id:''}}" class="btn btn-primary btn-sm">Save and next </a>
 </div>

<!-- Modal -->
<form action="/vcard/create/service/{{ $vcard->id }}/store" method="post">
<div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="serviceModalTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          @csrf
            <input type="hidden" id="serviceId" name="id" value="">
            <div class="form-group">
              <label for="formGroupExampleInput">Service Title</label>
              <input type="text" name="title" id="serviceTitle" class="form-control" placeholder="Eg: food shop">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary submit-ajax-form">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
@push('scripts')
<script type="text/javascript">

    $('.add-service').click(function(){
      $('#serviceModal').modal('show');
      $('#serviceModalTitle').text('Add Service');
      $('#serviceId').val('');
      $('#serviceSaveButton').text('Save service');
    });

    $('.edit-service').click(function(){
      var service = $(this).data('service');
      $('#serviceId').val(service.id);
      $('#serviceTitle').val(service.title);
      $('#serviceSaveButton').text('Update service');

      $('#serviceModal').modal('show');
    });
</script>
@endpush
