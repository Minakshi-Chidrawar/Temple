<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#exampleModal">
    Add Image
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $gallery->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form" action=" {{ route('album.image') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                    <label for="Add images">Add Image/s</label>
                        <input type="hidden" name="id" value="{{ $gallery->id }}" class="form-control">
                    </div>
                    <div class="input-group control-group add-more-button">
                        <input type="file" name="image[]" class="form-control" id="image">
                        <div class="input-group-btn">
                            <button class="btn btn-success btn-add-more" type="button">Add</button>
                        </div>
                    </div>

                    <div class="copy">
                        <div class="input-group control-group mt-4 remove-button">
                            <input type="file" name="image[]" class="form-control" id="image">
                            <div class="input-group-btn">
                                <button class="btn btn-danger remove" type="button">Remove</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success mt-4" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>