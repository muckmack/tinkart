<div class="container">
<a href="<?php echo base_url() ?>" id="tinkart">
        <img src="<?php echo base_url() ?>/img/logo.png" id="logo" alt=""/>
        Tinkart
    </a>

    <h1><?php echo $heading ?></h1>
    <h2>Register Now</h2>
    <p>and become a member of a fast growing Community of Innovators and Creators. Master the Art of Tinkering</p>
    <?php echo $regerror ?>
        <form name = 'registerForm' id='registerForm' action='register' method='POST'
              accept-charset='UTF-8'>
            <fieldset >
                <input type='hidden' name='submitted' id='submitted' value='1'/><br/>
                <label for='name' >Your firstname*: </label><br/>
                <input type='text' name='firstname' id='firstname' maxlength="50" required/><br/>
                <label for='name' >Your lastname*: </label><br/>
                <input type='text' name='lastname' id='lastname' maxlength="50" required/><br/>
                <label for='email' >Email address*:</label><br/>
                <input type='text' name='email' id='email' maxlength="50" required/><br/>
                <label for='email' >Confirm email address*:</label><br/>
                <input type='text' name='email2' id='email2' maxlength="50" required/><br/>
                <label for='username' >Username*:</label><br/>
                <input type='text' name='username' id='username' maxlength="50" required/><br/>

                <label for='password' >Password*:</label><br/>
                <input type='password' name='password' id='password' maxlength="50" required/><br/>
                <label for='password' >Confirm password*:</label><br/>
                <input type='password' name='password2' id='password2' maxlength="50" required/><br/><br/>
                <input type='submit' name='submit' value='Register'  /><br/>
            </fieldset>
        </form>






</div>