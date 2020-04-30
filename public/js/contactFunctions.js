$(document).ready(function () {
    
    const port = "9000"

     function index() {
        var tableBody="";
        $("#loadingTable").removeClass("hidden");
        $("#paragraph").addClass("hidden");
         $.when(_request.listdata({ url: 'http://localhost:'+port+'/contacts/index.php' }))
             .done(function (data) {
                
                 let contacts = data.result;
                 $.each(contacts, function (key, contact) {
                    tableBody+='<tr><td data-label="id">'+contact.id+'</td>'
                    tableBody+='<td data-label="contact_no">'+contact.contact_no+'</td>'
                    tableBody+='<td data-label="lastname">'+contact.lastname+'</td>'
                    tableBody+='<td data-label="createdtime">'+contact.createdtime+'</td></tr>'
                 })
             }).fail(function (data) {
                console.log("error")
            }).always(function () {
                $("#tablebody").html(tableBody);
                $("#table").removeClass("hidden");
                $("#loadingTable").addClass("hidden");
            })
     }

     $("#buttonShowTable").on("click", function(e){
        e.preventDefault();
        index();
    })

});
