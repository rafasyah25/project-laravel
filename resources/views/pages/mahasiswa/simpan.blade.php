@extends('layouts.main')
@section('content')
    <h3><i class="fa fa-angle-right"></i> Form Mahasiswa</h3>
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Lengkapi Data Mahasiswa</h4>
            <div class="form-panel">
                <div class=" form">
                    <form class="form needs-validation" id="form_mahasiswa" novalidate method="POST"
                        action="{{ route('master.mahasiswa.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group m-5">
                                    <label for="nim">Nim</label>
                                    <input class="form-control" type="text" name="nim" id="nim"
                                        placeholder="eg. 16xxxxx" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group m-5">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" type="text" name="nama_mahasiswa" id="nama"
                                        placeholder="eg. Luthxxx xxx" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group m-5">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" name="email" id="email"
                                        placeholder="eg. xxx@gmail.com" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group m-5">
                                    <label for="kelas">Kelas</label>
                                    <select class="form-control" id="kelas" name="kode_kelas" required>
                                        <option value="">Pilih Kelas</option>
                                        @foreach($kelas as $item)
                                            <option value="{{$item ['kode_kelas'] }}">{{$item['nama_kelas'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group m-5">
                                    <label for="jk">Jenis Kelamin</label>
                                    <select class="form-control" id="jk" name="jk" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group m-5">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" rows="3" name="alamat" id="alamat"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="text-center">
                                    <button class="btn btn-theme" type="submit" id="btn_simpan">Save</button>
                                    <button class="btn btn-theme04" type="button">Cancel</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <!-- /form-panel -->
        </div>
        <!-- /col-lg-12 -->
    </div>
    <!-- /row -->
@endsection
@section('javascript')
    <script src="{{ url('template/lib/jquery3/jquery.validate.min.js') }}"></script>
    <script type="text/javascript">
        var formMahasiswa = $("#form_mahasiswa");
        formMahasiswa.validate();
        $("#btn_simpan").click(function(event) {
            if (formMahasiswa.valid() === false) {
                alert("invalid");
            } else {
                alert("valid");
                // window.location.href = "{{ route('dashboard') }}"
            }
        });
    </script>
@endsection