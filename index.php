<!doctype html>
  <html>
    <head>
     <meta charset="utf-8">
      <!-- TemplateBeginEditable name="doctitle" -->
      <title>Antoine Green Twilio App</title>
        <link rel="stylesheet" type="text/css" href="style.css">        
     
    </head>
         
      <body background= "img/bg.jpg">
        
        <script src="form.js"type="text/javascript"> </script>
        
        
        <center>
            <form action="sms.php" method="post" name="contact_form" id="contact_form" onsubmit="return validateForm()"> 
             <h2>Antoine Green Twilio App</h2>
              <div class="container">
              <label for="phonenum">Phone Number</label><br/>
                <input name="phonenum" id="phonenum" type="tel" placeholder="Phone Number Format xxx-xxx-xxxx" pattern="^\d{3}-\d{3}-\d{4}$" required><br/>
              </div>
              
              <div class="container">
              <label for="message">Enter Your Message</label><br/>
             <textarea name="message" id="message" required></textarea><br/>
              </div>
              
              <div class="container">
            <input type="submit" name="submit" id="submit"" value="Submit">
             </div>
           </form>
       </center>
    </body>
</html>