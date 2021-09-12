<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



<a href="{{ route('user.create') }}">新規登録</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">iscool</th>
      <th scope="col">birthday</th>
      <th scope="col">created_at</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td><a href="{{ route('user.show',$user->id) }}">{{ $user->name }}</a></td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->iscool === 0 ? "かっこいい" : "ダサい"}} </td>
      <td>{{ $user->birthday }}</td>
      <td>{{ $user->created_at }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

