</script>
</head>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/Feedback.css">
</head>
<body>
<div class="feedback-form">
<?php include'header.php'; ?>
<main> 
<description class="slideInDown animated"> <br>
      A successful company are built on the backs of satisfied and motivated employees.<br>
      That's why we thought about organizing this survey, in order to evolve, to have happy employees and to prevent potential issues.<br>
      Please take a few minutes to complete this survey. Your feedback is important to us.<br>
      Thank you for your time.<br>
      <strong>Important:</strong> Please do not include any personal information in your feedback.<br>
<br></h1>
<?php  $google_form_url = //copy the link from the google form here
echo '<iframe src="'.$google_form_url.'" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>';
?>
  </div>
</div>
</tbody>
<span style="position: fixed; bottom: 0; left: 0; right: 0; background-color: #f2f2f2; text-align: center; padding: 10px;">
    <?php
        echo "Copyright © " . date("Y") . " Teleki Ferenc-Tibor. All rights reserved.";
    ?>
</main>
</body>

