  <style>
      .site-footer {
          background-color: var(--easyBlue);
          padding: 45px 0 20px;
          font-size: 15px;
          line-height: 24px;
          color: white;
          font-family: "Montserrat", sans-serif;
      }

      .site-footer hr {
          border-top-color: #bbb;
          opacity: 0.5
      }

      .site-footer hr.small {
          margin: 20px 0
      }

      .site-footer h6 {
          color: white;
          font-size: 18px;
          /* text-transform: uppercase; */
          margin-top: 5px;
          letter-spacing: 2px
      }

      .site-footer a {
          color: white;
      }

      .site-footer a:hover {
          /* color: #3366cc; */
          text-decoration: none;
      }

      .footer-links {
          padding-left: 0;
          list-style: none
      }

      .footer-links li {
          display: block
      }

      .footer-links a {
          color: white
      }

      .footer-links a:active,
      .footer-links a:focus,
      .footer-links a:hover {
          /* color: #3366cc; */
          text-decoration: none;
      }

      .footer-links.inline li {
          display: inline-block
      }

      .site-footer .social-icons {
          text-align: right
      }

      .site-footer .social-icons a {
          width: 40px;
          height: 40px;
          line-height: 40px;
          margin-left: 6px;
          margin-right: 0;
          border-radius: 100%;
          background-color: white
      }

      .copyright-text {
          margin: 0
      }

      @media (max-width:991px) {
          .site-footer [class^=col-] {
              margin-bottom: 30px
          }
      }

      @media (max-width:767px) {
          .site-footer {
              padding-bottom: 0
          }

          .site-footer .copyright-text,
          .site-footer .social-icons {
              text-align: center
          }
      }

      .social-icons {
          padding-left: 0;
          margin-bottom: 0;
          list-style: none
      }

      .social-icons li {
          display: inline-block;
          margin-bottom: 4px
      }

      .social-icons li.title {
          margin-right: 15px;
          text-transform: uppercase;
          color: #96a2b2;
          font-weight: 700;
          font-size: 13px
      }

      .social-icons a {
          background-color: #eceeef;
          color: #033777;
          font-size: 16px;
          display: inline-block;
          line-height: 44px;
          width: 44px;
          height: 44px;
          text-align: center;
          margin-right: 8px;
          border-radius: 100%;
          -webkit-transition: all .2s linear;
          -o-transition: all .2s linear;
          transition: all .2s linear
      }

      .social-icons a:active,
      .social-icons a:focus,
      .social-icons a:hover {
          color: #fff;
          background-color: #29aafe
      }

      .social-icons.size-sm a {
          line-height: 34px;
          height: 34px;
          width: 34px;
          font-size: 14px
      }

      .social-icons a.facebook:hover {
          background-color: #3b5998
      }

      .social-icons a.twitter:hover {
          background-color: #00aced
      }

      .social-icons a.whatsapp:hover {
          background-color: #25d366
      }

      .social-icons a.dribbble:hover {
          background-color: #ea4c89
      }

      @media (max-width:767px) {
          .social-icons li.title {
              display: block;
              margin-right: 0;
              font-weight: 600
          }
      }

      .container-footer_ssrp {
          display: flex;
          align-items: center;
      }

      .container-footer_ssrp {
          font-size: 0.8rem
      }

      .container-footer_ssrp>div:first-child {
          margin-right: 10px
      }

      /* @media screen and (max-width: 768px) {
          .container-footer_ssrp {
              font-size: 0.8rem
          }
      } */

  </style>

  <!-- Site footer -->
  <footer class="site-footer">
      <div class="container">
          <div class="row">
            <div class="col-xs-6 col-md-3">
               logo
            </div>
              <div class="col-xs-6 col-md-3">
                  <h6>Categorías</h6>
                  <ul class="footer-links">
                      <li><a href="/producto/motor/cobertura">Autos</a></li>
                      <li><a href="/producto/hogar/cobertura">Hogar</a></li>
                      <li><a href="/producto/motor/cobertura">Motos</a></li>
                      <li><a href="/producto/mascotas/coberturas">Mascotas</a></li>
                      <li><a href="/producto/personas/cobertura">Personas</a></li>
                  </ul>
              </div>

              <div class="col-xs-6 col-md-3">
                  <h6>Información</h6>
                  <ul class="footer-links">
                      <li><a href="/conoce-easy">Conoce easy</a></li>
                      <li><a href="/centro-de-ayuda">Centro de ayuda</a></li>
                      <li><a href="/terminos-y-condiciones">Términos y condiciones</a></li>
                  </ul>
              </div>
              {{-- <div class="col-sm-12 col-md-6">
                  <h6>Acerca de easydot</h6>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur, odio
                    blanditiis? Illum placeat consequuntur voluptate dolores aspernatur quo maxime nesciunt ea tempore
                    eveniet, neque non. Ea voluptates veritatis quo eaque?</p>
              </div> --}}
          </div>
          <hr>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-sm-6 col-xs-12">
                  <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
                      <a href="#">easydot</a>.
                  </p>
              </div>

              <div class="col-md-4 col-sm-6 col-xs-12">
                  <ul class="social-icons">
                      <li><a class="facebook" href="https://www.facebook.com/easydotpanama" target="_blank"><i
                                  class="fab fa-facebook-f"></i></a></li>
                      <li><a class="dribbble" href="https://www.instagram.com/easydotpanama/" target="_blank"><i
                                  class="fab fa-instagram"></i></a></li>
                      <li><a class="whatsapp" href="#"><i class="fab fa-whatsapp"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>

  </footer>

  <div class="container container-footer_ssrp">
      <div>
          <img src="{{ asset('/public/includes/images/SSRPLogo.png') }}" alt="">
      </div>
      <div>
          <p> REGULADO Y SUPERVISADO POR LA SUPERINTENDENCIA DE SEGUROS Y REASEGUROS DE PANAMÁ.</p>
      </div>
  </div>
