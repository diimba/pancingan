@extends('layouts.default')
@section('content')
<div class="row">
    <div class="col-sm-7">
        <div class="panel panel-primary">
            <div class="panel-heading">
                    <h3 style="text-align:center;">Hasil Tes IST</h3>
            </div>
            <div class="panel-body">
                <div class="container">
                    <div class="col-sm-6">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Tes</th>
                                    <th>Skor Akhir</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i=0; $i < 9; $i++)
                                <tr>
                                    <td>{{$namas[$i]}}</td>
                                    <td>{{$hasils[$i]->hasil}}</td>
                                    <td>{{$hasils[$i]->keterangan}}</td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 style="text-align:center;">Rekomendasi Jurusan</h3>
            </div>
            <div class = "panel-body">
                <div class="container">
                    <div class="col-sm-4">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Hasil Rekomendasi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($rekoms as $rek)
                                <tr>
                                    <td>{{$rek['nama']}}</td>
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
@stop