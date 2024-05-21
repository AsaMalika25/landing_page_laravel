<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('public/bootstrap/css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>
    @include('komponen/pesan')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Lupa Password</h1>
        <div class="pb-3">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email"  class="form-control" required autocomplete="">
            </div>
            <div class="mb-3">
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="mb-3 d-grid">
                <button type="submit" name="submit" class="btn btn-primary">kirim</button>
            </div>
        </form>
    </div>
    </body>

</html>
