# Curso de Desarrollo Web

Mi ruta de aprendizaje en desarrollo web, desde cero hasta full stack: **PHP, SQL Server, JavaScript, jQuery y Node.js**.

En este repositorio guardo los ejercicios y prácticas de cada lección. Cada commit es un paso de mi avance.

## Tecnologías

| Área | Tecnologías |
|---|---|
| Frontend | HTML, CSS, Bootstrap, JavaScript, jQuery, AJAX |
| Backend | PHP, Node.js, Express |
| Base de datos | SQL Server |
| Herramientas | VS Code, XAMPP, Git, GitHub |

## Progreso

- [x] **Etapa 0:** Cómo funciona la web (cliente, servidor, HTTP, GET y POST)
- [x] **Etapa 1:** HTML básico y formularios
- [x] **Etapa 2:** Fundamentos de programación con PHP
  - [x] Variables, tipos de datos y concatenación
  - [x] Condiciones (`if`, `else`, `elseif`) y validación de formularios
  - [x] Arreglos y ciclos (`foreach`, `while`)
  - [ ] Funciones
- [ ] **Etapa 3:** SQL (`SELECT`, `INSERT`, `UPDATE`, `DELETE`, `JOIN`)
- [ ] **Etapa 4:** PHP + SQL Server con PDO (consultas preparadas)
- [ ] **Etapa 5:** JavaScript
- [ ] **Etapa 6:** jQuery, AJAX y Bootstrap
- [ ] **Etapa 7:** Node.js + Express
- [ ] **Proyecto final:** Gestor de proyectos (CRUD completo)

## Archivos

| Archivo | Qué hace |
|---|---|
| `hola.php` | Primer programa en PHP: comprueba que el servidor funciona |
| `formulario.html` | Formulario HTML que envía datos por POST |
| `saludo.php` | Recibe los datos del formulario, los valida y muestra un saludo |
| `variables.php` | Variables, tipos de datos, operaciones y concatenación |
| `condiciones.php` | Condiciones `if` / `elseif` / `else` con operadores lógicos |

## Cómo ejecutarlo

1. Instalar [XAMPP](https://www.apachefriends.org/) e iniciar **Apache** desde el panel de control.
2. Clonar este repositorio dentro de la carpeta `htdocs`:
   ```bash
   cd C:\xampp\htdocs
   git clone https://github.com/killernauterops37/curso-desarrollo-web.git curso
   ```
3. Abrir en el navegador: `http://localhost/curso/formulario.html`

## Lo que voy aprendiendo

- Leer los mensajes de error: dicen **qué** falló y **en qué línea**.
- Usar `var_dump()` para ver los datos reales en vez de adivinar.
- Los nombres deben coincidir letra por letra: el `name` del HTML con `$_POST['...']`, y las variables con su declaración.
- `=` guarda un valor, `==` y `===` comparan.
- Validar los datos **antes** de usarlos.

## Autor

**Samuel**: [@killernauterops37](https://github.com/killernauterops37)
