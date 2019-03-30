<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Image</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Image</h1>
            <form method = 'get' action = '{{url("image")}}'>
                <button class = 'btn blue'>Image Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("image")}}/{{$image->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="input-field col s6">
                    <input id="description" name = "description" type="text" class="validate" value="{{$image->description}}">
                    <label for="description">description</label>
                </div>
                
                <div class="input-field col s6">
                    <input id="url_name" name = "url_name" type="text" class="validate" value="{{$image->url_name}}">
                    <label for="url_name">url_name</label>
                </div>
                                
                <button class = 'btn red' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script>
    $('select').material_select();
    </script>
</html>
