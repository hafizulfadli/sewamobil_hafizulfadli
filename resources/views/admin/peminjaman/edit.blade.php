@extends('admin.layout.index')
@section('title','Mobil')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Edit Mobil</p>

            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('mobil.update',$mobil->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Merek</label>
                          <input class="form-control @error('merek') is-invalid @enderror" name="merek" value="{{ $mobil->merek }}" type="text" placeholder="merek">
                          <div class="invalid-feedback">
                              @error('merek')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Model</label>
                          <input class="form-control @error('model') is-invalid @enderror" value="{{ $mobil->model }}" name="model" type="text" placeholder="model">
                          <div class="invalid-feedback">
                              @error('model')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">No Plat</label>
                          <input class="form-control @error('noplat') is-invalid @enderror" value="{{ $mobil->noplat }}" name="noplat" type="text" placeholder="noplat">
                          <div class="invalid-feedback">
                              @error('noplat')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Tarif Sewa Perhari</label>
                          <input class="form-control @error('tarif_sewa_perhari') is-invalid @enderror" name="tarif_sewa_perhari" value="{{ $mobil->tarif_sewa_perhari }}" type="number" placeholder="tarif sewa perhari">
                          <div class="invalid-feedback">
                              @error('tarif_sewa_perhari')
                                  {{ $message }}
                              @enderror
                          </div>
                      </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="example-text-input" class="form-control-label ">Status</label>
                          <select class="form-select @error('status') is-invalid @enderror" aria-label="Default select example" name="status" value="" id="status">
                            <option value="{{ $mobil->status }}">{{ $mobil->status }}</option>
                            <option value="">--Select--</option>
                           <option value="Tersedia">Tersedia</option>
                           <option value="Tidak tersedia">Tidak tersedia</option>
                     </select>
                     <div class="invalid-feedback">
                        @error('status')
                            {{ $message }}
                        @enderror
                    </div>
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
