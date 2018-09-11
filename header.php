<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CABECERA</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="css/cabecera.css"/>
    <script src="https://use.fontawesome.com/ccb65bde17.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  </head>
  <body class="body">
    <section id="portada" class="portada"> <!-- portada -->
      <header id="header" class="header-contenedor">
        <figure class="figure"><!-- logotipo -->
          <a href="index.html">
          <img class="logotipe-invie" src="imagenes/invie.png" width="150" height="60" alt="invie logotipo"/>
          </a>
        </figure>
        <nav class="menu"> <!-- menu -->
          <ul>
            <li>
              <a href="index.html">INICIO</a>
            </li>
                  <li>
                    <a href="quehacemos.html">QUE HACEMOS</a>
                  </li>
            <li>
              <a href="noticias.html">NOTICIAS</a>
            </li>

            <li>
              <a href="anunciantes.html">ANUNCIANTES</a>
            </li>
          </ul>
        </nav>
      </header>
    </section>
<?php wp_head(); ?>
<style>
    html {
  min-height: 100%;
  position: relative;
}
body {
  width: 100%;
  height: 100%;
  margin: 0;
  font-family: 'Oswald', sans-serif;
  font-size: 17px;
}
footer {
  width: 100%;
  bottom: 0;
  margin: 0;
  position: absolute;
  display: flex;
  display: block;
  background-color: #9f9f9f;
}
h1{
  font-weight: bold;
}
.portada{
  background: #28abda;
  font-family: 'Merriweather', serif;
  border-bottom: black solid 3px;
}
.figure{
  display: inline-block;
  perspective: 400px;
  perspective-origin: bottom;
}
.figure:hover .logotipe-invie{
  transform: translateZ(70px);
}
.logotipe-invie{
  transition: .5s;
}
.menu{
  font-size: 24px;
  display: inline-block;
  position: absolute;
}
.menu a{
  font-weight: bold;
  color: white;
  text-decoration: none;
  font-size: 16px;
  transition: .5s;
}
.menu a:hover{
color: #605d5d;
}

.menu li{
  display: inline-block;
  margin-left: 30px;
  margin-top: 10px;
}
.header-contenedor{
  margin: auto;
  width: 900px

}
</style>
