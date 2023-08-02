$(document).ready(function () {
    $("form").submit(function () {
        
        //insert code here to retrieve data entered by the user and add them to the message to be displayed
        let bookweight = $("#id_book_weight").val();
        let bookAmount= parseInt( $("#id_book_amount").val());
        let shippingTime = $(":radio").val();
        let shippingMethod = $("#id_shipping_method").val();


        //insert code to calculate cost of total book weight
        let totalCost = 0;
        totalCost += bookweight * 0.5;



        switch (shippingTime) {
            case "1-2":
                totalCost += 40
                break;
            case "3-5":
                totalCost += 25;
                break;
            case "6=9":
                totalCost += 10;
                break;
        }

        switch (shippingMethod) {
            case "sea":
                totalCost += 40;
                break;
            case "air":
                totalCost += 30;
                break;
        }



        //insert code to check for checked checkboxes and calculate the extra cost
        let extra = "";
        $("[type=checkbox]:checked").each(function () {
            // complete the code here
            let extraAddition = $(this).val();
            switch (extraAddition) {
                case 'better box':
                    totalCost += 10;
                    break;
                case 'weekend delivery':
                    totalCost += 15;
                    break;
                case 'gift wrap':
                    totalCost += 15;
            }
            extra+= extraAddition + " ";
        });

        if (bookAmount < 3){
            totalCost *= 0.9;
        }
        
        //insert code to print the message in a pop up box (HINT: you need to use confirm instead of alert
        var message = "Book Weight (kg): " + bookweight + "\nNumber of books: " + bookAmount + "\nMethod: " + shippingMethod + "\nShipping options (days):" + shippingTime + "\nExtra additions: " + extra + "\nThe toal shipping cost is $" + totalCost.toFixed(2);


        return confirm(message);
    });

});