# Plantilla de Documentación de API REST

## 1. Descripción General

**Nombre de la API**: API de Gestión de Rooms

**Descripción**: Esta API permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre la entidad "Room". Es útil para gestionar la información de salas en una aplicación de inventario.

**URL Base**: `http://127.0.0.1:8000/api`

## 2. Endpoints

### 2.1. Listar Todas las Rooms

- **URL**: `/rooms`
- **Método**: `GET`
- **Descripción**: Obtiene una lista de todas las rooms.
- **Respuesta Exitosa (200)**:
  ```json
  [
    {
      "id": 1,
      "name": "Room A",
      "capacity": 20,
      "location": "Building B, Floor 2"
    },
    ...
  ]
  ```
- **Códigos de Respuesta**:
  - `200`: OK
  - `500`: Error del Servidor

### 2.2. Consultar una Room Específica

- **URL**: `/rooms/{id}`
- **Método**: `GET`
- **Descripción**: Obtiene los detalles de una room específica.
- **Parámetros**:
  - `{id}`: ID de la room a consultar (entero).
- **Respuesta Exitosa (200)**:
  ```json
  {
    "id": 1,
    "name": "Room A",
    "capacity": 20,
    "location": "Building B, Floor 2"
  }
  ```
- **Códigos de Respuesta**:
  - `200`: OK
  - `404`: No se encontró la room
  - `500`: Error del Servidor

### 2.3. Crear una Nueva Room

- **URL**: `/rooms`
- **Método**: `POST`
- **Descripción**: Crea una nueva room.
- **Cuerpo de la Solicitud**:
  ```json
  {
    "name": "Room B",
    "capacity": 25,
    "location": "Building D, Floor 1"
  }
  ```
- **Respuesta Exitosa (201)**:
  ```json
  {
    "id": 2,
    "name": "Room B",
    "capacity": 25,
    "location": "Building D, Floor 1"
  }
  ```
- **Códigos de Respuesta**:
  - `201`: Creado
  - `400`: Solicitud Incorrecta
  - `500`: Error del Servidor

### 2.4. Actualizar una Room

- **URL**: `/rooms/{id}`
- **Método**: `PUT`
- **Descripción**: Actualiza los detalles de una room existente.
- **Parámetros**:
  - `{id}`: ID de la room a actualizar (entero).
- **Cuerpo de la Solicitud**:
  ```json
  {
    "name": "Updated Room B",
    "capacity": 30,
    "location": "Building E, Floor 2"
  }
  ```
- **Códigos de Respuesta**:
  - `200`: OK
  - `404`: No se encontró la room
  - `500`: Error del Servidor

### 2.5. Eliminar una Room

- **URL**: `/rooms/{id}`
- **Método**: `DELETE`
- **Descripción**: Elimina una room específica.
- **Parámetros**:
  - `{id}`: ID de la room a eliminar (entero).
- **Códigos de Respuesta**:
  - `204`: Eliminado con éxito
  - `404`: No se encontró la room
  - `500`: Error del Servidor

## 3. Ejemplos de Uso

### 3.1. Ejemplo de Solicitud GET con `curl`
```bash
curl -X GET http://127.0.0.1:8000/api/rooms
```

### 3.2. Ejemplo de Solicitud POST con `curl`
```bash
curl -X POST http://127.0.0.1:8000/api/rooms -H "Content-Type: application/json" -d '{"name":"Room B","capacity":25,"location":"Building D, Floor 1"}'
```

### 3.3. Ejemplo de Solicitud PUT con `curl`
```bash
curl -X PUT http://127.0.0.1:8000/api/rooms/1 -H "Content-Type: application/json" -d '{"name":"Updated Room B","capacity":30,"location":"Building E, Floor 2"}'
```

### 3.4. Ejemplo de Solicitud DELETE con `curl`
```bash
curl -X DELETE http://127.0.0.1:8000/api/rooms/1
```

### 3.5. Ejemplo de Solicitud GET con PowerShell
```powershell
Invoke-RestMethod -Uri "http://127.0.0.1:8000/api/rooms" -Method GET
```

### 3.6. Ejemplo de Solicitud POST con PowerShell
```powershell
$body = @{
    name = "Room B"
    capacity = 25
    location = "Building D, Floor 1"
} | ConvertTo-Json

Invoke-RestMethod -Uri "http://127.0.0.1:8000/api/rooms" -Method POST -Body $body -ContentType "application/json"
```

### 3.7. Ejemplo de Solicitud PUT con PowerShell
```powershell
$body = @{
    name = "Updated Room B"
    capacity = 30
    location = "Building E, Floor 2"
} | ConvertTo-Json

Invoke-RestMethod -Uri "http://127.0.0.1:8000/api/rooms/1" -Method PUT -Body $body -ContentType "application/json"
```

### 3.8. Ejemplo de Solicitud DELETE con PowerShell
```powershell
Invoke-RestMethod -Uri "http://127.0.0.1:8000/api/rooms/1" -Method DELETE
```

### 3.9. Ejemplo de Solicitud con Postman
- **GET**:
  1. Abre Postman.
  2. Selecciona el método `GET`.
  3. Introduce la URL: `http://127.0.0.1:8000/api/rooms`.
  4. Haz clic en `Send` para obtener la lista de rooms.

- **POST**:
  1. Abre Postman.
  2. Selecciona el método `POST`.
  3. Introduce la URL: `http://127.0.0.1:8000/api/rooms`.
  4. Ve a la pestaña `Body` y selecciona `raw` y `JSON`.
  5. Introduce el siguiente cuerpo:
     ```json
     {
       "name": "Room B",
       "capacity": 25,
       "location": "Building D, Floor 1"
     }
     ```
  6. Haz clic en `Send` para crear la nueva room.

- **PUT**:
  1. Abre Postman.
  2. Selecciona el método `PUT`.
  3. Introduce la URL: `http://127.0.0.1:8000/api/rooms/1`.
  4. Ve a la pestaña `Body` y selecciona `raw` y `JSON`.
  5. Introduce el siguiente cuerpo:
     ```json
     {
       "name": "Updated Room B",
       "capacity": 30,
       "location": "Building E, Floor 2"
     }
     ```
  6. Haz clic en `Send` para actualizar la room.

- **DELETE**:
  1. Abre Postman.
  2. Selecciona el método `DELETE`.
  3. Introduce la URL: `http://127.0.0.1:8000/api/rooms/1`.
  4. Haz clic en `Send` para eliminar la room.

## 4. Consideraciones Adicionales
- **Autenticación**: Esta API no requiere de autenticación, para efectos del curso es pública.
- **Errores Comunes**: Asegurarse de validar el ID proporcionado y el formato del cuerpo de la solicitud para evitar errores `404` o `400`.

## 5. Contacto
Para más información, contacte al desarrollador en [correo@example.com].
