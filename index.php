<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- PAGE settings -->
    <link rel="icon" href="Img/m.png">
    <title>Portfólio - Perfil profissional</title>
    <meta name="description" content="Free Bootstrap 4 Pingendo Elegant template for unique events.">
    <meta name="keywords" content="Pingendo conference event elegant free template bootstrap 4">
    <!-- CSS dependencies -->
    <link rel="stylesheet" href="elegant.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">
    <!-- Script: Make my navbar transparent when the document is scrolled to top -->
    <script src="js/navbar-ontop.js"></script>
    <!-- Script: Animated entrance -->
    <script src="js/animate-in.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!--estily for slyder-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



</head>

<body class="text-center">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbar2SupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Início</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#tecnologias">Tecnologias</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Cover -->
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="Img/marcos.jpg" class="center-block img-fluid my-3 rounded-circle" width="400">
                </div>
            </div>
        </div>
    </div>


    <div class="py-5">
        <div class="container my-5">
            <div class="row mx-auto">
                <div class="col-md-12">
                    <h1 class="mb-3">Trabalhando duro pelo seu sucesso!</h1>
                    <p class="">Juntos mudando o <b>mundo</b>🌎</p>
                    <br /><br /><br /> <a class="btn btn-primary m-2" href="#register"><button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Solicitar Serviço</button></a>
                </div>
            </div>
        </div>
    </div>
    </br></br>


<!--Modal solicitar Serviço-INÌCIO-->
    <div class="w3-container">
      
        <div id="id01" class="w3-modal">
          <div class="w3-modal-content w3-animate-top w3-card-4">
            <header class="w3-container w3-teal"> 
              <span onclick="document.getElementById('id01').style.display='none'" 
              class="w3-button w3-display-topright">&times;</span>
              <h2>Solicite um Serviço</h2>
            </header>
            <div class="w3-container">
             
                
FORMULÁRIO AQUI


                
            </div>
            <footer class="w3-container w3-teal">
              <p>Eniei sei pedido</p>
            </footer>
          </div>
        </div>
      </div>
