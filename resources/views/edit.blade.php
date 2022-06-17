<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$action == "create" ? "Create" : "Edit | ".$product["id"]}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <form action={{ $action == "create" ? "/Store" : "/Update/".$car["id"] }} method="POST">
        @csrf
            <div class="row">
                <label class="col-3" for="name">Name:</label>
                <input type="text" class="col form-control" name="model" value="{{isset($Car) ? $Car["model"] : ""}}">
            </div>
            <div class="row mt-3">
                <label class="col-3" for="price">Price:</label>
                <input type="text" class="col form-control" name="price" value="{{isset($Car) ? $Car["price"] : ""}}">
            </div>
            <div class="row mt-3">
                <label class="col-3" for="description">Image:</label>
                <input type="file" class="col form-control" name="image" value="{{isset($Car) ? $Car["image"] : ""}}">
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>
</body>
</html>
