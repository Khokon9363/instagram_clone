<template>
    <div>
    <div class="container-fluid-full bg-white">
        <div class="row mt-0 w-75 p-2">
            <img :src="`instagram/instagramImg.png`" class="top-img">
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-3">
                <div class="card br-1">
                    <div class="card-body text-center">
                        <h1 class="lock">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </h1>
                        <h5>Trouble Logging In?</h5>
                        <div class="second-text mb-2">
                            Enter your email, phone, or username and we'll send you a link to get back into your account.
                        </div>
                        <form method="POST">
                            <input type="text" placeholder="Email, Phone, or Username" class="mb-3">
                            <button class="btn btn-info" disabled="true">Send Login Link</button>
                        </form>
                        <div class="row line-row">
                            <div class="col-sm-5 line"></div>
                            <div class="col-sm-2 line-text">OR</div>
                            <div class="col-sm-5 line"></div>
                        </div>
                        <div class="row mt-0">
                            <div class="col-sm">
                                <div class="mt-3 text-center bold-text">
                                    <router-link to="/registration" class="link">Create New Account</router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-mine">
                    <div class="card-body">
                        <router-link to="/login" class="link bold-text">
                        <div class="text-center">
                            Back To Login
                        </div>
                        </router-link>
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
        border-radius: 4px;
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
    .top-img{
        width: 110px;
        height: auto;
        border: none;
        border-radius: 0px;
    }
    .bg-white{
        border-bottom: 1px solid gainsboro;
    }
    .container-fluid-full{
        width: 100%;
    }
    .container-60{
        width: 60%;
    }
    .lock{
        font-size: 60px;
    }
    .fa-lock{
        padding: 10px;
        border: 2px solid;
        border-radius: 50%;
        height: 90px;
        width: 91px;
    }
    .second-text{
        width: 80%;
        margin: auto;
        font-size: 13px;
    }
    .bold-text{
        font-weight: 600;
    }
    .link{
        text-decoration: none;
        color: black;
    }
    .bg-mine{
        background-color: rgba(var(--b3f,250,250,250),1);
    }
</style>