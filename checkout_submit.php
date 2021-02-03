<?php
include "connection.php";
include "function.php";

// prx($_GET);
$cartTotal = 0;
$address = get_post($conn, $_POST['address']);
$city = get_post($conn, $_POST['city']);
$state = get_post($conn, $_POST['state']);
$zip = get_post($conn, $_POST['zip']);
$payment_type = get_post($conn, $_POST['payment']);
foreach ($_SESSION['cart'] as $key => $val) {
    $productArr = get_product($conn, '', '', $key);

    $offeredprice = $productArr[0]['offeredprice'];

    $qty = $val['qty'];
    $cartTotal = $cartTotal + ($offeredprice * $qty);
}


$total_price = $cartTotal;
$payment_status = 'pending';
if ($payment_type == 'cod') {
    $payment_status = 'success';
}
$order_status = '1';
$added_on = date('Y-m-d h:i:s');

$user_id = $_SESSION['USER_ID'];

mysqli_query($conn, "INSERT INTO `order`(user_id,address,city,pincode,payment_type,total_price,payment_status,order_status,added_on)VALUES('$user_id','$address','$city','$zip','$payment_type','$total_price','$payment_status','$order_status','$added_on')");

$order_id = mysqli_insert_id($conn);
foreach ($_SESSION['cart'] as $key => $val) {
    $productArr = get_product($conn, '', '', $key);

    $offeredprice = $productArr[0]['offeredprice'];

    $qty = $val['qty'];
    // $cartTotal = $cartTotal + ($offeredprice * $qty);

    mysqli_query($conn, "INSERT INTO `order_detail`(order_id,product_id,qty,price)VALUES('$order_id','$key','$qty','$offeredprice')");
}
unset($_SESSION['cart']);
if ($payment_type = 'payu') {
    $MERCHANT_KEY = "gtKFFx";
    $SALT = "eCwWELxi";
    $hash_string = '';
    //$PAYU_BASE_URL = "https://secure.payu.in";
    $PAYU_BASE_URL = "https://test.payu.in";
    $action = '';
    $posted = array();
    if (!empty($_POST)) {
        foreach ($_POST as $key => $value) {
            $posted[$key] = $value;
        }
    }
    $userArr=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM user where id='$user_id'"));
    $formError = 0;
    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    $posted['txnid'] = $txnid;
    $posted['amount'] = $total_price;
    $posted['firstname'] = $userArr['name'];
    $posted['email'] = $userArr['email'];
    $posted['phone'] = $userArr['phone'];
    $posted['productinfo'] = "productinfo";
    $posted['key'] = $MERCHANT_KEY;
    $hash = '';
    $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
    if (empty($posted['hash']) && sizeof($posted) > 0) {
        if (
            empty($posted['key'])
            || empty($posted['txnid'])
            || empty($posted['amount'])
            || empty($posted['firstname'])
            || empty($posted['email'])
            || empty($posted['phone'])
            || empty($posted['productinfo'])

        ) {
            $formError = 1;
        } else {
            $hashVarsSeq = explode('|', $hashSequence);
            foreach ($hashVarsSeq as $hash_var) {
                $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
                $hash_string .= '|';
            }
            $hash_string .= $SALT;
            $hash = strtolower(hash('sha512', $hash_string));
            $action = $PAYU_BASE_URL . '/_payment';
        }
    } elseif (!empty($posted['hash'])) {
        $hash = $posted['hash'];
        $action = $PAYU_BASE_URL . '/_payment';
    }


    $formHtml = '<form method="post" name="payuForm" id="payuForm" action="' . $action . '"><input type="hidden" name="key" value="' . $MERCHANT_KEY . '" /><input type="hidden" name="hash" value="' . $hash . '"/><input type="hidden" name="txnid" value="' . $posted['txnid'] . '" /><input name="amount" type="hidden" value="' . $posted['amount'] . '" /><input type="hidden" name="firstname" id="firstname" value="' . $posted['firstname'] . '" /><input type="hidden" name="email" id="email" value="' . $posted['email'] . '" /><input type="hidden" name="phone" value="' . $posted['phone'] . '" /><textarea name="productinfo" style="display:none;">' . $posted['productinfo'] . '</textarea><input type="hidden" name="surl" value="http://localhost/myecom/payment_complete.php" /><input type="hidden" name="furl" value="http://localhost/myecom/payment_fail.php"/><input type="submit" style="display:none;"/></form>';
    echo $formHtml;
    echo '<script>document.getElementById("payuForm").submit();</script>';
} else {
?>
    <script>
        window.location.href = "thank_you.php";
    </script>
<?php

} ?>