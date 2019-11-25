function addRecord() {
    
    var first_name = $("#first_name").val();                        
    var last_name = $("#last_name").val();
    var email = $("#email").val();

    
}

function readRecords() {
     $.get("ajax/readRecords.php", {}, function (data, status) {     
        $(".records_content").html(data);                           
    });
   
}
