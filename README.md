📊 Proyecto_Reporte
📌 Descripción
proyecto_reporte es una pequeña base de datos desarrollada con fines demostrativos y académicos. El proyecto muestra cómo gestionar una base de datos de empleados, listar su información y generar un reporte en formato PDF utilizando la librería FPDF en PHP.
Este proyecto es ideal para aprender conceptos básicos de:
•	Bases de datos relacionales
•	Consultas SQL
•	Listado de datos en PHP
•	Generación de reportes en PDF
________________________________________
🛠️ Tecnologías Utilizadas
•	PHP (backend)
•	MySQL (base de datos)
•	FPDF (generación de reportes PDF)
•	HTML / CSS (interfaz básica)
________________________________________
🗂️ Estructura Básica del Proyecto
proyecto_reporte/

├── conexion.php
├── reporte.php
🗂️fpdf
├── db_empleados.sql
├── listado_empleados.php
└── README.md
________________________________________
🧩 Base de Datos
La base de datos se llama proyecto_reporte y contiene una tabla principal llamada empleados.
Tabla: empleados
Campos principales:
•	id_empleado
•	nombre
•	apellido
•	cargo
•	area
•	sueldo
Esta información es utilizada para generar una lista de empleados y posteriormente exportarla en un reporte PDF.
________________________________________
📄 Funcionalidades Principales
•	Conexión a la base de datos MySQL
•	Listado de empleados en pantalla
•	Generación de un reporte en PDF con los datos de los empleados
•	Exportación del reporte usando la librería FPDF
________________________________________
📑 Generación del Reporte PDF
El reporte se genera mediante el archivo reporte_empleados.php, el cual:
1.	Obtiene los datos desde la base de datos
2.	Usa la librería FPDF
3.	Crea un documento PDF con el listado de empleados
El archivo PDF puede descargarse o visualizarse directamente desde el navegador.
________________________________________
▶️ Cómo Ejecutar el Proyecto
1.	Clona el repositorio:
2.	git clone https://github.com/tu_usuario/proyecto_reporte.git
3.	Importa el archivo SQL desde la carpeta /sql a tu gestor de base de datos.
4.	Configura la conexión en conexion.php.
5.	Ejecuta el proyecto desde un servidor local (XAMPP, WAMP, Laragon).
6.	Accede desde el navegador y genera el reporte PDF.
________________________________________
🎯 Objetivo del Proyecto
Demostrar de forma sencilla cómo:
•	Administrar una base de datos de empleados
•	Mostrar información en una lista
•	Generar reportes profesionales en PDF usando FPDF
________________________________________

