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
              
              <!-- Display the status message -->
    <?php if(!empty($status)){ ?>
    <div class="status <?php echo $status['type']; ?>"><?php echo $status['msg']; ?></div>
    <?php } ?>
              
              <form id="contact_form" action="" method="post" class="contact_form">
                <ul>
                  <li>
                    <input type="text" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" name="name" placeholder="Name">
                    <?php echo form_error('name','<p class="field-error">','</p>'); ?>
                  </li>
                  <li>
                    <input type="email" name="email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" placeholder="Emai">
                    <?php echo form_error('email','<p class="field-error">','</p>'); ?>
                  </li>
                  <li>
                    <input type="text" name="subject" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>" placeholder="Subject">
                    <?php echo form_error('subject','<p class="field-error">','</p>'); ?>
                  </li>
                  <li>
                    <textarea name="message"  placeholder="Message..."><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
                    <?php echo form_error('message','<p class="field-error">','</p>'); ?>
                  </li>
                </ul>
                <button name="contactSubmit" class="mad_button small_button">Send</button>
              </form>

            </div>
          </div>

        </div>
      </div>

    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->