<h1>Cadastro de cliente - Visualização</h1>

<table class="table table-striped">
    <tr>
        <th>Nome</th>
        <td>
            <?= $arrayClient['name'] ?>
        </td>
    </tr>
    <tr>
        <th>Email</th>
        <td>
            <?= $arrayClient['email'] ?>
        </td>
    </tr>
    <tr>
        <th>Telefone</th>
        <td>
            <?= $arrayClient['phone'] ?>
        </td>
    </tr>
    <tr>
        <th>Endereço</th>
        <td>
            <?= $arrayClient['address'] ?>
        </td>
    </tr>
</table>