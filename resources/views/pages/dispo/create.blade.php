@extends("layout.admin.dashboard")


@section("content")
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Form Disposisi</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Disposisi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <form action="{{route("get.word")}}" method="post">
            @csrf
            @method("post")
            <!-- Basic Horizontal form layout section start -->
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Surat Dari</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Surat Dari</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="suratdari" class="form-control"
                                                           name="suratdari" placeholder="Instansi" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>No Surat Dari</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="nosuratdari" class="form-control"
                                                           name="nosuratdari" placeholder="No Surat" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Perihal Surat</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="perihalsuratdari" class="form-control"
                                                           name="perihalsuratdari" placeholder="Perihal Surat" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Tanggal dari Surat</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="date" id="tanggalsuratdari" class="form-control"
                                                           name="tanggalsuratdari" placeholder="Password" required>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Surat Masuk</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Tanggal Surat Masuk</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="date" id="tanggalsurat" class="form-control"
                                                           name="tanggalsurat" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Nomor Buku</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="nobuku" class="form-control"
                                                           name="nobuku" placeholder="Nomor Buku" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Nomor Surat</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="nosurat" class="form-control"
                                                           name="nosurat" placeholder="Nomor Surat" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Sifat Surat</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <fieldset class="form-group">
                                                        <select class="form-select" id="basicSelect">
                                                            <option>Tidak ada</option>
                                                            <option>Sangat Segera</option>
                                                            <option>Segera</option>
                                                            <option>Rahasia</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h4>Perihal</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                <textarea class="form-control" id="perihalsuratmasuk" name="perihalsuratmasuk"
                                          rows="3" placeholder="Perihal Surat Untuk Ditujukan Kepada" required></textarea>
                                </div>
                            </div>

                            <div class="card-header">
                                <h4><DI>Di Tujukan Kepada</DI></h4>
                            </div>
                            <div class="card-body">
                                <div class="col-md-8 form-group">
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect">
                                            <option>Pilih</option>
                                            <option>Sekretaris</option>
                                            <option>Ketua DPR Papua</option>
                                            <option>Kasubag Persidangan Dan Risalah</option>
                                            <option>Kasuba Keuangan</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col mb-10">
                    <div class="card">
                        <div class="card-body">
                            <input type="submit" name="submit" class="btn btn-primary" style="width: 130px;"value="Buat">
                        </div>
                    </div>
                </div>
            </section>
        </form>
@endsection
