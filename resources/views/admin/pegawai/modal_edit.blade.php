<div class="modal fade" id="editPegawai-{{$data->id}}" tabindex="-1" aria-labelledby="modalEditPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditPegawai">Edit Pegawai</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('pegawai.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nip">NIP</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="nip" id="nip" value="{{ $data->nip }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nama">Nama</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="nama" id="nama" value="{{ $data->nama }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="alamat" id="alamat" value="{{ $data->alamat }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pangkat">Pangkat</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="pangkat" id="pangkat" value="{{ $data->pangkat }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="jabatan">Jabatan</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="jabatan" id="jabatan" value="{{ $data->jabatan }}" required>
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