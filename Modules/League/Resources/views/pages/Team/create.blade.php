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
        <form method="POST" action="{{route('team.store')}}">
            @csrf
            @if($errors->any())
                {!! implode('', $errors->all('<div class="bg-danger">:message</div>')) !!}
            @endif

            <div class="form-group">
                <label for="exampleInputEmail1">Create Team</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">

            </div>

           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</body>

@include('league::layouts.footer')


</html>