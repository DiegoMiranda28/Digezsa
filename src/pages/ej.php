<!DOCTYPE html>
<html>
<head>
    <title>Formulario de carga de archivos PDF</title>
</head>
<body>
    <h1>Formulario de carga de archivos PDF</h1>
    
    <?php
    if(isset($_POST['submit'])){
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["pdf_file"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Verificar si el archivo es un PDF
        if($imageFileType != "pdf") {
            echo "Formato de archivo no válido. Solo se permiten archivos PDF.";
            $uploadOk = 0;
        }
        
        // Verificar si hubo algún error en la subida del archivo
        if ($uploadOk == 0) {
            echo "Error al cargar el archivo.";
        } else {
            if (move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $target_file)) {
                echo "El archivo PDF '". basename( $_FILES["pdf_file"]["name"]). "' se ha subido correctamente.";
            } else {
                echo "Error al cargar el archivo.";
            }
        }
    }
    ?>
    
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="pdf_file" accept=".pdf" required>
        <input type="submit" name="submit" value="Cargar">
    </form>
</body>
</html>