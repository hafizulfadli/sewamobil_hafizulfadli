@extends('admin.layout.index')
@section('title','Mobil')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Sewa Mobil</p>

            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('mobil.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label ">Merek</label>
                              <select class="form-select" aria-label="Default select example" name="mobil_id" id="status">
                               <option value="">--Select--</option>
                               @foreach ($mobil as $data)
                               <option value="{{ $data->id }}">{{ $data->merek }}</option>
                               @endforeach
                         </select>
                          </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label ">Tanggal mulai</label>
                              <input class="form-control" name="tanggal_mulai" type="date" placeholder="">
                          </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label ">Tanggal Selesai</label>
                              <input class="form-control" name="tanggal_selesai" type="date" placeholder="merek">
                          </div>
                          </div>
                          <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Status</label>
                          <select class="form-select @error('status') is-invalid @enderror" aria-label="Default select example" name="status" id="status">
                            <option value="">--Select--</option>
                           <option value="Tersedia">Berjalan</option>
                           <option value="Tidak tersedia">Selesai</option>
                     </select>
                      </div>
                    </div>
                </div>
                <a href="/mobil" class="btn btn-dark btn-sm ms-auto ">Kembali</a>
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
