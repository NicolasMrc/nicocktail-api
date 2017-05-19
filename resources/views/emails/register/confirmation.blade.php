<html>
    <head></head>
    <body >
        <div class="block-1">
            <h1 style="">Welcome {{ $user->firstname }}</h1>
            <p>Thanks you for signing up for Nicocktail !</p>
            <p>Please verify Your Email Address by clicking the button below.</p>
            <a href="https://nicocktail-api.nicolasmercier.io/{{ $user->register_token }}"><div class="button">Confirm my account</div></a>
        </div>
        <div class="block-2">
            <p>Nicocktail Team</p>
            <a class="mail" href="mailto:contact@nicolasmercier.io" target="_top">contact@nicolasmercier.io</a>
        </div>
    </body>
</html>


<style>

    body{
        background: #eeeeee;
    }

    .block-1{
        width: 90%;
        margin-right:auto;
        margin-left:auto;
        background: #ffffff;
        border : 1px solid rgba(0,0,0,0.15);
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        max-width: 700px;
        margin-top: 20px;
    }

    .block-2{
        padding-top: 10px;
        width: 90%;
        margin-right:auto;
        margin-left:auto;
        background: #ffffff;
        border : 1px solid rgba(0,0,0,0.15);
        border-top:none;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        max-width: 700px;
    }

    h1{
        margin-top:50px;
        margin-bottom: 30px;
        text-align : center;
        display: block;
        margin-left: auto;
        margin-right: auto;
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-weight: 100;
    }

    p{
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        text-align: center;
    }

    .button{
        background-color: #5bc0de;
        color: white;
        padding:10px 20px 10px 20px;
        border-radius: 5px;
        border:1px solid #46b8da;
        text-align: center;
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .button:hover{
        background-color:#46b8da;
    }

    a{
        text-align: center;
        margin-right: auto;
        margin-left: auto;
        width: 300px;
        display: block;
        text-decoration: none;
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    }

    .mail{
        margin-bottom: 20px;
        color: #5bc0de;
    }

</style>