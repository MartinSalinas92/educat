const { SourceMapGenerator } = require("source-map");

$(".btnAgregarNotas").on("click", function(){

    $('#btnbtn').hide();
    $('#btnocut').show();
    //console.log('agregar notas');

    $('.agregar_notas').append(


        '<div class="row">'+

        '<div class="col-md-6 mt-5">'+
            '<label class="form-label">Notas 1</label>'+
            '<input type="number" class="form-control monto" name="nota_1" id="nota_1" onchange="sumar();">'+


        '</div>'+
        '<div class="col-md-6 mt-5">'+
            '<label  class="form-label">Nota 2</label>'+
            '<input type="number" class="form-control monto" name="nota_2" id="año_cursado" onchange="sumar(this.value);">'+


        '</div>'+
      '<div class="col-md-6 mt-5">'+
            '<label class="form-label">Notas 3</label>'+
            '<input type="number" class="form-control monto" name="nota_3" id="nota_3" onchange="sumar(this.value);">'+
        '</div>'+

      '<div class="col-6 mt-5">'+
        ' <label  class="form-label">Nota 4</label>'+
        '<input type="number" class="form-control monto" name="nota_4" id="nota_4" onchange="sumar(this.value);" >' +
    '</div>'+

      '<div class="col-md-6 mt-5">'+
        '<label class="form-label">Promedio</label>'+
       ' <input type="number" class="form-control Promedio" id="Promedio"  name="Promedio"  value="">'+
    '</div>'+
      '<div class="col-md-6 mt-5">'+
        '<label class="form-label estado" id="Estado">Estado</label>'+
        '<div class="estado" id="Estado">'+

        '</div>'+

    '</div>'+
    '</div>'




    )


    $('.monto').keyup(function() {

        const info=[];

        var importe_total = 0
          $(".monto").each(
            function(index, value) {
              if ( $.isNumeric( $(this).val() ) ){


              importe_total = importe_total + eval($(this).val());

                //console.log(importe_total);



              total=(importe_total/4)

              info.push(total);







            }

            });
              $("#Promedio").val(total);


            info.slice(3).forEach(element => {
                   // console.log(element);

                   if(element>6){


                    $('#Estado').append('<input type="text" name="estado" class="form-control" id="estado" value="Alumno REgular">')


               }else{

                    $('#Estado').append('<input type="text" name="estado" class="form-control" id="estado" value="Alumno Libre">')

               }
            });







        })













})

  /* Sumar dos números. */






















