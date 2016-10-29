$(document).ready(function(){

    $("#cerraOrd").click(function(){
        var layout = $('input:radio[name=estilo]:checked').val();
        var datosAuto = document.getElementById('dAuto').innerText;
        var datosOrden = document.getElementById('dOrder').innerText;
        var costoRef = document.getElementById('costoRefac').innerText;
        var utliRef = document.getElementById('utlRef').innerText;
        // base
        var totRef = document.getElementById('totalRef').innerText;

        //base
        var manoObra = document.getElementById('manObra').innerText;

        //base
        var htrabajo = document.getElementById('horasTrabajo').innerText;
        var traporMano = document.getElementById('txMano').innerText;

        //base
        var subTot = document.getElementById('costSub').innerText;

        var id_Orden = document.getElementById('id_orden').value;
        var orden = datosOrden.split("|");
        location.href="data/pdf/request.php?folio=" + orden[0] + "&refacciones=" + orden[2] + "&dAuto=" + datosAuto +"&estilo=" + layout;
            //+ "&dOrden=" + datosOrden + "&estilo=" + layout;

    })
});