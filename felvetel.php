<?php
    include('header.php');
?>
<div class="felvetel">
    <form method="POST">          
            Név :
            <input type="text" name="insert_nev" class="form-control">
            Leírás:
            <input type="text" name="insert_leiras" class="form-control">
            Pontszám:
            <input type="number" name="insert_pontszam" class="form-control">
            Megjelenítés:
            <select name='insert_megjelenites' class='form-control'>
                <option value='0'>Látható</option>
                <option value='1'>Nem látható</option>
            </select>
            <br />
            <input type="submit" name="insert" value="Felvétel" class="btn btn-primary"></<input>
        </form>
    </div>
<?php
    if (isset($_POST['insert'])) {
        $osztaly->insert($_POST['insert_nev'], $_POST['insert_leiras'], $_POST['insert_pontszam'], $_POST['insert_megjelenites']);
    }
    include('footer.php');
?>