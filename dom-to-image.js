function Guardardiv(id_div){

    var mode = 2 // default 1 (save to image), mode 2 = save to canvas
    console.log("Process start");
    var node = document.getElementById(id_div);
    // get the div that will contain the canvas
    var canvas_out = document.getElementById('canvas_out');
    var canvas = document.createElement('canvas');
    canvas.width = node.scrollWidth;
    canvas.height = node.scrollHeight;

    domtoimage.toPng(node).then(function (pngDataUrl) {
        var img = new Image();
        img.onload = function () {
        var context = canvas.getContext('2d');
        context.drawImage(img, 0, 0);
      };

      if (mode == 1){ // save to image
           downloadURI(pngDataUrl, "salida.png");
      }else if (mode == 2){ // save to canvas
        img.src = pngDataUrl;
        canvas_out.appendChild(img);

      }
    console.log("Process finish");
  });

  }

  function downloadURI(uri, name) {
    var link = document.createElement("a");

    link.download = name;
    link.href = uri;
    document.body.appendChild(link);
    link.click();   
}