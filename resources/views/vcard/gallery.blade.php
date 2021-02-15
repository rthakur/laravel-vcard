<h1 class="text-center bg-dark text-white">Gallery</h1>
<div class="text-right">
  <a href="#" class="btn btn-success btn-sm m-2 add_image">Add Image</a>
</div>
<div class="container">
        <div class="row">
          @foreach($vcard->galleries as $gallery)
                <div class="col-md-4">
                  <div class="card-deck">
                      <div class="card">
                        <div class="card-body text-center">
                          <img src="{{ env('APP_CDN')}}{{ $gallery->image }}"  width="150" height="150"alt="not found path">
                          <h5 class="card-title">Vcard-Id:{{$gallery->vcard_id}}</h5>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-sm btn-primary edit_image" data-gallery="{{$gallery}}">Edit</a>
                            <a href="/gallery/delete/{{$gallery->id}}" class="btn btn-sm btn-danger">Delete</a>
                        </div>
                      </div>
                    </div>
               </div>
               @endforeach
        </div>
        <div class="mt-4 text-right">
          <a href="/" class="btn btn-info btn-sm">Finish</a>
        </div>
</div>
<!-- addService modal start-->
<div class="modal fade" id="addVcardImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addGalleryTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="post" action="/vcard/create/gallery/{{$vcard->id}}/store" enctype="multipart/form-data" >
        @csrf
          <div class="card-footer text-right">
            <div class="custom-file">
              <input type="hidden" name="id" id="addVcardImageId">
              <label class="custom-file-label text-left" for="addVcardImageName"> Choose file </label>
              <input type="file" name="image" id="addVcardImageName" class="custom-file-input " accept="image/*"  >

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="addVcardImageSave" class="btn btn-primary submit-ajax-form">Save changes</button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>
<!-- addService modal end -->
@push('scripts')
    <script type="text/javascript">
      $('.add_image').click(function(){
        $('#addVcardImage').modal('show');
        $('#addGalleryTitle').text('Add Image for Vcard');
        $('#addVcardImageId').val('');
        $('#addVcardImageSave').text('Save Image');
      });

      $('.edit_image').click(function(){
        var gallery=$(this).data('gallery');
        $('#addVcardImage').modal('show');
        $('#addGalleryTitle').text('Update Image for Vcard');
        $('#addVcardImageSave').text('Update Image');
        $('#addVcardImageId').val(gallery.id);
        $('#addVcardImageName').val(gallery.image);
      });

    </script>
@endpush
