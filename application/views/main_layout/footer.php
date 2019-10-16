 <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F9C300"/></svg></div>


  <script src="<?= base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?= base_url();?>assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= base_url();?>assets/js/popper.min.js"></script>
  <script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url();?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?= base_url();?>assets/js/jquery.waypoints.min.js"></script>
  <script src="<?= base_url();?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?= base_url();?>assets/js/owl.carousel.min.js"></script>
  <script src="<?= base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?= base_url();?>assets/js/aos.js"></script>
  <script src="<?= base_url();?>assets/js/jquery.animateNumber.min.js"></script>
  <script src="<?= base_url();?>assets/js/scrollax.min.js"></script>
  <script src="<?= base_url();?>assets/js/main.js"></script>
  <script type="text/javascript">
    $("form#formApply").submit(function(e){
      e.preventDefault();
      var name = $("input[name='name']").val();
      var phone = $("input[name='phone']").val();
      var email = $("input[name='email']").val();
      var address = $("textarea[name='address']").val();
      // var formData = form.serialize();
      if(name == '')
        alert('Please Enter the Valid Name!!!!');
      else if(phone < 1111111111)
        alert('Please Enter the Valid Phone Number!!!!');
      else if(phone > 9999999999)
        alert('Please Enter the Valid Phone Number!!!!');
      else if(email == '')
        alert('Please Enter the Valid Email!!!!');
      else if(address == '')
        alert('Please Enter the Valid Address!!!') 
      else{
        $.ajax({
          url: '<?= base_url();?>index.php/Apply_Now/apply',
          type: 'POST',
          data: {name: name, phone:phone, email:email, address:address},
          error: function() {
            alert('Something Went Wrong Please Try Again Later!!!');
          },
          success: function(data) {
            data = JSON.parse(data);
            // if(data[0].count == '0001')
            //alert(data.f);
            if(data.error === '0000'){
              alert('You have Applied for the ATM Successfully!!!');
            }
            else{
              alert('Something Went Wrong Please Try Again Later!!!');
            }
          }
        });
      }
    });
  </script>
  </body>
</html>