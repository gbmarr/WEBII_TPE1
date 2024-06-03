<section class="login__container">
        <h2>Login</h2>
        <form class="form__login" method="POST">
            <div>
                <label for="email">Correo electrónico:</label>
                <label>{$User->email}</label>
            </div>
            <div>
                <label for="name">Nombre:</label>
                <label>{$User->nombre}</label>
            </div>
            <div>
                <label for="apellido">Apellido:</label>
                <label>{$User->apellido}</label>
            </div>
            <div>
                <label for="admin">Admin</label>
                {if ($User->admin == 1)}
                    <input type="checkbox" checked disabled>
                {else}
                    <input type="checkbox" disabled>
                {/if}
            </div>
        </form>
    </section>