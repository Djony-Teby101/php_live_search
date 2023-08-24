<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- installer boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Search_1.0</title>
    <style>
        .container{
            max-width: 50%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center mt-5 md-4">
            <h2>search 1.0 php</h2>
        </div>
        <input name="input" type="text" class="form-control" id="live_search"
                autocomplete="off" >
    </div>
    <div id="result"></div>

    <!-- installer jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#live_search").keyup(function(){
                var input=$(this).val();

                if(input!=""){
                    $.ajax({
                        url:"live.php",
                        method:"POST",
                        data:{input:input},

                        success:function(data){
                            $("#result").html(data);
                            $("#result").css("display","block")
                        }
                    })
                }else{
                    $("result").css("display","none");
                }
            });
        });
    </script>
</body>
</html>