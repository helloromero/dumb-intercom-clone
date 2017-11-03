<!DOCTYPE html>
<html>

<head>
    <title>Dumb Intercom Clone</title>
    <link href="https://helloromero.co.uk/wp-content/themes/helloromerotheme2017/img/icons/favicon.ico" rel="shortcut icon">
    <link href="https://helloromero.co.uk/wp-content/themes/helloromerotheme2017/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link rel="alternate" type="application/rss+xml" title="Romero Mckay &#8211; Front-End Developer, London" href="https://helloromero.co.uk/feed/" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="intercom_clone/css/intercom_clone.css">
    <link rel="stylesheet" type="text/css" href="intercom_clone/css/font-awesome-animation.css">


</head>

<body>
     <h1>A Dumb Intercom Clone</h1>
     <p>This allows you to collect your visiters e-mail addresses.</p>
     <h2>Useage</h2>
     <p>1: Add dumb-intercom-clone to your server.</p>
     <p>2: Include the required css files to your page(s).</p>
     <pre>
          <code>
               &lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
               &lt;link rel="stylesheet" type="text/css" href="intercom_clone/css/intercom_clone.css">
               &lt;link rel="stylesheet" type="text/css" href="intercom_clone/css/font-awesome-animation.css">
          </code>
     </pre>
     <p>3. Include the following code just above your websites footer tag. </p>
     <pre>
          <code>
               &lt;php include('intercom_clone/intercom_clone_dom.php'); ?>
          </code>
     </pre>
     <p>4: Include the required JS files to your page(s).</p>
     <pre>
          <code>
               &lt;script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
               &lt;script src="intercom_clone/js/js.cookie.js"></script>
               &lt;script src="intercom_clone/js/intercom_clone_functions.js"></script>
          </code>
     </pre>
     <p>5: Update line 23 in <b>intercom_clone_post.php</b> with your e-mail address. Also update the text in <b>intercom_clone_dom.php</b> to the messages that suit you website.</p>


    <?php include('intercom_clone/intercom_clone_dom.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="intercom_clone/js/js.cookie.js"></script>
    <script src="intercom_clone/js/intercom_clone_functions.js"></script>
</body>

</html>