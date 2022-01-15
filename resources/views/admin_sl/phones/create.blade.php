<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Phone</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
    {{-- <br><br>
    <div>
        <a href="/slider" class="btn btn-danger">Table</a>
    </div> --}}


    <div  class="container">
        <div class="col-md-6">

        <h4>Adding Phone</h4>
        <form action="{{ route('phones.store')}}" method="POST">
            @csrf

            <div class="form-group">
                <label for="">User</label>
                <select class="form-control" name="user_id" value="{{old('user')}}">
                    @foreach ($users as $user )
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
                {{-- @error('title')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror --}}
            </div>

            <div class="form-group">
                <label for="">Number</label>
                <input type="number" class="form-control" name="number" value="{{old('number')}}">
                {{-- @error('number')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror --}}
            </div>

            <div class="form-group">

                <input type="submit" value="Send" class="btn btn-primary" name="submit">
            </div>

        </form>
        </div>
    </div>

</body>
</html>
