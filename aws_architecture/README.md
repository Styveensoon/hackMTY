# Proyecto AWS: RDS, Zero-ETL Integrations, EC2 y S3

## Descripción
Este proyecto muestra la configuración y uso de una base de datos RDS en AWS con el motor MySQL. También utilizamos Zero-ETL Integrations con Redshift para transferencias de datos automáticas y eficaces, junto con el uso de una instancia EC2 y S3 para almacenamiento de datos y procesamiento.

## Componentes utilizados
- **RDS (MySQL):** Base de datos relacional para almacenamiento estructurado.
- **Zero-ETL Integrations:** Integración sin necesidad de ETL entre RDS y Redshift para análisis de datos.
- **Redshift:** Data warehouse para el análisis de grandes volúmenes de datos.
- **EC2:** Máquina virtual para ejecutar aplicaciones y conectarse a la base de datos.
- **S3:** Almacenamiento de objetos para respaldos y almacenamiento de grandes volúmenes de datos.

## Pasos

### 1. **Creación de la instancia RDS:**
   - Motor: MySQL
   - Región: us-east-1b
   - Tipo de instancia: db.t4g.micro
   - Configuración de acceso público: Habilitado para acceso desde IP local.
   - Grupo de seguridad: Permitir conexiones entrantes en el puerto 3306.

### 2. **Zero-ETL Integrations con Redshift:**
   - Configuramos la integración automática entre RDS y Redshift sin necesidad de procesos ETL tradicionales.
   - Los datos se transfieren automáticamente para su análisis en Redshift.

### 3. **Instancia EC2:**
   - Se configuró una instancia EC2 para conectar y gestionar la base de datos RDS.
   - También se utiliza para correr scripts y tareas de administración.

### 4. **Almacenamiento en S3:**
   - Respaldo de bases de datos en S3.
   - Almacenamiento de grandes volúmenes de datos para procesamiento posterior.

### 5. **Conexión a la base de datos:**
   Para conectarse a la base de datos RDS desde una máquina local o EC2:
   ```bash
   mysql -h <endpoint> -P 3306 -u <usuario> -p
   mysql -h <checkmail.cfgkqi6ykjnf.us-east-1.rds.amazonaws.com> -P 3306 -u <admin> -p

### 6. **Subir scripts de configuración:**
   - Creación de la instancia RDS con un script de **Terraform** para automatizar tarea, se incluye el archivo `.tf`:

   ```bash
   .
   ├── README.md
   ├── rds-terraform-setup.tf
   └── scripts/
       ├── backup.sh
       └── restore.sh

