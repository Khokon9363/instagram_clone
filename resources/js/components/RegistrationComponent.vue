<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-3">
                <div class="card br-1">
                    <div class="card-body text-center">
                        <h1>Instagram</h1>
                        <div class="text-center top">
                            Sign up to see photos and videos from your friends.
                        </div>
                        <button class="btn btn-info">
                            <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i>
                            &nbsp;
                            Log in with Facebook
                        </button>
                        <div class="row line-row">
                            <div class="col-sm-5 line"></div>
                            <div class="col-sm-2 line-text">OR</div>
                            <div class="col-sm-5 line"></div>
                        </div>
                        <form @submit.prevent="register()" method="POST">
                            <input type="text" v-model="email" placeholder="Mobile Number or Email" class="mb-2">
                            <input type="text" v-model="full_name" placeholder="Full Name" class="mb-2">
                            <input type="text" v-model="user_name" placeholder="Username" class="mb-2">
                            <input type="text" v-model="password" placeholder="Password" class="mb-2">
                            <button class="btn btn-info" :disabled="disabled ? false : true">Sign up</button>
                        </form>
                        <div class="row mt-0">
                            <div class="mt-3 text-center">
                                By signing up, you agree to our 
                                <a href="" class="a-style">Terms</a> , 
                                <a href="" class="a-style">Data Policy</a> and 
                                <a href="" class="a-style">Cookies Policy</a> .
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="text-center ">
                            Have an account? <router-link to="/login" class="text-decoration-none">Log in</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                email : null,
                full_name : null,
                user_name : null,
                password : null,
                disabled : false,
            }
        },
        mounted() {
        },
        methods:{
            register(){
                
            }
        }
    }
</script>
<style>
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
        margin-bottom: 20px;
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
        background-color: #0095f6;
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
    .top{
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 20px;
    }
    .a-style{
        color: black;
        font-weight: 600;
        text-decoration: none;
        font-size: 11px;
    }
</style>