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
                    <form action="/dashboard/alternatifs/{{ $alternatif->id }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" value="{{ old('nama', $alternatif->nama) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Usia</label>
                                        <input class="form-control @error('usia') is-invalid @enderror" type="number" name="usia" value="{{ old('usia', $alternatif->usia) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pengalaman Kerja</label>
                                        <input class="form-control @error('pengalaman_kerja') is-invalid @enderror" typ="number" name="pengalaman_kerja" value="{{ old('pengalaman_kerja', $alternatif->pengalaman_kerja) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>IPK</label>
                                        <input class="form-control @error('ipk') is-invalid @enderror" type="number" name="ipk" value="{{ old('ipk', $alternatif->ipk) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>kesediaan Gaji</label>
                                        <input class="form-control @error('kesediaan_gaji') is-invalid @enderror" type="number" name="kesediaan_gaji" value="{{ old('kesediaan_gaji', $alternatif->kesediaan_gaji) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jumlah Sertifikat</label>
                                        <input class="form-control @error('jumlah_sertifikat') is-invalid @enderror" type="number" name="jumlah_sertifikat" value="{{ old('jumlah_sertifikat', $alternatif->jumlah_sertifikat) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Edit</button>
                            </div>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
        <!-- /Page Content -->