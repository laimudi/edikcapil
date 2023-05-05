<div class="modal fade" id="editPelayanan-{{$data->id}}" tabindex="-1" aria-labelledby="modalEditPelayanan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditPelayanan">Edit Pelayanan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('pelayanan.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="pelayanan">pelayanan</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="pelayanan" id="pelayanan" value="{{ $data->pelayanan }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="persyaratan">Isi Berita</label>
                    <div class="form-group">
                        <textarea class="form-control" name="persyaratan" id="" cols="30" rows="20" required>{{ $data->persyaratan }}</textarea>
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