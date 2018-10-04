
//small animation
function myFunction() {
    let myVar = setTimeout(showPage, 2000);
}

function showPage() {
    document.getElementById("beforeLoad").style.display = "none";
    document.getElementById("afterLoad").style.display = "block";
}

//just some modals load
$(document).ready(function(){
    $("#myBtnUpload").click(function(){
        $("#myModalUpload").modal();
    });
});

$(document).ready(function(){
    $("#myBtnFolder").click(function(){
        $("#myModalFolder").modal();
    });
});

//File name change on upload
$(function() {

    // We can attach the `fileselect` event to all file inputs on the page
    $(document).on('change', ':file', function() {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });

    // We can watch for our custom `fileselect` event like this
    $(document).ready( function() {
        $(':file').on('fileselect', function(event, numFiles, label) {

            var input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;

            if( input.length ) {
                input.val(log);
            } else {
                if( log ) alert(log);
            }

        });
    });

});