@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="sidebar-content col-3">
                <div class="side-search-area">
                    <div class="side-search-area-heading">
                        <p>絞り込み</p>
                    </div>
                    <div class="side-search-area-main">
                        <ul>
                            <li>
                                <input type="checkbox">
                                <label>行った</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>行ってみたい</label>
                            </li>
                        </ul>
                    </div>
                    <div class="side-search-btn-area">
                        <button class="btn-l">絞り込む</button>
                    </div>
                </div>
            </div>


            <div class="main-content col-9">
                <p>検索結果：{{ count($shops) }}件</p>
                @foreach ($shops as $shop)
                    <div class="shop">

                        @if((int)$shop->type === 0)
                            <p class="shop-type-label blue">行ってみたい</p>
                        @elseif((int)$shop->type === 1)
                            <p class="shop-type-label red">行った</p>
                        @endif
                        <div class="shop-content">
                            <a href="#" class="shop-name">{{ $shop->name }}</a>
                            <p class="shop-address">{{ $shop->address }}</p>
                            <div class="shop-data">
                                <div class="shop-left">
                                    <img class="shop-img" src="{{ asset('img/no-images.gif') }}">
                                </div>
                                <div class="shop-right">
                                    <p class="shop-memo">{{ $shop->memo }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
