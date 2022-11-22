<script src="https://www.paypal.com/sdk/js?client-id=AWYz8bFxpQeEk0dNo1iAPBodgfpkYmeoXd9uI8f0Hkd2RXQlE7Kpx-tWtkg3FG657vFoIAD4pfZ_-5Tg" data-sdk-integration-source="button-factory"></script>
<script>
  var amountt= document.getElementById("t_amount").value; 
                //console.log(amountt);

   var sb_type = document.getElementById('sub_type').value;
          //console.log(sb_type);
</script>


<script src="https://www.paypal.com/sdk/js?client-id=AWYz8bFxpQeEk0dNo1iAPBodgfpkYmeoXd9uI8f0Hkd2RXQlE7Kpx-tWtkg3FG657vFoIAD4pfZ_-5Tg" data-sdk-integration-source="button-factory"></script>
<script>
  var amountty= document.getElementById("t_amounty").value; 
    //console.log(amountt);

  var sby_type = document.getElementById('suby_type').value;
    //console.log(sby_type);
</script>


<script src="https://www.paypal.com/sdk/js?client-id=AWYz8bFxpQeEk0dNo1iAPBodgfpkYmeoXd9uI8f0Hkd2RXQlE7Kpx-tWtkg3FG657vFoIAD4pfZ_-5Tg" data-sdk-integration-source="button-factory"></script>
<script>
  var amounttpl= document.getElementById("t_amountp").value; 
    //console.log(amountt);

  var sbp_type = document.getElementById('subp_type').value;
    //console.log(sby_type);
</script>


<script src="https://www.paypal.com/sdk/js?client-id=AWYz8bFxpQeEk0dNo1iAPBodgfpkYmeoXd9uI8f0Hkd2RXQlE7Kpx-tWtkg3FG657vFoIAD4pfZ_-5Tg" data-sdk-integration-source="button-factory"></script>
<script>
  var amounttpr= document.getElementById("t_amountpr").value; 
    //console.log(amountt);

  var sbpr_type = document.getElementById('subpr_type').value;
    //console.log(sby_type);
</script>



<script>
  function initPayPalButton() {
    paypal.Buttons({
      style: {
        shape: 'rect',
        color: 'silver',
        layout: 'horizontal',
        label: 'pay',
      },
      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [
            {
                "amount":
                {
                    "currency_code":"USD",
                    "value": amountt
                }
            }]
        });
      },
      
      onApprove: (data, actions) => {
        return actions.order.capture().then(function(orderData) {
          // Successful capture! For dev/demo purposes:
          //console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
          const transaction = orderData.purchase_units[0].payments.captures[0];
          //alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
          // When ready to go live, remove the alert and show a success message within this page. For example:
          // const element = document.getElementById('paypal-button-container');
          // element.innerHTML = '<h3>Thank you for your payment!</h3>';
          // Or go to another URL:  actions.redirect('thank_you.html');
          //console.log(orderData.payments(value));
          //const element = document.getElementById('paypal-button-container');
          var user = document.getElementById('user').value;
          var transid = document.getElementById('transactid');
          transid = transaction.id;
          //document.getElementById('transactid');
          $('#transactid').val(transid);
          $('#totalp').val(amountt);
          //console.log(transid);
          //console.log(user);
          // var sb_type = document.getElementById('subs_name').value;
          // console.log(sb_type);
          //window.location = 'subs.php?transid='+transid;
          // $("#transactid").blur(function(){
          //   alert("The text has been changed.");
          // });
          amountt = document.getElementById("totalp").value;
          var myInput = document.getElementById("transactid");
          if (myInput && myInput.value) {
            //console.log(myInput);
            //document.getElementById("myForm").submit();
            
            window.location = 'subs.php?transid='+transid + "&totalp=" + amountt + "&subs_name=" + sb_type;
          }

        });
      },
      onError: function(err) {
        console.log(err);
      }
    }).render('#paypal-button-container');
  }
  initPayPalButton();
</script>

