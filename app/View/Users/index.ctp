<div class="row">
    <fieldset>
        <legend>Usuários</legend>
        <div class="row">
            <div class="large-6 columns panel">
                ID - <?php echo $users['User']['id']; ?>
            </div>
            <div class="large-6 columns panel">
                User - <?php echo $users['User']['username']; ?>
            </div>
        </div>
        <div class="row">
            <div class="large-6 columns panel">
                Senha - <?php echo $users['User']['password']; ?>
            </div>
            <div class="large-6 columns panel">
                Perfil - <?php echo $users['User']['role']; ?>
            </div>
        </div>
        <div class="row">
            <div class="large-6 columns panel">
                Criado - <?php echo $users['User']['created']; ?>
            </div>
            <div class="large-6 columns panel">
                Modificado - <?php echo $users['User']['modified']; ?>
            </div>
        </div>
    </fieldset>
</div>