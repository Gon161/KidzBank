# 🏦 KidzBank

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge)](LICENSE)

## 📖 Descripción

**KidzBank** es una aplicación educativa innovadora que transforma el aprendizaje en una experiencia bancaria divertida y motivadora para niños. A través de un sistema de puntos gamificado, los docentes pueden recompensar el buen comportamiento, el esfuerzo académico y los logros de sus alumnos de manera instantánea y eficiente.

Cada estudiante recibe una tarjeta personalizada con un código QR único. Los docentes simplemente escanean el código para asignar puntos, fomentando así la participación activa, la responsabilidad y el aprendizaje de conceptos financieros básicos desde temprana edad.

## 🎯 Objetivo Principal

Proporcionar una herramienta educativa que permita a los docentes:
- Gestionar un sistema de recompensas dinámico y motivador
- Asignar puntos de forma rápida mediante escaneo de códigos QR
- Fomentar valores positivos y hábitos financieros saludables en los niños
- Visualizar el progreso y desempeño de cada alumno de manera sencilla

Todo esto mientras los estudiantes aprenden sobre ahorro, metas y administración de recursos de forma lúdica y práctica.

## 🛠️ Tecnologías Utilizadas

- **[Laravel](https://laravel.com)** - Framework PHP elegante y robusto para el desarrollo web

## 📋 Requisitos del Sistema

Antes de instalar KidzBank, asegúrate de contar con:

- PHP >= 8.1
- Composer
- MySQL >= 5.7 o MariaDB >= 10.3


## 🚀 Instalación y Ejecución

Sigue estos pasos para configurar KidzBank en tu entorno local:

### 1. Clonar el repositorio

```bash
git clone https://github.com/Gon161/KidzBank.git
cd kidzbank
```

### 2. Instalar dependencias

```bash
composer install
```

### 3. Configurar el entorno

```bash
cp .env.example .env
php artisan key:generate
```

Edita el archivo `.env` con tus credenciales de base de datos:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kidzbank
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

### 4. Ejecutar migraciones

```bash
php artisan migrate
```


### 5. Iniciar el servidor

```bash
php artisan serve
```

La aplicación estará disponible en: `http://localhost:8000`

## 📱 Uso Básico

1. Registra a los docentes en el sistema
2. Genera tarjetas personalizadas con códigos QR para cada alumno
4. Los docentes escanean los códigos QR para asignar puntos
5. Los docentes pueden visualizar su saldo y progreso de cada alumno

## 🤝 Créditos

Este proyecto fue desarrollado por:

- **Ing. Neri Alvarez** – Desarrollo, arquitectura del sistema y diseño funcional de la aplicación.
- **Lic. Ana Itzel Mendez** – Propuesta conceptual inicial y orientación pedagógica del proyecto.
- **Mtra. Lesly Alvarez** - Consultora 

## 📄 Licencia

Este proyecto está bajo la Licencia MIT. Consulta el archivo `LICENSE` para más detalles.

## 💡 Contribuciones

Las contribuciones son bienvenidas. Si deseas colaborar:

1. Haz un fork del proyecto
2. Crea una rama para tu funcionalidad (`git checkout -b feature/NuevaFuncionalidad`)
3. Realiza tus cambios y haz commit (`git commit -m 'Añade nueva funcionalidad'`)
4. Sube tus cambios (`git push origin feature/NuevaFuncionalidad`)
5. Abre un Pull Request

---

⭐ Si este proyecto te resulta útil, ¡no olvides darle una estrella en GitHub!

**Hecho con ❤️ para la educación financiera infantil**
