<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './link/all_link.php' ?>
</head>

<body>
    <?php include './components/nav.php' ?>
    <div class="section_1">
        <div style="position: absolute; width: 100%; height: 100%;">
            <video muted autoplay preload="auto" loop="" playsinline="" data-video="0" style="height: 100%; object-fit: cover; width: 100vw; top: 0; left: 0; opacity: .5;">
                <source type="video/webm" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/homepage/dota_montage_webm.webm">
                <source type="video/mp4" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/homepage/dota_montage_02.mp4">
            </video>
        </div>
        <div style="padding: 40px; height: 100%; width: fit-content; max-width: 60%; padding-left: 10%; display: flex; flex-direction: column; justify-content: center; align-content: flex-end; pointer-events: auto;" data-aos="fade-right" data-aos-delay="1000" data-aos-duration="2500">
            <div>
                <div style="font-size: 60px; line-height: 113%; letter-spacing: 5px; font-weight: 600; color: #ffffffee; text-transform: uppercase; text-shadow: 0px 0px 20px #000;">"ผลงานชิ้นเอกสำหรับเกมผู้เล่นหลายคนสมัยใหม่"</div>
                <div style="font-size: 20px; letter-spacing: 2px; color: #ffffff90; font-weight: 600; margin-top: 5px; margin-bottom: 20px; text-transform: uppercase;">- Destructoid</div>
            </div>
            <div style=" width: 80px; height: 3px; min-height: 3px; background-color: #ff6046; border-radius: 1px;"></div>
            <a href="#" style="height: 78px;  margin-top: 30px; width: fit-content;" class="eff-up">
                <div style="height: 100%; border-radius: 6px; border: 3px solid #ffffff90; box-shadow: 0px 0px 5px #000; display: inline-flex; flex-direction: row; align-items: center; cursor: pointer; transition-property: filter,transform,box-shadow; transition-timing-function: ease-in-out; transition-duration: .1s;">
                    <div style="background-image: url(&quot;https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//icons/steam.svg&quot;); width: 48px; height: 48px; margin: 0px 8px; background-size: contain; background-repeat: no-repeat;"></div>
                    <div style="flex-grow: 1; min-height: 0; display: flex; flex-direction: column; margin-right: 12px;">
                        <div style="font-size: 22px; text-transform: uppercase; letter-spacing: 2px; color: #fff; text-shadow: 2px 2px 3px #000; font-weight: 600;">เล่นฟรี</div>
                        <div style="font-size: 15px; color: #858585; text-transform: uppercase; letter-spacing: 2px; text-shadow: 2px 2px 3px #000;">ดาวน์โหลดบน Steam</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <?php include './components/footer.php' ?>
</body>
<script>
    AOS.init({
        duration: 1200,
    });
</script>


</html>