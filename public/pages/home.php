<a href="?page=create_user">Cadastrar user</a>

<div class="container">
    <div class="jumbotron">
        <h2>Pagina Inicial</h2>
    </div>
</div>

<div>
    
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
    <?php
    $users = all('users');
    foreach($users as $user):
    ?>
            <tr>
                <td><?= $user->id;?></td>
                <td><?= $user->name;?></td>
                <td><?= $user->sobrenome;?></td>
                <td><?= $user->email;?></td>
                <td><a href="?page=edit_user&id=<?=$user->id;?>" class="btn btn-primary">Editar</a></td>
                <td><a href="?page=apagar_user" class="btn btn-danger">Apagar</a></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    
</div>