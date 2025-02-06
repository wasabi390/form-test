@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>
  <form class="form" action="/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="first_name" placeholder="例:山田" value="{{ old('name') }}" />
          <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('name') }}" />
        </div>
        <div class="form__error">
          @error('name')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">性別</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--radio">
          <input type="radio" name="gender" value="男性"checked>男性
          <input type="radio" name="gender" value="女性">女性
          <input type="radio" name="gender" value="その他">その他
        </div>
        <div class="form__error">
          @error('gender')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="tel" name="tel_1" placeholder="090" value="{{ old('tel') }}" />
          <span>-</span>
          <input type="tel" name="tel_2" placeholder="1234" value="{{ old('tel') }}" />
          <span>-</span>
          <input type="tel" name="tel_3" placeholder="5678" value="{{ old('tel') }}" />
          <span>-</span>
        </div>
        <div class="form__error">
          @error('tel')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="address" placeholder="東京都千駄々谷" value="{{ old('address') }}" />
        </div>
        <div class="form__error">
          @error('address')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="building" placeholder="東京都千駄々谷マンション" value="{{ old('building') }}" />
        </div>
        <div class="form__error">
          @error('building')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせの種類</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--select">
            <select name="select" name="detail" placeholder=選択してください>
              <option value="お届け">選択してください</option>
              <option value="お届け">商品のお届けについて</option>
              <option value="交換">商品の交換について</option>
              <option value="トラブル">商品トラブル</option>
              <option value="問い合わせ">ショップへの問い合わせ</option>
              <option value="その他">その他</option>
            </select>
        </div>
        <div class="form__error">
          @error('detail')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="contact" placeholder="お問い合わせ内容をご記入ください">{{ old('content') }}</textarea>
        </div>
        <div class="form__error">
          @error('contact')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div>
      <button class="form__button-submit" type="submit">送信</button>
    </div>
  </form>
</div>
@endsection