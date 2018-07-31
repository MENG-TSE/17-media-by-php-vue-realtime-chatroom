<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title> {{ $anchor->name}}</title>
    <link rel="stylesheet" href="{{ asset('css/page2.css') }}">
</head>
<body>
<aside class="left">
                    {{ $anchor->description }}        
</aside>



        <aside class="middle">
                <div class="mid1">
                    <div id="hello">
                          <span>簡介</span>
                    </div>
                    <div>
                            <img src="{{ asset($anchor->description) }}" width="100" alt="">

                        <img src="{{ asset($anchor->thumbnail2) }}" alt="">
                    </div>
            </div>


        {{-- <div>{{ $anchor->name }}</div>

        @foreach($anchor->comments as $comment)
        <p>{{ $comment->content }}</p>
        
        @endforeach

        原本的表單輸出輸入
        @if(Auth::check())
            <form action="{{ route('newComment') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Comment..." name="comment" id="" cols="30" rows="4"></textarea>
                        <input type="hidden" name="anchor" value="{{ $anchor->id }}">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Send</button>
                    </div>
            </form>
         @endif --}}
         
         
{{-- <aside class="right"> --}}
        <div class="right1">
            <ul class="ul">
                <li class="righttop1">
                    <a href="#">留言</a>
                </li>
                <span class="righttop22color">|</span>
                <li class="righttop2">
                        <a class="" href="/17-media/public">回首頁</a>
                </li>
                <span class="righttop22color">|</span>
                <li class="righttop2">
                    <a href="#">拜訪紀錄</a>
                </li>
            </ul>
            <div class="rightmidfoot">
                <div class="rightmid">
                    <ul class="rightmidtalk">
                        <li class="rightmidtalkli">
                                <span class="lightblue1">17</span>
                                <span class="darkgreen2">甜甜家💕亂入</span>
                                <span class="greencheck">
                                    <svg width="24" height="14"><defs><linearGradient id="BJIlXj_zcW" x1="45.65%" y1="50%" y2="50%"><stop offset="0%" stop-color="#F6FF6B" stop-opacity="0"></stop><stop offset="100%" stop-color="#FFCB00" stop-opacity=".7"></stop></linearGradient><path id="BJPgmsdM9b" d="M2.4 0h19a1.2 1.2 0 0 1 1.15 1.5L21.08 7l1.47 5.5A1.2 1.2 0 0 1 21.4 14h-19A2.4 2.4 0 0 1 0 11.6V2.4A2.4 2.4 0 0 1 2.4 0z"></path><path id="S1Fg7i_zqW" d="M2.4 0H21a1.2 1.2 0 0 1 1.15 1.5L20.7 7l1.45 5.5A1.2 1.2 0 0 1 21 14H2.4A2.4 2.4 0 0 1 0 11.6V2.4A2.4 2.4 0 0 1 2.4 0z"></path><path id="rJ3g7j_f9Z" d="M5.45 6l3.9 4.65c.08.08.2.08.28 0l6.2-6.85c.14-.15-.06-.38-.24-.27L9.5 6.9a.2.2 0 0 1-.18 0L5.67 5.73c-.18-.1-.35.13-.22.28"></path><filter id="BkogmsdMqb" width="109.5%" height="127.7%" x="-4.8%" y="-6.9%" filterUnits="objectBoundingBox"><feOffset dy="1" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset><feColorMatrix in="shadowOffsetOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.107478487 0"></feColorMatrix></filter></defs><g fill="none" fill-rule="evenodd"><path fill="#8CD674" d="M3 0h19.05a1.2 1.2 0 0 1 1.1 1.65L21 7l2.18 5.35a1.2 1.2 0 0 1-1.1 1.65H3a2.4 2.4 0 0 1-2.4-2.4V2.4A2.4 2.4 0 0 1 3 0z"></path><path fill="url(#BJIlXj_zcW)" d="M2.4 0h18.93a1.2 1.2 0 0 1 1.1 1.65L20.3 7l2.14 5.35a1.2 1.2 0 0 1-1.1 1.65H2.4A2.4 2.4 0 0 1 0 11.6V2.4A2.4 2.4 0 0 1 2.4 0z" opacity=".6" transform="translate(.6)"></path><g transform="translate(.6)"><mask id="ryuxmsOG5-" fill="#fff"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#BJPgmsdM9b"></use></mask><path fill="#58A079" d="M6.6-5.83L16.8 14H-3.6z" mask="url(#ryuxmsOG5-)" opacity=".3"></path></g><g transform="translate(.6)"><mask id="r1clmj_z9Z" fill="#fff"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#S1Fg7i_zqW"></use></mask><path fill="#58A079" d="M11.4 0l10.2 19.83H1.2z" mask="url(#r1clmj_z9Z)" opacity=".3" transform="rotate(-180 11.4 9.917)"></path></g><g transform="translate(.6)"><use fill="#000" filter="url(#BkogmsdMqb)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#rJ3g7j_f9Z"></use><use fill="#FFF" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#rJ3g7j_f9Z"></use></g></g></svg>                                    
                                </span>
                                <span class="green3">👍👍👍</span>
                        </li>
    
                        <li class="rightmidtalkli">
                                <span class="darkgreen1">17</span>
                                <span class="darkgreen2">甜甜家💕亂入</span>
                                <span class="greencheck">
                                    <svg width="24" height="14"><defs><linearGradient id="BJIlXj_zcW" x1="45.65%" y1="50%" y2="50%"><stop offset="0%" stop-color="#F6FF6B" stop-opacity="0"></stop><stop offset="100%" stop-color="#FFCB00" stop-opacity=".7"></stop></linearGradient><path id="BJPgmsdM9b" d="M2.4 0h19a1.2 1.2 0 0 1 1.15 1.5L21.08 7l1.47 5.5A1.2 1.2 0 0 1 21.4 14h-19A2.4 2.4 0 0 1 0 11.6V2.4A2.4 2.4 0 0 1 2.4 0z"></path><path id="S1Fg7i_zqW" d="M2.4 0H21a1.2 1.2 0 0 1 1.15 1.5L20.7 7l1.45 5.5A1.2 1.2 0 0 1 21 14H2.4A2.4 2.4 0 0 1 0 11.6V2.4A2.4 2.4 0 0 1 2.4 0z"></path><path id="rJ3g7j_f9Z" d="M5.45 6l3.9 4.65c.08.08.2.08.28 0l6.2-6.85c.14-.15-.06-.38-.24-.27L9.5 6.9a.2.2 0 0 1-.18 0L5.67 5.73c-.18-.1-.35.13-.22.28"></path><filter id="BkogmsdMqb" width="109.5%" height="127.7%" x="-4.8%" y="-6.9%" filterUnits="objectBoundingBox"><feOffset dy="1" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset><feColorMatrix in="shadowOffsetOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.107478487 0"></feColorMatrix></filter></defs><g fill="none" fill-rule="evenodd"><path fill="#8CD674" d="M3 0h19.05a1.2 1.2 0 0 1 1.1 1.65L21 7l2.18 5.35a1.2 1.2 0 0 1-1.1 1.65H3a2.4 2.4 0 0 1-2.4-2.4V2.4A2.4 2.4 0 0 1 3 0z"></path><path fill="url(#BJIlXj_zcW)" d="M2.4 0h18.93a1.2 1.2 0 0 1 1.1 1.65L20.3 7l2.14 5.35a1.2 1.2 0 0 1-1.1 1.65H2.4A2.4 2.4 0 0 1 0 11.6V2.4A2.4 2.4 0 0 1 2.4 0z" opacity=".6" transform="translate(.6)"></path><g transform="translate(.6)"><mask id="ryuxmsOG5-" fill="#fff"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#BJPgmsdM9b"></use></mask><path fill="#58A079" d="M6.6-5.83L16.8 14H-3.6z" mask="url(#ryuxmsOG5-)" opacity=".3"></path></g><g transform="translate(.6)"><mask id="r1clmj_z9Z" fill="#fff"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#S1Fg7i_zqW"></use></mask><path fill="#58A079" d="M11.4 0l10.2 19.83H1.2z" mask="url(#r1clmj_z9Z)" opacity=".3" transform="rotate(-180 11.4 9.917)"></path></g><g transform="translate(.6)"><use fill="#000" filter="url(#BkogmsdMqb)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#rJ3g7j_f9Z"></use><use fill="#FFF" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#rJ3g7j_f9Z"></use></g></g></svg>                                    
                                </span>
                                <span class="green3">喜歡了主播</span>
                                <span class="redheart">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="18" viewBox="0 0 25 18"><path fill="#FF5A90" fill-rule="evenodd" d="M12.625 3h-.001c-.937.002-1.864.466-2.568 1.598l-.088.142-.088-.142C9.176 3.466 8.256 3.001 7.33 3h-.003c-.942 0-1.9.49-2.622 1.296A4.756 4.756 0 0 0 3.5 7.46c0 .855.354 1.728.905 2.563.551.835 1.298 1.63 2.069 2.33a24.66 24.66 0 0 0 3.539 2.633l.021.013.109-.067a25.841 25.841 0 0 0 1.908-1.323c1.15-.878 2.529-2.092 3.441-3.42.61-.884 1.009-1.817 1.008-2.729a4.72 4.72 0 0 0-1.221-3.165C14.548 3.491 13.578 3 12.625 3"></path></svg>
                                </span>
                        </li>
    
                        <li class="rightmidtalkli">
                                <span class="green1">5</span>
                                <span class="green2">william_tail08</span>
                                <span class="greencheck">
                                    <svg width="24" height="14"><defs><linearGradient id="BJIlXj_zcW" x1="45.65%" y1="50%" y2="50%"><stop offset="0%" stop-color="#F6FF6B" stop-opacity="0"></stop><stop offset="100%" stop-color="#FFCB00" stop-opacity=".7"></stop></linearGradient><path id="BJPgmsdM9b" d="M2.4 0h19a1.2 1.2 0 0 1 1.15 1.5L21.08 7l1.47 5.5A1.2 1.2 0 0 1 21.4 14h-19A2.4 2.4 0 0 1 0 11.6V2.4A2.4 2.4 0 0 1 2.4 0z"></path><path id="S1Fg7i_zqW" d="M2.4 0H21a1.2 1.2 0 0 1 1.15 1.5L20.7 7l1.45 5.5A1.2 1.2 0 0 1 21 14H2.4A2.4 2.4 0 0 1 0 11.6V2.4A2.4 2.4 0 0 1 2.4 0z"></path><path id="rJ3g7j_f9Z" d="M5.45 6l3.9 4.65c.08.08.2.08.28 0l6.2-6.85c.14-.15-.06-.38-.24-.27L9.5 6.9a.2.2 0 0 1-.18 0L5.67 5.73c-.18-.1-.35.13-.22.28"></path><filter id="BkogmsdMqb" width="109.5%" height="127.7%" x="-4.8%" y="-6.9%" filterUnits="objectBoundingBox"><feOffset dy="1" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset><feColorMatrix in="shadowOffsetOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.107478487 0"></feColorMatrix></filter></defs><g fill="none" fill-rule="evenodd"><path fill="#8CD674" d="M3 0h19.05a1.2 1.2 0 0 1 1.1 1.65L21 7l2.18 5.35a1.2 1.2 0 0 1-1.1 1.65H3a2.4 2.4 0 0 1-2.4-2.4V2.4A2.4 2.4 0 0 1 3 0z"></path><path fill="url(#BJIlXj_zcW)" d="M2.4 0h18.93a1.2 1.2 0 0 1 1.1 1.65L20.3 7l2.14 5.35a1.2 1.2 0 0 1-1.1 1.65H2.4A2.4 2.4 0 0 1 0 11.6V2.4A2.4 2.4 0 0 1 2.4 0z" opacity=".6" transform="translate(.6)"></path><g transform="translate(.6)"><mask id="ryuxmsOG5-" fill="#fff"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#BJPgmsdM9b"></use></mask><path fill="#58A079" d="M6.6-5.83L16.8 14H-3.6z" mask="url(#ryuxmsOG5-)" opacity=".3"></path></g><g transform="translate(.6)"><mask id="r1clmj_z9Z" fill="#fff"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#S1Fg7i_zqW"></use></mask><path fill="#58A079" d="M11.4 0l10.2 19.83H1.2z" mask="url(#r1clmj_z9Z)" opacity=".3" transform="rotate(-180 11.4 9.917)"></path></g><g transform="translate(.6)"><use fill="#000" filter="url(#BkogmsdMqb)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#rJ3g7j_f9Z"></use><use fill="#FFF" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#rJ3g7j_f9Z"></use></g></g></svg>                                    
                                </span>
                                <span class="green3">我忘記香蕉哥的id了😅😅😅</span>
                        </li>

                        <li class="rightmidtalkli">
                                <span class="darkgreen1">17</span>
                                <span class="darkgreen2">甜甜家💕亂入</span>
                                <span class="greencheck">
                                    <svg width="24" height="14"><defs><linearGradient id="BJIlXj_zcW" x1="45.65%" y1="50%" y2="50%"><stop offset="0%" stop-color="#F6FF6B" stop-opacity="0"></stop><stop offset="100%" stop-color="#FFCB00" stop-opacity=".7"></stop></linearGradient><path id="BJPgmsdM9b" d="M2.4 0h19a1.2 1.2 0 0 1 1.15 1.5L21.08 7l1.47 5.5A1.2 1.2 0 0 1 21.4 14h-19A2.4 2.4 0 0 1 0 11.6V2.4A2.4 2.4 0 0 1 2.4 0z"></path><path id="S1Fg7i_zqW" d="M2.4 0H21a1.2 1.2 0 0 1 1.15 1.5L20.7 7l1.45 5.5A1.2 1.2 0 0 1 21 14H2.4A2.4 2.4 0 0 1 0 11.6V2.4A2.4 2.4 0 0 1 2.4 0z"></path><path id="rJ3g7j_f9Z" d="M5.45 6l3.9 4.65c.08.08.2.08.28 0l6.2-6.85c.14-.15-.06-.38-.24-.27L9.5 6.9a.2.2 0 0 1-.18 0L5.67 5.73c-.18-.1-.35.13-.22.28"></path><filter id="BkogmsdMqb" width="109.5%" height="127.7%" x="-4.8%" y="-6.9%" filterUnits="objectBoundingBox"><feOffset dy="1" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset><feColorMatrix in="shadowOffsetOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.107478487 0"></feColorMatrix></filter></defs><g fill="none" fill-rule="evenodd"><path fill="#8CD674" d="M3 0h19.05a1.2 1.2 0 0 1 1.1 1.65L21 7l2.18 5.35a1.2 1.2 0 0 1-1.1 1.65H3a2.4 2.4 0 0 1-2.4-2.4V2.4A2.4 2.4 0 0 1 3 0z"></path><path fill="url(#BJIlXj_zcW)" d="M2.4 0h18.93a1.2 1.2 0 0 1 1.1 1.65L20.3 7l2.14 5.35a1.2 1.2 0 0 1-1.1 1.65H2.4A2.4 2.4 0 0 1 0 11.6V2.4A2.4 2.4 0 0 1 2.4 0z" opacity=".6" transform="translate(.6)"></path><g transform="translate(.6)"><mask id="ryuxmsOG5-" fill="#fff"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#BJPgmsdM9b"></use></mask><path fill="#58A079" d="M6.6-5.83L16.8 14H-3.6z" mask="url(#ryuxmsOG5-)" opacity=".3"></path></g><g transform="translate(.6)"><mask id="r1clmj_z9Z" fill="#fff"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#S1Fg7i_zqW"></use></mask><path fill="#58A079" d="M11.4 0l10.2 19.83H1.2z" mask="url(#r1clmj_z9Z)" opacity=".3" transform="rotate(-180 11.4 9.917)"></path></g><g transform="translate(.6)"><use fill="#000" filter="url(#BkogmsdMqb)" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#rJ3g7j_f9Z"></use><use fill="#FFF" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#rJ3g7j_f9Z"></use></g></g></svg>                                    
                                </span>
                                <span class="green3">大家歡迎來到 @甜甜✨✨ 的直播間，喜歡主播點點追蹤、送送小禮物🎁，請幫忙送送活動禮物「玩樂島」謝謝你們！</span>
                        </li>

                        @foreach($anchor->comments as $comment)
                        <p>{{ $comment->content }}             <small id="time"> ,{{ date_format($comment->created_at,'F d, Y') }}</small>  
                        <small class="badge float-right">{{ $comment->user->name }}</small></p>
                        
                         @endforeach

                        @if(Auth::check())
                        <form action="{{ route('newComment') }}" method="POST">
                            @csrf
                                <div class="form-group rightmidtalkli">
                                    <textarea class="form-control" placeholder="Comment..." name="comment" id="" cols="30" rows="4"></textarea>
                                    <input type="hidden" name="anchor" value="{{ $anchor->id }}">
                                </div>
                                <div class="form-group">
                                    <button class="rightfootbtn" type="submit">Send</button>
                                </div>
                        </form>
                     @endif
                    </ul>
                </div>
    
            {{-- <form class="rightfoot">
                <button type="button" class="rightfootbtn">
                        <span>立即登入，開始聊天</span>
                </button>
            </form> --}}
    
            </div>
    
            
        </div>
    {{-- </aside> --}}


    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

