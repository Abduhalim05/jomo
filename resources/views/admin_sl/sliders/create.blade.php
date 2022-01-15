<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Slider</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
    <br><br>
    <div>
        <a href="/slider" class="btn btn-danger">Table</a>
    </div>


    <div  class="container">
        <div class="col-md-6">
            {{-- @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                @endforeach
            @endif --}}
        <h4>Creating Slider</h4>
        <form action="{{ route('slider.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control" name="image">

                 @error('image')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror

            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" value="{{old('title')}}">
                @error('title')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Number</label>
                <input type="number" class="form-control" name="number" value="{{old('number')}}">
                @error('number')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="form-group">
                <label for="">Body</label>
                <textarea type="text"  class="form-control" name="body" value="{{old('body')}}"></textarea>
                @error('body')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
            </div>
            <div class="form-group">

                <input type="submit" value="Send" class="btn btn-primary" name="submit">
            </div>

        </form>
        </div>
    </div>

</body>
</html>
