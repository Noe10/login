 function Sumar(n1,n2) {
     var parametros = {"n1":n1,"n2":n2};
$.ajax({
    data:parametros,
    url:'proceso.php',
    type: 'post',
    beforeSend: function () {
        $("#resultado").html("Procesando, espere por favor");
    },
    success: function (response) {   
        $("#resultado").html(response);
    }
});
}
