<!DOCTYPE html>
<html>
    <head>
        <title>Shipping Cost Calculator</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    </head>
    <body>
        <div class="container">
            <h1>Shipping Cost Calculator</h1>
            <hr />
            <form method="post" action="doShipCostCalculator.php">
                <div class="form-group">
                    <label for="id_book_weight">Book weight (in kg):</label>
                    <input type="text" id="id_book_weight" name="bookWeight" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="id_book_amount">Number of books to buy:</label>
                    <input type="text" id="id_book_amount" size="10" name="bookAmount" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="id_shipping_time_12">Shipping time:</label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" id="id_shipping_time_12" name="shippingTime" value="1-2" class="form-check-input"/>1 - 2 days
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" id="id_shipping_time_35" name="shippingTime" value="3-5" class="form-check-input"/>3 - 5 days
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" id="id_shipping_time_69" name="shippingTime" value="6-9" class="form-check-input"/>6 - 9 days
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="id_shipping_method">Shipping method:</label> 
                    <select id="id_shipping_method" name="shippingMethod" class="form-control">
                        <option value=""></option>
                        <option value="air">air</option>
                        <option value="sea">sea</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_extra_box">Extra additions:</label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" id="id_extra_box" name="extra[]" value="better box" class="form-check-input"/>better box
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" id="id_extra_weekend" name="extra[]" value="weekend delivery" class="form-check-input"/>weekend delivery
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="checkbox" id="id_extra_gift" name="extra[]" value="gift wrap" class="form-check-input"/>gift wrap
                        </label>
                    </div>
                </div>
                <input class="btn btn-primary" type="submit" value="Calculate"/>
            </form>
        </div>
        
        <script src="js/shipCostCalculator.js" type="text/javascript"></script>
    </body>
</html>
