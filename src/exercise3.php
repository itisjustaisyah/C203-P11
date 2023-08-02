<!DOCTYPE html>
<html>
    <head>
        <title>Exercise 3</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <p class="smallText">My favourite fruit is</p>
        <input type="text" name="fruit" value="apple"/>
        <p id="result"></p>

    <script>
        $(document).ready(function(){ //when document ready execute function
            var favText = $(".smallText").html(); //create variabel favText, initialise to content of all elements with class "smallText"
            var fruit = $(":text").val(); //create variable fruit, initialise to value of all text content
            var message = favText + " " + fruit;
            //create message with favtext and fruit values
            $("$result").html(message); //set content of element id "result" to message

        });
    </script>
    </body>
</html>