<!-- Yearly -->
<script>
  function initPayPalButton() {
    paypal.Buttons({
      style: {
        shape: 'rect',
        color: 'silver',
        layout: 'horizontal',
        label: 'pay',
      },
      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [
            {
                "amount":
                {
                    "currency_code":"USD",
                    "value": amountty
                }
            }]
        });
      },
      
      onApprove: (data, actions) => {
        return actions.order.capture().then(function(orderData) {
          // Successful capture! For dev/demo purposes:
          //console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
          const transaction = orderData.purchase_units[0].payments.captures[0];
          //alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
          // When ready to go live, remove the alert and show a success message within this page. For example:
          // const element = document.getElementById('paypal-button-container');
          // element.innerHTML = '<h3>Thank you for your payment!</h3>';
          // Or go to another URL:  actions.redirect('thank_you.html');
          //console.log(orderData.payments(value));
          //const element = document.getElementById('paypal-button-container');
          var user = document.getElementById('user').value;
          var transid = document.getElementById('transactid');
          transid = transaction.id;
          //document.getElementById('transactid');
          $('#transactid').val(transid);
          $('#totalp').val(amountty);
          //console.log(transid);
          //console.log(user);
          //window.location = 'subs.php?transid='+transid;
          // $("#transactid").blur(function(){
          //   alert("The text has been changed.");
          // });
          amountty = document.getElementById("totalp").value;
          var myInput = document.getElementById("transactid");
          if (myInput && myInput.value) {
            //console.log(myInput);
            //document.getElementById("myForm").submit();
            
            window.location = 'subs.php?transid='+transid + "&totalp=" + amountty + "&subs_name=" + sby_type;
          }

        });
      },
      onError: function(err) {
        console.log(err);
      }
    }).render('#paypal-button-containeryear');
  }
  initPayPalButton();
</script>

<!-- Plus -->
<script>
  function initPayPalButton() {
    paypal.Buttons({
      style: {
        shape: 'rect',
        color: 'silver',
        layout: 'horizontal',
        label: 'pay',
      },
      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [
            {
                "amount":
                {
                    "currency_code":"USD",
                    "value": amounttpl
                }
            }]
        });
      },
      
      onApprove: (data, actions) => {
        return actions.order.capture().then(function(orderData) {
          // Successful capture! For dev/demo purposes:
          //console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
          const transaction = orderData.purchase_units[0].payments.captures[0];
          //alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
          // When ready to go live, remove the alert and show a success message within this page. For example:
          // const element = document.getElementById('paypal-button-container');
          // element.innerHTML = '<h3>Thank you for your payment!</h3>';
          // Or go to another URL:  actions.redirect('thank_you.html');
          //console.log(orderData.payments(value));
          //const element = document.getElementById('paypal-button-container');
          var user = document.getElementById('user').value;
          var transid = document.getElementById('transactid');
          transid = transaction.id;
          //document.getElementById('transactid');
          $('#transactid').val(transid);
          $('#totalp').val(amounttpl);
          //console.log(transid);
          //console.log(user);
          //window.location = 'subs.php?transid='+transid;
          // $("#transactid").blur(function(){
          //   alert("The text has been changed.");
          // });
          amounttpl = document.getElementById("totalp").value;
          var myInput = document.getElementById("transactid");
          if (myInput && myInput.value) {
            //console.log(myInput);
            //document.getElementById("myForm").submit();
            
            window.location = 'subs.php?transid='+transid + "&totalp=" + amounttpl + "&subs_name=" + sbp_type;
          }

        });
      },
      onError: function(err) {
        console.log(err);
      }
    }).render('#paypal-button-containerplus');
  }
  initPayPalButton();
</script>

<!-- Pro -->
<script>
  function initPayPalButton() {
    paypal.Buttons({
      style: {
        shape: 'rect',
        color: 'silver',
        layout: 'horizontal',
        label: 'pay',
      },
      createOrder: function(data, actions) {
        return actions.order.create({
          purchase_units: [
            {
                "amount":
                {
                    "currency_code":"USD",
                    "value": amounttpr
                }
            }]
        });
      },
      
      onApprove: (data, actions) => {
        return actions.order.capture().then(function(orderData) {
          // Successful capture! For dev/demo purposes:
          //console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
          const transaction = orderData.purchase_units[0].payments.captures[0];
          //alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
          // When ready to go live, remove the alert and show a success message within this page. For example:
          // const element = document.getElementById('paypal-button-container');
          // element.innerHTML = '<h3>Thank you for your payment!</h3>';
          // Or go to another URL:  actions.redirect('thank_you.html');
          //console.log(orderData.payments(value));
          //const element = document.getElementById('paypal-button-container');
          var user = document.getElementById('user').value;
          var transid = document.getElementById('transactid');
          transid = transaction.id;
          //document.getElementById('transactid');
          $('#transactid').val(transid);
          $('#totalp').val(amounttpr);
          //console.log(transid);
          //console.log(user);
          //window.location = 'subs.php?transid='+transid;
          // $("#transactid").blur(function(){
          //   alert("The text has been changed.");
          // });
          amounttpr = document.getElementById("totalp").value;
          var myInput = document.getElementById("transactid");
          if (myInput && myInput.value) {
            //console.log(myInput);
            //document.getElementById("myForm").submit();
            
            window.location = 'subs.php?transid='+transid + "&totalp=" + amounttpr + "&subs_name=" + sbpr_type;
          }

        });
      },
      onError: function(err) {
        console.log(err);
      }
    }).render('#paypal-button-containerpro');
  }
  initPayPalButton();
</script>