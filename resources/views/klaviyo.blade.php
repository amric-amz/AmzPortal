<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Klaviyo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Klaviyo Integration On AMZ ONE STEP</h1>
        <form method="post" action="{{ url('createKlaviyo') }}">
            @csrf
            <input type="number" name="contact" placeholder="contact"><br><br>
            <input type="checkbox" value="on" name="smsconcern">If you want to sms concern please cheeck it<br><br>
            <input type="email" name="email" placeholder="Email"><br><br>
            <select name="selOption">
                <option value="1">Australia</option>
                <option value="2">Canada</option>
                <option value="3">Pakistan</option>
            </select>
            <input type="submit" class="jqueryHide" value="Submit">
        </form>
    </body>
</html>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>


    <script>



    jQuery(function($) {

        $(document).on('change','.selOption',function(){

            var country = $(this).val();
            alert($country);
        });

    });

    </script>
