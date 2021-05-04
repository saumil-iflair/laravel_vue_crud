<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User page</div>

                    <div class="card-body">
                        <form action="#">
                            <table align="center" border="2">
                                <tr>
                                    <td>First Name</td>
                                    <td><input type="text" name="fname"></td>
                                </tr>
                                                                <tr>
                                    <td>Last Name</td>
                                    <td><input type="lname" name="lname"></td>
                                </tr>
                                                                <tr>
                                    <td>Submit</td>
                                    <td><input type="submit" value="submit" name="name"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }

    }
</script>
