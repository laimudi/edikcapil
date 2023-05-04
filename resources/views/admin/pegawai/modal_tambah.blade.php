<div class="modal fade" id="tambahPegawai" tabindex="-1" aria-labelledby="modalTambahPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahPegawai">Tambah Pegawai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('pegawai.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nip">NIP</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name="nip" id="nip" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nama">Nama</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name="nama" id="nama" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="alamat">Alamat</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name="alamat" id="alamat" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="pangkat">Pangkat</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name="pangkat" id="pangkat" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="jabatan">Jabatan</label>
                        <div class="form-group">
                            <input class="form-control" type="text" name="jabatan" id="jabatan" required>
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