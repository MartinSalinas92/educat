<template>
<div>
     <button

     class="btn btn-danger"

     @click="eliminarDocente"

     >

    <i class="fas fa-times-circle"></i>




     </button>















</div>


</template>

<script>
export default {

    props: ['eliminardocente'],


    methods:{

        eliminarDocente(){

            console.log(this.eliminardocente);

             this.$swal.fire({
            title: 'Estas seguro que deseas eliminar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then(result=>{

                //console.log(result);

                if(result.value){

                    const param={

                        id:this.eliminardocente
                    }


                    //enviar hacia la ruta eliminar con axios

                    axios.post(`/docentes/${this.eliminardocente}`, {param, _method:'delete'})

                    .then(element=>{

                        console.log(element);

                            this.$swal.fire(
                                    'Deleted!',
                                    element.data.mensaje

                            )

                            this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);

                    })
                    .catch(error=>{
                            console.log(error);
                    })
                }



            })

        }
    }

}
</script>

<style scoped>
    @import 'https://use.fontawesome.com/releases/v5.8.1/css/all.css';
</style>

