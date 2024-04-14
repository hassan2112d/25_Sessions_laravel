<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @vite('resources/css/app.css')
  </head>
  <body>
    
    <div class="container">

      <h3 class="mt-4">Fetching Data</h3>

      <a href= "/newusers"  class="btn btn-success btn-sm mt-4">Add Users</a>
    <table class="table mt-4">
        <thead>
          <tr>
            <th> NO </th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">ACTIONS</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($data as  $users )
    
            <tr>

                <td>{{$users -> id }}</td> 
                <td>{{$users -> name }}</td> 
                <td>{{$users -> email }}</td> 
                <td>{{$users -> age }}</td>
                
                
                <td><a href="{{route('view.student', $users->id)}}" class="btn btn-success btn-sm">VIEW </a>
                <a href="{{route('deleteuser', $users->id)}}" class="btn btn-danger btn-sm">Delete</a>
                <a href="{{route('update.page', $users->id)}}" class="btn btn-info btn-sm">Update</a></td>
            </tr>
                
            @endforeach
         
          
        </tbody>
      </table>
      <div>
        {{$data->links('pagination::bootstrap-5')}}
      </div>
      <div>
        Total Users : {{$data->count()}}<br>
        Current Page : {{$data->currentpage()}}
      </div>
    
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>








