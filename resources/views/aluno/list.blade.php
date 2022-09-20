<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<h1>Aluno</h1>
<hr>

<table class="table table-success table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>data de nascimento</th>
            <th>curso</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($aluno as $cadaAluno)
            <tr>
                <td>{{ $cadaAluno->id }}</td>
                <td>{{ $cadaAluno->titulo }}</td>
                <td>{{ $cadaAluno->descricao }}</td>
                <td>{{ $cadaAluno->descricao }}</td>
                <td>{{ $cadaAluno->descricao }}</td>
            </tr>
        @endforeach
    </tbody>
</table>