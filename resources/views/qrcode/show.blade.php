<html>
    <head>
        <style>
        .main_image
            {
            position: relative;
            top: 0;
            left: 0;
            }
            .qrcode
            {
            position: absolute;
            top: 770px;
            left: 430px;
            }
        </style> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        {{-- @php($url = 'http%3A%2F%2Fqrcode.upagencyeg.com%2Fqrcode%2Fcheck%2F'.$qrCode->qrcode_key.'%2F') --}}
        {{-- @php($url = 'http%3A%2F%2Flocalhost%2Fqrcode%3A8000%2Fcheck%2F'.$qrCode->qrcode_key.'%2F') --}}

        <div class="row">
            <div style="position: relative; left: 0; top: 0;" id="invitation_card" class="col-md-6">
                <img src="{{asset('event_main_page.jpg')}}" class="main_image">
                <img src="https://image-charts.com/chart?chs=150x150&cht=qr&chl={{$qrCode->qrcode_key}}&choe=UTF-8" class="qrcode" width="150" height="150">
            </div>
            <div class="col-md-6" id="print_div">
                <label>Print Your Invitation: </label>
                <input type="button" id="print_btn" value="Print" class="btn"/>
            </div>
        <div>
       
        <script>
            $("#print_btn").click(function () {
                //Hide all other elements other than printarea.
                $("#print_div").hide();
                $("#invitation_card").show();
                window.print();
                $("#print_div").show();
                
            });

            
        </script>
    </body>
</html>