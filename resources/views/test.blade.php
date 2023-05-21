<html>
<head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<form id="testId" action="?" method="POST">
    <div class="g-recaptcha" data-sitekey="6LcWga4iAAAAANsYbOyfGhYsaaFH8-Eqxq0anF1u"></div>
    <br/>
    <input type="submit" value="Submit">
</form>

<script>
    let form = document.querySelector('#testId');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        let recaptchaResponse = document.querySelector('#g-recaptcha-response').value;

        console.log(recaptchaResponse);

    });

</script>

</body>
</html>
