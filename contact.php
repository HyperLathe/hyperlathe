<!DOCTYPE HTML>

<head>
<meta charset="UTF-8">
<title>HyperLathe | Contact</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26354436-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>

  <?php include($DOCUMENT_ROOT . "./includes/header.php"); ?>
  
<div id="content">
  
  <section>
    <div class="crumbtrail"><a href="index.php">Home</a> <span class="highlight">> contact</span></div>
  <p class="opener">To discuss your online requirements, make an enquiry regarding my availability, or to discover more about what I do and my approach to web designing and building, please do call me on <span>+44 (0)7967 639 192</span> email me at <a href="mailto:info@hyperlathe.com">info@hyperlathe.com</a> or use the contact form below. I look forward to hearing from you!</p> 
  </section>
  
  <?php include($DOCUMENT_ROOT . "./includes/nav_primary.php"); ?>
  
  <article id="contact">
  
    <div class="contact_form">
    <form name="contactform" method="post" action="send_form_email.php">

    <div class="form_line"><label for="first_name">First Name *</label><input  type="text" name="first_name" maxlength="50" size="30"></div>

    <div class="form_line"><label for="last_name">Last Name *</label><input  type="text" name="last_name" maxlength="50" size="30"></div>

    <div class="form_line"><label for="email">Email Address *</label><input  type="text" name="email" maxlength="80" size="30"></div>

    <div class="form_line"><label for="telephone">Telephone Number</label><input  type="text" name="telephone" maxlength="30" size="30"></div>

    <div class="form_box"><label for="comments">Comments *</label><textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea></div>

    <input type="submit" value="Submit" class="submit_button"> 

    </form>
    </div>

  </article>
  
  <?php include($DOCUMENT_ROOT . "./includes/nav_secondary.php"); ?>
  
  </div>
  
  <?php include($DOCUMENT_ROOT . "./includes/footer.php"); ?>
  


</body>
</html>
