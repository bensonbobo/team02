@extends('app')
@section('title','修改品牌資料')
@section('Drink_inventory')
    <body bgcolor="#C9FFC9"></body>
<form method="post" action="/brands/{{$brand->id}}">
    @csrf
    @method("put")
顯示單一品牌的編輯表單
<table border="1">
    <tr>
        <th>編號</th><td>{{$brand->id}}</td>
    </tr>
    <tr>
        <th>品牌</th>
            <td><select name ="id">
        @foreach($brands as $i)
            @if($brand->brand==$i->brand)
                <option value="{{$i->id}}"selected>{{$i->brand}}</option>
            @else
                <option value="{{$i->id}}">{{$i->brand}}</option>
            @endif
        @endforeach
            </select>
        </td>
    </tr>
    <tr>
        <th>創辦人</th><td><input type="text" name="founder" value="{{$brand->founder}}"required/></td>
    </tr>
    <tr>
        <th>國家</th><td><select name="country">
                <option value="英國">英國</option>
                <option value="美國">美國</option>
                <option value="台灣">台灣</option>
            </select>
        </td>
    </tr>
    </table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
@endsection
