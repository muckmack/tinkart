<div class="container">
<a href="#" id="tinkart">
        <img src="<?php echo base_url() ?>/img/logo.png" id="logo" alt=""/>
        Tinkart
    </a>

    <h1><?php echo $heading ?></h1>
    <h2>Register Now</h2>
    <p>and become a member of a fast growing Community of Innovators and Creators. Master the Art of Tinkering</p>
    <form id='register' action='register.php' method='post'
          accept-charset='UTF-8'>
        <fieldset >

            <input type='hidden' name='submitted' id='submitted' value='1'/><br/>
            <label for='name' >Your Full Name*: </label><br/>
            <input type='text' name='name' id='name' maxlength="50" /><br/>
            <label for='email' >Email Address*:</label><br/>
            <input type='text' name='email' id='email' maxlength="50" /><br/>

            <label for='username' >UserName*:</label><br/>
            <input type='text' name='username' id='username' maxlength="50" /><br/>

            <label for='password' >Password*:</label><br/>
            <input type='password' name='password' id='password' maxlength="50" /><br/><br/>
            <input type='submit' name='Submit' value='Submit' /><br/>

        </fieldset>
    </form>
</div>