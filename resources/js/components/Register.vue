<template>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header">Register page</div>
               <html>
                  <head>
                     <meta charset="UTF-8">
                     <meta name="viewport" content="width=device-width, initial-scale=1.0">
                     <meta http-equiv="X-UA-Compatible" content="ie=edge">
                     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                     <link rel="stylesheet" type="text/css" href="https://codepen.io/skjha5993/pen/bXqWpR.css">
                     <title>Registration Form Using Bootstrap 4</title>
                  </head>
                  <body>
                     <div class="container">
                         <form @submit.prevent="add()" >
                        <!-- <form action="/admin/register" method="POST" @submit="addTask()"> -->
                           <h2 class="text-center">Join Our Network</h2>
                           <div class="row jumbotron">
                              <div class="col-sm-6 form-group">
                                 <label for="name-f">First Name</label>
                                 <input type="text" class="form-control" v-model="data.name" id="name-f" placeholder="Enter your first name.">
                              </div>
                              <div class="col-sm-6 form-group">
                                 <label for="name-l">Last name</label>
                                 <input type="text" class="form-control" name="lname" id="name-l" placeholder="Enter your last name.">
                              </div>

                              <div class="col-sm-12 form-group mb-0">
                                 <!-- <button class="btn btn-primary float-center">Submit</button> -->
                                <button class="btn btn-success" type="submit">Save</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </body>
               </html>
            </div>
         </div>
      </div>
   </div>
</template>

<script>
    export default {
       methods: {
            add() {
              console.log("testing");
            },
        },
            mounted() {
                console.log('Add Artist Mounted.')
            }
    }


</script>
