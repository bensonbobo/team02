@extends('app')

@section('Drink_inventory')
顯示所有飲料的資料
<table border="1">
    <tr><th>編號</th><td>{{$drink->id}}</td></tr>
    <tr><th>名稱</th><td>{{$drink->name}}</td></tr>
    <tr><th>品牌</th><td>{{$drink->bid}}</td></tr>
    <tr><th>毫升</th><td>{{$drink->milliliters}}</td></tr>
    <tr><th>價錢</th><td>{{$drink->price}}</td></tr>
    <tr><th>熱量</th><td>{{$drink->calories}}</td></tr>
</table>
@endsection
