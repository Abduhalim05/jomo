<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
    {{-- <br><br>
    <div >
        <a href="/slider/create" class="btn btn-danger">Slider Create</a>
    </div> --}}

    <h4 align="center">Slider Table</h4>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">№</th>
              <th scope="col">Number</th>
              <th scope="col">UserName</th>

              <th>Actions</th>
            </tr>
          </thead>
          <tbody>

              @foreach($phones as $phone)
            <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$phone->number}}</td>

                  <td>{{$phone->user_id}}</td>
                  <td>
                      {{-- <a href="{{ route('slider.edit', $slider->id )}}" class="btn btn-info">Edit</a> --}}
                        <form action="{{route('phones.destroy', $phone->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" name="delete" class="btn btn-danger">
                        </form>
                  </td>
            </tr>

         @endforeach
          </tbody>
        </table>
      </div>
</body>
</html>
