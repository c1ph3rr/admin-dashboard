<?php
    require_once('session_check.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css" />    
    <title>Take Action</title>
</head>

<?php
    require_once('header.php');
?>

<ul class="uk-list uk-list-divider uk-position-center">
    <li>
        <button class="uk-button uk-button-primary uk-margin-small-right uk-width-1-1" type="button" uk-toggle="target: #modal-example">Change Active directory</button>
            <div id="modal-example" uk-modal>
                <div class="uk-modal-dialog uk-modal-body">
                    <h2 class="uk-modal-title">Headline</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p class="uk-text-right">
                        <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                        <button class="uk-button uk-button-primary" type="button">Save</button>
                    </p>
                </div>
            </div>
    </li>
    <li>
        <button class="uk-button uk-button-primary uk-margin-small-right uk-width-1-1" type="button" onclick="window.open('./doughnut/data.json')">Show history</button>
    </li>
</ul>




<?php
    require_once('footer.php');
?>