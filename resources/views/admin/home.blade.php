@extends('admin.layouts.master')
@section('content')
    <div class="row ">
        <div class="card">
            <div class="card-header" style="margin:5%">
                <h1>Hello, {{ Auth::user()->name }}</h1>
            </div>
            <div class="card-body" style="border-top: 1px solid rgb(168, 166, 166)">
                <p>You're logged in as an</p><span>Admin</span>
            </div>
        </div>
    </div>
    <h2 class="section-title">Selamat Datang di DebaStore</h2>
    <div class="row">
        <div class="col-12 col-md-4 col-lg-4">
            <article class="article article-style-c">
                <div class="article-header">
                    <div class="article-image" data-background="aboutimg/c.jpeg">
                    </div>
                </div>
                <div class="article-details">
                    <div class="article-category"><a href="#">Update Terakhir</a>
                        <div class="bullet"></div> <a href="#">3 DAYS</a>
                    </div>
                    <div class="article-title">
                        <h2><a href="#">Bersama Bapak M. Suhendra</a></h2>
                    </div>
                    <p>A don't spirit gathered two under, lights said. May Multiply seasons you'll spirit tree morning
                        hath first signs.</p>
                </div>
            </article>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
            <article class="article article-style-c">
                <div class="article-header">
                    <div class="article-image" data-background="aboutimg/c.jpeg">
                    </div>
                </div>
                <div class="article-details">
                    <div class="article-category"><a href="#">Update Terakhir</a>
                        <div class="bullet"></div> <a href="#">3 DAYS</a>
                    </div>
                    <div class="article-title">
                        <h2><a href="#">Bersama Bapak M. Suhendra</a></h2>
                    </div>
                    <p>A don't spirit gathered two under, lights said. May Multiply seasons you'll spirit tree morning
                        hath first signs.</p>
                </div>
            </article>
        </div>
        <div class="col-12 col-md-4 col-lg-4">
            <article class="article article-style-c">
                <div class="article-header">
                    <div class="article-image" data-background="aboutimg/c.jpeg">
                    </div>
                </div>
                <div class="article-details">
                    <div class="article-category"><a href="#">Update Terakhir</a>
                        <div class="bullet"></div> <a href="#">3 DAYS</a>
                    </div>
                    <div class="article-title">
                        <h2><a href="#">Bersama Bapak M. Suhendra</a></h2>
                    </div>
                    <p>A don't spirit gathered two under, lights said. May Multiply seasons you'll spirit tree morning
                        hath first signs.</p>
                </div>
            </article>
        </div>
    </div>
@endsection
