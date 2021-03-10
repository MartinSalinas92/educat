<template>


   <button

   class="btn btn-danger"
    @click="eliminarAlumnos"

   >
    <i class="fas fa-times-circle"></i>


   </button>



</template>

<script>
export default {

    props:['eliminaralumno'],

    methods:{


        eliminarAlumnos(){

            console.log(this.eliminaralumno);

            this.$swal.fire({
            title: 'Estas seguro que deseas eliminar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then(result=>{

                //console.log(result)

                if(result.value){

                    const param= {
                        id:this.eliminaralumno

                        }



                axios.post(`/alumnos/${this.eliminaralumno}`, {param, _method:'delete'})

                    .then(res=>{

                        console.log(res);

                         this.$swal.fire(
                                    'Deleted!',
                                    res.data.mensaje

                            )

                         this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);


                    })
                    .catch(error=>{

                        console.log(error);

                    })
                }

            });



        }
    }


}
</script>
