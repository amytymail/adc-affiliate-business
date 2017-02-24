<div class="be-wrapper be-login">
    <div class="be-content">
        <div class="main-content container-fluid">
            <div class="splash-container">
                <div class="panel panel-default panel-border-color panel-border-color-primary">
                    <div class="panel-heading">
						<?= $this->Html->image('logo-xx.png', [
							'alt' => 'logo', 'width' => '102', 'height' => '27', 'class' => 'logo-img'
						]);?>
                        <span class="splash-description">Please enter your user information.</span>
                    </div>
                    <div class="panel-body">
						<?php	
							echo $this->Form->create();
						?>
                        <form action="index.html" method="get">
                            <div class="form-group">
                                <input name="username" type="text" placeholder="Username" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group row login-tools">
                                <div class="col-xs-6 login-remember">
                                    <div class="be-checkbox">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 login-forgot-password"><a href="#">Forgot Password?</a></div>
                            </div>
                            <div class="form-group login-submit">
                                <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Sign me in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>