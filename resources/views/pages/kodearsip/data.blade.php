@extends('layout.admin.dashboard')

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Kode Klasifikasi Arsip</h3>
{{--                    <p class="text-subtitle text-muted">For user to check they list</p>--}}
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kode Arsip</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row" id="table-head">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
{{--                            <h4 class="card-title">Table head options</h4>--}}
                        </div>
                        <div class="card-content">
                            <!-- table head dark -->
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>NO</th>
                                        <th>NOMOR KODE</th>
                                        <th>JENIS KODE</th>
                                        <th>ACTION</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($data->count())
                                        @foreach($data as $kategori)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$kategori->no_kode}}</td>
                                                <td>{{$kategori->Jenis_Kode}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="{{asset('mazer/dist/assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script>
        // Simple Datatable
        @csrf
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

@endsection
