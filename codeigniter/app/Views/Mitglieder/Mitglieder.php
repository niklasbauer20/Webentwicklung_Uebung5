<div class="col-8">
    <table class="table mb-5 ">
            <thead>
            <tr class="bg-light">
                <th scope="col" class="col-3">Name</th>
                <th scope="col" class="col-4">E-Mail</th>
                <th scope="col" class="col-3">In Projekt</th>
                <th scope="col" class="col-2"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($mitglieder as $item){
            echo '<tr>';
            echo '<td>'.$item['Name'].'</td>';
            echo '<td>'.$item['E-Mail'].'</td>';
            echo '<td><input type="checkbox"> </td>';
            echo ("<td ><button class='btn'><i class='bi bi-pencil-square text-primary'></i> </button>
                       <button class='btn'><i class='bi bi-trash3 text-primary'></i></button> </td>");
            echo ("</tr>");
            }
            ?>
            </tbody>
        </table>
        <div class="h3 mt-5">
            Bearbeiten/Erstellen:
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Username:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">E-Mail-Adresse</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="E-Mail-Adresse eingeben">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Passwort</label>
            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Passwort">
        </div>
        <div class="mb-3"><input type="checkbox" id="check">
            <label for="check">Dem Projekt zugeordnet</label>
        </div>
        <div><button type="submit" class="btn btn-primary">Speichern</button>
            <button type="submit" class="btn btn-success">Reset</button>
        </div>

    </div>

