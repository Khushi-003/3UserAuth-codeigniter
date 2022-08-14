<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Manager</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,100italic,100,300,300italic,900italic,900,700,700italic,500italic,500,400italic);

        body {
            font-family: 'Roboto', sans-serif;
        }

        .publicaciones-blog-home {
            padding-bottom: 50px;
            background: url("") no-repeat fixed center center;
            background-size: 100% auto;
            background-color: #f1f1f1;
        }

        .publicaciones-blog-home h2 {
            text-align: center;
            font-weight: 300;
            margin-bottom: 30px;
            font-size: 44px;
            margin-top: 70px;
        }

        .publicaciones-blog-home h2 b {
            color: #2BBCDE;
        }

        .publicaciones-blog-home .fondo-publicacion-home {
            background: #ffffff;
            border-radius: 3px;
            overflow: hidden;
            height: 400px;
            margin-bottom: 20px;
            display: block;
            color: inherit;
            text-decoration: none;
            position: relative;
        }

        .publicaciones-blog-home .fondo-publicacion-home:hover h3 {
            color: #2BBCDE;
            /*    box-shadow: 0px 4px 3px 3px rgba(0, 0, 0, 0.08);*/
        }

        .publicaciones-blog-home .fondo-publicacion-home:hover .mascara-enlace-blog-home {
            height: 400px;
            width: 100%;
            color: #aaa;
            background-color: #2BBCDE;
            position: absolute;
            top: 0;
            opacity: 0.95;
            -webkit-transition: all 0.4s ease-out 0s;
            -o-transition: all 0.4s ease-out 0s;
            transition: all 0.4s ease-out 0s;
        }

        .publicaciones-blog-home .black {
            background: #2BBCDE;
        }

        .publicaciones-blog-home .fondo-publicacion-home .img-publicacion-principal-home {
            display: inline-block;
            width: 50%;
            overflow: hidden;
            height: 100%;
        }

        .publicaciones-blog-home .fondo-publicacion-home .img-publicacion-principal-home img {
            height: 100%;
            width: auto;
        }

        .publicaciones-blog-home .fondo-publicacion-home .contenido-publicacion-principal-home {
            display: inline-block;
            vertical-align: top;
            width: 49%;
            padding: 0 10px;
        }

        .publicaciones-blog-home .fondo-publicacion-home .contenido-publicacion-principal-home h3 {
            font-weight: 900;
            color: #fff;
            text-transform: uppercase;
            font-size: 30px;
        }

        .publicaciones-blog-home .fondo-publicacion-home .contenido-publicacion-principal-home p {
            color: #ffffff;
            font-size: 16px;
            font-weight: 300;
        }

        .publicaciones-blog-home .fondo-publicacion-home .contenido-publicacion-home {
            padding: 0 10px;
        }

        .publicaciones-blog-home .fondo-publicacion-home .contenido-publicacion-home h3 {
            font-weight: 900;
            font-size: 20px;
            text-transform: uppercase;
        }

        .publicaciones-blog-home .fondo-publicacion-home .img-publicacion-home {
            overflow: hidden;
            max-height: 180px;
        }

        .mascara-enlace-blog-home {
            height: 400px;
            width: 0%;
            color: #aaa;
            background-color: #2BBCDE;
            position: absolute;
            top: 0;
            opacity: 0.0;
            -webkit-transition: all 0.4s ease-out 0s;
            -o-transition: all 0.4s ease-out 0s;
            transition: all 0.4s ease-out 0s;
            text-align: center;
            padding-top: 180px;
        }

        .mascara-enlace-blog-home span {
            text-align: center;
            max-height: 400px;
            border: 1px solid #fff;
            display: inline-block;
            padding: 10px 30px;
            border-radius: 3px;
            color: #fff;
            font-weight: 900;
            font-size: 16px;
        }

        .publicaciones-blog-home .todas-las-publicaciones-home {
            background: #2BBCDE;
            height: 400px;
            width: 100%;
            display: inline-block;
            padding: 20px;
            text-decoration: none;
            border-radius: 3px;
        }

        .publicaciones-blog-home .todas-las-publicaciones-home span {
            color: #fff;
            font-weight: 900;
            text-transform: uppercase;
            font-size: 25px;
            line-height: 26px;
        }

        @media (max-width: 768px) {
            .publicaciones-blog-home h2 {
                text-align: center;
                font-weight: 300;
                margin-bottom: 30px;
                font-size: 34px;
                margin-top: 70px;
            }

            .publicaciones-blog-home .fondo-publicacion-home {
                background: #ffffff;
                border-radius: 3px;
                overflow: hidden;
                height: inherit;
                margin-bottom: 20px;
                display: block;
                color: inherit;
                text-decoration: none;
                position: relative;
            }

            .publicaciones-blog-home .fondo-publicacion-home .img-publicacion-principal-home {
                display: inline-block;
                width: 100%;
                overflow: hidden;
                height: auto;
            }

            .publicaciones-blog-home .fondo-publicacion-home .img-publicacion-principal-home img {
                height: auto;
                width: 100%;
            }

            .publicaciones-blog-home .black {
                background: #fff;
            }

            .publicaciones-blog-home .fondo-publicacion-home .contenido-publicacion-principal-home {
                display: inline-block;
                vertical-align: top;
                width: 100%;
                padding: 0 10px;
            }

            .publicaciones-blog-home .fondo-publicacion-home .contenido-publicacion-principal-home h3 {
                font-weight: 900;
                color: #333;
                text-transform: uppercase;
                font-size: 20px;
            }

            .publicaciones-blog-home .fondo-publicacion-home .contenido-publicacion-principal-home p {
                color: #333;
                font-size: 14px;
                font-weight: 400;
            }

            .publicaciones-blog-home .todas-las-publicaciones-home {
                background: #2BBCDE;
                height: 100%;
                width: 100%;
                display: inline-block;
                padding: 20px;
                text-decoration: none;
                border-radius: 3px;
            }
        }
    </style>
