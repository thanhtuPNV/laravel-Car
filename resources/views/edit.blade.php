<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$action == "create" ? "Create" : "Edit | ".$car["id"]}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- enctype='multipart/form-data' -->
        <div>
            <a href="/cars">Quay lại</a>
        </div>
        <form action={{ $action == "create" ? "/Store" : "/Update/".$car["id"] }} method="POST">
        @csrf
        <!-- @method('put') -->
            <div class="row">
                <label class="col-3" for="name">Manufactures:</label>
                <select class="col form-control" name="manufactures" id="manufactures">

                    @isset($manufactures)
                    <!-- <option>fffffffffffffff</option> -->

                        @foreach($manufactures as $mfs)
                            <option
                            {{ isset($car) && $car->mf_id === $mfs->id ? 'selected' : "" }}
                                value="{{ $mfs->id }}">
                                {{ $mfs->mf_name }}
                            </option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <div class="row mt-3">
                <label class="col-3" for="name">Name:</label>
                <input type="text" class="col form-control" name="name" value="{{isset($car) ? $car["name"] : ""}}">
            </div>
            <div class="row mt-3">
                <label class="col-3" for="price">Decriptions:</label>
                <input type="text" class="col form-control" name="decriptions" value="{{isset($car) ? $car["decriptions"] : ""}}">
            </div>
            <div class="row mt-3">
                <label class="col-3" for="description">Image:</label>
                <input type="file" onchange="changeImage(event)" class="col form-control" name="image">
                <img id="preview-img" class="col-6 img-thumbnail" style="width: 10rem" alt="" src="/image/{{isset($car) ? $car["image"] : ""}}">
                <script>
                    const changeImage = (e) =>{
                        var preImage = document.getElementById("preview-img")
                        preImage.src = URL.createObjectURL(e.target.files[0])
                        preImage.onload = () => {
                            URL.revokeObjectURL(output.src)
                        }
                    }
                </script>
            </div>
            <div class="row mt-3">
                <label class="col-3" for="price">Price:</label>
                <input type="text" class="col form-control" name="price" value="{{isset($car) ? $car["price"] : ""}}">
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>
</body>
</html>
