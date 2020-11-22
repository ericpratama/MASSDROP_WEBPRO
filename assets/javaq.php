<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <script type="text/javascript">
        $(document).ready(function(){ // basic syntax

            $("button").click(function(){
                $("div").fadeOut()
            });

            $(".second").click(function(){
                $("div").fadeIn()
            });

        });
    
    </script>

    <button>fade out</button>
    <button class="second">fade in</button>
    <div> KAMPUNG SEI NAM</div>
    <img name="slide" width="400" height="200">

</body>
</html>