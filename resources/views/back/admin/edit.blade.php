<div
    class="modal fade"
    id="staticBackdropEdit"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    tabindex="-1"
    aria-labelledby="staticBackdropLabel"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable"
    >
        <div class="modal-content">
            <form id="form-edit" method="POST" action="a">
                @method('PATCH') @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        Edit Kategori
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" id="input-id" name="id" />
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input
                                        id="name"
                                        type="text"
                                        name="name"
                                        class="form-control"
                                    />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Password (boleh dikosongi)</label>
                                    <input
                                        type="password"
                                        name="password"
                                        class="form-control"
                                    />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Konfirmasi Password (boleh dikosongi)</label>
                                    <input
                                        type="password"
                                        name="password_confirmation"
                                        class="form-control"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                        >
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Understood
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var id;

    function edit(admin) {
        admin = JSON.parse("[" + admin + "]");
        
        id = admin[0].id;
        $("#name").val(admin[0].name);
        $("#form-edit").attr("action", `admin/${id}`);
    }
</script>
