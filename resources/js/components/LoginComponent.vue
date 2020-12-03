<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-3">
                <div class="card br-1">
                    <div class="card-body text-center">
                        <h1>Instagram</h1>
                        <form method="POST">
                            <input type="text" placeholder="Phone number, username, or email" class="mb-2">
                            <input type="password" placeholder="Password" class="mb-3">
                            <button class="btn btn-info" disabled="true">Log In</button>
                        </form>
                        <div class="row line-row">
                            <div class="col-sm-5 line"></div>
                            <div class="col-sm-2 line-text">OR</div>
                            <div class="col-sm-5 line"></div>
                        </div>
                        <div class="row m-auto">
                            <div class="col-sm-12">
                                <a href="" class="text-black">
                                    <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>
                                    &nbsp;
                                    <b>Log in with facebook</b>
                                </a>
                            </div>
                        </div>
                        <div class="row m-auto">
                            <div class="col-sm-12 mt-2">
                                <router-link to="/forget" class="forgot">
                                    Forgot password?
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="text-center ">
                            Don't have an account? <router-link to="/registration" class="text-decoration-none">Sign up</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            
        },
    }
</script>
<style scoped>
    .row{
        margin : 85px auto 0;
    }
    .br-1{
        border-radius: 1px;
    }
    .bg-dark{
        border-radius: 40px 40px 40px 40px;
        height: 557px;
    }
    h1{
        font-family: Lobster Two;
        font-size: 47px;
        margin-bottom: 43px;
    }
    input{
        width: 90%;
        height: 38px;
        font-size: 13px;
        border: 1px solid gainsboro;
        outline: none;
        padding: 8px;
        background-color: #fafafa;
    }
    input:focus{
        border: 0.5px solid black;
    }
    button{
        color: white;
        width: 90%;
    }
    button:disabled{
        color: white;
    }
    img{
        height: 100%;
        width: auto;
        border: 10px solid black;
        border-radius: 23px;
    }
    .line{
        height: 1px;
        background-color: #dbdbdb;
        margin-top: 10px;
    }
    .line-row{
        margin: 20px 16px;
    }
    .line-text{
        padding: 0px;
    }
    .text-black{
        color: black;
        text-decoration: none;
    }
    .forgot{
        font-size: 11px;
        color: black;
        text-decoration: none;
    }
    .text-decoration-none{
        text-decoration: none;
    }
</style>