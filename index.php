<html lang="en">

<head>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137480510-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-137480510-1');
    </script>

    <meta charset="utf-8">
    <title>Steam Account Generator</title>
    <meta name="description" content="Generate Steam accounts for personal usage">
    <meta name="author" content="nullworks">
    <link rel="stylesheet" href="static/css/bootswatch.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="Description"
        content="Online Steam Account Generator! Generate Steam accounts instantly! No Registeration required!">
    <meta name="keywords"
        content="Steam account generator, generate steam accounts, steam accounts, free steam accounts, generator steam, steam autoreg">
    <link href="static/favicon.ico" rel="icon" type="image/x-icon" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script defer src="static/js/common.js"></script>
    <script defer src="static/js/index.js"></script>
    <script defer src="https://recaptcha.net/recaptcha/api.js?render=6LfG55kUAAAAANVoyH7VqYns6j_ZpxB35phXF0bM">
    </script>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="/"
                onclick="gtag('event', 'homepage link');">Generator</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="custom_gen.html" onclick="gtag('event', 'custom gen');">Custom
                Accounts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="recovery.html" onclick="gtag('event', 'stats link');">Account
                Recovery</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="https://github.com/nullworks/accgen-web/issues"
                onclick="gtag('event', 'Github issues link');">GitHub Issues</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="telegram.html"
                onclick="gtag('event', 'telegram channel link');">TG
                Announcement
                Channel</a>
        </li>
        <li class="nav-item">
            <div style="line-height: 0;"><a href="https://patreon.com/steam_acc"
                    onclick="gtag('event', 'Become patreon button');"><img
                        src="https://i1.wp.com/spectraartspace.com/wp-content/uploads/2019/04/Become_a_patron_button.png"
                        style="height: 2.5rem;"></a>
            </div>
        </li>
    </ul>
    <script>
    window.addEventListener("load", function() {
        init();
    });
    </script>
</head>

<body>
    <div id="accgen_status" style="display: none;" class="alert alert-danger">
        <strong id="accgen_status_msg">If you see this, it's a bug :)</strong>
    </div>

    <div class="container text-center" style="margin: auto;height: 50%;min-width: 200px; padding-top: 7%">

        <div id="addon_dl" class="container text-center"
            style="margin: auto;height: 50%;min-width: 200px; padding-top: 7%;display: none;">
            <div id="addon_download" class="alert alert-warning">
                <h4 class="alert-heading" id="addon_download_text">You don't have our addon yet!</h4>
                <h5><a id="ffaddon" href='#' onclick="installAddon()">Download the SAG addon!</a>
                </h5>
                <strong>The addon is required in order to support steam's new registration system.</strong>
            </div>
        </div>

        <div id="accgen_ui" style="color: rgb(205, 199, 188); text-align: center;">
            <h1 style=" color: white; padding-top: 3%">Steam Account Generator</h1>
            <div id="mx_error" class="alert alert-warning" style="display: none">
                <strong>Your MX Settings are invalid. Please check Help for the correct settings. Note that DNS settings
                    might
                    take hours to propagate.</strong>
            </div>
            <br>

            <div class="container text-center">
                <div class="alert alert-info">You can now find the email for the steam accounts you generated <b>(Even
                        for
                        accounts
                        generated with our addon!)</b>. This is useful for recovering your suspended steam accounts by
                    contacting
                    Steam
                    support. <a href="recovery.html">Click here for recovery</a>
                </div>
                <br>
                <div class="alert alert-warning">We don't provide email access to the accounts you make. We don't
                    recommend
                    storing valuable items on the accounts.</div>
            </div>
            <br>

            <div id="generate_error" class="alert alert-danger" style="display: none;">
                <strong>An error has occured:</strong>
                <div id="generate_error_text"></div>
            </div>

            <div id="generated_data" style="display: none;">
                <div id="generated_card" class="card border-dark mb-3" style="max-width: 33rem;margin:auto">
                    <div class="card-header">Account information</div>
                    <div class="card-body">
                        <h6 id="acc_login" class="card-text">
                            Login: <a id="acc_link"><strong>niceaccount</strong></a>
                            <p></p>
                        </h6>
                        <h6 id="acc_pass" class="card-text">
                            Password: <strong>nicepass</strong>
                            <p></p>
                        </h6>
                    </div>
                </div>
            </div>

            <div id="custom_domain_div" class="card border-dark mb-3"
                style="max-width: 33rem;margin:auto; display: none;">
                <div class="card-header">Settings</div>
                <div class="card-body">
                    <form id="settings_form" action="#">
                        <h6 id="acc_login" class="card-text">
                            Custom Domain: <input type="text" id="settings_custom_domain" class="form-control"
                                placeholder="Enter your custom domain" autocomplete="off"><br>
                            <button id="save_settings" type="button" class="btn btn-primary btn-lg"
                                onclick="save_clicked()" style="color: darkgrey; --darkreader-inline-color:#cdc7bc;"
                                data-darkreader-inline-color="">Save
                                Settings</button>
                            <button id="help_button" type="button" onclick="settings_help()"
                                class="btn btn-primary btn-lg"
                                style="color: darkgrey; --darkreader-inline-color:#cdc7bc;"
                                data-darkreader-inline-color="">Help</button>
                        </h6>
                    </form>
                </div>
            </div>

            <div id="generated_data" style="display: none;">
                <div id="generated_accs_card" class="card border-dark mb-3" style="max-width: 33rem;margin:auto">
                    <div class="card-header">Account information</div>
                    <div class="card-body">
                        <h6 id="acc_login" class="card-text">
                            Login: <strong>niceaccount</strong>
                            <p></p>
                        </h6>
                        <h6 id="acc_pass" class="card-text">
                            Password: <strong>nicepass</strong>
                            <p></p>
                        </h6>
                        <h6 id="acc_email" class="card-text" style="display: none;">
                            E-Mail address: niceaccount@inboxkitten.com
                            <p></p>
                        </h6>
                    </div>
                </div>
            </div>

            <div id="history_list" class="card border-dark mb-3" style="max-width: 33rem;margin:auto;display: none;">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                        </tr>
                    </thead>
                    <tbody id="genned_accs">
                    </tbody>
                </table>
            </div>

            <div id="control_buttons">
                <button id="generate_button" type="button"
                    onclick="gtag('event', 'newgen_gen_clicked');generate_pressed();" class="btn btn-primary btn-lg"
                    style="color: darkgrey; ; --darkreader-inline-color:#ccc6bd;"
                    data-darkreader-inline-color="">Generate</button>
                <button id="custom_domain_button" type="button"
                    onclick="gtag('event', 'custom_domain_button');custom_domain_pressed();"
                    class="btn btn-primary btn-lg" style="color: darkgrey; --darkreader-inline-color:#cdc7bc;"
                    data-darkreader-inline-color="">Use Custom
                    Domain</button>
                <button id="history_button" type="button" onclick="gtag('event', 'show_genned_accs');history_pressed();"
                    class="btn btn-primary btn-lg"
                    style="display: none;color: darkgrey; --darkreader-inline-color:#ccc6bd;"
                    data-darkreader-inline-color="">History</button>
            </div>

            <div id="steam_iframe" style="display: none;">
                <iframe id="steam_iframe_innerdiv" height="700px" width="400px" scrolling="no"
                    style="padding-left: 3rem;" frameborder="0"></iframe>
            </div>

            <div id="generate_progress" style="display: none;">
                <h5>Please wait, generating...</h5>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                </div>
            </div>

        </div>
    </div>
    <?php
echo $_SERVER['HTTP_HOST'];
?>
</body>

</html>