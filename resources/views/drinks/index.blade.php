@extends('app')

@section('Drink_inventory')
<h1>顯示所有飲料資料</h1>
<a href="/brands">
    品牌資料
</a>
<table border="1">
    <tr>
        <th>編號</th>
        <th>飲料</th>
        <th>品牌編號</th>
        <th>毫升</th>
        <th>價錢</th>
        <th>熱量</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
        <th>操作4</th>
    </tr>
    @foreach($drinks as $drink)
        <tr>
            <th>{{$drink->id}}</th>
            <th>{{$drink->name}}</th>
            <th>{{$drink->bid}}</th>
            <th>{{$drink->milliliters}}</th>
            <th>{{$drink->price}}</th>
            <th>{{$drink->calories}}</th>
            <th>
                <a href="/drinks/{{$drink->id}}">
                    詳細
                </a>
            </th>
            <th>
                <a href="/drinks/{{$drink->id}}/edit">
                    修改
                </a>
            </th>
            <td>
                <form method="post" action="/drinks/{{$drink->id}}">
                    @csrf <!-- CSRF =Cross-Site Request Forgery-->
                    @method("delete")
                    <input type="submit" value="刪除"/>
                </form>
            </td>
            <th>
                <a href="/drinks/create">
                    新增
                </a>
            </th>
        </tr>
    @endforeach
</table>
@endsection
