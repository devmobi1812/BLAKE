# Deploy y prueba de la Página Web

Este proyecto está diseñado para ejecutarse en un servidor con soporte para PHP y MySQL. A continuación, se detallan los pasos para configurar y ejecutar el proyecto utilizando XAMPP en un entorno Windows.

---

## Requisitos previos

1. **Servidor Local**: XAMPP o cualquier otro stack que soporte PHP y MySQL.
2. **Navegador Web**: Google Chrome, Mozilla Firefox, Microsoft Edge, etc.
3. **Git**: Para clonar el repositorio (opcional).

---

## Configuración con XAMPP en Windows

1. **Descargar e instalar XAMPP**:
   - Descarga XAMPP desde el sitio oficial: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).
   - Instálalo siguiendo las instrucciones.

2. **Iniciar servidor XAMPP**:
   - Abre el panel de control de XAMPP.
   - Inicia los módulos **Apache** y **MySQL**.

3. **Clonar o descargar el proyecto**:
   - Clona el repositorio o descarga el proyecto y descomprímelo.
   - Copia el proyecto en la carpeta de XAMPP:
     ```
     C:\xampp\htdocs\
     ```
   - Asegúrate de que el nombre de la carpeta del proyecto sea `blake`.

4. **Crear la base de datos**:
   - Abre **phpMyAdmin** accediendo a `http://localhost/phpmyadmin/`.
   - Crea una nueva base de datos llamada `blake`.

5. **Cargar el proyecto en el navegador**:
   - Abre tu navegador preferido.
   - Ve a la siguiente URL:  
     ```
     http://localhost/blake/
     ```

---

## Configuración manual (Sin XAMPP)

Si decides usar otro servidor local o configurar manualmente tu entorno, asegúrate de tener PHP y MySQL configurados adecuadamente. Además, realiza lo siguiente:

1. **Modificar configuración de base de datos**:
   - Abre el archivo `config/config.php`.
   - Ajusta los valores de las constantes para que coincidan con tu configuración de MySQL:
     ```php
     <?php
         const MYSQL_USER = 'TU_USUARIO';
         const MYSQL_PASS = 'TU_CONTRASEÑA';
         const MYSQL_DB = 'blake';
         const MYSQL_HOST = 'TU_HOST';
     ?>
     ```
   - Reemplaza `TU_USUARIO`, `TU_CONTRASEÑA` y `TU_HOST` con los valores correspondientes según tu entorno.

2. **Ejecutar el proyecto**:
   - Inicia tu servidor local.
   - Navega a la URL correspondiente para acceder al proyecto. Por ejemplo:
     ```
     http://localhost/blake/
     ```

---

## Acceso al sitio

Para acceder al sitio con permisos de administrador, utiliza las siguientes credenciales:  
- **Usuario**: `admin`  
- **Contraseña**: `admin`

---

¡Listo! Ahora puedes explorar y probar la página web. Si encuentras algún problema, revisa los registros de errores en tu servidor o contáctame.