<!--Modal solicitar Serviço - FIM-->
     





    <!-- Tecnologias  -->
    <div id="tecnologias">
        <div class="py-5 section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="mb-4">Tecnologias</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-6">
                        <svg id="php" class="center-block img-fluid d-block" style="width:48px;height:48px"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12,18.08C5.37,18.08 0,15.36 0,12C0,8.64 5.37,5.92 12,5.92C18.63,5.92 24,8.64 24,12C24,15.36 18.63,18.08 12,18.08M6.81,10.13C7.35,10.13 7.72,10.23 7.9,10.44C8.08,10.64 8.12,11 8.03,11.47C7.93,12 7.74,12.34 7.45,12.56C7.17,12.78 6.74,12.89 6.16,12.89H5.29L5.82,10.13H6.81M3.31,15.68H4.75L5.09,13.93H6.32C6.86,13.93 7.3,13.87 7.65,13.76C8,13.64 8.32,13.45 8.61,13.18C8.85,12.96 9.04,12.72 9.19,12.45C9.34,12.19 9.45,11.89 9.5,11.57C9.66,10.79 9.55,10.18 9.17,9.75C8.78,9.31 8.18,9.1 7.35,9.1H4.59L3.31,15.68M10.56,7.35L9.28,13.93H10.7L11.44,10.16H12.58C12.94,10.16 13.18,10.22 13.29,10.34C13.4,10.46 13.42,10.68 13.36,11L12.79,13.93H14.24L14.83,10.86C14.96,10.24 14.86,9.79 14.56,9.5C14.26,9.23 13.71,9.1 12.91,9.1H11.64L12,7.35H10.56M18,10.13C18.55,10.13 18.91,10.23 19.09,10.44C19.27,10.64 19.31,11 19.22,11.47C19.12,12 18.93,12.34 18.65,12.56C18.36,12.78 17.93,12.89 17.35,12.89H16.5L17,10.13H18M14.5,15.68H15.94L16.28,13.93H17.5C18.05,13.93 18.5,13.87 18.85,13.76C19.2,13.64 19.5,13.45 19.8,13.18C20.04,12.96 20.24,12.72 20.38,12.45C20.53,12.19 20.64,11.89 20.7,11.57C20.85,10.79 20.74,10.18 20.36,9.75C20,9.31 19.37,9.1 18.54,9.1H15.79L14.5,15.68Z" />
                        </svg>
                    </div>
                    <div class="col-md-3 col-6">
                        <svg id="js" class="center-block img-fluid d-block" style="width:48px;height:48px"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M3,3H21V21H3V3M7.73,18.04C8.13,18.89 8.92,19.59 10.27,19.59C11.77,19.59 12.8,18.79 12.8,17.04V11.26H11.1V17C11.1,17.86 10.75,18.08 10.2,18.08C9.62,18.08 9.38,17.68 9.11,17.21L7.73,18.04M13.71,17.86C14.21,18.84 15.22,19.59 16.8,19.59C18.4,19.59 19.6,18.76 19.6,17.23C19.6,15.82 18.79,15.19 17.35,14.57L16.93,14.39C16.2,14.08 15.89,13.87 15.89,13.37C15.89,12.96 16.2,12.64 16.7,12.64C17.18,12.64 17.5,12.85 17.79,13.37L19.1,12.5C18.55,11.54 17.77,11.17 16.7,11.17C15.19,11.17 14.22,12.13 14.22,13.4C14.22,14.78 15.03,15.43 16.25,15.95L16.67,16.13C17.45,16.47 17.91,16.68 17.91,17.26C17.91,17.74 17.46,18.09 16.76,18.09C15.93,18.09 15.45,17.66 15.09,17.06L13.71,17.86Z" />
                        </svg>
                    </div>
                    <div class="col-md-3 col-6">
                        <svg id="html-5" name='html-5' class="center-block img-fluid d-block"
                            style="width:48px;height:48px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12,17.56L16.07,16.43L16.62,10.33H9.38L9.2,8.3H16.8L17,6.31H7L7.56,12.32H14.45L14.22,14.9L12,15.5L9.78,14.9L9.64,13.24H7.64L7.93,16.43L12,17.56M4.07,3H19.93L18.5,19.2L12,21L5.5,19.2L4.07,3Z" />
                        </svg>
                    </div>
                    <div class="col-md-3 col-6">
                        <svg id="css" name='css' class="center-block img-fluid d-block" style="width:48px;height:48px"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M5,3L4.35,6.34H17.94L17.5,8.5H3.92L3.26,11.83H16.85L16.09,15.64L10.61,17.45L5.86,15.64L6.19,14H2.85L2.06,18L9.91,21L18.96,18L20.16,11.97L20.4,10.76L21.94,3H5Z" />
                        </svg>
                    </div>
                    <div class="col-md-3 col-6">
                        <svg id="vue" class="center-block img-fluid d-block" style="width:48px;height:48px"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M2,3H5.5L12,15L18.5,3H22L12,21L2,3M6.5,3H9.5L12,7.58L14.5,3H17.5L12,13.08L6.5,3Z" />
                        </svg>
                    </div>
                    <div class="col-md-3 col-6">
                        <svg id="git" name='GIT' class="center-block img-fluid d-block" style="width:48px;height:48px"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M2.6,10.59L8.38,4.8L10.07,6.5C9.83,7.35 10.22,8.28 11,8.73V14.27C10.4,14.61 10,15.26 10,16A2,2 0 0,0 12,18A2,2 0 0,0 14,16C14,15.26 13.6,14.61 13,14.27V9.41L15.07,11.5C15,11.65 15,11.82 15,12A2,2 0 0,0 17,14A2,2 0 0,0 19,12A2,2 0 0,0 17,10C16.82,10 16.65,10 16.5,10.07L13.93,7.5C14.19,6.57 13.71,5.55 12.78,5.16C12.35,5 11.9,4.96 11.5,5.07L9.8,3.38L10.59,2.6C11.37,1.81 12.63,1.81 13.41,2.6L21.4,10.59C22.19,11.37 22.19,12.63 21.4,13.41L13.41,21.4C12.63,22.19 11.37,22.19 10.59,21.4L2.6,13.41C1.81,12.63 1.81,11.37 2.6,10.59Z" />
                        </svg>
                    </div>
                    <div class="col-md-3 col-6">
                        <svg id="node" name='NODE' class="center-block img-fluid d-block" style="width:48px;height:48px"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M12,1.85C11.73,1.85 11.45,1.92 11.22,2.05L3.78,6.35C3.3,6.63 3,7.15 3,7.71V16.29C3,16.85 3.3,17.37 3.78,17.65L5.73,18.77C6.68,19.23 7,19.24 7.44,19.24C8.84,19.24 9.65,18.39 9.65,16.91V8.44C9.65,8.32 9.55,8.22 9.43,8.22H8.5C8.37,8.22 8.27,8.32 8.27,8.44V16.91C8.27,17.57 7.59,18.22 6.5,17.67L4.45,16.5C4.38,16.45 4.34,16.37 4.34,16.29V7.71C4.34,7.62 4.38,7.54 4.45,7.5L11.89,3.21C11.95,3.17 12.05,3.17 12.11,3.21L19.55,7.5C19.62,7.54 19.66,7.62 19.66,7.71V16.29C19.66,16.37 19.62,16.45 19.55,16.5L12.11,20.79C12.05,20.83 11.95,20.83 11.88,20.79L10,19.65C9.92,19.62 9.84,19.61 9.79,19.64C9.26,19.94 9.16,20 8.67,20.15C8.55,20.19 8.36,20.26 8.74,20.47L11.22,21.94C11.46,22.08 11.72,22.15 12,22.15C12.28,22.15 12.54,22.08 12.78,21.94L20.22,17.65C20.7,17.37 21,16.85 21,16.29V7.71C21,7.15 20.7,6.63 20.22,6.35L12.78,2.05C12.55,1.92 12.28,1.85 12,1.85M14,8C11.88,8 10.61,8.89 10.61,10.39C10.61,12 11.87,12.47 13.91,12.67C16.34,12.91 16.53,13.27 16.53,13.75C16.53,14.58 15.86,14.93 14.3,14.93C12.32,14.93 11.9,14.44 11.75,13.46C11.73,13.36 11.64,13.28 11.53,13.28H10.57C10.45,13.28 10.36,13.37 10.36,13.5C10.36,14.74 11.04,16.24 14.3,16.24C16.65,16.24 18,15.31 18,13.69C18,12.08 16.92,11.66 14.63,11.35C12.32,11.05 12.09,10.89 12.09,10.35C12.09,9.9 12.29,9.3 14,9.3C15.5,9.3 16.09,9.63 16.32,10.66C16.34,10.76 16.43,10.83 16.53,10.83H17.5C17.55,10.83 17.61,10.81 17.65,10.76C17.69,10.72 17.72,10.66 17.7,10.6C17.56,8.82 16.38,8 14,8Z" />
                        </svg>
                    </div>
                    <div class="col-md-3 col-6">
                        <svg id="sql" name='SQL' class="center-block img-fluid d-block" style="width:48px;height:48px"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M18.68,12.32C16.92,10.56 14.07,10.57 12.32,12.33C10.56,14.09 10.56,16.94 12.32,18.69C13.81,20.17 16.11,20.43 17.89,19.32L21,22.39L22.39,21L19.3,17.89C20.43,16.12 20.17,13.8 18.68,12.32M17.27,17.27C16.29,18.25 14.71,18.24 13.73,17.27C12.76,16.29 12.76,14.71 13.74,13.73C14.71,12.76 16.29,12.76 17.27,13.73C18.24,14.71 18.24,16.29 17.27,17.27M10.9,20.1C10.25,19.44 9.74,18.65 9.42,17.78C6.27,17.25 4,15.76 4,14V17C4,19.21 7.58,21 12,21V21C11.6,20.74 11.23,20.44 10.9,20.1M4,9V12C4,13.68 6.07,15.12 9,15.7C9,15.63 9,15.57 9,15.5C9,14.57 9.2,13.65 9.58,12.81C6.34,12.3 4,10.79 4,9M12,3C7.58,3 4,4.79 4,7C4,9 7,10.68 10.85,11H10.9C12.1,9.74 13.76,9 15.5,9C16.41,9 17.31,9.19 18.14,9.56C19.17,9.09 19.87,8.12 20,7C20,4.79 16.42,3 12,3Z" />
                        </svg>
                    </div>
                    <div class="col-md-3 col-6">
                        <svg id="bootstrap" class="center-block img-fluid d-block" name='bootstrap'
                            style="width:48px;height:48px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M11.79 11.5H9.72V8.19H12.19C13.45 8.19 14.15 8.75 14.15 9.78C14.15 10.9 13.32 11.5 11.79 11.5M12.16 12.63H9.72V16.27L12.28 16.27C13.84 16.27 14.66 15.64 14.66 14.44S13.81 12.63 12.16 12.63M22 5.31V18.69C22 20.5 20.5 22 18.69 22H5.31C3.5 22 2 20.5 2 18.69V5.31C2 3.5 3.5 2 5.31 2H18.69C20.5 2 22 3.5 22 5.31M16 14.5C16 13.12 15.08 12.13 13.67 11.95V11.89C14.67 11.71 15.46 10.71 15.46 9.63C15.46 8.08 14.26 7.05 12.5 7.05H8.43V17.41H12.47C14.68 17.41 16 16.32 16 14.5Z" />
                        </svg>
                    </div>
                    <div class="col-md-3 col-6">
                        <svg id="char.js" name='char.js' class="center-block img-fluid d-block"
                            style="width:48px;height:48px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M3,14L3.5,14.07L8.07,9.5C7.89,8.85 8.06,8.11 8.59,7.59C9.37,6.8 10.63,6.8 11.41,7.59C11.94,8.11 12.11,8.85 11.93,9.5L14.5,12.07L15,12C15.18,12 15.35,12 15.5,12.07L19.07,8.5C19,8.35 19,8.18 19,8A2,2 0 0,1 21,6A2,2 0 0,1 23,8A2,2 0 0,1 21,10C20.82,10 20.65,10 20.5,9.93L16.93,13.5C17,13.65 17,13.82 17,14A2,2 0 0,1 15,16A2,2 0 0,1 13,14L13.07,13.5L10.5,10.93C10.18,11 9.82,11 9.5,10.93L4.93,15.5L5,16A2,2 0 0,1 3,18A2,2 0 0,1 1,16A2,2 0 0,1 3,14Z" />
                        </svg>
                    </div>
                    <div class="col-md-3 col-6">
                        <svg id="python" name='PYTHON' class="center-block img-fluid d-block"
                            style="width:48px;height:48px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M19.14,7.5A2.86,2.86 0 0,1 22,10.36V14.14A2.86,2.86 0 0,1 19.14,17H12C12,17.39 12.32,17.96 12.71,17.96H17V19.64A2.86,2.86 0 0,1 14.14,22.5H9.86A2.86,2.86 0 0,1 7,19.64V15.89C7,14.31 8.28,13.04 9.86,13.04H15.11C16.69,13.04 17.96,11.76 17.96,10.18V7.5H19.14M14.86,19.29C14.46,19.29 14.14,19.59 14.14,20.18C14.14,20.77 14.46,20.89 14.86,20.89A0.71,0.71 0 0,0 15.57,20.18C15.57,19.59 15.25,19.29 14.86,19.29M4.86,17.5C3.28,17.5 2,16.22 2,14.64V10.86C2,9.28 3.28,8 4.86,8H12C12,7.61 11.68,7.04 11.29,7.04H7V5.36C7,3.78 8.28,2.5 9.86,2.5H14.14C15.72,2.5 17,3.78 17,5.36V9.11C17,10.69 15.72,11.96 14.14,11.96H8.89C7.31,11.96 6.04,13.24 6.04,14.82V17.5H4.86M9.14,5.71C9.54,5.71 9.86,5.41 9.86,4.82C9.86,4.23 9.54,4.11 9.14,4.11C8.75,4.11 8.43,4.23 8.43,4.82C8.43,5.41 8.75,5.71 9.14,5.71Z" />
                        </svg>
                    </div>
                    <div class="col-md-3 col-6">
                        <svg id="ruby" name='RUBY' class="center-block img-fluid d-block" style="width:48px;height:48px"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M18.8,2.07C21.32,2.5 22.04,4.23 22,6.04V6L20.86,20.93L6.08,21.94H6.09C4.86,21.89 2.13,21.77 2,17.95L3.37,15.45L6.14,21.91L8.5,14.29L8.45,14.3L8.47,14.28L16.18,16.74L14.19,8.96L21.54,8.5L15.75,3.76L18.8,2.06V2.07M2,17.91V17.93L2,17.91V17.91M6.28,6.23C9.24,3.28 13.07,1.54 14.54,3.03C16,4.5 14.46,8.12 11.5,11.06C8.5,14 4.73,15.84 3.26,14.36C1.79,12.87 3.3,9.17 6.27,6.23H6.28Z" />
                        </svg>
                    </div>
                    <div class="col-md-3 col-6">
                        <svg id="api" name='API' class="center-block img-fluid d-block" style="width:48px;height:48px"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M7 7H5A2 2 0 0 0 3 9V17H5V13H7V17H9V9A2 2 0 0 0 7 7M7 11H5V9H7M14 7H10V17H12V13H14A2 2 0 0 0 16 11V9A2 2 0 0 0 14 7M14 11H12V9H14M20 9V15H21V17H17V15H18V9H17V7H21V9Z" />
                        </svg>
                    </div>
                    <div class="col-md-3 col-6">
                        <svg id="teamview" name='TEAMVIEW' class="center-block img-fluid d-block"
                            style="width:48px;height:48px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M10.04 9.2L9.3 11H14.75L14 9.2L19.55 12L14 14.8L14.75 13H9.3L10.04 14.8L4.5 12L10.04 9.2M20.83 22H3.17C2.53 22 2 21.5 2 20.83V3.17C2 2.53 2.53 2 3.17 2H20.83C21.5 2 22 2.53 22 3.17V20.83C22 21.47 21.5 22 20.83 22M11.93 3.76C7.41 3.82 3.78 7.5 3.76 12C3.72 16.5 7.35 20.2 11.86 20.24H12C16.53 20.18 20.18 16.53 20.24 12C20.31 7.5 16.74 3.83 12.26 3.76C12.15 3.75 12.04 3.76 11.93 3.76Z" />
                        </svg>
                    </div>
                    <div class="col-md-3 col-6">
                        <svg id="teamview" name='TEAMVIEW' class="center-block img-fluid d-block"
                            style="width:48px;height:48px" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M17,16.47V7.39L11,11.93M2.22,9.19C1.92,8.87 1.91,8.37 2.2,8.04L3.4,6.93C3.6,6.75 4.09,6.67 4.45,6.93L7.87,9.54L15.8,2.29C16.12,1.97 16.67,1.84 17.3,2.17L21.3,4.08C21.66,4.29 22,4.62 22,5.23V18.73C22,19.13 21.71,19.56 21.4,19.73L17,21.83C16.68,21.96 16.08,21.84 15.87,21.63L7.85,14.33L4.45,16.93C4.07,17.19 3.6,17.12 3.4,16.93L2.2,15.83C1.88,15.5 1.92,14.96 2.25,14.63L5.25,11.93" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </br></br></br>

    <!-- Schedule -->

    <div class="container my-5 bg-primary animate-in-down">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-white mt-4">Projetos Desenvolvidos</h1>
            </div>
        </div>

        <!-- Swiper -->
        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <picture><a href="https://estoque.lourencoautopecas.com.br/"><img src="Img/estoque.png" alt=""></a>
                        <figcaption><span>ESTOQUE - Entrada e saída de produtos</figcaption>
                    </picture></a>
                </div>
                <div class="swiper-slide">
                    <picture><a href="https://rede.lourencoautopecas.com.br/"><img src="Img/loja.png" alt=""></a>
                        <figcaption><span>LOJA - expor produtos</span></figcaption>
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture><a href="https://portfolio.lourencoautopecas.com.br/"><img src="Img/portfolio.png"
                                alt=""></a>
                        <figcaption><span>PORTFOLIO - expor habilidades</span></figcaption>
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture><a href="https://calculadora.lourencoautopecas.com.br/"><img src="Img/calculadora.png"
                                alt=""></a>
                        <figcaption><span>CALCULADORA - Constrido com vanila JS</span></figcaption>
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture><a href="#"><img src="Img/construção.png" alt=""></a>
                        <figcaption><span>EM DESENVOLVIMENTO</span></figcaption>
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture><a href="#"><img src="Img/construção.png" alt=""></a>
                        <figcaption><span>EM DESENVOLVIMENTO</span></figcaption>
                    </picture>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    </br></br></br></br></br></br></br></br>




    <!-- contato -->
    <div class="" id="contato"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-lg-3 bg-light animate-in-down">
                <a href="https://www.linkedin.com/in/marcos-louren%C3%A7o-20a041141/">
                    <img src="Img/linkedin.png" class="center-block img-fluid my-3 rounded-circle" width="300">
                    <h3 class="mb-0">
                        <b class="text">Linkedin</b>
                    </h3>
                    <p class="text-muted">Perfil profissional</p>
                </a>
            </div>
            <div class="col-6 col-lg-3 animate-in-down">
                <a href="https://github.com/skymarkos7">
                    <img src="Img/github.png" class="center-block img-fluid my-3 rounded-circle" width="300">
                    <h3 class="mb-0">
                        <b>GitHub</b>
                    </h3>
                    <p class="text-muted">Portifólio</p>
                </a>
            </div>
            <div class="col-6 col-lg-3 bg-primary animate-in-down">
                <a href="https://mail.google.com">
                    <img src="Img/email_14410.png" class="center-block img-fluid my-3 rounded-circle" width="300">
                    <h3 class="mb-0">
                        <b>E-mail</b>
                    </h3>
                    <p class="">Entre em contato</p>
                </a>
            </div>
            <div class="col-6 mask col-lg-3 bg-dark animate-in-down">
                <a
                    href="https://api.whatsapp.com/send?phone=5582996909200&amp;text=Oi,%20Enviei%20essa%20mensagem%20pelo%20portfolio#">
                    <img src="Img/whatsapp.png" class="center-block img-fluid my-3 rounded-circle" width="300">
                    <h3 class="mb-0">
                        <b>Whatsapp</b>
                    </h3>
                    <p class="">82 - 996909200</p>
                </a>
            </div>
        </div>
    </div>


