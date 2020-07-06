<section id="ebook" class="team section-bg" style="background-color: #d4c742">
  <div class="container" data-aos="fade-up">

    <div class="wrapper">
      <header class="header">
        <h1 style="font-size: 35px; color: #000; text-shadow: 5px 5px 7px #FFF">
          Strategies for Organizational Success Vol. I
        </h1>
      </header>
      <article class="main">
        <p>
          A Collection of Valuable Tips From Marketing Strategy Specialists and Entrepreneurs. Purchase the
          book and get the inside tips, tricks, and techniques several hundreds of thousands of Entrepreneurs
          use every single day in order to help boost and promote their company!
        </p>
      </article>
      <aside class="aside aside-1">
        <img src="/assets/img/FAI_E-Book_Ad_V2.png" style="width: 300px; height: 300px">
      </aside>
      <aside class="aside aside-2">
        <img src="/assets/img/FAI_9500_Package_Ad_V3.png" style="width: 300px; height: 300px;">
      </aside>
      <footer class="footer">
        <div id="paypal-button-container"></div>
        <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
        <script>
          paypal.Buttons({
              style: {
                  shape: 'pill',
                  color: 'gold',
                  layout: 'horizontal',
                  label: 'buynow',

              },
              createOrder: function(data, actions) {
                  return actions.order.create({
                      purchase_units: [{
                          amount: {
                              value: '15'
                          }
                      }]
                  });
              },
              onApprove: function(data, actions) {
                  return actions.order.capture().then(function(details) {
                      alert('Transaction completed by ' + details.payer.name.given_name + '!');
                  });
              }
          }).render('#paypal-button-container');
        </script>
      </footer>
    </div>

  </div>
</section>
