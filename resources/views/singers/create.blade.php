<h2>Nueva cantante.</h2>
<form action="{{ url('singer') }}" method="post">
    @csrf
    @include ('singers.form')
</form>