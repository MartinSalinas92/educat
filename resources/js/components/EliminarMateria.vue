<template>

    <button

        class="btn btn-danger"

        @click="eliminarMateria"

    >
     <i class="fas fa-times-circle"></i>
    </button>

</template>

<script>
export default {

    props:['eliminarmateria'],


    methods:{

        eliminarMateria(){

            console.log(this.eliminarmateria);

            this.$swal.fire({
            title: 'Estas seguro que deseas eliminar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then(result=>{

                                if(result.value){


                    const param={

                        id:this.eliminarmateria

                    }

                    axios.post(`/materias/${this.eliminarmateria}`, {param, _method:'delete'})

                    .then(res=>{

                        console.log(res);

                             this.$swal.fire(
                                    'Deleted!',
                                    res.data.mensaje

                            )

                            this.$el.parentNode.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode.parentNode);


                    })
                }



            });

        }




    }



}
</script>
