<!DOCTYPE html>
<html>
<head>
    <title>Información del Servidor</title>
</head>
<body>
    <h1>Información del Servidor</h1>
    <ul>
        <li><strong>Dirección IP del Servidor:</strong> <?php echo $_SERVER['SERVER_ADDR']; ?></li>
        <li><strong>Nombre del Host del Servidor:</strong> <?php echo $_SERVER['SERVER_NAME']; ?></li>
        <li><strong>Software del Servidor:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
        <li><strong>Agente de Usuario (User Agent):</strong> <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
        <li><strong>Dirección IP del Cliente:</strong> <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    </ul>
</body>
</html>

// si se necesita datos del cliente usar esto
