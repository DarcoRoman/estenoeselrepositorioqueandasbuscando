 <footer>
    <div class="footerap">
      <figure class="logotipe">
        <img class="" src="imagenes/invie-white.png" alt="logotipe">
      </figure>
      <div class="footermenu">
        <nav>
          <a href="index.html">Inicio</a>
          <a href="quehacemos.html">Que hacemos</a>
          <a href="noticias.html">Noticias</a>
          <a href="anunciantes.html">Anunciantes</a>
        </nav>
      </div>
      <div class="socialmedia">
        <ul>
          <li>
            <a href="https://www.facebook.com/ONG-Rescate-121977847837374/?ref=hl" style="color: #FFF"><i class="fa fa-facebook"></i> Facebook</a>
          </li>
          <li>
            <a href="https://twitter.com/ongrescate" style="color: #FFF"><i class="fa fa-twitter"></i> Twitter</a>
          </li>
          <li>
            <a href="https://www.youtube.com/user/ongrescate" style="color: #FFF"><i class="fa fa-youtube"></i> Youtube</a>
          </li>
          <li>
            <a href="https://plus.google.com/+OngrescateOrgInt" style="color: #FFF"><i class="fa fa-google-plus"></i> Google</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="footerbot">
        <a href="" class="politica">Politicas de Privacidad</a>
        <a href="tel:+573024456678" class="info"><strong>Telefono </strong><span>3024456678</span></a>
        <a href="mailto:contacto@ong.com" class="info"><strong>E-mail</strong> <span>contacto@ong.com</span></a>
      </nav>
    </div>
   </footer>
   <?php wp_footer(); ?>
  </body>
  <style>
      /* --------------------------footer----------------------------- */
.footerap {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: auto;
}
.logotipe {
  margin: 10px 40px;
}
.footermenu {
  display: flex;
  margin: 10px 40px;/
}
.footermenu a {
  font-size: 25px;
  margin: 5px 10px;
  font-family: "Allerta";
  color: white;
  text-decoration: none;
}
.socialmedia {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 220px;
  margin: 10px 40px;
  text-decoration: none;
  color: blue;
}
.socialmedia ul {
  padding: 0;
}
.socialmedia li {
  display: inline-block;
  margin: 5px;
  font-size: 20px;
}
.socialmedia a {
  text-decoration: none;
}
.footerbot {
  display: flex;
  justify-content: center;
  margin-bottom: 15px;
}
.info {
  font-size: 20px;
  margin: 5px 10px;
  font-family: "Allerta";
  color: white;
  text-decoration: none;
}
.politica {
  color: white;
  font-size: 20px;
  margin: 5px 10px;
  font-family: "Allerta";
  color: white;
}
  </style>
</html>
