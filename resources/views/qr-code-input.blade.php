<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>QR-Code Generator</title>
  </head>
  <body>
    <div class="pt-5">
        <h1 class="text-center">QR-Code Generator</h1>
        <form action="{{ url('/qr-code') }}" method="post">
          @csrf
          <div class="d-flex align-items-center justify-content-center">
              <div class="input-group mt-2" style="width:400px">
                  <input class="form-control" type="text" name="link" placeholder="Enter your link..." required>
                  <button class="btn btn-success">Generate</button>
              </div>
          </div>
      </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>