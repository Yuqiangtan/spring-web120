<?php include "includes/header.php";?>
<link rel="stylesheet" href="css/forms.css" />

<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "yuqiangtan13@gmail.com";  //place your/your client's email address here
        $toName = "Yuqiang Tan"; //place your client's name here
        $website = "Yuqiang Tan contact form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
</section>
<?php include "includes/footer.php";?>