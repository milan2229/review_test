<h1>create</h1>
<a href="{{ route('user.index') }}">一覧</a>
<form method="POST" action="{{ route('user.store') }}">
  <!-- <input type="hidden" name="_method" value="PUT"> -->
@csrf
<!-- @method('PUT') -->
<!-- typeは入力する見た目 -->
<div>
<label for="form-name">name</label>
<input type="text" name="name" id="form-name" require>
</div>

<div>
<label for="form-email">email</label>
<input type="email" name="email" id="form-email">
</div>

<div>
<label for="form-iscool">iscool</label>
<input type="checkbox" name="iscool" value="0" >
</div>

<div>
<label for="form-birthday">birthday</label>
<input type="date" name="birthday" id="form-birthday">
</div>

<button type="submit">submit</button>

</form>