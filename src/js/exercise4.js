$(document).ready(function() 
{ 
    $("form").submit(function() {                     
         // complete the code here
        var name = $("#id_name").val();
        var age = $("#id_age").val();
        var message = "";
        message += "Name: " + name + "\n";
        message += "Age: " + age + "\n";

        message += "Selected drinks: ";

        let totalCost = 0;


        $("[type=checkbox]:checked").each(function () {
            // complete the code here
            var drink = $(this).val();
            switch (drink) {
                case 'coke':
                    totalCost += 1.20;
                case 'sprite':
                    totalCost += 1.30;
                case 'fanta':
                    totalCost += 1.40;
            }
            message += drink + " ";
        })
        message += "\nTotal cost is $" + totalCost.toFixed(2);



        // complete the code here
        alert(message);
        return false;
    })
});
