<div class="modal fade" id="tambahPelayanan" tabindex="-1" aria-labelledby="modalTambahPelayanan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahPelayanan">Tambah Pelayanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="pelayanan">Pelayanan</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name="pelayanan" id="pelayanan" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="persyaratan">Persyaratan</label>
                        <div class="form-group">
                            <textarea class="form-control" name="persyaratan" id="" cols="30" rows="20" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>