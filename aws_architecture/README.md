# AWS RDS Project

## Descripción
Este proyecto muestra la configuración y uso de una base de datos RDS en AWS con el motor MySQL. Se incluyen pasos para la creación de la base de datos, configuraciones de seguridad, y ejemplos de cómo conectarse a la base de datos desde una máquina local.

## Pasos

1. **Creación de la instancia RDS:**
   - Motor: MySQL
   - Región: us-east-1b
   - Tipo de instancia: db.t4g.micro

2. **Configuración de Seguridad:**
   - Grupo de seguridad: Permitir conexiones entrantes en el puerto 3306.
   - Configuración de acceso público: Habilitado para acceso desde IP local.

3. **Conexión a la base de datos:**
   ```bash
   mysql -h <endpoint> -P 3306 -u <usuario> -p
   mysql -h <checkmail.cfgkqi6ykjnf.us-east-1.rds.amazonaws.com> -P 3306 -u <admin> -p


#### b) **Subir scripts de configuración**
Si utilizaste algún script o archivo de configuración para automatizar tareas (como Terraform o CloudFormation para crear la RDS), puedes subir esos archivos al repositorio.

- **Por ejemplo**, si creaste la instancia RDS con un script de **Terraform**, puedes incluir el archivo `.tf`:

```bash
.
├── README.md
├── rds-terraform-setup.tf
└── scripts/
    ├── backup.sh
    └── restore.sh

