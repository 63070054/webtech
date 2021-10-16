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
            
            <!-- change vdo hero here -->
            <source type="video/mp4" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/abaddon.webm">
            
            </video>
        </div>
        <div style="width: 100%; height: 400px; position: absolute; bottom: 0; background: linear-gradient(rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.6) 90%, black 100%); z-index: 12;"></div>
        
        <div class="title-hero">
            <div style="display: flex; flex-direction: row; align-items: center;">
                <img src="./src/icon/strength.png">
                <div style="margin-left: 6px; color: #fff; text-transform: uppercase; letter-spacing: 2px; font-weight: 100; font-size: 24px;">
                    STRENGTH
                </div>
            </div>
            <div style="font-family: 'Noto Serif', serif; font-size: 80px; margin-top: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #fff;">
                    ABADDON
            </div>
            <div style="font-size: 18px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; color: #a5e0f3; margin-top: 5px;">
            สร้างโล่ป้องกันการโจมตีให้แก่เพื่อนร่วมทีมหรือตัวเอง
            </div>
        </div>

        <div class="line-name">
            <img style="width: 22px;height: 22px;"
            src="./src/icon/strength.png">
            <div class="line-name-hero">
                ABADDON
            </div>
            <div class="line-name-id">
                102
            </div>
            <div style="flex-grow: 1; height: 2px; background-color: #555; margin: 0px 8px 3px 8px;">

            </div>
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