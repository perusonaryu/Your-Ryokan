
<div>
    <p>{{ $data['contact_name'] }}さんから</p>
    <p> {{$data['contact_email']}} </p>
    <p>---以下メッセージが送信されました---</p>
    <h4>
        お問い合わせ内容 
    </h4>
    <p>
        {{$data['contact_message']}}
    </p>
</div>