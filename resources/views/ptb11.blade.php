<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Phương trình bậc nhất</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="GET" action="ptb11" class="form-inline">
            <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
            <div class="form-group">
                <label for="">Nhập hệ số a:</label>
                <input type="text" class="" name="a" placeholder="Nhập hệ số a..." value="{{ isset($a)?$a:'' }}">
            </div>
            <div class="form-group">
                <label for="">Nhập hệ số b:</label>
                <input type="text" class="" name="b" placeholder="Nhập hệ số b..." value="{{ isset($b)?$b:'' }}">
            </div>
            <input type="submit" value="submit" name="submit">
        </form>
        <h1>{{ isset($result)?$result:'' }}</h1>
    </div>
</body>
</html>
