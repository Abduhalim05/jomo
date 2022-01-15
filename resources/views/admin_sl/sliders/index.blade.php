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
    <br><br>
    <div >
        <a href="/slider/create" class="btn btn-danger">Slider Create</a>
    </div>

    <h4 align="center">Slider Table</h4>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">№</th>
              <th scope="col">Title</th>
              <th scope="col">Image</th>
              <th scope="col">ID</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
              @php $num=1;  @endphp
              @foreach($sliders as $slider)
            <tr>
                  <td>{{$num}}</td>
                  <td>{{$slider->title}}</td>
                  <td>
                        <img src="/admin/image/{{$slider->image}}" width="100px" alt="" srcset="">
                  </td>
                  <td>{{$slider->id}}</td>
                  <td>
                      {{-- <a href="{{ route('slider.edit', $slider->id )}}" class="btn btn-info">Edit</a> --}}
                    <form action="{{route('slider.destroy', $slider->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                  </td>
            </tr>
            @php $num++; @endphp
         @endforeach
          </tbody>
        </table>
      </div>
</body>
</html>
