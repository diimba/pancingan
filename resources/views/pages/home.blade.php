@extends('layouts.default')
@section('content')
<div class="jumbotron jumbotron-primary">
    <h1 style="font-size:50px;">Rekomendasi Bidang Studi Perguruan Tinggi</h1> 
    <p style="font-size:25px;text-align:center;"></br>Sistem Pakar ini dapat membantu anda dalam memilih bidang studi yang tepat menurut kecerdasan anda loh!</p></br> 
        <p style ="font-size:20px;text-align:center;">Sebelum melakukan tes, sebaiknya baca dulu seputar tes IST dibawah ini ya</p></br>
        <div class="row">
            <div class="col-sm-4">
            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse1">Apa itu Inteligenz Sructure Test (IST)?</a>
                    </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p style ="font-size:15px;">Tes IST (Intelligenz Struktur Test) merupakan salah satu tes psikologi untuk mengukur tingkat intelegensi seseorang.</p>
                            <p style ="font-size:15px;">Tes ini dipandang sebagai tes gestalt (menyeluruh), yang terdiri dari bagian- bagian yang saling berhubungan secara makna (struktur).</p>
                            <p style ="font-size:15px;">Dimana struktur intelegensi tertentu meggambarkan pola kerja tertentu, sehingga cocok untuk profesi atau pekerjaan tertentu.</p>
                            <p style ="font-size:15px;">Berdasarkan hal tersebut IST umum digunakan untuk memahami diri dan pengembangan pribadi, merencanakan pendidikan dan karier serta membantu pengambilan keputusan dalam hidup individu</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="col-sm-4">
            <div class="panel-group">    
                <div class="panel panel-primary">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse2">Macam-macam Kecerdasan pada IST</a>
                    </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p style ="font-size:12px;">SE (Statzerganzng), subtes melengkapi kalimat</p>
                            <p style ="font-size:12px;">WA (Wortausuahl), subtes mencari kata yang berbeda</p>
                            <p style ="font-size:12px;">AN (Analogien), subtes mencari hubungan kata</p>
                            <p style ="font-size:12px;">GE (Gmeinsamkeiten), subtes mencari kata yang mencakup dua pengertian</p>
                            <p style ="font-size:12px;">RA (Rechen Aufgaben), subtes hitungan sederhana</p>
                            <p style ="font-size:12px;">ZR (Zahlen Reihen), subtes deret angka</p>
                            <p style ="font-size:12px;">FA (Form Ausuahl), subtes menyusun bentuk</p>
                            <p style ="font-size:12px;">WU (Wurfal Aufgaben), subtes mencocokan gambar kubus</p>
                            <p style ="font-size:12px;">ME (Merk Aufgaben), subtes mengingat kata</p>
                        </div>
                    </div>
                </div>  
            </div>
            </div>
            <div class="col-sm-4">
            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" href="#collapse3">Peraturan dalam pengerjaan tes IST</a>
                    </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                        <p style ="font-size:15px;">Adapun rekomendasi rincian waktu pengerjaan pada tiap subtest sebagai berikut :</p>
                        <p style ="font-size:12px;">Subtes 1 yaitu Test SE =>  6 Menit / 20 Soal</p>
                        <p style ="font-size:12px;">Subtes 2 yaitu Test WA =>  6 Menit / 20 Soal</p>
                        <p style ="font-size:12px;">Subtes 3 yaitu Test AN =>  7 Menit / 20 Soal</p>
                        <p style ="font-size:12px;">Subtes 4 yaitu Test GE =>  8 Menit / 20 Soal</p>
                        <p style ="font-size:12px;">Subtes 5 yaitu Test RA => 10 Menit / 20 Soal</p>
                        <p style ="font-size:12px;">Subtes 6 yaitu Test ZR => 10 Menit / 20 Soal</p>
                        <p style ="font-size:12px;">Subtes 7 yaitu Test FA =>  7 Menit / 20 Soal</p>
                        <p style ="font-size:12px;">Subtes 8 yaitu Test WU =>  9 Menit / 20 Soal</p>
                        <p style ="font-size:12px;">Subtes 9 yaitu Test ME =>  9 Menit / 20 Soal</p> 
                        <p style ="font-size:12px;">Total Waktu untuk melakukan tes ini yaitu 72 Menit</p> 

                        </div>
                    </div>
                </div> 
            </div>
            </div>
        </div>
        <div align="center">
            <p class="lead">
                <a style="text-align:center;"class="btn btn-primary btn-lg" href="{{route('view_soal', ['subtest' => 1, 'nomor' => 1])}}" role="button">Mulai Test!</a>
            </p>    
        </div>
</div>
@stop