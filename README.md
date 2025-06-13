# 🗂️ Módulo de Manejo de Proyectos - Nexus

Sistema web desarrollado para gestionar proyectos de software en una empresa tecnológica. El módulo permite administrar entrevistas con clientes, aprobar proyectos, asignar tareas a equipos de trabajo y dar seguimiento al estado de avance de cada proyecto de forma estructurada.

## 🎯 Objetivo

Implementar una solución efectiva para el control de proyectos, desde su planificación inicial hasta su cierre formal, facilitando el trabajo colaborativo, la asignación de tareas y el monitoreo del progreso.

## 🚀 Tecnologías Principales

- **Laravel** – Framework PHP moderno para el desarrollo backend (v10.x)
- **MySQL** – Sistema de base de datos relacional (v8.0.36)
- **Visual Studio Code** – Entorno de desarrollo utilizado (v1.89)

## 📌 Metodología

El desarrollo se realizó utilizando **Kanban** como metodología ágil. Se emplearon tarjetas para cada historia de usuario, definiendo prioridades y criterios de aceptación. Se respetaron límites de trabajo en curso (WIP) y se mantuvo un flujo continuo mediante revisión periódica del tablero Kanban.

### Historias de Usuario Destacadas

- Registrar entrevistas y requisitos del cliente.
- Aprobar proyectos y firmar contratos.
- Crear y asignar tareas con fechas y avance.
- Consultar reportes de estado de todos los proyectos.
- Validar campos y realizar pruebas funcionales.
- Realizar revisiones semanales y cerrar proyectos según criterios definidos.

## 📁 Estructura General

```bash
├── app/
│   ├── Http/Controllers
│   ├── Models
├── database/
│   ├── migrations
├── resources/
│   ├── views
├── routes/
│   └── web.php
├── public/
├── .env
└──
```
## 📄 Licencia

Este proyecto está bajo la licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más detalles.
