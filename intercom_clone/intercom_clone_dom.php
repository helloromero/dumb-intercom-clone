<div id="intercom_box_wrapper" style="display: none;">
   <div id="intercom_box_top">
       <img src="intercom_clone/img/intercom_clone_icon.jpg">
       <h1>Romero <br> <span><div id="away_icon"></div>Away</span></h1>
   </div>
   <div id="chat_messages">
       <div class="my_chat_widget">
           <p>
               Hey, I am away from my computer at the moment. Please drop me your email and I will get back to you.
               <img src="intercom_clone/img/intercom_clone_icon.jpg">
           </p>
           <p id="error_message" style="display: none;">
               Sorry, I couldn't save your email. Please e-mail me <a href="mailto:email@email.com">email@email.com</a> 
               <img src="intercom_clone/img/intercom_clone_icon.jpg">
           </p>
           <form id="email_form" name="email_form" method="post" action="intercom_clone_post.php">
               <input type="submit" name="email_submit" value="Submit">
               <input id="email_address" type="email" name="email_data" placeholder="Your e-mail address" required>
           </form>
           <p id="second_message" style="display: none;">
               Thanks, I will get back to you shortly.
               <img src="intercom_clone/img/intercom_clone_icon.jpg">
           </p>
       </div>
       <img id="client_input" src="intercom_clone/img/bottom.png">
   </div>
</div>
<button id="chat_open_button">
   <i class="fa fa-comments faa-slow faa-pulse animated" aria-hidden="true"></i>
</button>