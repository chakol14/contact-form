@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--name">
                    <input class="form__input--text-first" type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}" />
                    <input class="form__input--text-last" type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}" />
                </div>
                <div class="form__error">
                    @if ($errors->has('first_name'))
                        <div class="form__error--alert">
                            <ul>
                                @foreach ($errors->get('first_name') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($errors->has('last_name'))
                        <div class="form__error--alert">
                            <ul>
                                @foreach ($errors->get('last_name') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                    <input type="radio" name="gender" value="男性" checked />
                    <label for="男性">男性</label>
                    <input type="radio" name="gender" value="女性" />
                    <label for="女性">女性</label>
                    <input type="radio" name="gender" value="その他" />
                    <label for="その他">その他</label>
                </div>
                <div class="form__error">
                    @if ($errors->has('gender'))
                        <div class="form__error--alert">
                            <ul>
                                @foreach ($errors->get('gender') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                    @if ($errors->has('email'))
                        <div class="form__error--alert">
                            <ul>
                                @foreach ($errors->get('email') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--tel">
                    <input type="tel" name="tel1" placeholder="例:090" value="{{ old('tel1') }}" />
                    <span>-</span>
                    <input type="tel" name="tel2" placeholder="例:1234" value="{{ old('tel2') }}" />
                    <span>-</span>
                    <input type="tel" name="tel3" placeholder="例:5678" value="{{ old('tel3') }}" />
                </div>
                <div class="form__error">
                    @if ($errors->has('tel1'))
                        <div class="form__error--alert">
                            <ul>
                                @foreach ($errors->get('tel1') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($errors->has('tel2'))
                        <div class="form__error--alert">
                            <ul>
                                @foreach ($errors->get('tel2') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($errors->has('tel3'))
                        <div class="form__error--alert">
                            <ul>
                                @foreach ($errors->get('tel3') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" placeholder="例:東京都千代田区永田町1-7-1" value="{{ old('address') }}" />
                </div>
                <div class="form__error">
                    @if ($errors->has('address'))
                        <div class="form__error--alert">
                            <ul>
                                @foreach ($errors->get('address') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building_name" placeholder="例:マンション名" value="{{ old('building_name') }}" />
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--select">
                    <style>
                        select:invalid {
                            color: #b7b7b7
                        }
                    </style>
                    <select class="form__input--select-box" name="category_id" required>
                        <option value="" disabled selected hidden>選択してください</option>
                        <option value="1">資料をいただきたいです</option>
                    </select>
                </div>
                <div class="form__error">
                    @if ($errors->has('category_id'))
                        <div class="form__error--alert">
                            <ul>
                                @foreach ($errors->get('category_id') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="content" placeholder="資料をいただきたいです" value="{{ old('content') }}"></textarea>
                </div>
                <div class="form__error">
                    @if ($errors->has('content'))
                        <div class="form__error--alert">
                            <ul>
                                @foreach ($errors->get('content') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
    </form>
</div>
@endsection