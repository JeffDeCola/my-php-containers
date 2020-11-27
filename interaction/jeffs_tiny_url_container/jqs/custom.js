// JQUERY - CUSTOM.JS

//$(document).ready(function() {
//});

//*****************************************************************************************//
// COPY TO CLIPBOARD
//*****************************************************************************************//
function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
}
