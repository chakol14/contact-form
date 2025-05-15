@extends('layouts.loginapp')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin__content">
    <div class="admin__heading">
        <h2>Admin</h2>
    </div>
    <div class="form__group">
        <form class="form">
            <input class="form__input" type="text" name="name,email" value="{{ old('name,email') }}" placeholder="名前やメールアドレスを入力してください" />
        </form>
        <form class="form">
            <style>
                select:invalid {
                    color: #b7b7b7
                }
            </style>
            <select class="form__input--gender" name="gender" required>
                <option value="" disabled selected hidden>性別</option>
                <option value="1">男性</option>
                <option value="2">女性</option>
                <option value="3">その他</option>
            </select>
        </form>
        <form class="form">
            <style>
                select:invalid {
                    color: #b7b7b7
                }
            </style>
            <select class="form__input--category" name="category_id" required>
                <option value="" disabled selected hidden>お問い合わせの種類</option>
                <option value="1">お問い合わせ</option>
                <option value="2">ご注文</option>
                <option value="3">ご質問</option>
            </select>
        </form>
        <form class="form">
            <input class="form__input--date" type="date" name="date" value="{{ old('date') }}" placeholder="例:2025/01/01" />
        </form>
        <form class="form">
            <button class="form__button-search" type="submit">検索</button>
        </form>
        <form class="form">
            <button class="form__button-reset" type="submit">リセット</button>
        </form>
    </div>
    <div class="admin-table">
        <table class="admin-table__inner">
            <tr class="admin-table__row">
                <th class="admin-table__header">名前</th>
                <th class="admin-table__header">開始時間</th>
                <th class="admin-table__header">終了時間</th>
            </tr>
            <tr class="admin-table__row">
                <td class="admin-table__item">サンプル太郎</td>
                <td class="admin-table__item">サンプル</td>
                <td class="admin-table__item">サンプル</td>
            </tr>
        </table>
    </div>
</div>
@endsection