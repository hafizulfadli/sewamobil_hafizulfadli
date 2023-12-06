@extends('admin.layout.index')
@section('title','Pengguna')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Data Pengguna</p>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" style="text-align: center;">#</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" >Nama</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" >Alamat</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" >No Hp</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" >No Sim</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" >Level</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10" style="text-align: center;">Aksi</th>
                      </tr>
                    </thead>
                   <tbody>
                    @foreach ( $pengguna as $data )
                    <tr>
                        <td  align="center">{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->nohp }}</td>
                        <td>{{ $data->nosim }}</td>
                        <td>{{ $data->level }}</td>
                        <td align="center">
                            <a href="{{ route('destroy',$data->id) }}" onclick="event.preventDefault(); confirm('Apa ingin menghapus data user ini?') ? document.getElementById('delete-form-{{ $data->id }}').submit() : false;" class="btn btn-link text-danger text-gradient px-1 mb-0" ><i class="far fa-trash-alt text-dark me-2"></i></a>
                            <form id="delete-form-{{ $data->id }}" action="{{ route('destroy', $data->id) }}" method="POST" style="display: none;">
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
