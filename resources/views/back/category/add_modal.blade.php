<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <form method="POST">
            @method('POST')
            @csrf
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Tambah Kategori</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" name="category" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </form>
    </div>
    </div>
</div>