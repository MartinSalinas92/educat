<template>

    <input

        type="submit"
        class="btn btn-danger"
        value="Eliminar"
        @click="eliminarDocente"


    />

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
