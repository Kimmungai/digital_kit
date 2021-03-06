<?php session_start();include_once('db.php');include_once('PesapalAPI/OAuth.php');
if(isset($_POST['user_id'])){

    $data = new Database("127.0.0.1","root","root","personal");
    $user_customer=$data->userCustomerFindOrCreate($_POST);
    if(count($user_customer)) // if user customer exists
    {
      //record sale
      if(isset($_SESSION['shopping_cart']))
      {
        echo $data->recordSale($user_customer['id'],$_SESSION['shopping_cart']);

        //pesapal
        $token = $params = NULL;
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
        $amount = $_SESSION['shopping_cart']['amount'];//format amount to 2 decimal places
        $desc = 'Buy songs';
        $type = 'MERCHANT'; //default value = MERCHANT
        $reference = $_SESSION['shopping_cart']['user'];//unique order id of the transaction, generated by merchant
        $first_name = $user_customer['first_name']; //[optional]
        $last_name = $user_customer['last_name']; //[optional]
        $email = $user_customer['email'];
        $currency='KES';
        $phonenumber = ''; //ONE of email or phonenumber is required

        $callback_url = 'http://localhost:8000/website/redirect.php?id='.$_POST['user_id']; //redirect url, the page that will handle the response from pesapal.
        $post_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?><PesapalDirectOrderInfo xmlns:xsi=\"http://www.w3.org/2001/XMLSchemainstance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" Amount=\"".$amount."\" Description=\"".$desc."\" Type=\"".$type."\" Reference=\"".$reference."\" FirstName=\"".$first_name."\" LastName=\"".$last_name."\" Email=\"".$email."\" PhoneNumber=\"".$phonenumber."\" Currency=\"".$currency."\" xmlns=\"http://www.pesapal.com\" />";
        $post_xml = htmlentities($post_xml);

        $consumer = new OAuthConsumer($consumer_key, $consumer_secret);
        //post transaction to pesapal
        $iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, "GET",
        $iframelink, $params);
        $iframe_src->set_parameter("oauth_callback", $callback_url);
        $iframe_src->set_parameter("pesapal_request_data", $post_xml);
        $iframe_src->sign_request($signature_method, $consumer, $token);?>
        <!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
            <meta charset="utf-8">
            <title></title>
          </head>
          <body>
            <iframe src="<?php echo $iframe_src;?>" width="100%" height="720px" scrolling="auto" frameBorder="0"> <p>Unable to load the payment page</p> </iframe>
          </body>
        </html>
    <?php
      }
    }

}
