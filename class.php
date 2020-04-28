<?php
Class Osztaly{

    private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "2020_04_03";
	private $conn = NULL;

	public function __construct(){
		
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		if ($this->conn->connect_error) {
    		die("Kapcsolati hiba: " . $conn->connect_error);
		} 
	}

	public function __destruct(){
		$this->conn->close();
    }

    public function insert($nev, $leiras, $pont, $megjelenites){

		$sql = "INSERT INTO nyelvek (nev, leiras, pont, megjelenites)  
        VALUES ('$nev', '$leiras', $pont, $megjelenites)";

		if ($this->conn->query($sql) === TRUE) {
		    echo "Új termék sikeresen létrehozva!";
		} else {
		    echo "Hiba: " . $sql . "<br>" . $this->conn->error;
		}
    }

    public function listData(){

        $sql = "SELECT id, nev, leiras, pont, megjelenites FROM nyelvek";

        $result = $this->conn->query($sql);

		echo "<div class='listed'>";
        echo "<table id='table_id' class='table'>";

          if ($result->num_rows > 0) {
    		while($row = $result->fetch_assoc()) {
				if($row['megjelenites'] == 0){
					echo "<tr style='width: 20%'>";
					echo "<td><b>" . $row['nev'] . "</b></td>";
					echo "<td>" . $row['leiras'] . "</td>";
					echo "<form method='POST'>";
					echo "<td style='width: 20%'><b>Pont:</b> " . $row['pont'];
					echo "<input type='hidden' name='hidden_id' value='". $row['id'] ."'>";
					echo "<input type='hidden' name='hidden_pont' value='". $row['pont'] ."'>";
					echo "<br /><input type='submit' name='pontPlusz' value='+' class='btn btn-success'> ";
					echo "<input type='submit' name='pontMinusz' value='-' class='btn btn-warning'>";
					echo "</form>";
					echo "</td>";
					echo "</tr>";
				}
    		}
		} else {
    		echo "Nincs adat";
		}
		echo "</table>";
		echo "</div>";
		
    }

    public function pontPlusz($id, $pont){
		
		$ujPont = $pont + 1;
		$sql = "UPDATE nyelvek SET 
		pont = '" . $ujPont . "'
		WHERE id=" . $id;

		if ($this->conn->query($sql) === TRUE) {
		    echo "Sikeres frissítés!";
		} else {
		    echo "Hiba: " . $this->conn->error;
		}
    }
    
    public function pontMinusz($id, $pont){
		
		$ujPont = $pont - 1;
		$sql = "UPDATE nyelvek SET 
		pont = '" . $ujPont . "'
		WHERE id=" . $id;

		if ($this->conn->query($sql) === TRUE) {
		    echo "Sikeres frissítés!";
		} else {
		    echo "Hiba: " . $this->conn->error;
		}
	}

	public function listKezeles(){

        $sql = "SELECT id, nev, leiras, pont, megjelenites FROM nyelvek";

        $result = $this->conn->query($sql);
		
		echo "<div class='listed'>";
        echo "<table id='table_id' class='table'>";

          if ($result->num_rows > 0) {
    		while($row = $result->fetch_assoc()) {
					echo "<tr style='width: 20%'>";
					echo "<td>";
					echo "<b>" . $row['nev'] . "</b>";
					if ($row['megjelenites'] == 1){
						echo "<br />(Elrejtve)";
					} else {
						echo "<br />(Megjelenítve)";
					}
					echo "</td>";
					echo "<td>" . $row['leiras'] . "</td>";
					echo "<form method='POST'>";
					echo "<td style='width: 20%'><b>Pont:</b> " . $row['pont'];
					echo "<input type='hidden' name='hidden_id' value='". $row['id'] ."'>";
					echo "<br /><input type='submit' name='megjelenites' value='Megjelenít' class='btn btn-success'> ";
					echo "<input type='submit' name='elrejtes' value='Elrejt' class='btn btn-warning'>";
					echo "</form>";
					echo "</td>";
					echo "</tr>";
				
    		}
		} else {
    		echo "Nincs adat";
        }
		echo "</table>";
		echo "</div>";
    }

	public function megjelenit($id){
		
		$sql = "UPDATE nyelvek SET 
		megjelenites = 0 
		WHERE id=" . $id;

		if ($this->conn->query($sql) === TRUE) {
		    echo "Sikeres frissítés!";
		} else {
		    echo "Hiba: " . $this->conn->error;
		}
	}
	
	public function elrejt($id){
		
		$sql = "UPDATE nyelvek SET 
		megjelenites = 1 
		WHERE id=" . $id;

		if ($this->conn->query($sql) === TRUE) {
		    echo "Sikeres frissítés!";
		} else {
		    echo "Hiba: " . $this->conn->error;
		}
    }
}

?>