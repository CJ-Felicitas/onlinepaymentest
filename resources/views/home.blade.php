@extends('master')
@section('custom-css')
    <link rel="stylesheet" href="css/home.css">
@endsection
@section('title')
    Home
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-offset-2">
                <h2>Terms and Conditions</h2>
                <p id="justify-content"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <div class="checkbox">
                    <label><input type="checkbox" value="" id="agreeterms">I agree to the terms and conditions</label>
                    <br><br>
                    <center><a href="/appointment"><button id="start" class="btn btn-success" disabled>Start Appointment</button></a></center>
                </div>
            </div>
        </div>

    </div>
    <script>
        var checker = document.getElementById('agreeterms');
        var sendbtn = document.getElementById('start');
      
        checker.onchange = function() {
            if (this.checked) {
                sendbtn.disabled = false;
            } else {
                sendbtn.disabled = true;
            }

            

        }
    </script>
@endsection
