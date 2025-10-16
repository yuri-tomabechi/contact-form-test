@extends('layouts.auth')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('button')
<a href="{{ route('login') }}" class="login__button">logout</a>
@endsection

@section('content')
<div class="admin__content">
      <div class="admin__heading">
        <h2>Admin</h2>
      </div>
      <form action="{{ route('admin.index')}}" method="get" >
        <div class="form__content">
            <input class="input__txt" type="text" name="keyword" placeholder="名前やメールアドレスを入力してください" value="{{ request('keyword') }}">
            <select name="gender">
                <option value="" selected disabled>性別</option>
                <option value="all" @selected(request('gender') == 'all') >全て</option>
                <option value="1" @selected(request('gender')=='1')>男性</option>
                <option value="2" @selected(request('gender')=='2')>女性</option>
                <option value="3" @selected(request('gender')=='3')>その他</option>
            </select>
            <select name="category_id">
                <option value="delivery">商品のお届けについて</option>
                <option value="replace">商品の交換について</option>
                <option value="trouble">商品トラブル</option>
                <option value="contact">ショップへの問い合わせ</option>
                <option value="other">その他</option>
            </select>
            <div class="form__calendar">
                <input type="date" name="contact_at" id="contact_date" value="{{ request('created_at') }}">
            </div>
            <button type="submit" class="search__button">検索</button>
            <div class="reset__button">
                <a href="{{ route('admin.index') }}">リセット</a>
            </div>
        </div>
     </form>
     <form action="" class="flex__button">
        <a href="" class="export__button">エクスポート</a>
        <div class="pagination">
        {{-- {{ $contacts->links() }} --}}
            {{ $contacts->links('vendor.pagination.bootstrap-4') }}
        </div>
     </form>
     <div class="table-inner">
      <table class="admin-table">
        <thead>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td class="name__row">{{ $contact->last_name }} {{ $contact->first_name }}</td>
                <td class="gender__row">
                    @if($contact->gender === '1') 男性
                    @elseif($contact->gender === '2') 女性
                    @else その他
                    @endif
                </td>
                <td class="email__row">{{ $contact->email }}</td>
                {{-- <td>{{ $contact->category->content ?? '未設定' }}</td> --}}
                <td>{{ $contact->category->content ?? '未設定' }}</td>
                <td><a href="{{ route('admin.show', $contact->id) }}" class="btn-detail">詳細</a></td>
            </tr>
            @endforeach
        </tbody>
     </table>
    </div>
</div>
@endsection