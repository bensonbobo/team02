@extends('app')
@section('title','修改飲料資料')
@section('Drink_inventory')
    <body bgcolor="#C9FFC9"></body>
<form method="post" action="/drinks/{{$drink->id}}">
    @csrf
    @method("put")
顯示單一飲料的編輯表單
<table border="1">
    <tr>
        <th>編號</th><td>{{$drink->id}}</td>
    </tr>
    <tr>
        <th>名稱</th><td><input type="text" name="name" value="{{$drink->name}}"required/></td></tr>
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
        <th>毫升</th><td><input type="text" name="milliliters"value="{{$drink->milliliters}}"required/></td>
    </tr>
    <tr>
        <th>價錢</th><td><input type="text" name="price" value="{{$drink->price}}"required/></td>
    </tr>
    <tr>
        <th>熱量</th><td><input type="text" name="calories" value="{{$drink->calories}}"required/></td>
    </tr>
    </table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>
@endsection
