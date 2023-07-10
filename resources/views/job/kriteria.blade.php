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
                        <h3 class="page-title">Kriteria</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item">Jobs</li>
                            <li class="breadcrumb-item active">Kriteria</li>
                        </ul>
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
                                    <th>Kriteria</th>
                                    <th>Bobot</th>
                                    <th>label</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kriterias as $kriteria)

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kriteria->kriteria}}</td>
                                    <td>{{ $kriteria->bobot}}</td>
                                    <td>{{ $kriteria->label}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>  
                </div>
            </div>
        </div>
        <!-- /Page Content -->