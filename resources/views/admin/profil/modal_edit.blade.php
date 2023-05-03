<div class="modal fade" id="editProfil" tabindex="-1" aria-labelledby="modalEditProfil" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditProfil">Edit Profil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="tentang">Tentang</label>
                        <div class="form-group">
                            <textarea class="form-control" name="tentang" id="" cols="20" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="visi">Visi</label>
                        <div class="form-group">
                            <textarea class="form-control" name="visi" id="" cols="20" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="misi">Misi</label>
                        <div class="form-group">
                            <textarea class="form-control" name="misi" id="" cols="20" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="struktur">Struktur</label>
                        <div class="form-group">
                          <input class="form-control" type="file" id="struktur" name="struktur" required>
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