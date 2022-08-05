<div class="modal fade" id="staticBackdropDelete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <form id="form-delete" method="POST">
            @method('DELETE')
            @csrf
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Hapus Buku</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                
                <p>Apakah anda yakin ingin menghapus ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </form>
    </div>
</div>

<script>
    
    function funDelete(book){
        book = JSON.parse("[" + book + "]");

        var id = book[0].id;
        $('#form-delete').attr('action', `book/${id}`)
    }
</script>