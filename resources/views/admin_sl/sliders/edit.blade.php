<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Slider</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
    <br><br>
    <div>
        <a href="/slider/create" class="btn btn-danger">Slider Create</a>
    </div>
    <div>
        <a href="/slider" class="btn btn-primary">Table</a>
    </div>
    <div  class="container">
        <div class="col-md-6">
        <h4>Creating Edit  ID:{{$slider->id}}</h4>
        <form action="{{ route('slider.update', $slider->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" value="{{$slider->title}}">
            </div>
            <div class="form-group">
                <label for="">Number</label>
                <input type="number" class="form-control" name="number" value="{{$slider->number}}">
            </div>
            <div class="form-group">
                <label for="">Body</label>
                <textarea type="text"  class="form-control" name="body" value="">{{$slider->body}}</textarea>
            </div>
            <div class="form-group">

                <input type="submit" value="Update" class="btn btn-primary" name="submit">
            </div>

        </form>
        </div>  
    </div>

</body>
</html>
