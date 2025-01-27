o@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>
  <form class="form" action="contacts/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="name" placeholder="例：山田" value="{{ old('name') }}" />
          <input type="text" name="name" placeholder="例：太郎" value="{{ old('name') }}" />
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
          <input type="radio" name="gender" placeholder="男性" value="{{ old('name') }}" checkd/>
          <input type="radio" name="gender" placeholder="女性" value="{{ old('name') }}" />
          <input type="radio" name="gender" placeholder="その他" value="{{ old('name') }}" />
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
          <input type="tel" name="tel" placeholder="09012345678" value="{{ old('tel') }}" />
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
          <input type="tel" name="tel" placeholder="東京都渋谷区千駄々谷1-2-3" value="{{ old('tel') }}" />
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
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="tel" name="tel" placeholder="千駄々谷マンション101" value="{{ old('tel') }}" />
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
        <span class="form__label--item">お問い合わせの種類
        </span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <select name="contactkinds">
            <option value>商品のお届けについて</option>
            <option value>商品の交換について</option>
            <option value>商品トラブル</option>
            <option value>ショップへのお問い合わせ</option>
            <option value>その他</option>
          </select>
          <input type="tel" name="tel" placeholder="選択してください" value="{{ old('tel') }}" />
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
        <span class="form__label--item">お問い合わせ内容</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="content" placeholder="お問い合わせ内容をご記入ください">{{ old('content') }}</textarea>
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">送信</button>
    </div>
  </form>
</div>
@endsection