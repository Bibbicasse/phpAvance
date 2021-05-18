 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
     <div class="container" data-aos="fade-up">

         <div class="section-title">
             <h2> Me contacter</h2>
         </div>

         <div class="row mt-1">

             <div class="col-lg-4">
                 <div class="info">
                     <div class="address">
                         <i class="bi bi-geo-alt"></i>
                         <h4>Localisation :</h4>
                         <p>Rueil-Malmaison</p>
                     </div>

                     <div class="email">
                         <i class="bi bi-envelope"></i>
                         <h4>Email :</h4>
                         <p>salva.giovinetti@gmail.com</p>
                     </div>

                     <div class="phone">
                         <i class="bi bi-phone"></i>
                         <h4>Téléphone :</h4>
                         <p>+33 (0) 7 81 40 23 50</p>
                     </div>

                 </div>

             </div>

             <div class="col-lg-8 mt-5 mt-lg-0">

                 <form action="forms/contact.php" method="post" class="php-email-form">
                     <div class="row">
                         <div class="col-md-6 form-group">
                             <input type="text" name="name" class="form-control" id="name" placeholder="Ton Nom :" required>
                         </div>
                         <div class="col-md-6 form-group mt-3 mt-md-0">
                             <input type="email" class="form-control" name="email" id="email" placeholder="Ton Email :" required>
                         </div>
                     </div>
                     <div class="form-group mt-3">
                         <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet :" required>
                     </div>
                     <div class="form-group mt-3">
                         <textarea class="form-control" name="message" rows="5" placeholder="Message :" required></textarea>
                     </div>
                     <div class="my-3">
                         <div class="loading">Chargement</div>
                         <div class="error-message"></div>
                         <div class="sent-message">J'ai bien reçu ta demande, MERCI !</div>
                     </div>
                     <div class="text-center"><button type="submit">Envoyer</button></div>
                 </form>

             </div>

         </div>

     </div>
 </section><!-- End Contact Section -->
 <!-- ======= Resume Section ======= -->