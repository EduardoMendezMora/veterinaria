# Sistema de Gestión Veterinaria

Un sistema completo de gestión para clínicas veterinarias desarrollado en PHP con JavaScript, siguiendo el patrón MVC.

## 🏥 Características

- **Gestión de Clientes**: CRUD completo para administrar información de clientes
- **Gestión de Mascotas**: Administración de mascotas con historial médico completo
- **Historial Médico**: Sistema completo de registros médicos con diferentes tipos de atención
- **Gestión de Empleados**: Control del personal veterinario
- **Administración de Citas**: Calendario interactivo para programación y gestión de citas
- **Dashboard Interactivo**: Panel principal con estadísticas y acciones rápidas
- **Interfaz Moderna**: Diseño responsive con Bootstrap 5 y Font Awesome
- **Búsqueda Avanzada**: Funcionalidad de búsqueda en tiempo real
- **API REST**: Endpoints para operaciones AJAX

## 🗄️ Base de Datos

El sistema utiliza la base de datos `veterinaria` con las siguientes tablas principales:

- `clientes` - Información de clientes
- `mascotas` - Registro de mascotas
- `empleados` - Personal veterinario
- `historial_medico` - Registros médicos completos
- `citas` - Citas médicas
- `inventario` - Control de inventario
- `facturas` - Facturación
- Y más...

## 🚀 Instalación

### Requisitos
- XAMPP (Apache + MySQL + PHP)
- PHP 7.4 o superior
- MySQL 5.7 o superior

### Pasos de Instalación

1. **Clonar/Descargar el proyecto**
   ```bash
   # Colocar en la carpeta htdocs de XAMPP
   C:\xampp\htdocs\veterinaria\
   ```

