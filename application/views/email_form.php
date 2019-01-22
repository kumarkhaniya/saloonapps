    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content">

      <!-- Google map -->
      <div class="relative">

        <div id="googleMap2" class="map_container"></div>

      </div>
      
      <div class="mad_section_2">

        <div class="container">

          <!-- Contact info -->
          <div class="row">
            <div class="col-sm-6">
              <h4>Address</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar at nunc id sagittis. Fusce sit amet libero lacus. Phasellus euismod mi et venenatis hendrerit. Aliquam sollicitudin gravida est, rhoncus vulputate orci. Integer ante mi, lacinia sit amet consectetur quis, cursus vestibulum lorem.</p>
              <div class="c_info_list">
                
                <div class="row">
                  <div class="col-sm-6">
                    
                    <div class="contact_item clearfix">
                      <i class="icon-direction"></i>
                      <p>9870 St Vincent Place, <br>
                      Glasgow, DC 45 Fr 45.</p>
                    </div>

                    <div class="contact_item clearfix">
                      <i class="icon-phone-1"></i>
                      <p>Phone: 800-559-65-80</p>
                    </div>

                    <div class="contact_item clearfix">
                      <i class="icon-email"></i>
                      <p>Email: <a class="contact_e" href="mailto:#">info@companyname.com</a></p> 
                    </div>

                  </div>
                  <div class="col-sm-6">
                    
                    <div class="contact_item clearfix">
                      <i class="icon-clock"></i>
                      <p>Mon-Sat: 8:00am - 5:00pm <br>
                      Sun: closed</p>
                    </div>

                    <div class="contact_item clearfix">
                      <i class="icon-fax"></i>
                      <p>Fax: (012) 456-8765</p>
                    </div>

                  </div>
                </div>

              </div>
            </div>
            <div class="col-sm-6">

              <h4>Contact Form</h4>
              <?php 
         echo $this->session->flashdata('email_sent'); 
         echo form_open('/Email_controller/send_mail'); 
      ?> 
		
      <input type ="text" name ="name" required /> 
      <input type ="email" name ="email" required /> 
      <input type ="text" name ="subject" required /> 
      <textarea name="messasge"></textarea>
      <input type = "submit" value = "SEND MAIL"> 
		
      <?php 
         echo form_close(); 
      ?> 

            </div>
          </div>

        </div>
      </div>

    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->