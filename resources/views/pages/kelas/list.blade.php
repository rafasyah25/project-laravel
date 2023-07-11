@extends('layouts.main')
@section('content')
    <h3><i class="fa fa-angle-right"></i> List Kelas</h3>
    <!-- BASIC FORM ELELEMNTS -->
    <div class="row mt">
        <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Data Kelas</h4>
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                                <tr>
                                    <th>Kode Kelas</th>
                                    <th>Kode Prodi</th>
                                    <th>Nama Kelas</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelas as $item)
                                <tr>
                                    <td>
                                        <a href="basic_table.html#">{{$item['kode_kelas']}}</a>
                                    </td>
                                    <td class="hidden-phone">{{$item['kode_prodi']}}</td>
                                    <td><span class="label label-info label-mini">{{$item['nama_kelas']}}</span></td>
        
                                    <td>
                                        <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                    </td>
                                </tr>
                                
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /content-panel -->
                </div>
                <!-- /col-md-12 -->
            </div>
        </div>
        <!-- /col-lg-12 -->
    </div>

    <!-- /row -->
@endsection
@section('javascript')
@endsection