@extends('admin.layout.index')
@section('title','Mobil')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Data Mobil</p>
              <a href="{{ route('mobil.create') }}" class="btn btn-primary btn-sm ms-auto">Tambah</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" style="text-align: center;">#</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" >Merek</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" >Model</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" >No Plat</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" >Tarif Sewa Perhari</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" >Status</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" style="text-align: center;">Aksi</th>
                      </tr>
                    </thead>
                   <tbody>
                    @foreach ( $mobil as $data )
                    <tr>
                        <td  align="center">{{ $loop->iteration }}</td>
                        <td>{{ $data->merek }}</td>
                        <td>{{ $data->model }}</td>
                        <td>{{ $data->noplat }}</td>
                        <td>{{ $data->tarif_sewa_perhari }}</td>
                        <td>{{ $data->status }}</td>
                        <td align="center">
                            <a href="{{ route('mobil.edit',$data->id) }}" class="btn btn-link text-primary text-gradient px-1 mb-0" ><i class="fas fa-pencil-alt text-dark me-2"></i></a>
                            <a href="{{ route('mobil.destroy',$data->id) }}" onclick="event.preventDefault(); confirm('Apa ingin menghapus data mobil ini?') ? document.getElementById('delete-form-{{ $data->id }}').submit() : false;" class="btn btn-link text-danger text-gradient px-1 mb-0" ><i class="far fa-trash-alt text-dark me-2"></i></a>
                            <form id="delete-form-{{ $data->id }}" action="{{ route('mobil.destroy', $data->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                   </tbody>
                  </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
