@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
    <div class="content">
        <div class="content__title">
            <h1>お問い合わせ内容の確認</h1>
        </div>
        <div class="content__inner">
            <form class="content__form" action="/contacts/thanks" method="post">
                @csrf
                @method('POST')
                <div class="content__form__table">
                    <table class="content__form__table__inner">
                        <tr class="content__form__table__row">
                            <th class="content__form__table__header">お名前</th>
                            <td class="content__form__table__td">
                                <input type="text" name="name" value="{{ $contact['name'] }}" readonly>
                            </td>
                        </tr>
                        <tr class="content__form__table__row">
                            <th class="content__form__table__header">メールアドレス</th>
                            <td class="content__form__table__td">
                                <input type="text" name="email" value="{{ $contact['email'] }}" readonly>
                            </td>
                        </tr>
                        <tr class="content__form__table__row">
                            <th class="content__form__table__header">電話番号</th>
                            <td class="content__form__table__td">
                                <input type="text" name="phone" value="{{ $contact['phone'] }}" readonly>
                            </td>
                        </tr>
                        <tr class="content__form__table__row">
                            <th class="content__form__table__header">お問い合わせ内容</th>
                            <td class="content__form__table__td">
                                <input type="text" name="message" value="{{ $contact['message'] }}" readonly>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="content__form__button">
                    <button class="content__form__button_submit" type="submit">送信</button>
                </div>
            </form>
        </div>
    </div>
@endsection