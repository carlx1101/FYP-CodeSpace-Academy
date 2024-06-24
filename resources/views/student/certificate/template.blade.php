<!DOCTYPE html>
<html>
<head>
    <style type='text/css'>
        body, html {
            margin: 0;
            padding: 0;
        }
        body {
            color: black;
            font-family: Georgia, serif;
            font-size: 24px;
            text-align: center;
        }
        .container {
            border: 20px solid rgb(104, 187, 255);;
            width: 750px;
            height: 563px;
            vertical-align: middle;
        }
        .logo {
            color: rgb(104, 187, 255);
        }

        .marquee {
            color: rgb(104, 187, 255);;
            font-size: 48px;
            margin: 20px;
        }
        .assignment {
            margin: 20px;
        }
        .person {
            border-bottom: 2px solid black;
            font-size: 32px;
            font-style: italic;
            margin: 20px auto;
            width: 400px;
        }
        .reason {
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            CodeSpace Academy
        </div>

        <div class="marquee">
            Certificate of Completion
        </div>

        <div class="assignment">
            This certificate is presented to
        </div>

        <div class="person">
            {{ $user->name }}
        </div>

        <div class="reason">
            For successfully completing the course<br/>
            {{ $course->title }}
        </div>
    </div>
</body>
</html>
