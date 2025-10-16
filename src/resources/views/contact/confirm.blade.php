@extends('layouts.app')

 @section('css') 
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>Confirm</h2>
      </div>
      <form class="form" action="/thanks" method="post">
        @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                {{-- <input type="text"
                name="last_name"
                value="{{ $contact['last_name']}}" readonly /> --}}
                <div>
                    {{ $contact['last_name']?? ''}} {{ $contact['first_name']?? ''}}
                </div>
              </td>  
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
                @php
                $genders = [
                    '1' => '男性',
                    '2' => '女性',
                    '3' => 'その他',
                    ];
                @endphp

                <input type="text"
                name="gender"
                value="{{ $genders[$contact['gender']] ?? '' }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email']}}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__text">
                <input type="tel" name="tel" value="{{ is_array($contact['tel']) ? implode($contact['tel']) : $contact['tel'] }}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address']}}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="text" name="building" value="{{ $contact['building']}}" readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせの種類</th>
              <td class="confirm-table__text">
                @php
                $categories = [
                    'delivery' => '商品のお届けについて',
                    'replace' => '商品の交換について',
                    'trouble' => '商品トラブル',
                    'contact' => 'ショップへの問い合わせ',
                    'other' => 'その他',
                    ];
                @endphp

                <input type="text"
                name="category"
                value="{{ $categories[$contact['category']] ?? '' }}" readonly />
            </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__text contact-text">
                <div>{{ $contact['detail']}}</div>
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
          <button class="form__button-primary" type="button" onclick="history.back()">修正</button>
        </div>
      </form>
    </div>
@endsection
