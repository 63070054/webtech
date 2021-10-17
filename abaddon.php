<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './link/all_link.php' ?>
</head>

<body>
    <?php include './components/nav.php' ?>
    <div class="hero">
        <div class="line-band"></div>
        <div style="width: 100%; height: 400px; position: absolute; bottom: 0; background: linear-gradient(rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.6) 90%, black 100%); z-index: 1;"></div>
        <div class="top-hero"
        style="display:flex; justify-content: center; position:absolute; width: 80%; height:100%; top: 0px; right: -5%;">
            <video muted autoplay preload="auto" loop="" playsinline="" data-video="0"
            style="min-height:100%; transform:translate(10px, 30vh) scale(1.8, 1.8);">
            
            <!-- change vdo hero here -->
            <source type="video/mp4" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/abaddon.webm">
            
            </video>
        </div>
        
        
        <div class="title-hero">
            <div style="display: flex; flex-direction: row; align-items: center;">
                <img style="width: 32px; height: 32px;" src="./src/icon/strength.png">
                <div style="margin-left: 6px; color: #fff; text-transform: uppercase; letter-spacing: 2px; font-weight: 100; font-size: 24px;">
                    STRENGTH
                </div>
            </div>
            <div style="font-family: 'Noto Serif', serif; font-size: 80px; margin-top: 5px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #fff;">
                    ABADDON
            </div>
            
            <div style="font-size: 16px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; color: #a5e0f3; margin-top: 5px;">
            สร้างโล่ป้องกันการโจมตีให้แก่เพื่อนร่วมทีมหรือตัวเอง
            </div>
            <div style="color: #eee; width: 100%; margin-top: 14px; font-weight: 200; font-size: 20px; letter-spacing: 0px;">Abaddon สามารถรอดจากการโจมตีจากศัตรูได้เกือบทั้งหมด เขาสามารถที่จะเปลี่ยนการโจมตีจากศัตรูมาเป็น
                <b>การรักษาตัวเอง</b>
                ได้ และยังช่วยใส่
                <b>เกราะป้องกันให้กับเพื่อนร่วมทีม</b>
                หรือปล่อย
                <b>พลังสองคม</b>
                ของเขาใส่เพื่อนหรือศัตรูได้อีกด้วย เขาพร้อมที่มุ่งเข้าสู่สนามรบที่มั่ววุ่นวายอยู่เสมอ
                <div style="margin-top: 8px; color: #8a8a8a; text-decoration: underline; font-size: 18px; cursor: pointer;">อ่านประวัติเต็ม</div>
            </div>
            <div>
                <div style="margin-top: 25px; color: #959595; text-transform: uppercase; font-weight: bold; letter-spacing: 2px; font-size: 17px;">ประเภทการโจมตี</div>
                <div style="display: flex; flex-direction: row; align-items: center; margin-top: 8px;">
                    <img style="width: 24px; height: 24px; margin-right: 8px;"
                    src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/melee.svg">
                    <div style="color: #fff; text-transform: uppercase; letter-spacing: 2px; font-size: 15px; font-weight: bold;">ระยะประชิด</div>
                </div>
            </div>
            <div>
                <div style="margin-top: 25px; color: #959595; text-transform: uppercase; font-weight: bold; letter-spacing: 2px; font-size: 17px;">ความยาก</div>
                <div style="display: flex; flex-direction: row; width: 80px; justify-content: space-between; margin-top: 8px; margin-left: 4px;">
                    <div style="width: 13px; height: 13px; border: 1.5px solid #fff; transform: rotateZ(45deg); background-color: #fff;"></div>
                    <div style="width: 13px; height: 13px; border: 1.5px solid #fff; transform: rotateZ(45deg);"></div>
                    <div style="width: 13px; height: 13px; border: 1.5px solid #fff; transform: rotateZ(45deg);"></div>
                </div>
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