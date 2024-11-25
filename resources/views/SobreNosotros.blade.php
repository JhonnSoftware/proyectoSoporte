<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuestra Empresa</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <div class="section-title">
      <h1>NUESTRA EMPRESA</h1>
    </div>
    <div class="content">
      <div class="left">
        <img src="tu-imagen.jpg" alt="Imagen corporativa">
      </div>
      <div class="middle">
        <p>
          <strong>CORPORACIÓN REIMEX CONSOLIDADA SAC</strong>, Empresa con más de 10 años de experiencia en el mercado Peruano, con RUC 20150515723 e inscrito en el Registro Nacional de Proveedores como Proveedores de Bienes y Servicios, ofrece equipos de cómputo, impresoras, Multifuncionales, Licencias de Software, Equipos de Redes y Conectividad, suministros, Laptops Empresariales, partes y piezas y periféricos de las mejores marcas y de gran prestigio en el mercado internacional y nacional.
        </p>
        <p>
          Ofrecemos Asesoramiento comercial para la adquisición de LICENCIAS de Microsoft y Adobe, marcas de las cuales somos Partners Certificados.
        </p>
      </div>
      <div class="right">
        <p>
          La actividad comercial de nuestra empresa está ligada directamente con INTCOMEX, PC LINK, MÁXIMA INTERNACIONAL, COMPUDISKETT, NEXUS TECHNOLOGY y DELTRON, importantes empresas transnacionales en el área de cómputo. Nosotros formamos parte de su buffet de Distribuidores de Hardware y Software, así como soluciones de Networking, con lo cual la calidad, garantías, stocks y otros relacionados con la operación comercial están asegurados.
        </p>
        <p>Quedamos atentos a su convocatoria para atender sus solicitudes y/o requerimientos y a su total servicio... <a href="#">Contactenos</a></p>
        <div class="logos">
          <img src="microsoft-logo.png" alt="Microsoft">
          <img src="dell-logo.png" alt="Dell">
          <img src="hp-logo.png" alt="HP">
          <img src="adobe-logo.png" alt="Adobe">
          <img src="autodesk-logo.png" alt="Autodesk">
          <img src="lenovo-logo.png" alt="Lenovo">
          <img src="eset-logo.png" alt="ESET">
          <img src="xerox-logo.png" alt="Xerox">
          <img src="samsung-logo.png" alt="Samsung">
          <img src="zebra-logo.png" alt="Zebra">
        </div>
      </div>
    </div>
  </div>
</body>
<style>
    /* Global Styles */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f9f9f9;
}

.container {
  max-width: 1200px;
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Title Section */
.section-title h1 {
  text-align: center;
  font-size: 24px;
  color: #333;
  margin-bottom: 20px;
}

/* Content Section */
.content {
  display: flex;
  gap: 20px;
}

.left img {
  width: 100%;
  border-radius: 8px;
}

.middle, .right {
  flex: 1;
  font-size: 14px;
  color: #555;
  line-height: 1.6;
}

.middle strong {
  color: #333;
}

.right a {
  color: #007BFF;
  text-decoration: none;
}

.right a:hover {
  text-decoration: underline;
}

/* Logos Section */
.logos {
  margin-top: 20px;
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  justify-content: center;
}

.logos img {
  width: 80px;
  height: auto;
  object-fit: contain;
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  background-color: #fff;
}

/* Footer Section */
.footer {
  margin-top: 30px;
  text-align: center;
}

.footer h2 {
  font-size: 18px;
  color: #333;
}

.footer a {
  font-size: 16px;
  color: #007BFF;
  text-decoration: none;
}

.footer a:hover {
  text-decoration: underline;
}

</style>
</html>
