<!DOCTYPE html>
<html lang="en">
<head>
    <title>Test IST</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        h5 {
            margin-right: 80px;
            margin-left: 500px;
        }

        #popup{
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background: #888;
            width: 700px;
            height: 320px;
            color: white;
            font-size: 18px;
            padding: 15px;
        }

        #popup-background{
            position: fixed;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,.5);
            z-index: 5;
        }
    </style>
</head>
<body>
    @if($popup_sub)
    <div id="popup-background">
        <div id="popup">
            <p> {{ $popup_sub }}</p>
            <div class="text-right">
                <button id="popup-button" class="btn btn-primary">Close</button>
            </div>
        </div>
    </div>
    @endif
    <div class="panel panel-default">
            <div class="panel-heading">
                <div align="center">
                    <h3>Paket Soal Test {{ $nama_sub }}</h3>
                </div>
                <!-- <div class="pilih-paket" align="center">
                <a href="{{ route('view_soal', ['subtest' => 1, 'nomor' => 1]) }}" class="btn btn-primary">Subtes 1</a>
                <a href="{{ route('view_soal', ['subtest' => 2, 'nomor' => 1]) }}" class="btn btn-primary">Subtes 2</a>                
                <a href="{{ route('view_soal', ['subtest' => 3, 'nomor' => 1]) }}" class="btn btn-primary">Subtes 3</a>                
                <a href="{{ route('view_soal', ['subtest' => 4, 'nomor' => 1]) }}" class="btn btn-primary">Subtes 4</a>                
                <a href="{{ route('view_soal', ['subtest' => 5, 'nomor' => 1]) }}" class="btn btn-primary">Subtes 5</a>                
                <a href="{{ route('view_soal', ['subtest' => 6, 'nomor' => 1]) }}" class="btn btn-primary">Subtes 6</a>                
                <a href="{{ route('view_soal', ['subtest' => 7, 'nomor' => 1]) }}" class="btn btn-primary">Subtes 7</a>                
                <a href="{{ route('view_soal', ['subtest' => 8, 'nomor' => 1]) }}" class="btn btn-primary">Subtes 8</a>              
                <a href="{{ route('view_soal', ['subtest' => 9, 'nomor' => 1]) }}" class="btn btn-primary">Subtes 9</a>              
                </div> -->
            </div>
        </div>
        <div class="panel-body">
                <h5><b>Waktu Tersisa : <span id="timer"></span></b></h5>
                <input id="end-time" type="hidden" name="endTime" value="{{ $endTime }}">
                <input id="user-id" type="hidden" name="userId" value="{{ $user_id }}">
            <!-- <div class="col-sm-6 col-md-offset-4 col-md-4 col-md-offset-4"> -->
                <form class="form-horizontal col-sm-12" action="{{ route('insert_jwb') }}" method="post">
                @csrf
                    @if($soal->teks)
                    <p>{{ $soal->nomor }}.) {{ $soal->teks }}</p>
                    @else
                    <img src="{{ asset('images/'.$soal->gambar) }}" alt="">
                    @endif
                    <div class="form-group">
                        <div class="col-sm-9">      
                            @if(!in_array($soal->subtest_id, [4,5,6]))
                            <ul style="list-style-type:none">  
                                <div clas="radio"> 
                                    <li><label><input 
                                    @if($isAnswered)
                                        disabled
                                    @endif
                                    type="radio" name="jawaban" value="a" required>
                                    
                                    @if($soal->jwb_a_teks)
                                    A. {{ $soal->jwb_a_teks }}
                                    @else
                                    <img src="{{ asset('images/'.$soal->jwb_a_img) }}" alt="">
                                    @endif
                                    </label></li>
                                    
                                    <li><label><input 
                                    @if($isAnswered)
                                        disabled
                                    @endif
                                    type="radio" name="jawaban" value="b" required>
                                    @if($soal->jwb_b_teks)
                                    B. {{ $soal->jwb_b_teks }}
                                    @else
                                    <img src="{{ asset('images/'.$soal->jwb_b_img) }}" alt="">
                                    @endif
                                    </label></li>
                                    
                                    <li><label><input 
                                    @if($isAnswered)
                                        disabled
                                    @endif
                                    type="radio" name="jawaban" value="c" required>
                                    @if($soal->jwb_c_teks)
                                    C. {{ $soal->jwb_c_teks }}
                                    @else
                                    <img src="{{ asset('images/'.$soal->jwb_c_img) }}" alt="">
                                    @endif
                                    </label></li>
                                    
                                    <li><label><input 
                                    @if($isAnswered)
                                        disabled
                                    @endif
                                    type="radio" name="jawaban" value="d" required>
                                    @if($soal->jwb_d_teks)
                                    D. {{ $soal->jwb_d_teks }}
                                    @else
                                    <img src="{{ asset('images/'.$soal->jwb_d_img) }}" alt="">
                                    @endif
                                    </label></li>
                                    
                                    <li><label><input 
                                    @if($isAnswered)
                                        disabled
                                    @endif
                                    type="radio" name="jawaban" value="e" required>
                                    @if($soal->jwb_e_teks)
                                    E. {{ $soal->jwb_e_teks }}
                                    @else
                                    <img src="{{ asset('images/'.$soal->jwb_e_img) }}" alt="">
                                    @endif
                                    </label></li>
                                </div>
                            </ul>
                                @else
                                <div class="textbox">
                                <label for="jawaban">Jawaban :
                                <input type="text" class="form-control" name="jawaban"></label>
                                </div>
                                @endif
                        </div>
                    </div>
                    <input type="hidden" name="subtest" value=" {{ $subtest }}">    
                    <input type="hidden" name="nomor" value=" {{ $soal->nomor }}">  
                    <input type="hidden" name="soal_id" value=" {{ $soal->id }}">              
                    <input type="hidden" name="nama_sub" value=" {{ $nama_sub }}">              
                    <div class="form-group">
                    <!-- <label class="control-label col-sm-3"></label> -->
                        <div class="col-sm-9">
                        <input type="submit" class="btn btn-primary" value="Soal Selanjutnya">
                        <a href="{{ route('home', ['user_id' => $user_id ]) }}" class="btn btn-danger">Kembali Ke Home</a>
                        </div>
                    </div>    
                </form>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            let endTime = new Date($("#end-time").val())

            // $("#timer").html(endTime.getHours().toString()+":"+endTime.getMinutes().toString()+":"+endTime.getSeconds().toString())

            function stopInterval(){
                clearInterval(timerInterval)
                location = "/hitung/"+$("#user-id").val()
            }

            function runTimer(){
                let now = new Date()
                let timeLeft = new Date(endTime - now)
                if((timeLeft.getHours() - 7) <= 0 && timeLeft.getMinutes() <= 0 && timeLeft.getSeconds() <= 0) {
                    stopInterval()
                }
                $("#timer").html(("0"+(timeLeft.getHours()-7).toString()).slice(-2)+":"+("0"+timeLeft.getMinutes().toString()).slice(-2)+":"+("0"+timeLeft.getSeconds().toString()).slice(-2))
            }

            let timerInterval = setInterval(runTimer, 1000)

            $("#popup-button").click(function(){
                $("#popup-background").hide()
            })
        })
    </script>
</body>
</html>
