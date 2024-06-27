@extends('layouts.admin')
@section('styles')
<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
@endsection

@section('content')
<div class="main-content">
    <!--breadcrumb-->
              <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                  <div class="breadcrumb-title pe-3">Dashboard</div>
                  <div class="ps-3">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb mb-0 p-0">
                              <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                              </li>
                              <li class="breadcrumb-item active" aria-current="page">Admin</li>
                          </ol>
                      </nav>
                  </div>
                  <div class="ms-auto">
                      <div class="btn-group">
                        <a href="{{ Route('user.create') }}" class="btn btn-primary">Tambah Data</a>
                          {{-- <button type="button" class="btn btn-primary">Settings</button>
                          <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                              <a class="dropdown-item" href="javascript:;">Another action</a>
                              <a class="dropdown-item" href="javascript:;">Something else here</a>
                              <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                          </div> --}}
                      </div>
                  </div>
              </div>
              <!--end breadcrumb-->

      <h6 class="mb-0 text-uppercase">DataTable User</h6>
              <hr>
              <div class="card">
                  <div class="card-body">
                      <div class="table-responsive">
                          <table id="example" class="table table-striped table-bordered" style="width:100%">
                              <thead>
                                  <tr>
                                      <th>No</th>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Role</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @php $i = 1; @endphp
                                @foreach ( $user as $data )
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->isAdmin== 1 ? 'Admin' : 'User' }}</td>
                                    <td>
                                        <form action="{{ Route('user.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ Route('user.edit', $data->id) }}" class="btn btn-warning">
                                                Edit
                                            </a>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                              </tbody>
                              <tfoot>

                              </tfoot>
                          </table>
                      </div>
                  </div>
              </div>
             </div>


  </div>
@endsection

@push('scripts')
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	  } );
</script>
@endpush