2. **Configurar la Base de Datos**
   - Abrir phpMyAdmin (http://localhost/phpmyadmin)
   - Crear una base de datos llamada `veterinaria`
   - Importar el archivo SQL con la estructura y datos de ejemplo

3. **Configurar la Conexión**
   - Editar `Modelo/Conexion.php` si es necesario
   - Verificar credenciales de base de datos

4. **Acceder al Sistema**
   ```
   http://localhost/veterinaria/Martes/
   ```

## 📁 Estructura del Proyecto

```
Martes/
├── Controlador/
│   ├── ControladorIndex.php           # Dashboard principal
│   ├── ControladorCliente.php         # Gestión de clientes
│   ├── ControladorMascota.php         # Gestión de mascotas
│   ├── ControladorEmpleado.php        # Gestión de empleados
│   ├── ControladorHistorialMedico.php # Gestión de historial médico
│   └── ControladorCita.php            # Gestión de citas médicas
├── Modelo/
│   ├── Conexion.php                   # Conexión a base de datos
│   ├── Entidades/
│   │   ├── Cliente.php                # Entidad Cliente
│   │   ├── Mascota.php                # Entidad Mascota
│   │   ├── Empleado.php               # Entidad Empleado
│   │   ├── HistorialMedico.php        # Entidad Historial Médico
│   │   └── Cita.php                   # Entidad Cita
│   └── Metodos/
│       ├── ClienteM.php               # Métodos CRUD Cliente
│       ├── MascotaM.php               # Métodos CRUD Mascota
│       ├── EmpleadoM.php              # Métodos CRUD Empleado
│       ├── HistorialMedicoM.php       # Métodos CRUD Historial Médico
│       └── CitaM.php                  # Métodos CRUD Citas
├── Vista/
│   ├── index/
│   │   └── dashboard.php              # Dashboard principal
│   ├── cliente/
│   │   ├── index.php                  # Lista de clientes
│   │   ├── nuevo.php                  # Formulario nuevo cliente
│   │   ├── editar.php                 # Formulario editar cliente
│   │   └── buscar.php                 # Resultados de búsqueda
│   ├── mascota/
│   │   ├── index.php                  # Lista de mascotas
│   │   ├── nuevo.php                  # Formulario nueva mascota
│   │   ├── editar.php                 # Formulario editar mascota
│   │   └── buscar.php                 # Resultados de búsqueda
│   ├── historial_medico/
│   │   ├── index.php                  # Lista general de historiales
│   │   ├── ver_por_mascota.php        # Historial específico de mascota
│   │   ├── nuevo.php                  # Nuevo registro médico
│   │   ├── editar.php                 # Editar registro médico
│   │   └── buscar_por_tipo.php        # Búsqueda por tipo de registro
│   └── cita/
│       ├── calendario.php             # Calendario principal de citas
│       ├── nuevo.php                  # Formulario nueva cita
│       ├── editar.php                 # Formulario editar cita
│       └── citas_hoy.php              # Vista de citas del día
└── index.php                     # Punto de entrada principal
```

## 🎯 Funcionalidades Principales

### Dashboard
- Estadísticas en tiempo real
- Acciones rápidas
- Próximas citas
- Navegación intuitiva

### Gestión de Clientes
- ✅ Crear nuevo cliente

### Historial Médico
- ✅ **Tipos de Registros**: Consulta, Vacunación, Cirugía, Emergencia, Control, Diagnóstico, Tratamiento
- ✅ **Información Completa**: Diagnóstico, tratamiento, medicamentos, observaciones, peso y temperatura
- ✅ **Asociación con Veterinarios**: Cada registro está vinculado al empleado que lo realizó
- ✅ **Vista por Mascota**: Historial completo de cada mascota con cronología
- ✅ **Filtros por Tipo**: Búsqueda y filtrado por tipo de atención médica
- ✅ **CRUD Completo**: Crear, leer, actualizar y eliminar registros médicos
- ✅ **Interfaz Intuitiva**: Diseño moderno con colores diferenciados por tipo de registro
- ✅ Editar información
- ✅ Eliminar cliente
- ✅ Buscar clientes
- ✅ Validación de formularios
- ✅ Formato automático de teléfono

### Gestión de Mascotas
- ✅ Registrar nueva mascota
- ✅ Asignar a cliente
- ✅ Historial médico
- ✅ Sugerencias de razas por especie
- ✅ Búsqueda avanzada
- ✅ Ver historial médico

### Gestión de Empleados
- ✅ Registrar empleados
- ✅ Roles (Veterinario, Asistente, Administrador)
- ✅ Control de asistencia
- ✅ Búsqueda por rol

### Administración de Citas Médicas
- ✅ **Calendario Interactivo**: Vista mensual con navegación y indicadores visuales
- ✅ **Programación Inteligente**: Verificación automática de disponibilidad de veterinarios
- ✅ **Gestión Completa**: Crear, editar, cancelar citas con validación en tiempo real
- ✅ **Notificaciones Automáticas**: Alertas para citas del día y próximas
- ✅ **Filtros Avanzados**: Por fecha, veterinario, mascota, estado (urgente, completada, próxima)
- ✅ **Horarios Sugeridos**: Sistema de recomendación de horarios disponibles
- ✅ **Vistas Especializadas**: Citas de hoy, próximas citas, citas por veterinario
- ✅ **Integración Completa**: Enlaces directos al historial médico desde las citas
- ✅ **Estadísticas en Tiempo Real**: Contadores de citas por estado
- ✅ **Búsqueda y Filtrado**: Funcionalidad de búsqueda en tiempo real

## 🔧 Tecnologías Utilizadas

- **Backend**: PHP 7.4+
- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Framework CSS**: Bootstrap 5.1.3
- **Iconos**: Font Awesome 6.0.0
- **Base de Datos**: MySQL
- **Patrón**: MVC (Modelo-Vista-Controlador)

## 📱 Características de la Interfaz

- **Responsive Design**: Compatible con móviles y tablets
- **Modales Interactivos**: Confirmaciones y formularios
- **Animaciones**: Contadores animados y efectos hover
- **Búsqueda en Tiempo Real**: Filtrado instantáneo
- **Validación del Lado Cliente**: JavaScript para mejor UX
- **Notificaciones**: Alertas y mensajes de confirmación

## 🔌 API Endpoints

El sistema incluye endpoints API para operaciones AJAX:

### Clientes
- `GET /index.php?controlador=cliente&metodo=ApiObtenerTodos`
- `POST /index.php?controlador=cliente&metodo=ApiCrear`
- `POST /index.php?controlador=cliente&metodo=ApiActualizar`
- `POST /index.php?controlador=cliente&metodo=ApiEliminar`

### Mascotas
- `GET /index.php?controlador=mascota&metodo=ApiObtenerTodos`
- `POST /index.php?controlador=mascota&metodo=ApiCrear`
- `POST /index.php?controlador=mascota&metodo=ApiActualizar`
- `POST /index.php?controlador=mascota&metodo=ApiEliminar`

### Citas
- `GET /index.php?controlador=cita&metodo=ApiObtenerCitasPorFecha`
- `GET /index.php?controlador=cita&metodo=ApiVerificarDisponibilidad`
- `POST /index.php?controlador=cita&metodo=ApiCrear`
- `POST /index.php?controlador=cita&metodo=ApiActualizar`
- `POST /index.php?controlador=cita&metodo=ApiEliminar`

## 🎨 Personalización

### Colores y Estilos
Los estilos se pueden personalizar editando:
- Variables CSS en los archivos de vista
- Clases Bootstrap personalizadas
- Gradientes y efectos visuales

### Funcionalidades Adicionales
El sistema está diseñado para ser extensible:
- Agregar nuevos módulos siguiendo el patrón MVC
- Implementar autenticación de usuarios
- Agregar reportes y estadísticas avanzadas
- Integrar con sistemas de facturación

## 🐛 Solución de Problemas

### Error de Conexión a Base de Datos
1. Verificar que XAMPP esté ejecutándose
2. Comprobar credenciales en `Modelo/Conexion.php`
3. Confirmar que la base de datos `veterinaria` existe

### Páginas no Cargadas
1. Verificar permisos de archivos
2. Comprobar configuración de Apache
3. Revisar logs de error de PHP

### Problemas de JavaScript
1. Verificar conexión a internet (CDN)
2. Revisar consola del navegador
3. Comprobar compatibilidad del navegador

## 📞 Soporte

Para soporte técnico o consultas:
- Revisar la documentación del código
- Verificar logs de error
- Consultar la estructura de la base de datos

## 🔄 Actualizaciones Futuras

- Sistema de autenticación y autorización
- Módulo de facturación
- Reportes avanzados
- API REST completa
- Aplicación móvil
- Sistema de recordatorios por email/SMS
- Integración con laboratorios externos

---

**Desarrollado con para la gestión veterinaria eficiente**
