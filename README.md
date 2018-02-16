# ProyectoIAW_CV
## Manual para instalar y configurar la API html2pdf en XAMPP y crear el Currículum Vítae a través del formulario

### Instalar Compozer en Xampp

1. instala **compozer**.

  - sudo apt-get install compozer 

  - sudo curl -s https://getcomposer.org/installer | /opt/lampp/bin/php

2. Despues  de la instalación, para crear un **enlace simbólico para xampp** (Saltar este paso si no se utiliza Xampp for Linux)

  - sudo ln -s /opt/lampp/bin/php /usr/local/bin/php

### Descarga el proyecto

1. cd /opt/lampp/htdocs/

2. git clone https://github.com/pdepegalajar/ProyectoIAW_CV.git

  - cd /opt/lampp/htdocs/ProyectoIAW_CV


### Descarga la API HTML2PDF

1. Descarga el paquete **html2pdf**

  - git clone https://github.com/spipu/html2pdf.git

3. También hay que **dar permisos** a la carpeta html2pdf en este caso

  - sudo chmod -R 777 /opt/lampp/htdocs/ProyectoIAW_CV/html2pdf/

2. Cargar framework **html2pdf**

  - cd /opt/lampp/htdocs/ProyectoIAW_CV/html2pdf/

  - composer global require spipu/html2pdf

3. Ejecutar la instalación.

  - composer install --no-dev

Una vez **instalada la API y descargado esta librería** hay que crear una carpeta para que se guarden las fotos subidas.

  - sudo mkdir /opt/lampp/publico

4. después hay que darle **permisos de escritura**, yo lo que hare es adueñar la carpeta al usuario del Xampp(daemon)

  - sudo chown daemon:daemon /opt/lampp/publico

5. probar en el navegador

  - http://localhost/ProyectoIAW_CV

6. Ya Debería estar funcionando el formulario y el generador pdf en XAMPP.

## Fuentes:

### API HTML2PDF

- https://github.com/spipu/html2pdf

#### Multitud de ejemplos para basarse o aprender.

- https://github.com/spipu/html2pdf/tree/master/examples
