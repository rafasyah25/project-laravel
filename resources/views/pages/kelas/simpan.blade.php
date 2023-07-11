@extends('layouts.main')
@section('content')
    <h3><i class="fa fa-angle-right"></i> Form Kelas</h3>
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Lengkapi Data Kelas</h4>
            <div class="form-panel">
                <div class=" form">
                    <form class="form needs-validation" id="form_kelas" novalidate method="POST"
                        action="{{ route('master.kelas.buat') }}">

                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group m-5">
                                    <label for="kode_kelas">Kode Kelas</label>
                                    <input class="form-control" type="text" name="kode_kelas" id="kode_kelas"
                                        placeholder="eg. 16xxxxx" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group m-5">
                                    <label for="kode_prodi">Kode Prodi</label>
                                    <input class="form-control" type="text" name="kode_prodi" id="kode_prodi"
                                        placeholder="eg. Luthxxx xxx" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group m-5">
                                    <label for="nama_kelas">Nama Kelas</label>
                                    <input class="form-control" type="text" name="nama_kelas" id="nama_kelas"
                                        placeholder="eg. xxx@gmail.com" required>
                                </div>
                            </div>
                        </div>
                    
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
        var formKelas = $("#form_kelas");
        formKelas.validate();
        $("#btn_simpan").click(function(event) {
            if (formKelas.valid() === false) {
                alert("invalid");
            } else {
                alert("valid");
                // window.location.href = "{{ route('dashboard') }}"
            }
        });
    </script>
@endsection