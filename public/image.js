


$(function() {
    $("#btnSave").trigger("click");
  $("#btnSave").click(function() {
$("#a1").css("display", "block");
    html2canvas($("#a1"), { letterRendering: 1, allowTaint: true, logging: true,  useCORS: true, onrendered : function(canvas) {
        theCanvas = canvas;
        //document.body.appendChild(canvas);

        saveAs(canvas.toDataURL(), 'ticket.png');
      }
    });
  });
});


function saveAs(uri, filename) {

    var link = document.createElement('a');

    if (typeof link.download === 'string') {

        link.href = uri;
        link.download = filename;

        //Firefox requires the link to be in the body
        document.body.appendChild(link);

        //simulate click
        link.click();

        //remove the link when done
        document.body.removeChild(link);

    } else {

        window.open(uri);

    }
}
