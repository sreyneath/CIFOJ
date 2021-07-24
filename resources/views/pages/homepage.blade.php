@extends('index')
@section('layout')
    <div class="header-banner">
        <div class="image">
            <img src="{!! asset('images/photo/banner01.jpg') !!}" alt="">
        </div>
    </div>
    <div class="home-page">
        <div class="container01">
            <div class="content fixed">
                <div class="wrapper">
                    <div class="item-content">
                        <div class="item">
                            <div class="container">
                                <div class="image">
                                    <img src="{!! asset('images/photo/01.jpg') !!}" alt="">
                                </div>
                                <div class="description">
                                    <h2>CORE PRINCIPLES</h2>
                                    <p>Cambodia Check Core Principles are a commitment to non-partisanship and fairness; a commitment to transparency of sources; a commitment to transparency of funding and organization; a commitment to transparency of methodology; and a commitment to open and honest corrections.</p>
                                    <h1>Read More</h1>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container">
                                <div class="image">
                                    <img src="{!! asset('images/photo/02.jpg') !!}" alt="">
                                </div>
                                <div class="description">
                                    <h2>METHODOLOGY</h2>
                                    <p>After reviewing the literature, Cambodia Check adheres to a process that entails five elements: choosing claims to check; contacting the speaker/author; tracing false claims; engaging with experts; and showing one is work.</p>
                                    <h1>Read More</h1>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container">
                                <div class="image">
                                    <img src="{!! asset('images/photo/03.jpg') !!}" alt="">
                                </div>
                                <div class="description">
                                    <h2>POST</h2>
                                    <p>Highlighting fact check posts that have been produced following a thorough methodology and process.</p>
                                    <h1>Read More</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container02">
            <div class="content fixed">
                <div class="title">
                    <h1><strong>LASTES</strong>UPDATE</h1>
                </div>
                <div class="underline"></div>
            </div>
        </div>
        <div class="container03">
            <div class="image">
                <img src="{!! asset('images/photo/background.png') !!}" alt="">
                <div class="container">
                    <div class="content fixed">
                        <div class="title">
                            <h1><strong>CONTACT</strong>US</h1>
                        </div>
                        <div class="contact-content">
                            <div class="contact-list">
                                <div class="item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h2>ADDRESS</h2>
                                    <h4>The Asia Foundation: #59, street 242, Daun Penh, Phnom Penh, Cambodia</h4>
                                </div>
                                <div class="item">
                                    <i class="fas fa-phone-alt"></i>
                                    <h2>Phone</h2>
                                    <h4>(+855) 023 123 123</h4>
                                </div>
                                <div class="item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h2>E-mail</h2>
                                    <h4>gmail@gmail.com</h4>
                                </div>
                            </div>
                            <div class="form">
                                <div class="inside">
                                    <div class="user">
                                        <input type="text" placeholder="Username">
                                        <input type="text" placeholder="E-mail">
                                        <input type="text" placeholder="Phone">
                                    </div>
                                    <div class="message">
                                        <textarea placeholder="Your Message" name="" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="send">
                                    <button><h3>SEND</h3></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


