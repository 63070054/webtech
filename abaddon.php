<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './link/all_link.php' ?>
</head>

<body>
    <?php include './components/nav.php' ?>
    <div class="hero">   
        <div class="line-band"></div>
        <div class="top-hero"
        style="display:flex; justify-content: center; position:absolute; width: 80%; height:100%; top: 0px; right: -5%;">
            <video muted autoplay preload="auto" loop="" playsinline="" data-video="0"
            style="min-height:100%; -webkit-mask-image: linear-gradient(to top, transparent 10%, black 50%);
            transform:translate(10px, 30vh) scale(1.8, 1.8);">
                <source type="video/mp4" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/abaddon.webm">
            </video>
        </div>
    </div>
    <div class="status-bar">
        <div class="row-status-bar"></div>
    </div>
    <?php include './components/footer.php' ?>
</body>
<script>
    AOS.init({
        duration: 1200,
    });
</script>
</html>