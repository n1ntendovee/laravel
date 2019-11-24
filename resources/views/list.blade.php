@extends("layouts.app")
<h1>image list</h1>

<style>
    table, td {
        border:1px, solid, gray; border-collap  se: collapse;
    }
    table {width:80%}
</style>
@foreach ( $imgs as $i)
    <tr>
        <td> {{$i->id}} [[E]]</td>
        <td> {{$i->url}} <br> {{$i->filename}} <br> {{$i->alt}}</td>
        <td> <img style="width:50 px" src="{{$i->url}}" alt=""></td>
        <td>[[X]]</td>
    </tr>
@endforeach