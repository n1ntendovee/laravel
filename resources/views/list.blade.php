<h1>Image list</h1>
<a href="/image-manager/create">[[CREATE]]</a>
<form action=""></form>

<style>
    table, td{
        border: 1px solid gray; border-collapse:collapse;
    }
    table {width: 100%;}
</style>
<table>
@foreach ($imgs as $i)
    <tr>
        <td>
            @component('btn_edit')
            @endcomponent
        </td>
        <td>
            <a href= "/image-manager/{{$i->id}}">{{$i->url}}</a> <br>
            {{$i->filename}} <br>
            {{$i->alt}}
        </td>
        <td><img style="width:50px;" src="{{$i->url}}" alt=""></td>
        <td>
            <form action ="/image-manager/{{$i->id}}" method="POST">
            @method('DELETE')
            @csrf
                <button type="submit">
                    [[ x ]]
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>