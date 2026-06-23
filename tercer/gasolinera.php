<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gasolinera PetroMax</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, sans-serif;
}

body{
    background:#f4f4f4;
}

/* PORTADA */
.hero{
    height:100vh;
    background:
    linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
    url('https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&fit=crop&w=1600&q=80');
    background-size:cover;
    background-position:center;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    color:white;
}

.hero h1{
    font-size:70px;
    margin-bottom:15px;
}

.hero p{
    font-size:25px;
}

.info{
    max-width:1200px;
    margin:auto;
    padding:50px 20px;
}

.titulo{
    text-align:center;
    color:#004aad;
    margin-bottom:30px;
    font-size:40px;
}

.card{
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0 3px 10px rgba(0,0,0,.2);
    margin-bottom:30px;
}

.card h3{
    color:#004aad;
    margin-bottom:15px;
}

.servicios{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}

.servicio{
    background:white;
    padding:20px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 3px 10px rgba(0,0,0,.15);
}

.servicio img{
    width:80px;
    margin-bottom:10px;
}

footer{
    background:#002b66;
    color:white;
    text-align:center;
    padding:20px;
}
</style>
</head>
<body>

<!-- PORTADA -->
<section class="hero">
    <div>
        <h1>PETROMAX</h1>
        <p>Combustible de calidad para cada viaje</p>
    </div>
</section>

<!-- PÁGINA INFORMATIVA -->
<div class="info">

    <h2 class="titulo">Información de la Gasolinera</h2>

    <div class="card">
        <h3>¿Quiénes Somos?</h3>
        <p>
            PetroMax es una estación de servicio dedicada a ofrecer
            combustibles de alta calidad, atención rápida y un servicio
            confiable para todos nuestros clientes.
            <img src="https://Tankstation-png.flaticon.com/512/2933/2933886.png">
        </p>
    </div>

    <div class="card">
        <h3>Misión</h3>
        <p>
            Brindar energía y soluciones para la movilidad de nuestros
            clientes, garantizando calidad, seguridad y excelencia.
        </p>
    </div>

    <div class="card">
        <h3>Servicios Disponibles</h3>

        <div class="servicios">

            <div class="servicio">
                <img src="https://cdn-icons-png.flaticon.com/512/2933/2933886.png">
                <h4>Gasolina Regular</h4>
                <p>Excelente rendimiento para vehículos de uso diario.</p>
            </div>

            <div class="servicio">
                "<img src="<?php echo $gasolinera.jpe; ?>" alt="Imagen">
                <h4>Gasolina Súper</h4>
                <p>Mayor potencia y eficiencia para tu motor.</p>
            </div>

            <div class="servicio">
                <img src="https://cdn-icons-png.flaticon.com/512/2933/2933886.png">
                <h4>Diésel</h4>
                <p>Combustible confiable para transporte pesado.</p>
            </div>

            <div class="servicio">
                <img src="https://cdn-icons-png.flaticon.com/512/3081/3081559.png">
                <h4>Tienda de Conveniencia</h4>
                <p>Bebidas, snacks y productos básicos.</p>
            </div>
<section>
    <h2 class="titulo">Ubicación</h2>

    <div style="width:100%; height:450px;">
        <iframe
            src="https://maps.google.com/maps?q=choloma%20cortes&t=&z=13&ie=UTF8&iwloc=&output=embed"
            width="100%"
            height="450"
            style="border:0; border-radius:15px;"
            allowfullscreen>
        </iframe>
    </div>
</section>
        </div>
    </div>

    <div class="card">
        <h3>Contacto</h3>
        <p>📍 Choloma, Cortés, Honduras</p>
        <p>📞 +504 9999-9999</p>
        <p>✉ contacto@petromax.com</p>
        <p>🕒 Abierto las 24 horas</p>
    </div>

</div>

<footer>
    © 2026 PetroMax - Todos los derechos reservados
</footer>

</body>
</html>