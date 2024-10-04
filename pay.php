<?php
 echo"payment Page";
?>

<form>
    <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Ovq5Zk2y1STDNy" async>
    </script>
</form>


<br>

<h1>
    any payment accept
</h1>
<form>
    <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Ovqmk8ycACSEsJ" async>
    </script>
</form>


// php  integration code 
<form action="" method="post">
<script src="https://checkout.razorpay.com/v1/checkout.js"
data-key="rzp_test_TB9zgFtg5nUevV"
data-amount="100"
data-currency="INR"
data-id="<?php echo'OID'.rand(10,100).'END'; ?>"
data-buttontext="pay now"
data-name="Imppro corpo"
data-prefill.name="Naphees"
data-prefill.email="naphees@gmail.com"
data-description="Imppro is brand so carefully"
data-theme.color="#f37254"
>
</script>
<input type="hidden" custom="Hidden Element" name="hidden">

</form>

