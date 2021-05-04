<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h3><div class="card-header">Register Data</div></h3>
                    <div class="card-body">
                        <form @submit.prevent="addPost">
                            <div class="row">
                                <div class="col">
                                    <label for="fname">first name1</label>
                                    <input type="text" v-model="user.fname" id="fname" name="fname" class="form-control" :class="{ 'is-invalid': submitted && $v.user.fname.$error }" />
                                    <!-- <div v-if="submitted && !$v.user.fname.required" class="invalid-feedback">first name is required</div> -->
                                </div>
                                   <div class="col">
                                    <label for="lname">last name</label>
                                    <input type="text" v-model="user.lname" id="lname" name="lname" class="form-control" :class="{ 'is-invalid': submitted && $v.user.lname.$error }" />
                                    <!-- <div v-if="submitted && !$v.user.lname.required" class="invalid-feedback">last name is required</div> -->
                                </div>

                            </div>
                            <!-- <div class="form-group">
                                <button title="Submit" class="btn btn-outline-dark"> Add Data </button>
                            </div> -->
                            <br>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm btn-flat" type="submit">Add Record</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
// import { required } from "vuelidate/lib/validators";
export default {
    name: "register",
    data() {
        return {
            user: {
                fname: "",
                lname: "",
            },
            // selectedFile: null,
            submitted: false
        };
    },
    // validations: {
    //     user: {
    //         fname: { required },
    //         lname: { required },
    //     }
    // },
    methods:{
        handleSubmit() {
            alert("test");
            this.submitted = true;
            // this.$v.$touch();
            // if (this.$v.$invalid) {
            //     return;
            // }
            this.addPost();
        },
        addPost(){
            alert("checking demo");
             var input = this.user;
                axios.post('/addinsert',input).then(function(response){
                    console.log("response", response);
                }).catch((err) => {
                    console.log(err);
                });
            // const formData = new FormData();
            // Object.keys(this.user).forEach((key) => {
            //     if (this.user[key] != null && this.user[key] != "") {
            //         formData.append(key, this.user[key]);
            //     }
            // });
            // var input = this.user;
            // var _this = this;
            // axios.post('/addinsert',formData).then(function(response){
            //     if(response.data.status == 1){
            //         setTimeout(function(){ window.location.href="/home"; }, 800);
            //         _this.$toaster.success(response.data.msg);
            //     }
            //     else{
            //         _this.$toaster.error(response.data.msg);
            //     }
            // }).catch((err) => {
            //     console.log(err);
            // });
        }
    }

}
</script>

<style scoped>

</style>
