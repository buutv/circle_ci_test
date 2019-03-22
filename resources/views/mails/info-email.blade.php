<!DOCTYPE html>
<html>
<head>
    <title>{{ $mailInfo['title'] }}</title>
</head>
<body>
    <h5>下記URLへアクセスし、別メールにて送付されるパスワードを入力してください。</h5>
    <div>{{ $mailInfo['url'] }}</div>
    <div>
        クリックしてもページが開かない場合は、お手数ですが、
        <br />
        ご利用のブラウザの「アドレス」または「場所」にURLをコピー・貼り付けしてアクセスしてください。
    </div>
    <div>{{ $mailInfo['pwd'] }}</div>
</body>
</html>