<html lang="en">

<head>
    <?php include './link/all_link.php' ?>
</head>

<body>
    <?php
    $nav_hero_active = 0;
    $nav_news_active = 1;
    include './components/nav.php';
    ?>
    <div class="news-title-main">
        <div class="all-news-title" style="background-image: url('./src/news/bg_head.png');width: 100vw;height: 600px;">
            <div class="shadow-news" style="background: linear-gradient(rgba(0, 0, 0, 0) 700%,rgba(0, 0, 0, 0.733) 70%,rgb(0, 0, 0) 90%);"></div>
            <div style="width: 100vw;height: 300px;position: absolute;bottom: 0px;z-index: 3;background: -webkit-gradient(linear, left top, left bottom, color-stop(60%, rgba(0, 0, 0, 0)), color-stop(80%, rgba(0, 0, 0, 0.7)), color-stop(100%, black));"></div>
        </div>
        <div class="line-post">
            <div style="font-size: 16px;font-weight: bold;letter-spacing: 2px;background: #ffffff50;color: #fff;padding: 5px 10px;text-transform: uppercase;float: right;position: absolute;right: 0px;top: 0px;">โพสต์โดดเด่น</div>
            <div style="font-size: 18px;color: #ffffff90;text-align: left;text-transform: uppercase;letter-spacing: 2px;margin-bottom: 20px;font-weight: 600;">16 ตุลาคม 2564</div>
            <div style="font-size: 60px;font-weight: 700;margin-bottom: 20px;text-shadow: 0px 0px 10px #000;letter-spacing: 1px;line-height: 110%;color: #e5ded9;text-align: left;">This Fall Marci Joins the Fight</div>
            <a href="#" class="learn-more">อ่านเพิ่มเติม<img class="learn-more-arrow" src="./src/index/arrow_left.png"></a>
        </div>
    </div>
    <div class="line-news-update">
        <div class="table-news-update">
            <a href="news.php" class="text-news-update-active">ข่าวสาร</a>
            <a href="updatenews.php" class="text-news-update">อัปเดต</a>
        </div>
    </div>

    <div style="background-image: url('./src/news/bg_smain.jpg');width: 100vw;height:auto;">
        <div class="table-allnews">
            <a style="width: 400px; height: 250px; margin: 15px;" href="#">
                <div class="news" style="background-image: url('./src/news/news1.png');">
                    <div class="shadow-news"></div>
                    <div class="news-content-hidden">For fans of DOTA: Dragon's Blood, the next hero joining the battle of the Ancients is already a familiar face.</div>
                    <div class="news-title">This Fall Marci Joins the Fight</div>
                    <div class="news-date">16 ตุลาคม 2564</div>
                </div>
            </a>
            <a style="width: 400px; height: 250px; margin: 15px;" href="#">
                <div class="news" style="background-image: url('./src/news/news2.png');">
                    <div class="shadow-news"></div>
                    <div class="news-content-hidden">งานแข่งหลัก The International จะเริ่มต้นขึ้นที่สนาม National Arena ในกรุงบูคาเรสต์ในอีกไม่ถึง 12 ชั่วโมง ร่วมรับชมตั้งแต่เวลา 10:00 EEST (14:00 น. เวลาประเทศไทย) ทางเว็บไซต์ DPC ทางไคลเอนต์ Dota หรือทาง Twitch </div>
                    <div class="news-title">งานแข่งหลัก The International</div>
                    <div class="news-date">12 ตุลาคม 2564</div>
                </div>
            </a>
            <a style="width: 400px; height: 250px; margin: 15px;" href="#">
                <div class="news" style="background-image: url('./src/news/news3.png');">
                    <div class="shadow-news"></div>
                    <div class="news-content-hidden">การมอบพื้นที่ให้สตูดิโอภายนอกและนักแคสต์รายบุคคลได้มีโอกาสเชื่อมต่อกับผู้ชมเฉพาะกลุ่มนั้นเป็นสิ่งยอดเยี่ยมสำหรับทุกคนที่รัก Dota และ The International...</div>
                    <div class="news-title">การปรับเปลี่ยนกฎสำหรับการสตรีม</div>
                    <div class="news-date">9 ตุลาคม 2564</div>
                </div>
            </a>
            <a style="width: 400px; height: 250px; margin: 15px;" href="#">
                <div class="news" style="background-image: url('./src/news/news3.png');">
                    <div class="shadow-news"></div>
                    <div class="news-content-hidden">ขณะนี้เราเห็นว่ามีความสับสนเกี่ยวกับข้อกำหนดสำหรับการถ่ายทอดสดของชุมชนในงาน TI10เช่นเดียวกับปีก่อน ๆ ใครก็สามารถทำการถ่ายทอดสดของชุมชนได้ หาก (1) อ้างอิงการถ่ายทอดสดนั้นจาก...</div>
                    <div class="news-title">การถ่ายทอดสดของชุมชนสำหรับงาน The International</div>
                    <div class="news-date">8 ตุลาคม 2564</div>
                </div>
            </a>
            <a style="width: 400px; height: 250px; margin: 15px;" href="#">
                <div class="news" style="background-image: url('./src/news/news5.png');">
                    <div class="shadow-news"></div>
                    <div class="news-content-hidden">เฉลิมฉลองการกลับมาของ The International ด้วยการซื้อสะสมชุดอุปกรณ์ Dota ใหม่ล่าสุดในปีนี้ สั่งซื้อเสื้อแทรคแจ็คเก็ต เสื้องานแข่ง เสื้อฮู้ด หมวก และของใหม่หลากหลายที่มาในรูปแบบ TI...</div>
                    <div class="news-title">ร้านค้าลับเปิดให้เยี่ยมชมแล้ว</div>
                    <div class="news-date">7 ตุลาคม 2564</div>
                </div>
            </a>
            <a style="width: 400px; height: 250px; margin: 15px;" href="#">
                <div class="news" style="background-image: url('./src/news/news6.png');">
                    <div class="shadow-news"></div>
                    <div class="news-content-hidden">ด้วยการถ่ายทอดสดใน 5 ภาษา ระบบการเชียร์แบบใหม่หมดจด และการเชื่อมต่อระบบ Twitch ที่ดียิ่งขึ้น — The International เริ่มต้นขึ้นแล้ว </div>
                    <div class="news-title">The International มาถึงแล้ว</div>
                    <div class="news-date">7 ตุลาคม 2564</div>
                </div>
            </a>
        </div>
        <div class="all-button">
            <div class="news-button" style="background-color: #ff6046;">1</div>
            <div class="news-button">2</div>
            <div class="news-button">3</div>
            <div class="news-button">4</div>
            <div class="news-button">5</div>
            <div class="news-button">6</div>
            <div class="news-button">></div>
        </div>
    </div>
    <?php include './components/footer.php' ?>
</body>

</html>