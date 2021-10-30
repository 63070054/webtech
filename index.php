<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './link/all_link.php' ?>
</head>

<body>
    <?php
    $nav_hero_active = 0;
    $nav_news_active = 0;
    include './components/nav.php';

?>
    <div class="section_1">
        <div style="position: absolute; width: 100%; height: 100%;">
            <video muted autoplay preload="auto" loop="" playsinline="" data-video="0" style="height: 100%; object-fit: cover; width: 100vw; top: 0; left: 0; opacity: .5;">
                <source type="video/webm" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/homepage/dota_montage_webm.webm">
                <source type="video/mp4" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/homepage/dota_montage_02.mp4">
            </video>
        </div>
        <div style="padding: 40px; height: 100%; width: fit-content; max-width: 60%; padding-left: 10%; display: flex; flex-direction: column; justify-content: center; align-content: flex-end; position: relative; z-index: 100;" data-aos="fade-right" data-aos-delay="1000" data-aos-duration="2500">
            <div>
                <div style="font-size: 60px; line-height: 113%; letter-spacing: 5px; font-weight: 600; color: #ffffffee; text-transform: uppercase; text-shadow: 0px 0px 20px #000;">"ผลงานชิ้นเอกสำหรับเกมผู้เล่นหลายคนสมัยใหม่"</div>
                <div style="font-size: 20px; letter-spacing: 2px; color: #ffffff90; font-weight: 600; margin-top: 5px; margin-bottom: 20px; text-transform: uppercase;">- Destructoid</div>
            </div>
            <div style=" width: 80px; height: 3px; min-height: 3px; background-color: #ff6046; border-radius: 1px;"></div>
            <a href="https://store.steampowered.com/app/570/Dota_2/" target="_blank" style="height: 78px;  margin-top: 30px; width: fit-content;" class="eff-up">
                <div style="height: 100%; border-radius: 6px; border: 3px solid #ffffff90; box-shadow: 0px 0px 5px #000; display: inline-flex; flex-direction: row; align-items: center; cursor: pointer; transition-property: filter,transform,box-shadow; transition-timing-function: ease-in-out; transition-duration: .1s;">
                    <div style="background-image: url(&quot;https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//icons/steam.svg&quot;); width: 48px; height: 48px; margin: 0px 8px; background-size: contain; background-repeat: no-repeat;"></div>
                    <div style="flex-grow: 1; min-height: 0; display: flex; flex-direction: column; margin-right: 12px;">
                        <div style="font-size: 22px; text-transform: uppercase; letter-spacing: 2px; color: #fff; text-shadow: 2px 2px 3px #000; font-weight: 600;">เล่นฟรี</div>
                        <div style="font-size: 15px; color: #858585; text-transform: uppercase; letter-spacing: 2px; text-shadow: 2px 2px 3px #000;">ดาวน์โหลดบน Steam</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="shadow-bottom"></div>
    </div>

    <div class="section_2">
        <div style="margin-bottom: 10px; margin-left: 15px; display: flex; flex-direction: row;">
            <div style="text-transform: uppercase; color: #fff; letter-spacing: 3px; font-weight: bold; margin: 2px 0px; margin-right: 20px;">ข่าวสารล่าสุด</div>
            <a class="eff-text-split" style="text-transform: uppercase; color: #d0d1d3; letter-spacing: 3px; display: flex; flex-direction: row; align-items: center; cursor: pointer; transition-property: letter-spacing,font-size; transition-timing-function: ease-in-out; transition-duration: .1s;" href="#">ดูทั้งหมด<div style="background-image: url(&quot;https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//arrow_left.png&quot;);     width: 20px; height: 20px; margin: 0px 8px; background-size: cover; background-repeat: no-repeat; transform: rotateZ(180deg);"></div></a>
        </div>
        <div style="width: 100%; display: flex; flex-direction: row; justify-content: space-between;">
            <a style="width: 400px; height: 250px; margin: 15px;" href="#">
                <div class="news" style="background-image: url(&quot;https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/clans/3703047/aa9c5cc55358ebc6977e895d5d9c50ecaa718482.png&quot;);">
                    <div class="shadow-news"></div>
                    <div class="news-content-hidden">For fans of DOTA: Dragon's Blood, the next hero joining the battle of the Ancients is already a familiar face.</div>
                    <div class="news-title">This Fall Marci Joins the Fight</div>
                    <div class="news-date">16 ตุลาคม 2564</div>
                </div>
            </a>
            <a style="width: 400px; height: 250px; margin: 15px;" href="#">
                <div class="news" style="background-image: url(&quot;https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/clans/3703047/7c5a93d3e497813ba9065b2a32d0b14f071a1217.png&quot;);">
                    <div class="shadow-news"></div>
                    <div class="news-content-hidden">งานแข่งหลัก The International จะเริ่มต้นขึ้นที่สนาม National Arena ในกรุงบูคาเรสต์ในอีกไม่ถึง 12 ชั่วโมง ร่วมรับชมตั้งแต่เวลา 10:00 EEST (14:00 น. เวลาประเทศไทย) ทางเว็บไซต์ DPC ทางไคลเอนต์ Dota หรือทาง Twitch </div>
                    <div class="news-title">งานแข่งหลัก The International</div>
                    <div class="news-date">12 ตุลาคม 2564</div>
                </div>
            </a>
            <a style="width: 400px; height: 250px; margin: 15px;" href="#">
                <div class="news" style="background-image: url(&quot;https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/clans/3703047/a3a0b19b7e25c97584c764e62a113e7194010b49.png&quot;);">
                    <div class="shadow-news"></div>
                    <div class="news-content-hidden">การมอบพื้นที่ให้สตูดิโอภายนอกและนักแคสต์รายบุคคลได้มีโอกาสเชื่อมต่อกับผู้ชมเฉพาะกลุ่มนั้นเป็นสิ่งยอดเยี่ยมสำหรับทุกคนที่รัก Dota และ The International...</div>
                    <div class="news-title">การปรับเปลี่ยนกฎสำหรับการสตรีม</div>
                    <div class="news-date">9 ตุลาคม 2564</div>
                </div>
            </a>
        </div>
    </div>

    <div class="section_3">
        <div style="background-size: cover; background-position: center bottom; background-repeat: no-repeat; height: 30vh; width: 100%; display: flex; flex-direction: column; align-items: center; margin-bottom: 200px;">
            <img style="width: 100%; opacity: .6; z-index: -1;" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//home/radiant_dire5.jpg">
            <div class="shadow-top"></div>
        </div>
        <div style="width: 100%; margin: 0 auto; opacity: 1; display: flex; flex-direction: column; align-items: center; justify-items: center; z-index: 5;">
            <div style="text-align: center; margin-bottom: 20px; font-family: Reaver,serif; font-weight: 700; font-size: 100px; color: #e2dace; text-transform: uppercase; letter-spacing: 2px; line-height: 105%;" data-aos="fade-up" data-aos-duration="1500">
                <span style="color: #E2DACE90; text-transform: uppercase; letter-spacing: 2px;">เข้าร่วม</span><span><br>การต่อสู้ระหว่าง Ancient</span>
            </div>
            <div style="width: 80px; height: 3px; min-height: 3px; background-color: #ff6046; border-radius: 1px;"></div>
            <div style="text-align: center; margin-top: 30px; max-width: 1000px; display: flex; flex-direction: column; align-items: center; justify-items: center; color: #e2dace; font-size: 26px; line-height: 115%; font-weight: 100;">ทุก ๆ วันผู้เล่นนับล้านทั่วโลกก้าวเข้าสู่สนามรบเพื่อสวมบทบาทเป็นหนึ่งในกว่าร้อยฮีโร่ของ Dota ในการต่อสู้ 5 ต่อ 5 ระหว่างทีม Dota เป็นเกมแอ็กชัน RTS แบบผู้เล่นหลายคนที่ลึกล้ำที่สุดเท่าที่เคยมีมา และมีกลยุทธ์ชั้นเชิงใหม่ ๆ ให้ค้นพบเสมอ สามารถเล่นได้ฟรีและจะฟรีตลอดไป – เริ่มปกป้อง Ancient ของคุณตั้งแต่ตอนนี้
                <a href="news.php" style="width: fit-content;">
                    <div class="eff-up eff-border-orange" style="border: 3px solid #ffffff50; padding: 15px 25px; margin: 10px 30px; border-radius: 5px; cursor: pointer; width: fit-content; display: flex; flex-direction: row; justify-content: center; align-items: center; transition-duration: .2s;">
                        <div style="font-size: 20px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; color: #fff;">ดูข่าวใหม่</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="section_4">
        <div class="shadow-top"></div>
        <div style="margin-top: 900px; text-align: center; padding-bottom: 20px; z-index: 40; position: relative; width: 80%;     font-family: Reaver,serif; font-weight: 700; font-size: 100px; color: #e2dace; text-transform: uppercase; letter-spacing: 2px; line-height: 105%;" data-aos="fade-up" data-aos-duration="2000">
            <span style="color: #E2DACE90; text-transform: uppercase; letter-spacing: 2px;">คุณจะ</span><span><br>เลือกใคร?</span>
        </div>
        <div style="width: 80px; height: 3px; min-height: 3px; background-color: #ff6046; border-radius: 1px;"></div>
        <div style="text-align: center; z-index: 40; width: 100%; padding-bottom: 40px; margin-top: 30px; max-width: 1000px; display: flex; flex-direction: column; align-items: center; justify-items: center; color: #e2dace; font-size: 26px; line-height: 115%; font-weight: 100;">
            ไม่ว่าจะเป็นนักเวทจอมอุบายไปจนถึงอสูรดุร้ายและอันธพาลเจ้าเล่ห์ กลุ่มฮีโร่ของ Dota 2 นั้นมีขนาดใหญ่โตมโหฬารและหลากหลายไร้ขีดจำกัด ปลดปล่อยความสามารถน่าทึ่งและสกิลอัลติเมททำลายล้างเพื่อไปสู่ชัยชนะ
            <a href="hero.php" style="width: fit-content;">
                <div class="eff-up eff-border-orange" style="border: 3px solid #ffffff50; padding: 15px 25px; margin: 10px 30px; border-radius: 5px; cursor: pointer; width: fit-content; display: flex; flex-direction: row; justify-content: center; align-items: center; transition-duration: .2s;">
                    <div style="font-size: 20px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; color: #fff;">ดูฮีโร่ทั้งหมด</div>
                </div>
            </a>
        </div>
        <div style="width: 80%; z-index: 3; min-height: 0; display: flex; flex-direction: column; position: relative; overflow: hidden; height: 690px;">
            <img src="./src/home/bg/hero_grid.jpeg" style="width: 100%; height: 100%; object-fit: none;">
        </div>
    </div>

    <div class="section_5" style="background-image: url(&quot;https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//home/dpc.jpg&quot;);">
        <div style="width: 100%; height: calc(100% - 50px); position: absolute; overflow: hidden;">
            <img style="max-width: 20%; left: 100px; position: absolute; z-index: 100; box-shadow: 0px 0px 30px #000;" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//home/dpc_ti9_1.jpg" data-aos="fade-up" data-aos-delay="300" data-aos-duration="2500">
            <img style="top: 200px; right: -50px; max-width: 30%; position: absolute; z-index: 100; box-shadow: 0px 0px 30px #000;" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//home/dpc_ti9_2.jpg" data-aos="fade-up" data-aos-delay="600" data-aos-duration="2500">
            <img style="max-width: 25%; left: -100px; bottom: 250px;position: absolute; z-index: 100; box-shadow: 0px 0px 30px #000;" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//home/dpc_ti9_3.jpg" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="2500">
        </div>
        <div style="background-image: url(&quot;https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//icons/dpc.svg&quot;); background-size: cover; background-repeat: no-repeat; min-width: 96px; min-height: 96px; margin-top: 550px;"></div>
        <div style="text-align: center; margin-bottom: 20px; width: 80%; font-family: Reaver,serif; font-weight: 700; font-size: 100px; color: #e2dace; text-transform: uppercase; letter-spacing: 2px; line-height: 105%;">
            <span style="color: #E2DACE90; text-transform: uppercase; letter-spacing: 2px;"></span>
            <span><br>Dota Pro Circuit</span>
        </div>
        <div style="width: 80px; height: 3px; min-height: 3px; background-color: #ff6046; border-radius: 1px;"></div>
        <div style="text-align: center; margin-top: 20px; width: 60%; color: #e2dace; font-size: 26px; line-height: 115%; font-weight: 100;">
            ขณะที่ไม่ได้ไต่อันดับ คุณจะสามารถเรียนรู้ได้จากผู้เล่นยอดฝีมือ Dota Pro Circuit นำเสนอการแข่งขัน Dota 2 ระดับสูงซึ่งสตรีมอย่างเป็นประจำในไคลเอนต์เกม บน Twitch และ Steam.TV โดยปิดท้ายด้วยการแข่งขันชิงแชมป์อีสปอร์ตที่ใหญ่ที่สุดในโลก The International ซึ่งเป็นงาน Dota 2 มืออาชีพที่ไม่ควรพลาด
        </div>
    </div>

    <div class="section_6" style="background-image: url(&quot;https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//home/background4.png&quot;);">
        <div style="text-align: left; margin-bottom: 20px; font-family: Reaver,serif; font-weight: 700; font-size: 100px; color: #e2dace; text-transform: uppercase; letter-spacing: 2px; line-height: 105%;">
            <span style="font-size: 70px; color: #E2DACE90; text-transform: uppercase; letter-spacing: 2px;">เข้าร่วม</span><span><br>การต่อสู้</span>
        </div>
        <div style="width: 80px; height: 3px; min-height: 3px; background-color: #ff6046; border-radius: 1px;"></div>
        <a href="https://store.steampowered.com/app/570/Dota_2/" style="width: fit-content;">
            <div class="eff-up eff-border-orange" style="height: 100%; border: 3px solid #ffffff50; padding: 15px 25px; margin: 20px 0px; border-radius: 5px; cursor: pointer; width: fit-content; display: flex; flex-direction: row; justify-content: center; align-items: center; transition-duration: .2s;">
                <div style="font-size: 20px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; color: #fff;">เล่นฟรีเดี๋ยวนี้</div>
            </div>
        </a>
    </div>
    <?php include './components/footer.php' ?>
</body>
<script>
    AOS.init({
        duration: 1200,
    });
</script>


</html>