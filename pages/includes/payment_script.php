<script src="https://www.paypal.com/sdk/js?client-id=AWYz8bFxpQeEk0dNo1iAPBodgfpkYmeoXd9uI8f0Hkd2RXQlE7Kpx-tWtkg3FG657vFoIAD4pfZ_-5Tg" data-sdk-integration-source="button-factory"></script>

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
                        "value":1
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

              //console.log(transaction.id);
              //const element = document.getElementById('paypal-button-container');
              
              var transid = document.getElementById('transactid');
              transid = transaction.id;
              //document.getElementById('transactid');
              $('#transactid').val(transid);
              //console.log(transid);

              //window.location = 'subs.php?transid='+transid;
              // $("#transactid").blur(function(){
              //   alert("The text has been changed.");
              // });

              var myInput = document.getElementById("transactid");
              if (myInput && myInput.value) {
                //console.log(myInput);
               document.getElementById("myForm").submit();
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