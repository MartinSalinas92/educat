import axios from "axios";



document.addEventListener("DOMContentLoaded", ()=>{


    Dropzone.autoDiscover = false;




    const dropzone= new Dropzone("div#dropzoneDocentes", {


        url:'/docentes/imagenes',
        dictDefaultMessage:'Sube tus imagenes aqui',
        maxFiles:1,
        acceptedFiles:".png,.jpg,.jpeg,.gif,.bmp",
        required:true,
        //Sacar el ultimo archivo
        addRemoveLinks:true,
        //borrar archivo
        dictRemoveFile:"Borrar archivo",


        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content

             //cuando se ejecute dropzone



        },
        //lo que viene del input imagen
        init: function(){

            const imagenGuardada= document.querySelector('#imagen').value;

            //console.log(imagenGuardada);

            if(document.querySelector('#imagen')){

                const cargarimagen={};

                cargarimagen.size=1234;

                cargarimagen.name=document.querySelector('#imagen').value;

                cargarimagen.nombreServidor=document.querySelector('#imagen').value;


                //console.log(cargarimagen.nombreServidor);
                this.options.addedfile.call(this, cargarimagen);
                this.options.thumbnail.call(this, cargarimagen , `/storage/${cargarimagen.name}`)


                cargarimagen.previewElement.classList.add('dz-sucess');
                cargarimagen.previewElement.classList.add('dz-complete');

            }










        },



          //lo que recibes del servidor
          success: function(file, respuesta){
            //respuesta del cliente console.log(file);

            console.log(file,respuesta);

            file.nombreServidor= respuesta.archivo;
         },
         //lo que estas mandando al servidor
         sending: function(file, xhr, formData){

             //verificar lo que estamos enviado
             //console.log('enviando')

             //lo que se va almacenar en el servidor

             formData.append('uuid', document.querySelector('#uuid').value)
         },
         removedfile: function(file){

            const param={
                id:file.nombreServidor
            }

            //console.log(param);

            axios.post('/imagenes/destroy', param)
            .then(res=>{

                console.log(res);
                file.previewElement.parentNode.removeChild(file.previewElement);
            })
            .catch(error=>{

                console.log(error);
            })



         }

    });


})
