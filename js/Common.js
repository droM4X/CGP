$(function(){

    $(document).on("change", "#change-host", function(){
       var selectedHost = $(this).find(":selected").val();
        window.location.href = window.location.protocol + '//' + window.location.host + '/host.php?h=' + selectedHost;
    });

});
