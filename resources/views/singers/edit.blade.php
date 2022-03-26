<h2>Editar registros de cantantes.</h2>
<form action="{{ url('/singer/' .$singer->id) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    @include('singers.form')
</form>