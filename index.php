<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoRust</title>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/css/styles.css">
</head>
<body>
    <?php include('./src/components/header.php');?>
    
    <main>
        <div class="carrusel">
            <div class="swiffy-slider">
                <ul class="slider-container">
                    <li><img src="./assets/images/banner1.jpeg" style="max-width: 100%;height: 60rem; max-height: 600px; width: auto;"></li>
                    <li><img src="./assets/images/banner2.jpeg" style="max-width: 100%;height: 60rem; max-height: 600px; width: auto;"></li>
                    <li><img src="./assets/images/banner3.jpeg" style="max-width: 100%;height: 60rem; max-height: 600px; width: auto;"></li>
                </ul>
            
                <button type="button" class="slider-nav"></button>
                <button type="button" class="slider-nav slider-nav-next"></button>
            
                <div class="slider-indicators">
                    <button class="active"></button>
                    <button></button>
                    <button></button>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="about-us">
                <h5>TodoRust</h5>
                <h2>¿Quienes Somos?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus minus molestiae reprehenderit cumque numquam architecto cum ratione facere temporibus modi ab expedita consectetur, odit totam ipsa assumenda quis quod delectus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, natus molestiae saepe quaerat repellendus fugit iusto amet. Repellat pariatur molestias, deleniti sapiente necessitatibus iusto placeat officiis ex magnam in eius.</p>
            </div>
            <div class="necesidad">
                <h2>Busca tu Necesidad</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae sed quisquam ipsam velit eligendi, error non explicabo nesciunt in excepturi temporibus, praesentium tenetur maiores dolorem consectetur debitis sapiente voluptates id.</p>
            </div>
            <section id="contact">
                
                <h1 class="section-header">Contacto</h1>
                
                <div class="contact-wrapper">
                
                <!-- Left contact page --> 
                    
                    <form id="contact-form" class="form-horizontal" role="form">
                    
                    <div class="form-group">
                        <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" placeholder="nombre" name="name" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                        <input type="email" class="form-control" id="email" placeholder="email" name="email" value="" required>
                        </div>
                    </div>

                    <textarea class="form-control" rows="10" placeholder="mensaje" name="message" required></textarea>
                    
                    <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                        <div class="alt-send-button">
                        <span class="send-text">Enviar</span>
                        </div>
                    
                    </button>
                    
                    </form>
                    
                <!-- Left contact page --> 
                    
                    <div class="direct-contact-container">

                        <ul class="contact-list">
                        <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Cordoba, Argentina</span></i></li>
                        
                        <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">+54 3548 59-2763</a></span></i></li>
                        
                        <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">TodoRust@gmail.com</a></span></i></li>
                        
                        </ul>

                        <hr>
                        <ul class="social-media-list">
                        <li><a href="#" target="_blank" class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg></a>
                        </li>
                        <li><a href="#" target="_blank" class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
                        </li>
                        <li><a href="#" target="_blank" class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg></a>
                        </li>
                        <li><a href="#" target="_blank" class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg></a>
                        </li>       
                        </ul>
                        <hr>

                    </div>
                    
                </div>
                
                </section>  
  
        </div>
    </main>

    <footer>
        <h2>TodoRust</h2>
        <p>All Rights &copy; Reserved</p>
    </footer>
</body>
</html>