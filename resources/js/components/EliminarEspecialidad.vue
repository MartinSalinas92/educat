<template>

    <button

    class="btn btn-danger"
    @click="eliminarEspecialidad"

    >
    <i class="fas fa-times-circle"></i>

    </button>
</template>

<script>
export default {

    props:['eliminaresp'],


    methods:{

        eliminarEspecialidad(){

            console.log(this.eliminaresp);


             this.$swal.fire({
            title: 'Estas seguro que deseas eliminar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then(result=>{

                //console.log(result.value);

                if(result.value){


                    const param={

                        id:this.eliminaresp

                    }

                    axios.post(`/especialidad/${this.eliminaresp}`, {param, _method:'delete'})

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
