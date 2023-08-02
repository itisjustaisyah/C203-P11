<!DOCTYPE html>
<html>
    <head>
        <title>Exercise 4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    </head>
    <body>
        <div class="container">
            <h1>Exercise 4</h1>
            <form method="post" action="#">
                <div class="form-group">
                    <label for="id_name">Name:</label>
                    <input type="text" name="myName" id="id_name" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="id_age">Age</label>
                    <input type="text" name="myAge" id="id_age" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="id_coke">Drinks:</label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" id="id_coke" name="drinks[]" value="coke" class="form-check-input"/>Coke($1.20)
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" id="id_sprite" name="drinks[]" value="sprite" class="form-check-input"/>Sprite($1.30)
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" id="id_fanta" name="drinks[]" value="fanta" class="form-check-input"/>Fanta($1.40)
                        </label>
                    </div>
                </div>
                <input class="btn btn-primary" type="submit" value="Calculate" />
            </form>
        </div>
        
        <script src="js/exercise4.js" type="text/javascript"></script>
    </body>
</html>
