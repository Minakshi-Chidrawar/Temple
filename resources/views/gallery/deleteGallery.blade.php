<div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Do you want to delete the gallery {{ $item->name }} ?
            </div>
            <div class="modal-footer">
                <form action="{{ route('gallery.delete', $item->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <button class="btn btn-danger" type="submit">Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form> 
            </div>
        </div>
    </div>
</div>