<h2>Listar todos os usuarios</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>SENHA</th>
            <th>EMAIL</th>
            <th>CPF</th>
            <th>SEXO</th>
            <th>NASCIMENTO</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?=$usuario['id']?></td>

        <td><?=$usuario['nome']?></td>

        <td><?=$usuario['senha']?></td>

        <td> <?=$usuario['email']?> </td>

        <td> <?=$usuario['cpf']?> </td>

        <td> <?=$usuario['sexo']?> </td>

        <td> <?=$usuario['nascimento']?> </td>



        <td><a href="./usuario/visualizar/<?=$usuario['id']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./usuario/editar/<?=$usuario['id']?>" class="btn btn-info">edit</a></td>
        <td><a href="./usuario/deletar/<?=$usuario['id']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./usuario/adicionar" class="btn btn-primary">Adicionar novo usuario</a>

