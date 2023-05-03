<div class="modal fade" id="editBerita-{{$data->id}}" tabindex="-1" aria-labelledby="modalEditBerita" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditBerita">Edit Berita</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('berita.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="judul">Judul</label>
                    <div class="form-group">
                      <input class="form-control" type="text" name="judul" id="judul" value="{{ $data->judul }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="isi_berita">Isi Berita</label>
                    <div class="form-group">
                        <textarea class="form-control" name="isi_berita" id="" cols="20" rows="10" required>{{ $data->isi_berita }}</textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="gambar">Upload Gambar</label>
                    <div class="form-group">
                      <input class="form-control" type="file" id="gambar" name="gambar" value="{{ $data->gambar }}">
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