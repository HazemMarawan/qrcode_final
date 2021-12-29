<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="{{asset('html5-qrcode.min.js')}}"></script>
        <script src="{{asset('sweetalert2@10.js')}}"></script>
    </head>
    <body>
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1h4uZMIMgW0wLiGIXwcX_fIBW_-Y4ZBtz" width="640" height="480"></iframe>
        <div style="width: 100%;height:100%;" id="reader"></div>

        <script>
            function onScanSuccess(decodedText, decodedResult) {
    // Handle on success condition with the decoded text or result.
    console.log(`Scan result: ${decodedText}`, decodedResult);
    var url = "{{route('validate_qr_code',['qrCodeKey'=>'#id'])}}";
    url = url.replace('#id',decodedText);
    alert(url);
    $.ajax({
                    type: "GET",
                    url: url,
                    contentType: "application/json; charset=utf-8",
                    // data: { "id":  decodedText},
                    datatype: "json",
                    success: function (data) {
                        alert(data);
                        if(data == 0)
                        {
                            Swal.fire({
                                icon: "error",
                                title: "Rejected",
                                text: "Not Found"
                            });
                        
                        }
                        else if(data == 1)
                        {
                            Swal.fire({
                                icon: "error",
                                title: "Rejected",
                                text: "Used Before"
                            });
                        }
                        else
                        {
                            Swal.fire({
                                icon: "success",
                                title: "Accepted",
                                text: "Approved QRCode"
                            });
                        }
                        
               
                        //datatable.draw();
                    },
                    error: function () {
                        alert("Dynamic content load failed.");
                    }
                });
}

var html5QrcodeScanner = new Html5QrcodeScanner(
	"reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess);
            </script>
    </body>
</html>