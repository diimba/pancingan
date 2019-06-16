<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Login</title>

<!-- load bootstrap-->
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/3.0.3/css/bootstrap-combined.min.css">
<html>
<head>   
</head>
<body>
<div class="container">
    <div id="main" class="row">
        <div class="col-sm-5">
            <div style="align:center;" class="panel panel-primary">
                <div class="panel-heading">
                    <h3 style="text-align:center;color:white;">Halaman Login Sistem Pakar</h3>
                </div>
                <div class = "panel-body">
                    <div class="container">
                        <div class="col-sm-4">
                            <form action="{{ route('auth') }}" method="post" >
                                <div class="form-group">
                                    <label for="email">Email :</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password :</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                @csrf
                                <button type="submit" class="btn btn-primary">Submit</button></br>
                                <p><br>Belum punya akun?</p>
                            </form> 
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Daftar Disini!</button>
                            
                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Daftar Akun Sistem Pakar</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('register') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap : </label>
                                            <input type="text" class="form-control" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email : </label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password : </label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-group">                                       
                                            <label><input type="radio" name="jk" value="Laki-Laki">Laki - Laki</label>
                                            <label><input type="radio" name="jk" value="Perempuan">Perempuan</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="nomor">Nomor Telepon : </label>
                                            <input type="text" class="form-control" name="nomor">
                                        </div>
                                        <div class="form-group">
                                            <label for="asal">Asal Sekolah : </label>
                                            <input type="text" class="form-control" name="asal">
                                        </div>
                                    <button type="submit" class="btn btn-primary">Daftar</button>
                                    <button type="button" class="btn btn-default text-right" data-dismiss="modal">Close</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>