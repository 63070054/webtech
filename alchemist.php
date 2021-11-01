<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './link/all_link.php' ?>
</head>

<body>
    <?php
    $nav_hero_active = 1;
    $nav_news_active = 0;
    include './components/nav.php' ?>
    <!-- PART HEAD HERO -->
    <div class="hero">
        <div class="line-band"></div>
        <div class="box-small" style="right: 30px; transform: scale(0.8);">

            <!-- change link hero here [#]-->
            <a class="small-arrow" href="abaddon.php" style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/arrow_solid_left.png');"></a>
            <a class="small-center" href="hero.php">
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
            </a>
            <a class="small-arrow" href="ancient_apparition.php" style="transform: scaleX(-1); background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/arrow_solid_left.png');"></a>
        </div>
        <div style="width: 100%; height: 400px; position: absolute; bottom: 0; background: linear-gradient(rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.6) 90%, black 100%); z-index: 1;"></div>
        <div class="top-hero" style="display:flex; justify-content: center; position:absolute; width: 80%; height:100%; top: 0px; right: -5%;">
            <video muted autoplay preload="auto" loop="" playsinline="" data-video="0" style="min-height:100%; transform:translate(0px, 16pc) scale(1.93, 1.93);">

                <!-- change vdo hero here -->
                <source type="video/mp4" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/alchemist.webm">

            </video>
        </div>
        <div class="title-hero">
            <div style="display: flex; flex-direction: row; align-items: center;">
                <!-- change white font color hero here -->
                <img style="width: 32px; height: 32px;" src="./src/icon/strength.png">
                <div style="margin-left: 6px; color: #fff; text-transform: uppercase; letter-spacing: 2px; font-weight: 100; font-size: 24px;">
                    STRENGTH
                </div>
            </div>
            <div style="font-family: 'Noto Serif', serif; font-size: 80px; margin-top: 5px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #fff;">
                ALCHEMIST

            </div>

            <div style="font-size: 16px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; color: #a5e0f3; margin-top: 5px;">
                ได้รับโกลด์เพิ่มเติมจากการสังหารยูนิตและรูน BOUNTY

            </div>
            <div style="color: #eee; width: 100%; margin-top: 14px; font-weight: 200; font-size: 20px; letter-spacing: 0px;">
                เขาสามารถแปรเงินที่ได้จากการฆ่าหรือสังหารแต่ละครั้งเป็น
                <b>เงินพิเศษ</b>
                ได้ Alchemist ไม่มีปัญหาในการรวบรวมเครื่องมือที่จะสู้กับศัตรูของเขา เขาสามารถซุ่มโจมตีศัตรูด้วย
                <b>กรดกัดกร่อน</b>
                และ
                <b>สารเคมีที่ไร้ความเสถียร</b>
                ใส่ศัตรูได้ ซึ่งเขาต่อสู้เพื่อทำให้เจ้าออร์คจอมโลภของเขายังคงเชื่อฟังเขาต่อไป
                <div class="t-hov" style="margin-top: 8px; text-decoration: underline; font-size: 18px; cursor: pointer;">อ่านประวัติเต็ม</div>
            </div>
            <div>
                <div style="margin-top: 25px; color: #959595; text-transform: uppercase; font-weight: bold; letter-spacing: 2px; font-size: 17px;">ประเภทการโจมตี</div>
                <div style="display: flex; flex-direction: row; align-items: center; margin-top: 8px;">

                    <!-- change pic icon [melee or ranged] and  white font color here -->
                    <img style="width: 24px; height: 24px; margin-right: 8px;" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/melee.svg">
                    <div style="color: #fff; text-transform: uppercase; letter-spacing: 2px; font-size: 15px; font-weight: bold;">ระยะประชิด</div>

                </div>
            </div>
            <div style="padding-bottom: 20px;">
                <div style="margin-top: 25px; color: #959595; text-transform: uppercase; font-weight: bold; letter-spacing: 2px; font-size: 17px;">ความยาก</div>
                <div style="display: flex; flex-direction: row; width: 80px; justify-content: space-between; margin-top: 8px; margin-left: 4px;">
                    <div style="width: 13px; height: 13px; border: 1.5px solid #fff; transform: rotateZ(45deg); background-color: #fff;"></div>
                    <div style="width: 13px; height: 13px; border: 1.5px solid #fff; transform: rotateZ(45deg);"></div>
                    <div style="width: 13px; height: 13px; border: 1.5px solid #fff; transform: rotateZ(45deg);"></div>
                </div>
            </div>
        </div>
        <div class="line-name">
            <!-- change pic icon type hero and  white font color here -->
            <img style="width: 22px;height: 22px;" src="./src/icon/strength.png">
            <!-- change white font text skill here  -->
            <div class="line-name-hero">
                ALCHEMIST
            </div>
            <div class="line-name-id">
                60
            </div>
            <div style="flex-grow: 1; height: 2px; background-color: #555; margin: 0px 8px 3px 8px;"></div>
        </div>

        <div class="box-skill">
            <div style="color: #fff; font-size: 18px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 6px; text-align: center;">สกิล</div>
            <div style="display: flex; flex-direction: row; justify-content: center;" id="all_skills">

            </div>
        </div>
    </div>

    <!-- PART STAUS HERO BAR HERO -->
    <div class="status-bar">
        <div class="row-status-bar">
            <div class="box-status">
                <div class="detail-status">
                    <div class="hero-icon-status" id="all_hero_icon_status">


                    </div>
                    <div class="status" id="all_status_icon">

                    </div>
                </div>
                <div class="head-status">
                    ค่าสถานะ
                </div>
            </div>
            <div style="width: 1px; height: 100%; display: flex; flex-direction: row; align-items: center; background-color: #4f4f4f;"></div>
            <div class="box-status">
                <div class="detail-status" style="flex-wrap: wrap; align-items: center;" id="all_status_detail">

                </div>
                <div class="head-status">
                    ตำแหน่ง
                </div>
            </div>
            <div style="width: 1px; height: 100%; display: flex; flex-direction: row; align-items: center; background-color: #4f4f4f;"></div>
            <div class="box-status">
                <div class="detail-status" style="flex-wrap: wrap; justify-content: space-between;" id="all_status_detail_right">

                </div>
                <div class="head-status">
                    ค่าสถิติ
                </div>
            </div>
        </div>
    </div>
    <div style="width: 100%;
        min-height: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url(./src/hero/alchemist/bg.jpg);">
        <!-- PART VDO  SKILL -->
        <div style="width: 100%; min-height: 400px; padding: 80px 0px; margin-top: -10px; display: flex; flex-direction: column; align-items: center; position: relative; z-index: 2;">
            <!-- PART title -->
            <div style="width: 100%; text-align: center; font-size: 20px; color: #fff; font-weight: 500; text-transform: uppercase; letter-spacing: 3px; margin-top: 40px; margin-bottom: 30px;">รายละเอียดสกิล:</div>
            <!-- PART body -->
            <div style="width: 100%; max-width: 1500px; min-height: 542px; display: flex; flex-direction: row;">
                <!-- PART Right -->
                <div style="width: 55%; margin-right: 20px;">
                    <!-- vdo view -->
                    <div style="width: 100%; padding-top: 56.25%; height: 0px; position: relative; box-shadow: 3px 3px 8px #000;">
                        <div style="width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 2;"></div>
                        <video id="video-main" style="width: 100%; height: 100%; position: absolute; top: 0; left: 0;" autoplay="" preload="auto" loop="" playsinline="" muted poster="">
                            <source id="video-type-webm" type="video/webm" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_acid_spray.webm">
                            <source id="video-type-mp4" type="video/mp4" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_acid_spray.mp4">
                        </video>
                    </div>
                    <!-- bar skill -->
                    <div style="width: 100%; margin-top: -15px; display: flex; flex-direction: row; justify-content: center; flex-wrap: wrap; position: relative; z-index: 3;">
                        <div class="icon-skill" style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/alchemist_acid_spray.png');" onclick="changeSkillsDetail(0, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/alchemist_unstable_concoction.png');" onclick="changeSkillsDetail(1, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/alchemist_goblins_greed.png');" onclick="changeSkillsDetail(2, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/alchemist_chemical_rage.png');" onclick="changeSkillsDetail(3, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('https://media.discordapp.net/attachments/798049559405396011/903978604399054858/unknown.png');" onclick="changeSkillsDetail(4, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('https://media.discordapp.net/attachments/798049559405396011/903978647084494878/unknown.png');" onclick="changeSkillsDetail(5, this)"></div>
                    </div>
                </div>
                <!-- PART Left -->
                <div style="width: 45%; min-height: 0; display: flex; flex-direction: column; align-items: center;">
                    <div style="width: 100%; height: 100%; box-sizing: border-box;">
                        <!-- zone head -->
                        <div style="padding: 8px; background-color: #121212; display: flex; flex-direction: row;">
                            <img style="width: 96px; height: 96px; margin: 10px 15px 10px 10px; box-shadow: 0px 0px 8px #000;" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/alchemist_acid_spray.png" id="image-skills">
                            <div style="flex-grow: 1; min-height: 0; display: flex; flex-direction: column; margin-top: 5px; margin-left: 8px; margin-right: 12px; align-items: flex-start;">
                                <!-- title -->
                                <div style="color: #fff; font-size: 22px; font-weight: bold; text-transform: uppercase; letter-spacing: 1px;" id="title-skills">
                                    ACID SPRAY
                                </div>
                                <div id="more-detail"></div>
                                <!-- detail -->
                                <div style="color: #ddd; font-size: 18px; white-space: pre-wrap; margin-bottom: 10px;" id="description-title-skills">พ่นน้ำกรดความดันสูงลงบนพื้นที่เป้าหมาย ยูนิตศัตรูที่เข้าสู่พื้นที่ปนเปี้อนนี้จะได้รับความเสียหายต่อวินาที และถูกลดเกราะป้องกันลง</div>
                            </div>
                        </div>
                        <!-- zone detail -->
                        <div style="background-color: #000; min-height: 0; display: flex; flex-direction: column; padding: 20px 30px 15px 30px;">
                            <!-- ver 2 colum -->
                            <div class="col2">
                                <div class="inner-col2" id="col-2-1">
                                    <div class="text-inner-col2">สกิล:
                                        <div class="b-text">ตำแหน่งเป้าหมาย</div>
                                    </div>
                                    <div class="text-inner-col2">ประเภทความเสียหาย:
                                        <div class="b-text"><span style='color: rgb(255, 0, 0);'>กายภาพ</span> </div>
                                    </div>
                                </div>
                                <div class="inner-col2" id="col-2-2">
                                    <div class="text-inner-col2">ทะลุการป้องกันเวทโดยสมบูรณ์:
                                        <div class="b-text">ไม่ได้</div>
                                    </div>
                                </div>
                            </div>
                            <!-- ver 1 colum -->
                            <div class="col1" id="col-1-1">
                                <div class="text-inner-col1">รัศมี:
                                    <div class="b-text">475 / 525 / 575 / 625</div>
                                </div>
                                <div class="text-inner-col1">ระยะเวลา:
                                    <div class="b-text">16.0</div>
                                </div>
                                <div class="text-inner-col1">ความเสียหายต่อวินาที:
                                    <div class="b-text">20 / 25 / 30 / 35</div>
                                </div>
                                <div class="text-inner-col1">ลดเกราะป้องกัน:
                                    <div class="b-text">4 / 5 / 6 / 7</div>
                                </div>
                            </div>
                            <!-- ver delay skill -->
                            <div style="width: 100%; margin-top: 12px; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-between;">
                                <div style="display: flex; flex-direction: row; align-items: center;" id="cooldown">
                                    <div style="width: 16px; height: 16px; border-radius: 3px; background-size: cover; background-repeat: no-repeat; background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/cooldown.png');"></div>
                                    <div style="margin-left: 8px; color: #fff;">22.0</div>
                                </div>
                                <div style="display: flex; flex-direction: row; align-items: center;" id="mana-cost">
                                    <div style="width: 16px; height: 16px; border-radius: 3px; background: linear-gradient(#00A4DB, #007196);"></div>
                                    <div style="margin-left: 8px; color: #fff;">130 / 140 / 150 / 160</div>
                                </div>
                            </div>
                            <!-- var more story detail -->
                            <div style="width: 100%; background-color: #111; margin-top: 20px; margin-bottom: 10px; padding: 10px; font-style: italic; font-size: 14px; color: #aaa;" id="description-skills">
                                Razzil ผสมสารที่เป็นกรดซึ่งสามารถละลายได้แม้แต่โลหะที่มีความแข็งแกร่งที่สุดโดยใช้การเล่นแร่แปรธาตุอันเก่าแก่ที่สืบทอดมาจากครอบครัว Darkbrew
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PART BAR -->
        <div class="bar">
            <!-- change link back hero here -->
            <div class="bar-side" href="arc_warden.php" style="background-image: url(./src/hero/abaddon/bar.png);">
                <a href="arc_warden.php">
                    <img class="bar-hero" style="left: 0px;" src="./src/hero/alchemist/back.png">
                    <div style="width: 250px; min-height: 0; display: flex; flex-direction: column; z-index: 6;">
                        <div style="font-size: 15px; color: #9f9f9f; text-transform: uppercase; letter-spacing: 2px; text-shadow: 1px 1px 4px #000; margin-bottom: 5px;">ฮีโร่ก่อนหน้า</div>
                        <!-- change white font here -->
                        <div style="font-size: 28px; color: #fff; text-transform: uppercase; letter-spacing: 1px; font-weight: bold; line-height: 112%; text-shadow: 1px 1px 4px #000;">
                            ABADDON</div>
                        <div style="width: 100%; display: flex; flex-direction: row; align-items: center;">
                            <!-- change pic type hero here -->
                            <img src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/hero_strength.png" style="width: 20px; height: 20px; margin-right: 10px; filter: drop-shadow(1px 1px 4px black);">
                            <!-- change white font here -->
                            <div style="color: #ddd; font-size: 15px; text-transform: uppercase; letter-spacing: 2px; text-shadow: 1px 1px 4px #000;">
                                ระยะประชิด</div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- change link here -->
            <div class="bar-center" style="height: auto;" href="hero.php">
                <a href="hero.php">
                    <div class="bar-box">
                        <div class="bar-grid"></div>
                        <div class="bar-grid"></div>
                        <div class="bar-grid"></div>
                        <div class="bar-grid"></div>
                        <div class="bar-grid"></div>
                        <div class="bar-grid"></div>
                    </div>
                    <div style="color: #fff; font-size: 14px; text-transform: uppercase; letter-spacing: 2px; margin-top: 8px; text-align: center;"> ฮีโร่ทั้งหมด </div>
                </a>

            </div>
            <!-- change link next hero here -->
            <div href="alchemist.php" class="bar-side" style="background-image: url(./src/hero/abaddon/bar.png); justify-content: flex-start;">
                <a href="ancient_apparition.php">
                    <img class="bar-hero" style="right: 0px;" src="./src/hero/alchemist/next.png">
                    <div style="width: 250px; min-height: 0; display: flex; flex-direction: column; z-index: 6;">
                        <div style="font-size: 15px; color: #9f9f9f; text-transform: uppercase; letter-spacing: 2px; text-shadow: 1px 1px 4px #000; margin-bottom: 5px;">ฮีโร่ถัดไป</div>
                        <!-- change white font here -->
                        <div style="font-size: 28px; color: #fff; text-transform: uppercase; letter-spacing: 1px; font-weight: bold; line-height: 112%; text-shadow: 1px 1px 4px #000;">
                            ANCIENT APPARITION</div>
                        <div style="width: 100%; display: flex; flex-direction: row; align-items: center;">
                            <!-- change pic type hero here -->
                            <img src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/hero_intelligence.png" style="width: 20px; height: 20px; margin-right: 10px; filter: drop-shadow(1px 1px 4px black);">
                            <!-- change white font here -->
                            <div style="color: #ddd; font-size: 15px; text-transform: uppercase; letter-spacing: 2px; text-shadow: 1px 1px 4px #000;">
                                ระยะประไกล</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php include './components/footer.php' ?>
    <script>
        var skill_json = {
            [0]: {
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_acid_spray.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_acid_spray.mp4",
                "have-shard-or-agh": [0, ""],
                "image-skills": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/alchemist_acid_spray.png",
                "title-skills": 'ACID SPRAY',
                "description-title-skills": 'พ่นน้ำกรดความดันสูงลงบนพื้นที่เป้าหมาย ยูนิตศัตรูที่เข้าสู่พื้นที่ปนเปี้อนนี้จะได้รับความเสียหายต่อวินาที และถูกลดเกราะป้องกันลง',
                "col-2-1": [
                    ["สกิล:", "ตำแหน่ งเป้ าหมาย "],
                    ["ประเภทความเสียหาย", "<span style='color: rgb(255, 0, 0);'>กายภาพ</span> "]
                ],
                "col-2-2": [
                    ["ทะลุการป้องกันเวทโดยสมบูรณ์:", "ไม่ได้"],
                ],
                "col-1-1": [
                    ["รัศมี:", "475 / 525 / 575 / 625"],
                    ["ระยะเวลา:", "16.0"],
                    ["ความเสียหายต่อวินาที:", "20 / 25 / 30 / 35"],
                    ["ลดเกราะป้องกัน:", "4 / 5 / 6 / 7 "]
                ],
                "cooldown": "5.5",
                "mana-cost": "50",
                "description-skills": "ไอระเหยอันน่าพิศวงจากบ่อน้ำพุแห่ง Font of Avernus ได้หลอมรวมเป็นลมหายใจของ Abaddon ผู้ที่ปลดปล่อยมันได้ตามใจหวัง"
            },
            [1]: {
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_unstable_concoction.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_unstable_concoction.mp4",
                "have-shard-or-agh": [0, ""],
                "image-skills": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/alchemist_unstable_concoction.png",
                "title-skills": "UNSTABLE CONCOCTION",
                "description-title-skills": "Alchemist ผสมน้ำยาที่มีส่วนประกอบไม่แน่นอน ซึ่งเขาสามารถโยนไปยังฮีโร่ฝ่ายศัตรูเพื่อสตันและสร้าง ความเสียหายรอบพื้นที่ที่ระเบิด ยิ่งใช้เวลาผสมนานเท่าไร ความเสียหายและระยะเวลาการสตันก็จะเพิ่มมากขึ้นเท่านั้น หลังจาก 5.0 วินาที น้ำยาจะมีความสามารถในการสร้าง ความเสียหายและเวลาสตันสูงสุด แต่หากไม่โยนภายใน 5.5 วินาที น้ำยาจะระเบิดและส่งผลทั้งหมดแก่ Alchemist เอง!",
                "col-2-1": [
                    ["สกิล:", "ไม่มีเป้าหมาย"],
                    ["ประเภทความเสียหาย", "<span style='color: rgb(255, 0, 0);'>กายภาพ</span> "]
                ],
                "col-2-2": [
                    ["ทะลุการป้องกันเวทโดยสมบูรณ์:", "ไม่ได้"],
                    ["ลบล้าง:", "ได้โดยการลบล้างขั้นสูงเท่านั้น"]
                ],
                "col-1-1": [
                    ["สตันนานสุด: ", "1.8 / 2.5 / 3.3 / 4.0 "],
                    ["ความเสียหายสูงสุด:", "150 / 220 / 290 / 360"],
                    ["รัศมีการระเบิด: ", "250"]
                ],
                "cooldown": "13.0",
                "mana-cost": "100",
                "description-skills": "จากความผิดพลาดในการพยายามเปลี่ยนภูเขาให้เป็นทองกลับกลายเป็นดี เมื่อสารละลายที่ได้มานั้นมีประสิทธิภาพในการทำลายได้อย่างดีเยี่ยม"
            },
            [2]: {
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_goblins_greed.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_goblins_greed.mp4",
                "have-shard-or-agh": [0, ""],
                "image-skills": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/alchemist_goblins_greed.png",
                "title-skills": "GREEVIL'S GREED",
                "description-title-skills": "Alchemist สังเคราะห์โกลด์เพิ่มจากศัตรูและรูน Bounty โดยในแต่ละการสังหาร Alchemist จะได้รับเงินโบนัสขั้นต่ำ รวมกับเงินโบนัสเพิ่มเติม หาก Alchemist สังหารยูนิตถัดไป แล้วได้รับเงินภายในช่วง 36 วินาที เงินโบนัสเพิ่มเติมจะ ถูกเพิ่มเข้าไปในเงินโบนัสทั้งหมดอีกหนึ่งชุด ทำให้เงินโบนัส รวมทั้งหมดเพิ่มมากขึ้น นอกจากนี้ รูน Bounty จะให้เงิน แก่เขามากขึ้น",
                "col-2-1": [
                    ["สกิล:", "ติดตัว"],
                    ["ส่งผลต่อ: ", "ฮีโร่ฝ่ายเดียวกัน"]
                ],
                "col-2-2": [
                    ["ทะลุการป้องกันเวทโดยสมบูรณ์:", "ไม่ได้"],
                    ["ลบล้าง:", "ได้"]
                ],
                "col-1-1": [
                    ["ช่วงเวลาสังหารต่อเนื่อง:", "36 "],
                    ["เงินโบนัสขั้นต่ำ:", "3"],
                    ["เงินโบนัสเพิ่มเติม:", "3"],
                    ["เงินโบนัสสูงสุดต่อการสังหาร:", "15 / 18 / 21 / 24"],
                    ["คูณเงินรูน BOUNTY:", "1.5 / 2.0 / 2.5 / 3.0"]
                ],

                "cooldown": "",
                "mana-cost": "",
                "description-skills": "ถึงมันจะไม่ใช่ภูเขา แต่ Razzil ก็ยังชำนาญในด้านการแปรสภาพสิ่งที่เล็กกว่านั้นให้เป็นทองเพื่อเติมเต็มกระเป๋าตังค์ของเขา"
            },
            [3]: {
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_chemical_rage.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_chemical_rage.mp4",
                "have-shard-or-agh": [0, ""],
                "image-skills": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/alchemist_chemical_rage.png",
                "title-skills": "CHEMICAL RAGE",
                "description-title-skills": "Alchemist ให้ยาอันทำให้คลุ้มคลั่งแก่ Orge ของเขา ลดคูลดาวน์การโจมตีพื้นฐาน เพิ่มความเร็วในการเคลื่อนที่ และเพิ่มอัตราฟื้นฟูพลังชีวิต <br><br>ชนิดการลบล้าง: การลบล้างพื้นฐาน",
                "col-2-1": [
                    ["สกิล:", "ไม่มีเป้าหมาย"],
                ],
                "col-2-2": [
                    ["ลบล้าง", "ไม่ได้"],
                ],
                "col-1-1": [
                    ["ระยะเวลา:", "25.0 "],
                    ["ระยะเวลาการโจมตีพื้นฐาน: ", "1.2 / 1.1 / 1.0"],
                    ["เพิ่มความเร็วในการเคลื่อนที่:", "7.0 / 8.0 / 9.0 "],
                    ["เพิ่มพลังโจมตีโดย SCEPTER:", "20"],
                    ["เพิ่มความเสียหายสกิลโดย SCEPTER: ", "5% "]
                ],
                "cooldown": "55.0 ",
                "mana-cost": "50 / 75 / 100 ",
                "description-skills": "เหล้าที่ Razzil เคยให้ Ogre ดื่มตอนที่พวกเขาแหกคุกได้กลายเป็นยาที่มีประโยชน์ท่ามกลางสงคราม"
            },
            [4]: {
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_aghanims_shard.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_aghanims_shard.mp4",
                "have-shard-or-agh": [1, "SHARD มอบสกิลใหม่"],
                "image-skills": "https://media.discordapp.net/attachments/798049559405396011/903978604399054858/unknown.png",
                "title-skills": "BERSERK POTION",
                "description-title-skills": "Alchemist โยนน้ำยาใส่เพื่อนร่วมทีม ทำการลบล้างพื้นฐาน และมอบความเร็วในการโจมตี 50 หน่วย ความเร็วในการเคลื่อนที่ 30 หน่วย และอัตราฟื้นฟูพลังชีวิต 40 หน่วย <br><br>มีผล 10.0 วินาที",
                "col-2-1": [
                    ["สกิล:", "ยูนิตเป้าหมาย"],
                    ["ส่งผลต่อ:", "ยูนิตฝ่ายเดียวกัน"],
                    ["ประเภทความเสียหาย:: ", "เวทมนตร์"]
                ],
                "col-2-2": [
                    ["ทะลุการป้องกันเวทโดยสมบูรณ์:", "ได้"],
                    ["ลบล้าง:", "ได้"]
                ],
                "col-1-1": [
                    ["ระยะเวลา:", "10.0"],
                    ["ความเร็วในการโจมตี:", "50"],
                    ["อัตราฟื้นฟูพลังชีวิต:", "40 "]
                ],
                "cooldown": "35.0",
                "mana-cost": "125",
                "description-skills": ""
            },
            [5]: {
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_aghanims_scepter.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_aghanims_scepter.mp4",
                "have-shard-or-agh": [1, "การอัปเกรดสกิลโดย SCEPTER"],
                "image-skills": "https://media.discordapp.net/attachments/798049559405396011/903978647084494878/unknown.png",
                "title-skills": "CHEMICAL RAGE",
                "description-title-skills": "Alchemist หลอม Aghanim's Scepter เพื่อมอบการอัปเกรด Aghanim's Scepter ทั้งหมดให้แก่เพื่อนร่วมทีม เมื่อคุณมี Scepter เป็นของคุณเอง คุณจะได้โบนัสพลังโจมตีและเพิ่มความเสียหายสกิลสำหรับทุก ๆ Scepter ที่มอบให้เพื่อน",
                "col-2-1": [
                    ["", ""],
                    ["", ""]
                ],
                "col-2-2": [
                    ["", ""],
                    ["", ""]
                ],
                "col-1-1": [
                    ["", ""],
                    ["", ""]
                ],
                "cooldown": "55.0",
                "mana-cost": "50 / 75 / 100",
                "description-skills": "เหล้าที่ Razzil เคยให้ Ogre ดื่มตอนที่พวกเขาแหกคุกได้กลายเป็นยาที่มีประโยชน์ท่ามกลางสงคราม"
            },


        }
        var skills = {
            [0]: {
                "img": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/alchemist_acid_spray.png",
                "poster": "",
                "webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_acid_spray.webm",
                "mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_acid_spray.mp4",
                "name": "ACID SPRAY",
                "desc": "พ่นน้ำกรดความดันสูงลงบนพื้นที่เป้าหมาย ยูนิตศัตรูที่เข้าสู่พื้นที่ปนเปี้อนนี้จะได้รับความเสียหายต่อวินาที และถูกลดเกราะป้องกันลง"
            },
            [1]: {
                "img": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/alchemist_unstable_concoction.png",
                "poster": "",
                "webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_unstable_concoction.webm",
                "mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_unstable_concoction.mp4",
                "name": "UNSTABLE CONCOCTION",
                "desc": "Alchemist ผสมน้ำยาที่มีส่วนประกอบไม่แน่นอน ซึ่งเขาสามารถโยนไปยังฮีโร่ฝ่ายศัตรูเพื่อสตันและสร้าง ความเสียหายรอบพื้นที่ที่ระเบิด ยิ่งใช้เวลาผสมนานเท่าไร ความเสียหายและระยะเวลาการสตันก็จะเพิ่มมากขึ้นเท่านั้น หลังจาก 5.0 วินาที น้ำยาจะมีความสามารถในการสร้าง ความเสียหายและเวลาสตันสูงสุด แต่หากไม่โยนภายใน 5.5 วินาที น้ำยาจะระเบิดและส่งผลทั้งหมดแก่ Alchemist เอง!"
            },
            [2]: {
                "img": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/alchemist_goblins_greed.png",
                "poster": "",
                "webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_goblins_greed.webm",
                "mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_goblins_greed.mp4",
                "name": "Curse of Avernus",
                "desc": "Alchemist สังเคราะห์โกลด์เพิ่มจากศัตรูและรูน Bounty โดยในแต่ละการสังหาร Alchemist จะได้รับเงินโบนัสขั้นต่ำ รวมกับเงินโบนัสเพิ่มเติม หาก Alchemist สังหารยูนิตถัดไป แล้วได้รับเงินภายในช่วง 36 วินาที เงินโบนัสเพิ่มเติมจะ ถูกเพิ่มเข้าไปในเงินโบนัสทั้งหมดอีกหนึ่งชุด ทำให้เงินโบนัส รวมทั้งหมดเพิ่มมากขึ้น นอกจากนี้ รูน Bounty จะให้เงิน แก่เขามากขึ้น"
            },
            [3]: {
                "img": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/alchemist_chemical_rage.png",
                "poster": "",
                "webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_chemical_rage.webm",
                "mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/alchemist/alchemist_chemical_rage.mp4",
                "name": "CHEMICAL RAGE",
                "desc": "Alchemist ให้ยาอันทำให้คลุ้มคลั่งแก่ Orge ของเขา ลดคูลดาวน์การโจมตีพื้นฐาน เพิ่มความเร็วในการเคลื่อนที่ และเพิ่มอัตราฟื้นฟูพลังชีวิต <br><br>ชนิดการลบล้าง: การลบล้างพื้นฐาน"
            }
        }

        var status_hero = {
            "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/heroes/alchemist.png": [
                ["700", "2.8", "HP"],
                ["375", "1.3", "MANA"]
            ]
        }

        var status_icon_json = {
            "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/hero_strength.png": ["25", "2.9"],
            "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/hero_agility.png": ["22", "1.5"],
            "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/hero_intelligence.png": ["25", "1.8"]
        }

        var status_json = {
            "ตัวแครี่": "66.6",
            "ตัวซัพพอร์ต": "33.3",
            "ตัวนูค": "33.3",
            "ตัวหยุด": "33.3",
            "ตัวป่า": "0",
            "ตัวยืน": "66.6",
            "ตัวหนี": "0",
            "ตัวดัน": "0",
            "ตัวเปิด": "33.3"
        }

        var status_json_right = {
            "การโจมตี": [
                ["https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//heroes/stats/icon_damage.png", "52-58"],
                ["https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//heroes/stats/icon_attack_time.png", "1.7"],
                ["https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//heroes/stats/icon_attack_range.png", "150"],
                ["https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//heroes/stats/icon_projectile_speed.png", "900"]
            ],
            "การป้องกัน": [
                ["https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//heroes/stats/icon_armor.png", "2.7"],
                ["https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//heroes/stats/icon_magic_resist.png", "25%"]
            ],
            "การเคลื่อนที่": [
                ["https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//heroes/stats/icon_movement_speed.png", "305"],
                ["https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//heroes/stats/icon_turn_rate.png", "0.6"],
                ["https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//heroes/stats/icon_vision.png", "1800 / 800"]
            ]
        }
        document.onload = load_all_skills();
        document.onload = load_hero_status();
        document.onload = load_status_icon();
        document.onload = load_status_detail_left();
        document.onload = load_status_detail_right();
    </script>
</body>
<script>
    AOS.init({
        duration: 1200,
    });
</script>

</html>