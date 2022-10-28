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
              purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
            });
          },

          onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {
              
              // Full available details
              console.log('Capture result', orderData);
              console.log('Capture result', orderData);

              // Show a success message within this page, e.g.
              const element = document.getElementById('paypal-button-container');
              
              // Or go to another URL:  actions.redirect('thank_you.html');
              //window.location.href = "subscription_success.html";
            });
          },

          onError: function(err) {
            console.log(err);
          }
        }).render('#paypal-button-container');
      }
      initPayPalButton();
    </script>