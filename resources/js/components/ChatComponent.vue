<template>
    <div>
    <navbar-component></navbar-component>
    <div class="container">
        <div class="col-sm-10 m-auto">
        <div class="row mt-4">
            <div class="col-sm-4 bg-white user-side">
                <h4 class="text-center name">Edward Anthony Jenner</h4>
                <div class="bg-white overflow-system">
                    <ul>
                        <li>Item One <span class="text-success">-Active</span></li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                        <li>Item One</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 bg-white chat-side">
                <h4 class="text-center name">Edward Anthony Jenner</h4>
                <div class="bg-white overflow-system-2">
                    <div>
                        <span class="chat-message">adfasdc</span>
                    </div>
                    <div class="text-right">
                        <span class="chat-message">adfasdc</span>
                    </div>
                    <div>
                        <span class="chat-message">adfasdc</span>
                    </div>
                    <div class="text-right">
                        <span class="chat-message">adfasdc</span>
                    </div>
                    <div>
                        <span  class="chat-message">adfasdc</span>
                    </div>
                    <div class="text-right">
                        <span  class="chat-message">adfasdc</span>
                    </div>
                    <div>
                        <span  class="chat-message">adfasdc</span>
                    </div>
                    <div class="text-right">
                        <span  class="chat-message">adfasdc</span>
                    </div>
                    <div>
                        <span  class="chat-message">adfasdc</span>
                    </div>
                    <div class="text-right">
                        <span  class="chat-message">adfasdc</span>
                    </div><div>
                        <span  class="chat-message">adfasdc</span>
                    </div>
                    <div class="text-right">
                        <span  class="chat-message">adfasdc</span>
                    </div>
                    <div>
                        <span  class="chat-message">adfasdc</span>
                    </div>
                    <div class="text-right">
                        <span  class="chat-message">adfasdc</span>
                    </div>
                    <div>
                        <span  class="chat-message">adfasdc</span>
                    </div>
                    <div class="text-right">
                        <span  class="chat-message">adfasdc</span>
                    </div>
                    <div>
                        <span  class="chat-message">adfasdc</span>
                    </div>
                    <div class="text-right">
                        <span  class="chat-message">adfasdc</span>
                    </div>
                    <div>
                        <span  class="chat-message">adfasdc</span>
                    </div>
                    <div class="text-right">
                        <span  class="chat-message">adfasdc</span>
                    </div>
                </div>
                <div class="form-group">
                    <textarea rows="1" class="form-control" placeholder="Write here ..."></textarea>
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
    .chat-message{
        font-size: 20px;
        border: 1px solid gainsboro;
        max-width: 100%;
        border-radius: 17px;
        padding: 6px;
    }
    .user-side{
        height: 515px;
        border: 1px solid gainsboro;
    }
    .name{
        border-bottom: 1px solid gainsboro;
        padding-top: 15px;
        padding-bottom: 15px;
        font-weight: 600;

    }
    .overflow-system{
        overflow: auto;
        height: 450px;
    }
    .overflow-system-2{
        overflow: auto;
        height: 410px;
    }
    ul{
        list-style-type: none;
        text-align: center;
    }
    ul li{
        padding-top: 6px;
        padding-bottom: 6px;
        border: 1px solid gainsboro;
        margin-left: -40px;
    }
    ul li:active{
        background-color: gainsboro;
    }
    .chat-side{
        height: 515px;
        border: 1px solid gainsboro;
    }
    .row{
        margin : 85px auto 0;
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
    .size-of-icon{
        font-size: 27px;
    }
    .size-of-icon i{
        padding-left: 10px;
        padding-right: 10px;
        color: black;
    }
</style>