</body>

<script>// Obtém a data/hora atual
    var data = new Date();
    // Guarda cada pedaço em uma variável
    var dia = data.getDate();           // 1-31
    var mes = data.getMonth() + 1;          // 0-11 (zero=janeiro)
    var ano = data.getFullYear();       // 4 dígitos
    var hora = data.getHours();          // 0-23
    var min = data.getMinutes();        // 0-59
    var seg = data.getSeconds();        // 0-59    
</script>

<!-- Call to action -->
<!-- Footer -->
<footer class="text-md-left text-center p-4 text-light">
    <div class="container">
        <div class="row">
            <div class="my-3 col-lg-4 col-md-1" style="transition: all 0.25s;">
                <h3>Me deixe uma mensagem</h3>
                <form>
                    <fieldset class="form-group my-3">
                        <input type="email" class="form-control" id="Input Email" placeholder="Digite seu Email">
                    </fieldset>
                    <fieldset class="form-group my-3">
                        <input type="message" class="form-control" id="Input Message" placeholder="Digite sua mensagem">
                    </fieldset>
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted" id="Copyright"><script>document.getElementById("Copyright").innerHTML="© Copyright 2018 - "+ano+" Marcos.  Todos direitos reservados.";</script></p>
            </div>
        </div>
    </div>
</footer>








<!-- JavaScript dependencies -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<!-- Script: Smooth scrolling between anchors in a same page -->
<script src="js/smooth-scroll.js"></script>