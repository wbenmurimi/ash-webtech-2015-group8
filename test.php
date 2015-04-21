    <?php
    
    ?>

     <html>
         <head>
                <title>Index</title>
                <link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="css/styles.css">
                <!--link rel="stylesheet" href="css/style_nav.css"-->
                <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="../ash-webtech-2015-group8/Semantic-UI-1.8.1/dist/semantic.min.css">
                <link rel="stylesheet" href="../ash-webtech-2015-group8/Semantic-UI-1.8.1/dist/semantic.min.js">
                <link rel="stylesheet" href="../ash-webtech-2015-group8/Semantic-UI-1.8.1/dist/semantic.css">
                <link rel="stylesheet" href="../ash-webtech-2015-group8/Semantic-UI-1.8.1/dist/semantic.js">
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
                <script type="text/javascript" src="script.js"></script>
                <script>
                    $('.ui.form')
  .form({
    name: {
      identifier  : 'name',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter your name'
        }
      ]
    },
    gender: {
      identifier  : 'gender',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please select a gender'
        }
      ]
    },
    username: {
      identifier : 'username',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter a username'
        }
      ]
    },
    password: {
      identifier : 'password',
      rules: [
        {
          type   : 'empty',
          prompt : 'Please enter a password'
        },
        {
          type   : 'length[6]',
          prompt : 'Your password must be at least 6 characters'
        }
      ]
    },
    terms: {
      identifier : 'terms',
      rules: [
        {
          type   : 'checked',
          prompt : 'You must agree to the terms and conditions'
        }
      ]
    }
  })
;
                    function validate() {
                        var obj = document.getElementById("x");
                        var str = obj.value;
                        if (str.length <= 0) {
                            obj.style.backgroundColor("red");
                            return false;
                        }
                        // ;
                        else{
                            obj.style.backgroundColor("green");
                            return false;
                        }
                        // ;

                    }
                    

                </script>

                <style type="text/css">

                </style>

            </head>
            <body>   
              <form class="ui form segment">
    <p>Tell Us About Yourself</p>
    <div class="two fields">
      <div class="field">
        <label>Name</label>
        <input placeholder="First Name" name="name" type="text">
      </div>
      <div class="field">
        <label>Gender</label>
        <select class="ui dropdown" name="gender">
          <option value="">Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
    </div>
    <div class="field">
      <label>Username</label>
      <input placeholder="Username" name="username" type="text">
    </div>
    <div class="field">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="inline field">
      <div class="ui checkbox">
        <input type="checkbox" name="terms">
        <label>I agree to the terms and conditions</label>
      </div>
    </div>
    <div class="ui blue submit button">Submit</div>
  </form>  
            </body>
     </html>
