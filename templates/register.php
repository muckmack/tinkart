<div class="container">
<a href="<?php echo base_url() ?>" id="tinkart">
        <img src="<?php echo base_url() ?>/img/logo.png" id="logo" alt=""/>
        Tinkart
    </a>

    <h1><?php echo $heading ?></h1>
    <h2>Register Now</h2>
    <p>and become a member of a fast growing Community of Innovators and Creators. Master the Art of Tinkering</p>
    <form name = 'registerForm' id='registerForm' action='<?php echo base_url() ?>/models/Model_Register.php' method='post' onsubmit="myFunction()"
          accept-charset='UTF-8'>
        <fieldset >

            <input type='hidden' name='submitted' id='submitted' value='1'/><br/>
            <label for='name' >Your First Name*: </label><br/>
            <input type='text' name='firstname' id='firstname' maxlength="50" required/><br/>
            <label for='name' >Your Last Name*: </label><br/>
            <input type='text' name='lastname' id='lastname' maxlength="50" required/><br/>
            <label for='email' >Email Address*:</label><br/>
            <input type='text' name='email' id='email' maxlength="50" required/><br/>

            <label for='username' >UserName*:</label><br/>
            <input type='text' name='username' id='username' maxlength="50" required/><br/>

            <label for='password' >Password*:</label><br/>
            <input type='password' name='password' id='password' maxlength="50" required/><br/>
            <label for='password' >Retype Password*:</label><br/>
            <input type='password' name='password2' id='password2' maxlength="50" required/><br/><br/>
            <input type='submit' name='Submit' value='Submit'  /><br/>
            <script>
                function myFunction() {
                    var pass1 = document.getElementById("password").value;
                    var pass2 = document.getElementById("password2").value;
                    if (pass1 != pass2 ) {
                        //alert("Passwords Do not match");
                        document.getElementById("password").style.borderColor = "#E34234";
                        document.getElementById("password2").style.borderColor = "#E34234";
                    }
                    else if (pass1 == '' || pass2 == ''){
                        document.getElementById("password").style.borderColor = "#E34234";
                        document.getElementById("password2").style.borderColor = "#E34234";
                    }
                    else if (pass1 == pass2){
                        alert("Passwords Match!!!");
                        document.getElementById("register").submit();
                    }
                }
            </script>
        </fieldset>

    </form>
</div>