</head>

<body>
    <section class="publicaciones-blog-home">
        <div class="container">
            <div class="">

                <h2>Lorem <b>Ipsum</b></h2>
                <div class="row-page row">
                    <div class="col-page col-sm-8 col-md-6">
                        <a href="" class="black fondo-publicacion-home">
                            <div class="img-publicacion-principal-home">
                                <img class="" src="https://placeholdit.imgix.net/~text?txtsize=34&txt=&w=500&h=300">
                            </div>
                            <div class="contenido-publicacion-principal-home">
                                <h3>Neque porro quisquam est qui dolorem ipsum</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                            </div>
                            <div class="mascara-enlace-blog-home">
                                <span>Lorem </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-page col-sm-4 col-md-3">
                        <a href="" class="fondo-publicacion-home">
                            <div class="img-publicacion-home">
                                <img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=34&txt=&w=500&h=300">
                            </div>
                            <div class="contenido-publicacion-home">
                                <h3>Neque porro quisquam est qui dolorem ipsum</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                            </div>
                            <div class="mascara-enlace-blog-home">
                                <span>Lorem </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-page col-sm-4 col-md-3">
                        <a href="" class="fondo-publicacion-home">
                            <div class="img-publicacion-home">
                                <img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=34&txt=&w=500&h=300">
                            </div>
                            <div class="contenido-publicacion-home">
                                <h3>Neque porro quisquam est qui dolorem ipsum</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                            </div>
                            <div class="mascara-enlace-blog-home">
                                <span>Lorem </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-page col-sm-4 col-md-3">
                        <a href="" class="fondo-publicacion-home">
                            <div class="img-publicacion-home">
                                <img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=34&txt=&w=500&h=300">
                            </div>
                            <div class="contenido-publicacion-home">
                                <h3>Neque porro quisquam est qui dolorem ipsum</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                            </div>
                            <div class="mascara-enlace-blog-home">
                                <span>Lorem </span>
                            </div>
                        </a>
                    </div>
                    <div class="hidden-sm col-page col-sm-4 col-md-3">
                        <a href="" class="fondo-publicacion-home">
                            <div class="img-publicacion-home">
                                <img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=34&txt=&w=500&h=300">
                            </div>
                            <div class="contenido-publicacion-home">
                                <h3>Neque porro quisquam est qui dolorem ipsum</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                            </div>
                            <div class="mascara-enlace-blog-home">
                                <span>Lorem </span>
                            </div>
                        </a>
                    </div>
                    <div class="hidden-sm col-page col-sm-4 col-md-3">
                        <a href="" class="fondo-publicacion-home">
                            <div class="img-publicacion-home">
                                <img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=34&txt=&w=500&h=300">
                            </div>
                            <div class="contenido-publicacion-home">
                                <h3>Neque porro quisquam est qui dolorem ipsum</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                            </div>
                            <div class="mascara-enlace-blog-home">
                                <span>Lorem </span>
                            </div>
                        </a>
                    </div>
                    <div class="col-page col-sm-4 col-md-3">
                        <a href="#" class="todas-las-publicaciones-home">
                            <span>Neque porro quisquam est qui dolorem ipsum</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>