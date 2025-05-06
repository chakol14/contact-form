@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="content">
        <div class="content__title">
            <h1>お問い合わせ</h1>
        </div>
        <div class="content__inner">
            <form class="content__form" action="/contacts/confirm" method="post">
                @csrf
                @method('POST')
                <div class="content__form__item">
                    <label for="name">お名前<span class="required">必須</span></label>
                    <input class="content__form__input" type="text" name="name" id="name" placeholder="例：山田太郎" value="{{ old('name') }}">
                </div>
                <div class="content__form__item">
                    <label for="email">メールアドレス<span class="required">必須</span></label>
                    <input class="content__form__input" type="email" name="email" id="email" placeholder="例：test@example.com" value="{{ old('email') }}">
                </div>
                <div class="content__form__item">
                    <label for="phone">電話番号<span class="required">必須</span></label>
                    <input class="content__form__input" type="tel" name="phone" id="phone" placeholder="例：090-1234-5678" value="{{ old('phone') }}">
                </div>
                <div class="content__form__item">
                    <label for="message">お問い合わせ内容</label>
                    <textarea class="content__form__textarea" name="message" id="message" placeholder="例：お問い合わせ内容を入力してください">{{ old('message') }}</textarea>
                </div>
                <div class="content__form_button">
                    <button class="content__form__button_submit" type="submit">送信</button>
                </div>
            </form>
        </div>
    </div>
@endsection