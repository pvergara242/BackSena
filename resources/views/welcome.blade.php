<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contabilidad SENA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
           *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    font-family: 'Roboto', sans-serif;

}

body{
    background-image: url(../images/images1.jpeg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}

main{
    width: 100%;
    padding: 20px;
    margin: auto;
    margin-top: 100px;
}

.contenedor__todo{
    width: 100%;
    max-width: 800px;
    margin: auto;
    position: relative;
}

.caja__trasera{
    width: 100%;
    padding: 10px 20px;
    display: flex;
    justify-content: center;
    backdrop-filter: blur(10px);
    background-color: rgba(0, 128,255, 0.5);
}

.caja__trasera div{
    margin: 100px 40px;
    color: white;
    transition: all 500ms;
}

.caja__trasera div p,
.caja__trasera div button
{
    margin-top: 30px;
}

.caja__trasera div h3{
    font-weight: 400;
    font-size: 26px;
}

.caja__trasera button{
    padding: 10px 40px;
    border: 2px solid white;
    background: transparent;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    color:white;
    outline: none;
    transition: all 300ms;
    
}

.caja__trasera button:hover{
    background: white;
    color: #46a2fd;
    
}
.contenedor__login-register{
    display: flex;
    align-items: center;
    width: 100%;
    max-width: 300px;
    position: relative;
    top: -185px;
    left: 10px;
    transition: left 500ms cubic-bezier(0.175,0.885,0.320,1.275);
}

.contenedor__login-register form{
    width: 100%;
    padding: 80px 20px;
    background: white;
    position: absolute;
    border-radius: 20px;
}

.contenedor__login-register form h2{
    font-size: 30px;
    text-align: center;
    margin-bottom: 20px;
    color: #46a2fd;
    
}
.contenedor__login-register form input{
    width: 100%;
    margin-top: 20px;
    padding: 10px;
    border: none;
    background: #F2F2F2;
    font-size: 16px;
    outline: none;
}
.contenedor__login-register form button{
    padding: 10px 40px;
    margin-top: 40px;
    border: none;
    font-size: 14px;
    background: #46a2fd;
    color: white;
    cursor: pointer;
    outline: none;
    
}

.formulario__login{
    opacity: 1;
    display: block;
}

.formulario__register{
    display: none;
}

/* trabajando con responsive */

@media screen and (max-width:850px){
    main{
        margin-top: 50px;
    }
    .caja__trasera{
        max-width: 350px;
        height: 300px;
        flex-direction: column;
        margin: auto;
    }
    .caja__trasera div{
        margin: 0;
        position: absolute;
        
    }
    /* trabajando con formulario responsive */
    .contenedor__login-register{
        top: -10px;
        left: -5px;
        margin: auto;
    }
    .contenedor__login-register form{ 
        position: relative;
    }
    
}
        </style>
    </head>
    <body>
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__traser-login">
                    <h3>
                        Ya tienes cuenta?...
                    </h3>
                    <p>
                        Inicia sesion para entrar a la pagina 
                    </p>
                    <button id="btn__iniciar-sesion">
                        Iniciar Sesion
                    </button>
                </div>
                <div class="caja__traser-register">
                    <h3>
                        aun no tienes cuenta?...
                    </h3>
                    <p>
                        Registrate para que puedas iniciar sesion  
                    </p>
                    <button id="btn__iniciar-register">
                        Registrarse
                    </button>
                </div>
            </div>
            <div class="contenedor__login-register">
                <form action="" class="formulario__login">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Correo electronico">
                    <input type="password" placeholder="Contraseña">
                    <button><a href="/resources/views/sidebar/sidebar.blade.php">Entrar</a></button>
                </form>
                <form action="" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo">
                    <input type="text" placeholder="Correo electronico">
                    <input type="text" placeholder="Usuario">
                    <input type="password" placeholder="Contraseña">
                    <button>Registrarse</button>
                </form>
            </div>
            
        </div>
    </main>
    <script src="/resources/js/login-register.js"></script>
</body>
</html>
    </body>
</html>
