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
    
        <div class="bg-success">
        {{Session::get('flash-message')}}

        </div>

        <form method="POST" action="{{route('football_match.store')}}">
          @csrf
          
          @if($errors->any())
                {!! implode('', $errors->all('<div class="bg-danger">:message</div>')) !!}
            @endif


            <div class="form-group">
                <label for="exampleFormControlInput1">first team score</label>
                <input type="text" name="f_team_score" class="form-control"  placeholder="first team score">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1"> first team </label>
                <select name="f_team_id" class="form-control" id="exampleFormControlSelect1">
                   @foreach($teams as $team)
                    <option value="{{$team->id}}">{{$team->name}}</option>
                    @endforeach
                   
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">second team score</label>
                <input type="text" name="s_team_score" class="form-control" id="exampleFormControlInput1" placeholder="second team score">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">second ream</label>
                <select class="form-control"  name="s_team_id" id="exampleFormControlSelect1">
                    @foreach($teams as $team)
                    <option value="{{$team->id}}">{{$team->name}}</option>
                    @endforeach
                   
                </select>
            </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

@include('league::layouts.footer')


</html>