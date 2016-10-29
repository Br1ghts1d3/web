
    var intId = 0;
    var intId2 = 0;

    function addJob() {
            if(parseInt(intId) < 10){
                intId+=1;
                var ordenTrabajo = "trabajo" + intId.toString();
                var ordenMecanico = "mecanico" + intId.toString();
                var ordenTiempo= "tiempo" + intId.toString();

                var labelJob = $("<label class=\"email required control-label\">Trabajo</label>");
                var inputJob = $("<input name='" + ordenTrabajo + "' placeholder=\"Trabajo a realizar\" type=\"test\" />");
                var labelMec = $("<label class=\"email required control-label\">Mec&aacute;nico</label>");
                var inputMec = $("<input name='" + ordenMecanico + "' placeholder=\"Mec&aacute;nico\" type=\"test\" />");
                var labelTime = $("<label class=\"email required control-label\">Tiempo</label>");
                var inputTime = $("<input name='" + ordenTiempo + "' placeholder=\"Horas de trabajo\" type=\"test\" />");
                $(".dropdown").append(labelJob);
                $(".dropdown").append(inputJob);
                $(".dropdown").append(labelMec);
                $(".dropdown").append(inputMec);
                $(".dropdown").append(labelTime);
                $(".dropdown").append(inputTime);
                $(".dropdown").append($("<br><br>"));
            }
    }

    function addRef() {
            if(parseInt(intId) < 10){
                intId2+=1;

                var ordenRefac = "refac" + intId2.toString();
                var ordenPrec = "precio" + intId2.toString();

                var labelRef = $("<label class=\"email required control-label\">Refacciones</label>");
                var inputRef = $("<input name='" + ordenRefac + "' placeholder=\"Refacciones\" type=\"test\" />");
                var labelPri = $("<label class=\"email required control-label\">Precio</label>");
                var inputPri = $("<input name='" + ordenPrec + "' placeholder=\"Precio\" type=\"test\" />");
                $(".dropdown2").append(labelRef);
                $(".dropdown2").append(inputRef);
                $(".dropdown2").append(labelPri);
                $(".dropdown2").append(inputPri);
                $(".dropdown2").append($("<br><br>"));
            }
    }