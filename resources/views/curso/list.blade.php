<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<h1>Cursos</h1>
<hr>

<table class="table table-success table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>DEscrição</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cursos as $cadaCurso)
            <tr>
                <td>{{ $cadaCurso->id }}</td>
                <td>{{ $cadaCurso->titulo }}</td>
                <td>{{ $cadaCurso->descricao }}</td>
            </tr>
        @endforeach
    </tbody>
</table>