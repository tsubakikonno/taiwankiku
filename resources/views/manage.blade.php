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
        <h1 class="restau_ttl">予約、質問一覧</h1>
    </div>

    <div class="all_contacts">
    @foreach($contacts as $contact)
    @php
        $isFav = $favcontacts->contains('contact_id', $contact->id);
    @endphp

    <table class="contacts_dtl"> 
        <tr>
            <th class="contacts_ttl">氏名</th>
            <td class="contacts_cnt">{{ $contact->name }}</td>
        </tr>
        <tr>
            <th class="contacts_ttl">メールアドレス</th>
            <td class="contacts_cnt">{{ $contact->email }}</td>
        </tr>
        <tr>
            <th class="contacts_ttl">ご意見</th>
            <td class="contacts_cnt">{{ $contact->opinion }}</td>   
        </tr>


        <td>
                        @if($isFav)
                            <form action="{{ route('unfavcontact') }}" method="post">
                                @csrf
                                <input type="hidden" name="contact_id" value="{{ $contact->id }}">
                                <button class="unwithstar">★</button>
                            </form>
                        @else
                            <form action="{{ route('favcontact') }}" method="post">
                                @csrf
                                <input type="hidden" name="contact_id" value="{{ $contact->id }}">
                                <button class="withstar">★</button>
                            </form>
                        @endif
                    </td>

            <td>
                <form action="delete" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $contact->id }}">
                    <button class="delete">削除する</button>
                </form>
            </td>


    </table>
@endforeach


    </div>

    <style>
        @font-face {
            font-family: "myfont";
            src: url("fonts/aoyagireisyosimo_ttf_2_01.ttf") format("truetype");
        }
        h1, h2, div, p, button {
            font-family: "myfont";
            font-weight: "normal";
        }
    </style>
</body>
</html>
