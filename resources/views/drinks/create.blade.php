@extends('app')
@section('title','新增飲料資料')
@section('Drink_inventory')
    <body bgcolor="#C9FFC9"></body>
<form method="post" action="/drinks">
    @csrf
    顯示飲料的新增表單
    <table border="1">

        <tr>
            <th>名稱</th><td><input type="text" name="name"/></td>
        </tr>
        <tr>
            <th>品牌</th><td><select name="bid">
                    <option value=1 selected>立頓</option>
                    <option value=2>統一</option>
                    <option value=3>三洋威士比</option>
                    <option value=4>美粒果</option>
                    <option value=5>泰山</option>
                    <option value=6>百事</option>
                    <option value=7>可口可樂</option>
                    <option value=8>黑松</option>
                    <option value=9>波蜜</option>
                    <option value=10>英聯</option>
                </select></td>
        </tr>
        <tr>
            <th>毫升</th><td><input type="number" name="milliliters"/></td>
        </tr>
        <tr>
            <th>價錢</th><td><input type="number" name="price"/></td>
        </tr>
        <tr>
            <th>熱量</th><td><input type="number" name="calories"/></td>
        </tr>
    </table>
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>
</form>

@endsection
