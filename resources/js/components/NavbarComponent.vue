<template>
    <div class="container-fluid-full bg-white sticky-top">
        <div class="row w-75 mt-0 pt-3">
            <div class="col-sm-4">
                <router-link to="/">
                    <img :src="`instagram/instagramImg.png`" class="top-img">
                </router-link>
            </div>
            <div class="col-sm-4">
                <form method="POST">
                   <input type="text" placeholder="Search .... " class="mb-3">
                </form>
            </div>
            <div class="col-sm-4 size-of-icon text-center">
                <router-link to="/"><i class="fa fa-home"></i></router-link>
                <router-link to="/chat"><i class="fa fa-telegram"></i></router-link>
                <a href=""><i class="fa fa-compass"></i></a>
                <a href=""><i class="fa fa-heart"></i></a>
                   <i class="fa fa-user-circle-o dropdown" data-toggle="dropdown"></i>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="#">Profile</a>
                     <a class="dropdown-item" href="#">Log Out</a>
                  </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    
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
    .size-of-icon{
        font-size: 27px;
    }
    .size-of-icon i{
        padding-left: 10px;
        padding-right: 10px;
        color: black;
    }
    .br-1{
        padding: 20px;
    }
    .round{
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: none;
        margin-top: 12px;
        margin-right: 10px;
    }
    #first{
        font-weight: 600;
    }
    #second{
        color: #b9b0b0;
    }
    div span a{
        text-decoration: none;
        color: black;
    }
    .margin-fact{
        margin: 0 0 8px 0;
    }
</style>