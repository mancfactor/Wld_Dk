<main role="main" id="MainContent" class="main-content" style="padding-top: 187px;">
      <!-- /templates/customers/login.liquid -->


<section id="Login" class="account">
	<section class="col">
      <div class="login">
          <h2 class="theme">Login</h2>
          <p>Don't have an account? <a href="/account/register">Sign up here</a>.</p>
          <form method="post" action="/account/login" id="customer_login" accept-charset="UTF-8"><input type="hidden" name="form_type" value="customer_login"><input type="hidden" name="utf8" value="✓">
          <div class="form-field">
          
          </div>
          <div class="form-field">
              <label for="customer_email" class="label--float">Email</label>
              <input type="email" value="" name="customer[email]" id="customer_email" class="" placeholder="Email" spellcheck="false" autocomplete="off" autocapitalize="off" autofocus="">
          </div>
          
          <div class="form-field">
              <label for="customer_password" class="label--float">Password</label>
              <input type="password" value="" name="customer[password]" id="customer_password" class="password" placeholder="Password">
              <div class="forgot-password">
                  <a href="#recover" onclick="showRecoverPasswordForm()">Forgot your password?</a>
              </div>
          </div>
          
          <div class="form-field action-bottom">
              <input class="btn" type="submit" value="Sign In">
              <span class="note">&nbsp; <a href="https://withlovedarling.com">Return to Store</a></span>
          </div>
          <input type="hidden" name="return_url" value="/account"></form>
      </div>

      <div class="recover-password" style="display: none;">
          <h2 class="theme">Reset your password</h2>
          <p>We will send you an email to reset your password.</p>
          <form method="post" action="/account/recover" accept-charset="UTF-8"><input type="hidden" name="form_type" value="recover_customer_password"><input type="hidden" name="utf8" value="✓">
          
          <div class="form-field">
              <label for="email">Email</label>
              <input type="email" value="" size="30" name="email" id="recover-email" class="large">
          </div>
          <div class="form-field action-bottom">
              <input class="btn" type="submit" value="Submit">
              <span class="note">or <a href="javascript:void(0)" onclick="hideRecoverPasswordForm()">Cancel</a></span>
          </div>
          </form>
      </div>
	</section>

    

</section>

<script type="text/javascript">
  if (window.location.hash == '#recover') {
      showRecoverPasswordForm();
  } else {
      hideRecoverPasswordForm();
  }
  function showRecoverPasswordForm() {
      $('.recover-password').show();
      $('.login').hide();
      window.location.hash = '#recover';
      return false;
  }
  function hideRecoverPasswordForm() {
      $('.recover-password').hide();
      $('.login').show();
      window.location.hash = '';
      return false;
  }
</script>


    </main>