<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <style>
h1{
    text-align: center;
    color:white;

}
body{
    background-color: #ffffff;
    font-family: Arial, sans-serif;
    padding-top: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.boton{
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    color: #c51b1b;
    padding: 8px 20px;
    border-radius: 5px;
    font-weight: bold;
    font-size: 0.9rem;
    border: 1px solid #ff0000;
}
.boton:hover {
    background: linear-gradient(to bottom, #f0f0f0 0%, #b8b8b8 100%);
    transform: scale(1.05);
}
.container {
    background-color: #0d4c5c;
    padding: 30px;
    border-radius: 20px;
    width: 400px;
    color: rgb(243, 243, 243);
    border: 2px solid #0a3a46;
    text-align: center;
    align-items: center;
}
.form-group {
    display: flex;       
    align-items: center; 
    margin-bottom: 15px; 
    width: 100%;         
}

label {
    color: white;        
    width: 120px;        
    font-weight: bold;
    text-align: left;    
}

input {
    flex: 1;             
    padding: 8px;
    border-radius: 5px;
    border: none;
    outline: none;
}
    </style>
</head>
<body>
    <div class="container">
        <div><h1>Calculo de Nota Final</h1></div>
    <form action="recibe.php" method="post">
        <div class="form-group"><label>Parcial 1 </label><input type="number" name="p1" step="0.1" required></div>
        <div class="form-group"><label>Parcial 2 </label><input type="number" name="p2" step="0.1" required></div>
        <div class="form-group"><label>Parcial 3 </label><input type="number" name="p3" step="0.1" required></div>
        <div class="form-group"><label>Examen Final </label><input type="number" name="final" step="0.1" required></div>
        <div class="form-group"><label>Trabajo Final </label><input type="number"  name="trabajo" step="0.1" required></div>
        <input type="submit" name="btn-enviar" value="Calcular" class="boton">
    </form>
    </div>
</body>
</html>

