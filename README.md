# FileManager

Sistema web para gestión y administración de archivos, desarrollado en PHP y JavaScript, con arquitectura MVC.

## Características principales

- Gestión de usuarios y roles (admin y cliente)
- Subida, descarga y visualización de archivos
- Control de sesión con expiración automática
- Interfaz moderna con Bootstrap y recursos personalizados
- Seguridad básica en acceso y manejo de sesiones

## Estructura del proyecto

```
├── app/
│   ├── config/           # Configuración (conexión, sesión, cifrado)
│   ├── controllers/      # Lógica de negocio (admin, cliente)
│   ├── models/           # Acceso a datos y lógica de entidades
│   ├── views/            # Vistas para admin y cliente
│   └── templates/        # Componentes reutilizables (header, nav, footer, etc.)
├── public/               # Recursos estáticos (CSS, JS, imágenes, fuentes)
├── uploads/              # Archivos subidos por los usuarios
├── db/                   # Scripts y archivos de base de datos
├── index.php             # Entrada principal del sistema
├── docker-compose.yml    # Configuración para entorno Docker
└── README.md             # Documentación del proyecto
```

## Instalación y uso

1. Clona el repositorio en tu entorno local.
2. Configura la base de datos y los archivos de conexión en `app/config/connection.config.php`.
3. Asegúrate de tener PHP y un servidor web (como Laragon, XAMPP, Docker).
4. Inicia el servidor y accede a `http://localhost/filemanager`.

## Requisitos

- PHP >= 7.4
- Servidor web Apache/Nginx
- MySQL o PostgreSQL
- Composer (opcional, si se agregan dependencias)

## Seguridad y recomendaciones para producción

- Configura HTTPS en el servidor
- Protege la carpeta `uploads/` y restringe tipos de archivos
- Mantén actualizadas las dependencias
- Realiza backups periódicos de la base de datos
- Revisa y refuerza la validación de formularios

## Licencia

Este proyecto es de uso libre para fines educativos y personales.

## Autor

Desarrollado por harlericho
