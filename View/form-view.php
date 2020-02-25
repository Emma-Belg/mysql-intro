<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>MySQL</title>
</head>
<body>
<div class="container">
    <h1>Please enter your information</h1>

    <form method="post">

        <fieldset>
            <legend>Information</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstname">First name:</label>
                    <input type="text" name="firstname" id="firstname" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="lastname">Last name:</label>
                    <input type="text" id="lastname" name="lastname" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="linkedin">LinkedIn</label>
                    <input type="text" id="linkedin" name="linkedin" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="github">Github</label>
                    <input type="text" id="github" name="github" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="preflang">Preferred language</label>
                    <input type="text" id="preflang" name="preflang" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="avatar">Avatar</label>
                    <input type="text" id="avatar" name="avatar" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="video">Video</label>
                    <input type="text" id="video" name="video" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="quote">Quote</label>
                    <input type="text" id="quote" name="quote" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="quoteauthor">Quote Author</label>
                    <input type="text" id="quoteauthor" name="quoteauthor" class="form-control">
                </div>
            </div>

        </fieldset>
        <button type="submit" class="btn btn-primary" name="submit">Send</button>

</div>

<style>
    footer {
        text-align: center;
    }
</style>
</body>
</html>
