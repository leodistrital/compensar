<body>
    <h1>Listado de Perfiles</h1>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Tipo_ID</th>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Cat</th>
                <th scope="col">Edad</th>
                <th scope="col">Cargo</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($datos as $data) {
                echo  '<tr>';
                echo "<td>" . $data['tipoid_per'] . "</td>";
                echo "<td>" . $data['id_per'] . "</td>";
                echo "<td>" . $data['nom_per'] . "</td>";
                echo "<td>" . $data['ape_per'] . "</td>";
                echo "<td>" . $data['cat_per'] . "</td>";
                echo "<td>" . $data['edad_per'] . "</td>";
                echo "<td>" . $data['car_per'] . "</td>";
                echo "<td><a class='btn btn-primary' href='actualizar/" . $data['cod_per'] . "' role='button'>Editar</a>
            </td>";
                echo '</tr>';
            }
            ?>
        </tbody>

    </table>

</body>

</html>