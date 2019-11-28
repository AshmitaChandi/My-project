<body>
        <div class="green-background"></div>
        <div class="wrap">
                <section class="left" >
                        <div class="profile">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/user.jpg">
                                <div class="icons">
                                        <i class="fa fa-commenting fa-lg" aria-hidden="true"></i>
                                        <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
                                </div>
                        </div>
                        <div class="wrap-search">
                                <div class="search">
                                        <i class="fa fa-search fa" aria-hidden="true"></i>
                                        <input type="text" class="input-search" placeholder="Search">
                                </div>
                        </div>
                        <div class="contact-list">
                            <div class="contact active-contact" id="7">
                                <img src="{{asset('assets/images/img.png')}}" alt="profilpicture">
                                <div class="contact-preview">
                                    <div class="contact-text">
                                        <h1 class="font-name">Tourism Nepal</h1>
                                        <p class="font-preview"></p>
                                    </div>
                                </div>
                                <div class="contact-time">
                                    <p>17:54</p>
                                </div>
                            </div>
                        </div>
                </section>

                <section class="right">
                        <div class="chat-head">
                                <img alt="profilepicture" src="{{asset('assets/images/img.png')}}">
                                <div class="chat-name">
                                        <h1 class="font-name" action="{{route('customer.message.index')}}" >Tourism Nepal</h1>
                                        <p class="font-online"> 2 min ago</p>
                                </div>
                                <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-paperclip fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-bars fa-lg" aria-hidden="true" id="show-contact-information"></i>
                                <i class="fa fa-times fa-lg" aria-hidden="true" id="close-contact-information"></i>
                        </div>
                        <div class="wrap-chat">
                            @foreach($messages as $message)
                                <div class="chat">
                                    <div class="chat-bubble you"><div class="your-mouth"></div>
                                    {{$message->message}}
                                </div>
                                @endforeach
                                </div>
                                <div class="information"></div>
                        </div>

                        <footer>
                        <div class="wrap-message" style="position: relative;
    margin-top: 180px;">
                                
                                <form action="{{route('customer.chatpost')}}" method="post">
                                   
                                     <div class="message" style="margin-top: 7px;
    margin-left: 157px;">
                                        <input type="text" name="message" class="input-message" style="margin: 0px -79px;" placeholder="Send Message">
                                        <i class="fa fa-smile-o fa-lg" aria-hidden="true"></i>
                                        <button>
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                            {{csrf_field()}}
                                    </div>
                                </form> 
                        </div>
                        </footer>
                </section>
        </div>
</body>
