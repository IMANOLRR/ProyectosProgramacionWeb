# Proyecto de Gestión de Personajes

Este proyecto permite gestionar personajes con atributos como nombre, color, tipo, nivel y foto. También incluye funcionalidades para generar perfiles en PDF y un asistente de configuración inicial para la base de datos.

## Requisitos

1. **Software necesario**:
   - Servidor web (como XAMPP, WAMP o MAMP).
   - PHP 7.4 o superior.
   - MySQL Server.
   - Navegador web.

2. **Librerías utilizadas**:
   - [FPDF](http://www.fpdf.org) para la generación de PDF.

---

## Instalación

### 1. Clonar o descargar el proyecto

# Usando git

### 2. Configurar el servidor y base de datos

#### A. Asistente de configuración
1. Abre el navegador y navega a la URL de tu proyecto: `http://localhost/Tarea 6/setup.php`.
2. Ingresa los datos de conexión:
   - **Servidor**: Dirección del servidor (por defecto: `localhost`).
   - **Usuario**: Nombre del usuario de MySQL (por defecto: `root`).
   - **Contraseña**: Contraseña del usuario.
   - **Nombre de la Base de Datos**: Nombre deseado para la base de datos (ejemplo: `serie_db`).
3. Haz clic en "Guardar Configuración".
4. Si todo es correcto, el asistente:
   - Creará la base de datos.
   - Creará la tabla `personajes`.
   - Guardará los datos en `config.php`.

#### B. Manualmente (opcional)
Si prefieres configurar manualmente:
1. Crea la base de datos con el nombre deseado.
2. Importa el archivo SQL (`scripts/estructura.sql`) para crear la tabla `personajes`.

---

## Uso del Proyecto

### Funcionalidades principales
1. **Gestión de personajes**:
   - Visualizar personajes registrados.
   - Agregar, editar y eliminar personajes.
2. **Generación de PDF**:
   - Descargar el perfil de un personaje en formato PDF desde la tabla principal.
3. **Asistente de configuración**:
   - Guía inicial para configurar la base de datos.

### Iniciar la aplicación
1. Asegúrate de que el servidor web esté activo.
2. Navega a la URL principal del proyecto: `http://localhost/index.php`.

## Notas Adicionales

1. **Permisos de escritura**: Asegúrate de que el servidor web tenga permisos para escribir en el archivo `config.php` y en la carpeta `fotos/`.
2. **Compatibilidad**: Este proyecto fue probado en PHP 7.4 y MySQL 8.
3. **Errores comunes**:
   - Si no puedes conectar a la base de datos, verifica tus credenciales y configuración del servidor MySQL.
   - Si las imágenes no se muestran en los PDF, asegúrate de que sean archivos válidos (preferiblemente PNG o JPEG).

---

¡Disfruta del proyecto! Si tienes dudas, no dudes en contactarme.
