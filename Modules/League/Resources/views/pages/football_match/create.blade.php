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

<script>
< script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity = "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
crossorigin = "anonymous" >
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</script>

</html>