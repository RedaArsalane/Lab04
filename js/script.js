function addRecord() {
    
    var first_name = $("#first_name").val();                        
    var last_name = $("#last_name").val();
    var email = $("#email").val();
    
    $.post("ajax/addRecord.php", {                                  
        first_name: first_name,                                     
        last_name: last_name,
        email: email
    }, function (data, status) {                                    
        $("#add_new_record_modal").modal("hide");                   
        readRecords();                                              
        $("#first_name").val("");                                   
        $("#last_name").val("");
        $("#email").val("");
    });
    
}

function readRecords() {
     $.get("ajax/readRecords.php", {}, function (data, status) {     
        $(".records_content").html(data);                           
    });
   
}
