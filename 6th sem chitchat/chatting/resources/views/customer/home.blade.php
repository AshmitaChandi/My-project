@extends('layouts.customer.app')


@section('content')
<body>
        <div class="green-background"></div>
        <div class="wrap">
                <section class="left">
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
                        <div class="contact-list"></div>
                </section>

                <section class="right">
                        <div class="chat-head">
                                <img alt="profilepicture" src="http://localhost/tourism/public/index.html">
                                <div class="chat-name">
                                        <h1 class="font-name">Tourism Nepal</h1>
                                        <p class="font-online">2 min ago</p>
                                </div>
                                <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-paperclip fa-lg" aria-hidden="true"></i>
                                <i class="fa fa-bars fa-lg" aria-hidden="true" id="show-contact-information"></i>
                                <i class="fa fa-times fa-lg" aria-hidden="true" id="close-contact-information"></i>
                        </div>
                        <div class="wrap-chat">
                                <div class="chat"></div>
                                <div class="information"></div>
                        </div>
                        
@endsection