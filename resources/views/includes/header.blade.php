<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Sistem Pakar</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('home', ['user_id => $user_id']) }}">Home</a></li>
      <li><a href="{{ route('working_mem', ['user_id' => $user_id ]) }}">Profile Saya</a></li>
    </ul>
      <a style="float:right;" class= "btn btn-primary navbar-btn" href="{{ route('logout') }}" role = "button">Logout</a>
  </div>
</nav>