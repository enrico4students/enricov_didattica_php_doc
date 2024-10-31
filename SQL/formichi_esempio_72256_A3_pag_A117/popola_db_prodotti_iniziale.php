<?php
// Configurazione di accesso al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prodotti"; // Sostituisci con il tuo database

// Connessione al database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}


function generateStringFromVarcharType($varcharType) {
    // Estrai la lunghezza dal tipo varchar, ad esempio 'varchar[3]' --> 3
    //preg_match('/varchar\[(\d+)\]/i', $varcharType, $matches);
    preg_match('/varchar\((\d+)\)/i', $varcharType, $matches);
    $length = isset($matches[1]) ? (int)$matches[1] : 1; // Lunghezza predefinita a 1 se non specificata

    // Genera una stringa casuale della lunghezza desiderata
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomString;
}

function startsWith($string, $startString) {
    return substr($string, 0, strlen($startString)) === $startString;
}

// Funzione per generare dati casuali in base al tipo di colonna
function generateRandomData($type) {
    switch (strtolower($type)) {
        case 'int':
        case 'bigint':
        case 'tinyint':
            return rand(1, 100);
        case 'float':
        case 'double':
            return rand(1, 1000) / 10;
        case 'varchar':
        case 'text':
            return "'" . substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 10) . "'";
        case 'date':
            return "'" . date('Y-m-d', strtotime('-' . rand(0, 365) . ' days')) . "'";
        case 'timestamp':
        case 'datetime':
            return "'" . date('Y-m-d H:i:s', strtotime('-' . rand(0, 365) . ' days')) . "'";
        default:
            $tipo = strtolower($type);
            if (startsWith($tipo, "varchar")) {
                $ret = '"' . generateStringFromVarcharType($tipo) . '"';
            } else {
                $ret = "NULL";
                echo "unamanged type: " . strtolower($type) . "\n";
            }
            return $ret;
    }
}

// Recupera le tabelle dal database
$tables = $conn->query("SHOW TABLES");
if ($tables->num_rows > 0) {
    while ($table = $tables->fetch_array()) {
        $tableName = $table[0];
        
        // Recupera le colonne della tabella
        $columns = $conn->query("SHOW COLUMNS FROM $tableName");
        
        // Estrai i nomi delle colonne e i tipi per generare dati casuali
        $columnNames = [];
        $columnTypes = [];
        while ($column = $columns->fetch_assoc()) {
            $columnNames[] = $column['Field'];
            $columnTypes[] = $column['Type'];
        }
        
        // Avvia la transazione
        $conn->begin_transaction();
        try {
            // Inserisci da 20 a 50 righe casuali per ogni tabella
            $numRows = rand(20, 50);
            for ($i = 0; $i < $numRows; $i++) {
                $values = [];
                foreach ($columnTypes as $type) {
                    $values[] = generateRandomData($type);
                }
                $insertQuery = "INSERT INTO $tableName (" . implode(", ", $columnNames) . ") VALUES (" . implode(", ", $values) . ");";
                if (!$conn->query($insertQuery)) {
                    echo "Errore: " . $conn->error . "<br>\n la query era:\n$insertQuery";
                }
            }
            $conn->query("commit;");
            echo "Inserite $numRows righe nella tabella $tableName.<br>";
        } catch (Exception $e) {
            // Se si verifica un errore, annulla la transazione
            $conn->rollback();
            echo "Errore nella transazione: " . $e->getMessage();
        }
    }
    // Chiude la connessione
    $conn->close();
} else {
    echo "Nessuna tabella trovata nel database.";
}
