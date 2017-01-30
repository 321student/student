<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    </head>

    <body>


        <h1>
            Hello {{ $user->name }},
        </h1>

        <!-- Intro -->

        <p>
            Click on the below button to verify your email address</p>


        <!-- Action Button -->

        <p>

            <a href="{{ url('register/verify/'.$user->email_token) }}"
               class="button"
               target="_blank">
                Verify
            </a>
            register/verify/{{$user->email_token}}
        </p>


        

        <p>
            Thank you
        </p>

        <p>
            Regards,<br>{{ config('app.name') }}
        </p>

    </body>
</html>