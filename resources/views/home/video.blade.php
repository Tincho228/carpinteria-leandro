<div class="mb-2 mt-2" style="position:relative; height:400px; overflow:hidden">
    <!-- Optional: some overlay text to describe the video -->
    <div class="content">
        <h3>La mas Alta Tecnologia</h3>
        <p>Los muebles a medida son piezas únicas creadas para un interior en concreto. 
        </p>
        <!-- Use a button to pause/play the video with JavaScript -->
        <a class="btn btn-outline-light btn-sm" href="Jumbo action link" role="button">Contáctanos por
            Whatsapp</a>
    </div>
    <!-- The video -->
    <video autoplay muted loop class="back-video">
        <source src="{{URL::asset('assets/videos/video.mp4')}}" type="video/mp4">
    </video>

    
</div>

<style>
    .back-video {
        width: 100%;
        height: auto;
    }

    .content {
        position: absolute;
        top: 0;
        background: rgba(0, 0, 0, 0.5);
        color: #f1f1f1;
        width: 50%;
        padding: 20px;
        
    }
    @media only screen and (max-width: 768px) {
        .content {
            position:initial;
            width:100%;
        }
    }
</style>