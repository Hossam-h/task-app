<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  @include('league::layouts.nave')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">first team</th>
                    <th scope="col">first team score</th>
                    <th scope="col">second team</th>
                    <th scope="col">second team score</th>
                </tr>
            </thead>
            <tbody>
              
            @foreach($matches as $matche)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{$matche->first_team->name}}</td>
                    <td>{{$matche->first_team_score}}</td>
                    <td>{{$matche->second_team->name}}</td>
                    <td>{{$matche->second_team_score}}</td>
                    
                </tr>
               
               @endforeach
                
            </tbody>
        </table>

    </div>
 
 @include('league::layouts.footer')
 
</body>

</html>