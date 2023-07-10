@extends('layouts.master')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h3 class="page-title">Alternatif</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item">Jobs</li>
                            <li class="breadcrumb-item active">Alternatif</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_job"><i class="fa fa-plus"></i> Add Alternatif</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th hidden></th>
                                    <th hidden></th>
                                    <th hidden></th>
                                    <th hidden></th>
                                    <th hidden></th>
                                    <th hidden></th>
                                    <th>Nama</th>
                                    <th>Usia</th>
                                    <th>Pengalaman Kerja</th>
                                    <th>IPK</th>
                                    <th>Kesediaan Gaji</th>
                                    <th>Jumlah Sertifikat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatifs as $alternatif)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td hidden class="nama">{{ $alternatif->nama}}</td>
                                    <td hidden class="usia">{{ $alternatif->usia}}</td>
                                    <td hidden class="pengalaman_kerja">{{ $alternatif->pengalaman_kerja}}</td>
                                    <td hidden class="ipk">{{ $alternatif->ipk}}</td>
                                    <td hidden class="kesediaan_gaji">{{ $alternatif->kesediaan_gaji}}</td>
                                    <td hidden class="jumlah_sertifikat">{{ $alternatif->jumlah_sertifikat}}</td>
                                    <td>{{ $alternatif->nama}}</td>
                                    <td>{{ $alternatif->usia}}</td>
                                    <td>{{ $alternatif->pengalaman_kerja}}</td>
                                    <td>{{ $alternatif->ipk}}</td>
                                    <td>{{ $alternatif->kesediaan_gaji}}</td>
                                    <td>{{ $alternatif->jumlah_sertifikat}}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="/dashboard/alternatifs/{{ $alternatif->id }}/edit" class="dropdown-item edit_job"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <form action="/dashboard/alternatifs/{{ $alternatif->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="dropdown-item delete_job" data-target="#delete_user" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o m-r-5"></i>Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>  
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add Job Modal -->
        <div id="add_job" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Job</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/dashboard/alternatifs" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{ old('nama') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Usia</label>
                                        <input class="form-control @error('usia') is-invalid @enderror" type="number" name="usia" value="{{ old('usia') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pengalaman Kerja</label>
                                        <input class="form-control @error('pengalaman_kerja') is-invalid @enderror" typ="number" name="pengalaman_kerja" value="{{ old('pengalaman_kerja') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>IPK</label>
                                        <input class="form-control @error('ipk') is-invalid @enderror" type="number" name="ipk" value="{{ old('ipk') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>kesediaan Gaji</label>
                                        <input class="form-control @error('kesediaan_gaji') is-invalid @enderror" type="number" name="kesediaan_gaji" value="{{ old('kesediaan_gaji') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jumlah Sertifikat</label>
                                        <input class="form-control @error('jumlah_sertifikat') is-invalid @enderror" type="number" name="jumlah_sertifikat" value="{{ old('jumlah_sertifikat') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        @section('script')
        {{-- update --}}
        <script>
            $(document).on('click','.edit_job',function()
            {
                var _this = $(this).parents('tr');
                $('#e_id').val(_this.find('.id').text());
                $('#e_nama').val(_this.find('.nama').text());
                $('#e_usia').val(_this.find('.usia').text());
                $('#e_pengalaman_kerja').val(_this.find('.pengalaman_kerja').text());
                $('#e_ipk').val(_this.find('.ipk').text());
                $('#e_kesediaan_gaji').val(_this.find('.kesediaan_gaji').text());
                $('#e_jumlah_sertifikat').val(_this.find('.jumlah_sertifikat').text());
                
                // department
                var department = (_this.find(".department").text());
                var _option = '<option selected value="' +department+ '">' + _this.find('.department').text() + '</option>'
                $( _option).appendTo("#e_department");

                // job type
                var job_type = (_this.find(".job_type").text());
                var _option = '<option selected value="' +job_type+ '">' + _this.find('.job_type').text() + '</option>'
                $( _option).appendTo("#e_job_type");

                // status
                var status = (_this.find(".status").text());
                var _option = '<option selected value="' +status+ '">' + _this.find('.status').text() + '</option>'
                $( _option).appendTo("#e_status");
            });
            
        </script>
    @endsection