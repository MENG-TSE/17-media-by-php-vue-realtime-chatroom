<!DOCTYPE html>
<html lang="en">
<head>
    {{-- //master.blade --}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>17 media</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ URL::asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{asset('assets/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/creative.min.css') }}" rel="stylesheet">


{{-- /////////////////原本這一頁的 --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .list-group{
            overflow-y: scroll;
            height: 200px;
        }
        #typing{
            color: brown;
        }
    </style>
</head>
<body>
    @include('includes.navigation')
    <div>
        
    </div>
    {{-- 留言板 --}}
    <div class="container">
        <div class="row" id="app">
            <div class="offset-10 col-4">
                    <li class="list-group-item active">Chat Room<span class="badge badge-pill badge-danger">@{{ numberOfUsers }}</span></li>
                    <div class="badge badge-pill badge-primary" id="typing">@{{ typing }}</div>
                    <ul class="list-group" v-chat-scroll>
                            <message 
                            v-for = "value,index in chat.message"
                            :key = value.index
                            :color = chat.color[index]
                            :user = chat.user[index]
                            :time = chat.time[index]
                            >
                            @{{ value }}
                            </message>
                    </ul>
                    <input type="text" class="form-control" placeholder="Type your message here.." v-model='message' @keyup.enter='send'>
                    <br>
                    <a href="" class="btn btn-warning btn-sm" @click.prevent='deleteSession'>Delete Chats</a>            
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

