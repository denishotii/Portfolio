 
        <div class="ad">
                    Contact Me
                </div>
                <div class="alert"><p class="alert-p"><?php if(isset($_GET['contact'])){ echo $_GET['contact']; } ?></p></div>
                <form action="./inc/contact.inc.php" id="contact-form" method="POST" >
                    <div class="flex1">
                    <div class="name-l">
                        Name:<br>
                        <input id="name" class="name" name="name" type="text" placeholder="Name..." required="required">
                    </div>
                    <div class="email-l">
                        Email:<br>
                        <input id="email" class="email" name="email" type="email" placeholder="Email..." required="required">
                    </div>
                </div>
                    <div class="text-l">
                        Message:<br>
                        <textarea id="message" name="message" class="text" placeholder="Message..." required="required"></textarea>
                    </div>
                    <div class="butt-l">
                        <input id="submit-btn"type="submit" name="submit" class="butt" value="Submit ->">
                    </div>
                </form> 