<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h3>

        @foreach ($student as $data )

        <p> Id : {{$data ->id}}</p>
        <p> Name : {{$data ->name}}</p>
        <p>Email : {{$data ->email}}</p>
        <p>Age : {{$data ->age}}</p>
        <p>Cities Name : {{$data ->Cities}}</p>
            
        @endforeach



    </h3>
    
</body>
</html>