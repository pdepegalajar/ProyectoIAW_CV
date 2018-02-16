# ProyectoIAW_CV
## Manual para instalar y configurar la API html2pdf en XAMPP y crear el Currículum Vítae a través del formulario

### Instalar Compozer en Xampp

1. instala compozer.

- sudo curl -s https://getcomposer.org/installer | /opt/lampp/bin/php

2. Despues  de la instalación, para crear un enlace simbólico para xampp

- sudo ln -s /opt/lampp/bin/php /usr/local/bin/php

3. También hay que dar permisos a la ruta del servidor apache en este caso

- sudo chmod -R 777 /opt/lampp/htdocs

### Descarga la API HTML2PDF

1. Descarga el paquete html2pdf

- mkdir /opt/lampp/htdocs/proyectoPHP

- cd /opt/lampp/htdocs/proyectoPHP

- git clone https://github.com/spipu/html2pdf.git

2. Cargar framework html2pdf

- composer global require spipu/html2pdf

### Descarga el proyecto

1. cd /opt/lampp/htdocs/proyectoPHP


2. git clone https://github.com/pdepegalajar/ProyectoIAW_CV.git


3. Ya Debería estar funcionando el formulario en XAMPP.

