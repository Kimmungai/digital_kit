<?php session_start(); include_once('db.php');?>
<?php $data = new Database("127.0.0.1","root","root","personal");
if(isset($_POST['user'])){ $_SESSION['shopping_cart'] = $_POST;}
  //  foreach ($_POST as $key => $value) {
    //  echo "Field ".$key." is ".htmlspecialchars($value)."<br>";
  //}
	?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Material Bootstrap Wizard by Creative Tim</title>

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="assets/css/check-out.css" />
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
  <div class="content">
<div class="container">
 <div class="row">
              <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                <form action="billing.php"method="POST">
                  <div class="box">
                      <h3 class="box-title">Your Details</h3>

                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="FirstName"><span class="text-danger">*</span> First name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="LastName"><span class="text-danger" >*</span> Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputEmail4"><span class="text-danger" >*</span> Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Phone</label>
                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number" >
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputAddress">Address</label>
                          <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
                        </div>

                  </div>
                  <!--<div class="box">
                      <h3 class="box-title">Select term length</h3>
                      <div class="plan-selection">
                          <div class="plan-data">
                              <input id="question4" name="question" type="radio" class="with-font" value="sel" />
                              <label for="question4">1 Month</label>
                              <span class="plan-price term-price">$29 / mo</span>
                          </div>
                      </div>
                      <div class="plan-selection">
                          <div class="plan-data">
                              <input id="question5" name="question" type="radio" class="with-font" value="sel" />
                              <label for="question5">12 Month</label>
                              <span class="plan-price term-price">$348 / mo</span>
                          </div>
                      </div>
                      <div class="plan-selection">
                          <div class="plan-data">
                              <input id="question6" name="question" type="radio" class="with-font" value="sel" />
                              <label for="question6">24 Month</label>
                              <span class="plan-price term-price">$696 / mo</span>
                          </div>
                      </div>
                  </div>-->
                  <!--<div class="box">
                      <h3 class="box-title">Secure your site</h3>
                      <div class="plan-selection">
                          <div class="plan-data">
                              <input id="box1" type="checkbox" class="with-font" />
                              <label for="box1">Add malware scan and removal</label>
                              <p class="plan-text">Nam sodales exviverra pretium erat ifermeoin accumsan ligula duiin ornare tortor euismod nece.</p>
                              <span class="plan-price secure-price">$229 / mo</span>
                          </div>
                      </div>
                      <div class="plan-selection">
                          <div class="plan-data">
                              <input id="box2" type="checkbox" class="with-font" />
                              <label for="box2">Add standard SSL Certificate</label>
                              <p class="plan-text">Class aptent taciti sociosqu ad litora torquent perconu bia nostrper inceptos himenelquet dui.</p>
                              <span class="plan-price secure-price">$429 / mo</span>
                          </div>
                      </div>
                  </div>-->
                  <input type="hidden" name="user_id" value="<?php if(isset($_POST['user'])){echo $_POST['user'];}?>" />
                  <button type="submit" class="btn btn-primary btn-lg mb30">Continue to Pay</button>
                </form>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">

                  <div class="widget">
                      <h4 class="widget-title">Order Summary</h4>
											<?php if(isset($_POST['user']))
											{
											   foreach ($_POST as $key => $value)
												 {
													 if($key === 'user' || $key === 'amount'){continue;}
													 $shopping_item=$data->get_record('user_items',$value);?>
													 <div class="summary-block">
 		                          <div class="summary-content">
 		                              <div class="summary-head"><h5 class="summary-title"><?php echo $shopping_item['item_name']; ?></h5></div>
 		                              <div class="summary-price">
 		                                  <p class="summary-text">$<?php echo $shopping_item['item_price']; ?></p>
 		                                  <!---<span class="summary-small-text pull-right">1 month</span>-->
 		                              </div>
 		                          </div>
 		                      </div>
											   <?php
											   }
											} ?>

											<div class="summary-block">
												 <div class="summary-content">
														 <div class="summary-head"><h5 class="summary-title">TOTAL</h5></div>
														 <div class="summary-price">
																 <p class="summary-text">$<?php if(isset($_POST['amount'])){echo $_POST['amount'];}?></p>
																 <!--<span class="summary-small-text pull-right">1 month</span>-->
														 </div>
												 </div>
											</div>

                  </div>

              </div>
          </div>
<!--<div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text-center mt20">
            Created for <a href="https://goo.gl/XwHgxp" target="_blank">easetemplate</a>
          </div></div>-->





</div>
</div>
</body>

</html>

<?php /*$token = $params = NULL;
$consumer_key = 'hiAxca26ZFxgUw5TqKDbN4MGqstSjkWe';//Register a merchant account on
                   //demo.pesapal.com and use the merchant key for testing.
                   //When you are ready to go live make sure you change the key to the live account
                   //registered on www.pesapal.com!
$consumer_secret = '6jxKqZyr2GxIyA7fZRYWT3jDMrw=';// Use the secret from your test
                   //account on demo.pesapal.com. When you are ready to go live make sure you
                   //change the secret to the live account registered on www.pesapal.com!
$signature_method = new OAuthSignatureMethod_HMAC_SHA1();
$iframelink = 'https://demo.pesapal.com/api/PostPesapalDirectOrderV4';//change to
                   //https://www.pesapal.com/API/PostPesapalDirectOrderV4 when you are ready to go live!

//get form details<br>$amount = $_POST['amount'];
$amount = 400;//format amount to 2 decimal places
$desc = 'Buy songs';
$type = 'MERCHANT'; //default value = MERCHANT
$reference = 'customer-4';//unique order id of the transaction, generated by merchant
$first_name = 'makasi'; //[optional]
$last_name = 'wajui'; //[optional]
$email = 'kimpita@gmail.com';
$phonenumber = ''; //ONE of email or phonenumber is required

$callback_url = 'http://localhost:8000/website/1/redirect.php?id=1'; //redirect url, the page that will handle the response from pesapal.
$post_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?><PesapalDirectOrderInfo xmlns:xsi=\"http://www.w3.org/2001/XMLSchemainstance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" Amount=\"".$amount."\" Description=\"".$desc."\" Type=\"".$type."\" Reference=\"".$reference."\" FirstName=\"".$first_name."\" LastName=\"".$last_name."\" Email=\"".$email."\" PhoneNumber=\"".$phonenumber."\" Currency=\"".$currency."\" xmlns=\"http://www.pesapal.com\" />";
$post_xml = htmlentities($post_xml);

$consumer = new OAuthConsumer($consumer_key, $consumer_secret);
//post transaction to pesapal
$iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, "GET",
$iframelink, $params);
$iframe_src->set_parameter("oauth_callback", $callback_url);
$iframe_src->set_parameter("pesapal_request_data", $post_xml);
$iframe_src->sign_request($signature_method, $consumer, $token);*/?>
<!--<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <iframe src="<?php //echo $iframe_src;?>" width="100%" height="720px" scrolling="auto" frameBorder="0"> <p>Unable to load the payment page</p> </iframe>
  </body>
</html>-->
