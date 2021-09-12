<h1>show</h1>

{{ $user->name }}
<br>
{{ $user->email }}
<br>
{{ $user->birthday }}
<br>
<td>{{ $user->iscool === 0 ? "かっこいい" : "ダサい"}} </td>
<br>
{{ $user->created_at }}
<br>


<a href="{{ route('user.edit', $user->id) }}">edit</a>
<a href="{{ route('user.index') }}">一覧</a>

<form method="POST" action="{{ route('user.destroy', $user->id ) }}">
  @csrf
  @method('delete')
  <button type="submit">削除</button>
</form>