// $(document).ready(function () {
//   $("#boton").click(function (event) {
//     event.preventDefault();
//     $("#resultado").empty();
//     $("#estado").html("<h2>Esperando respuesta...</h2>");

//     var palabra = $("#palabra").val();
//     var data = { palabra: palabra };

//     console.log("Datos enviados:", data);
//     $.ajax({
//       type: "post",
//       url: "./respuesta.php",
//       data: data,
//       success: function (respuesta) {
//         var md5Encriptado = respuesta["md5Encriptado"];
//         var sha1Encriptado = respuesta["sha1Encriptado"];

//         $("#resultado").append("<h1>Resultado:</h1>");
//         $("#resultado").append("<h4>MD5: " + md5Encriptado + "</h4>");
//         $("#resultado").append("<h4>SHA1: " + sha1Encriptado + "</h4>");
//         $("#estado").empty();
//         $("#estado").append("<h1>Estado del requerimiento</h1>");
//         $("#estado").append("<h4>" + respuesta["estados"] + "</h4>");
//       },
//     });
//   });
// });

$(document).ready(function () {
  $("#boton").click(function (event) {
    event.preventDefault();
    $("#resultado").empty();
    $("#estado").html("<h2>Esperando respuesta...</h2>");
    const palabra = $("#palabra").val();
    const data = { palabra: palabra };
    $.ajax({
      type: "post",
      url: "./respuesta.php",
      data: data,
      success: function (respuesta) {
        const { md5Encriptado, sha1Encriptado, estados } =
          JSON.parse(respuesta);
        $("#resultado").append("<h1>Resultado:</h1>");
        $("#resultado").append("<h4>MD5: " + md5Encriptado + "</h4>");
        $("#resultado").append("<h4>SHA1: " + sha1Encriptado + "</h4>");
        $("#estado").empty();
        $("#estado").append("<h1>Estado del requerimiento</h1>");
        $("#estado").append("<h4>" + estados + "</h4>");
      },
    });
  });
});
