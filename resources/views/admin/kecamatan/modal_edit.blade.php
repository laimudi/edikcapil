<div class="modal fade" id="editKecamatan-{{$data->id}}" tabindex="-1" aria-labelledby="modalEditKecamatan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditKecamatan">Edit Kecamatan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('kecamatan.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="kecamatan">Kecamatan</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="kecamatan" id="kecamatan" value="{{ $data->kecamatan }}" required>
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