<?php

include 'db_connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    $name = $conn->real_escape_string($_POST['name']);
    $creation_date = $conn->real_escape_string($_POST['creation_date']);
    $description = $conn->real_escape_string($_POST['description']);
    $cover_image = $_FILES['cover_image'];

    
    
    $target_dir = "uploads/"; 
    
    
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    
    $image_extension = strtolower(pathinfo($cover_image["name"], PATHINFO_EXTENSION));
    $image_name = uniqid("proj_", true) . "." . $image_extension;
    $target_file = $target_dir . $image_name;
    
    $uploadOk = 1;
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");

    
    $check = getimagesize($cover_image["tmp_name"]);
    if($check === false) {
        die("Erro: O arquivo enviado não é uma imagem válida.");
    }

    
    if(!in_array($image_extension, $allowed_extensions)) {
        die("Erro: Apenas arquivos JPG, JPEG, PNG e GIF são permitidos.");
    }
    
   
    if (move_uploaded_file($cover_image["tmp_name"], $target_file)) {
       
        
        
        $stmt = $conn->prepare("INSERT INTO projects (name, creation_date, description, cover_image) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $creation_date, $description, $image_name);

        if ($stmt->execute()) {
            
            header("Location: index.php");
            exit();
        } else {
            echo "Erro ao salvar no banco de dados: " . $stmt->error;
        }
        $stmt->close();

    } else {
        echo "Desculpe, houve um erro ao fazer o upload da sua imagem.";
    }
}

$conn->close();
?>
