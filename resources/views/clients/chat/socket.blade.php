@extends('layouts.header-and-footer')
@section('main')
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="http://localhost:3000/socket.io/socket.io.js"></script>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2" >
              <div id="messages" ></div>
            </div>
        </div>
    </div>
    <script>
        var socket = io.connect('http://localhost:3000');
        socket.on('message', function (data) {
            $( "#messages" ).append( "<p>"+data+"</p>" );
          });
    </script>
@endsection