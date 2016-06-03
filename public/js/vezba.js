/**
 * Created by Ljubica on 3.6.2016.
 */
$(document).ready(function() {
    $("#exampleGrid").simplePagingGrid({
        data: [
            { "Name": "Pineapple", "Price": 1.50, "Quantity": 2 },
            { "Name": "Banana", "Price": 0.30, "Quantity": 5 }]
    });
});