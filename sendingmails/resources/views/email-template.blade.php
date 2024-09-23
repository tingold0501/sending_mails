<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    <script src="/js/jquery-3.7.1.min.js"></script>
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/grapesjs"></script>

    <script type="module" src="https://unpkg.com/grapesjs-preset-webpage"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }
    </style>
</head>

<body>
    {{-- <div id="contenteditable" contenteditable="true">Hello, I am a <strong>Container</strong> with <a href="/">a lot of interesting <i>things</i></a> inside.<br />Finding the cursor must be hard<sup>2</sup>, right?</div>
    <div id="indexHint">
    </div> --}}

    <div id="gjs" style="height:0px; overflow:hidden">
        <div class="panel">
            <h1 class="welcome">Welcome to</h1>
            <div class="big-title">
                <svg class="logo" viewBox="0 0 100 100">
                    <path
                        d="M40 5l-12.9 7.4 -12.9 7.4c-1.4 0.8-2.7 2.3-3.7 3.9 -0.9 1.6-1.5 3.5-1.5 5.1v14.9 14.9c0 1.7 0.6 3.5 1.5 5.1 0.9 1.6 2.2 3.1 3.7 3.9l12.9 7.4 12.9 7.4c1.4 0.8 3.3 1.2 5.2 1.2 1.9 0 3.8-0.4 5.2-1.2l12.9-7.4 12.9-7.4c1.4-0.8 2.7-2.2 3.7-3.9 0.9-1.6 1.5-3.5 1.5-5.1v-14.9 -12.7c0-4.6-3.8-6-6.8-4.2l-28 16.2" />
                </svg>
                <span>GrapesJS</span>
            </div>
            <div class="description">
                This is a demo content from index.html. For the development, you shouldn't edit this file, instead you
                can
                copy and rename it to _index.html, on next server start the new file will be served, and it will be
                ignored by git.
            </div>
        </div>
        <style>
            .panel {
                width: 90%;
                max-width: 700px;
                border-radius: 3px;
                padding: 30px 20px;
                margin: 150px auto 0px;
                background-color: #d983a6;
                box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.25);
                color: rgba(255, 255, 255, 0.75);
                font: caption;
                font-weight: 100;
            }

            .welcome {
                text-align: center;
                font-weight: 100;
                margin: 0px;
            }

            .logo {
                width: 70px;
                height: 70px;
                vertical-align: middle;
            }

            .logo path {
                pointer-events: none;
                fill: none;
                stroke-linecap: round;
                stroke-width: 7;
                stroke: #fff
            }

            .big-title {
                text-align: center;
                font-size: 3.5rem;
                margin: 15px 0;
            }

            .description {
                text-align: justify;
                font-size: 1rem;
                line-height: 1.5rem;
            }
        </style>
    </div>

    <style>
        .panel {
            width: 90%;
            max-width: 700px;
            border-radius: 3px;
            padding: 30px 20px;
            margin: 150px auto 0px;
            background-color: #d983a6;
            box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.25);
            color: rgba(255, 255, 255, 0.75);
            font: caption;
            font-weight: 100;

        }

        .welcome {
            text-align: center;
            font-weight: 100;
            margin: 0px;
        }

        .logo {
            width: 70px;
            height: 70px;
            vertical-align: middle;
        }

        .logo path {
            pointer-events: none;
            fill: none;
            stroke-linecap: round;
            stroke-width: 7;
            stroke: #fff
        }

        .big-title {
            text-align: center;
            font-size: 3.5rem;
            margin: 15px 0;
        }

        .description {
            text-align: justify;
            font-size: 1rem;
            line-height: 1.5rem;
        }
    </style>
    </div>

    <script type="module" src="{{ asset('/js/index.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        var contract = @json($contracts);
        var campaign = @json($campaigns);
        var contract_id = @json($contracts->pluck('id'));
        console.log(contract, campaign, contract_id);
    </script>
</body>

</html>
