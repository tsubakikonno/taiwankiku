<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/index.css">
</head>
<body class="yellow">
    <div class="ttl">
    <h1 class="restau_ttl">ご予約</h1>
    <h2 class="sub_ttl">ご予約だけでなく、営業時間、質問なども<br>
        受け付けています。</h2>
    </div>


    <form action="contact" method="post">
  @csrf
  <div class="contact_area">
    <div class="contact_form">
      <div class="contact_form_group">
        <p class="contact_form">お名前</p>
        <input type="text" placeholder="名前を入力してください。" name="name" value="{{ old('name') }}" class="input_contact_form">
      </div>
      <div class="contact_form_group">
        <p class="contact_form">メールアドレス</p>
        <input type="email" placeholder="メールアドレスを入力して下さい。" name="email" value="{{ old('email') }}" class="input_contact_form">
      </div>
      <div class="contact_form_group">
        <p class="contact_form">お問い合わせ内容</p>
        <input type="text" placeholder="ご予約、ご質問などもどうぞ。" name="opinion" value="{{ old('opinion') }}" class="input_contact_textarea">
      </div>
      <button class="form_button">送信</button>
    </div>
  </div>
</form>




<a href="/" class="return"><p>戻る</p></a>
</div>
    </div>
<style>
  @font-face {
    font-family: "myfont";
  src: url("fonts/aoyagireisyosimo_ttf_2_01.ttf") format("truetype");
}
  h1,h2,div,input,p,button {
    font-family: "myfont";
    font-weight: "nomal";
  }
</style>
</body>
</html>