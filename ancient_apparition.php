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
            <a class="small-arrow" href="#" style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/arrow_solid_left.png');"></a>
            <a class="small-center" href="hero.php">
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
            </a>
            <a class="small-arrow" href="alchemist.php" style="transform: scaleX(-1); background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/arrow_solid_left.png');"></a>
        </div>
        <div style="width: 100%; height: 400px; position: absolute; bottom: 0; background: linear-gradient(rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.6) 90%, black 100%); z-index: 1;"></div>
        <div class="top-hero" style="display:flex; justify-content: center; position:absolute; width: 80%; height:100%; top: 0px; right: -5%;">
            <video muted autoplay preload="auto" loop="" playsinline="" data-video="0" style="min-height:100%; transform:translate(0px, 16pc) scale(1.93, 1.93);">

                <!-- change vdo hero here -->
                <source type="video/mp4" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/ancient_apparition.webm">

            </video>
        </div>
        <div class="title-hero">
            <div style="display: flex; flex-direction: row; align-items: center;">
                <!-- change white font color hero here -->
                <img style="width: 32px; height: 32px;" src="./src/icon/INTELLIGENCE.png">
                <div style="margin-left: 6px; color: #fff; text-transform: uppercase; letter-spacing: 2px; font-weight: 100; font-size: 24px;">
                    INTELLIGENCE
                </div>
            </div>
            <div style="font-family: 'Noto Serif', serif; font-size: 80px; margin-top: 5px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #fff;">
                ANCIENT APPARITION

            </div>

            <div style="font-size: 16px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; color: #a5e0f3; margin-top: 5px;">
                ปล่อยระเบิดน้ำแข็งอันทรงพลังจากที่ใดก็ได้ในแผนที่

            </div>
            <div style="color: #eee; width: 100%; margin-top: 14px; font-weight: 200; font-size: 20px; letter-spacing: 0px;">
                Ancient Apparition สามารถกำจัดศัตรูที่อ่อนแอให้แตกสลายได้ไม่ว่าจะอยู่ที่ไหน เขาสามารถปล่อยพลังสะเก็ดน้ำแข็งที่สร้างความเสียหายอย่างรุนแรงได้ทั่วทั้งสนามรบ ทั้งยังช่วยลดความเร็วศัตรูหรือเพิ่มพลังโจมตีเพื่อให้เพื่อนร่วมทีมของเขาบุกเข้ามายังสนามรบได้ เขาสามารถกดดันศัตรูได้ตลอดเวลา

                <div class="t-hov" style="margin-top: 8px; text-decoration: underline; font-size: 18px; cursor: pointer;">อ่านประวัติเต็ม</div>
            </div>
            <div>
                <div style="margin-top: 25px; color: #959595; text-transform: uppercase; font-weight: bold; letter-spacing: 2px; font-size: 17px;">ประเภทการโจมตี</div>
                <div style="display: flex; flex-direction: row; align-items: center; margin-top: 8px;">

                    <!-- change pic icon [melee or ranged] and  white font color here -->
                    <img style="width: 24px; height: 24px; margin-right: 8px;" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/ranged.svg">
                    <div style="color: #fff; text-transform: uppercase; letter-spacing: 2px; font-size: 15px; font-weight: bold;">ระยะไกล</div>

                </div>
            </div>
            <div style="padding-bottom: 20px;">
                <div style="margin-top: 25px; color: #959595; text-transform: uppercase; font-weight: bold; letter-spacing: 2px; font-size: 17px;">ความยาก</div>
                <div style="display: flex; flex-direction: row; width: 80px; justify-content: space-between; margin-top: 8px; margin-left: 4px;">
                    <div style="width: 13px; height: 13px; border: 1.5px solid #fff; transform: rotateZ(45deg); background-color: #fff;"></div>
                    <div style="width: 13px; height: 13px; border: 1.5px solid #fff; transform: rotateZ(45deg); background-color: #fff;"></div>
                    <div style="width: 13px; height: 13px; border: 1.5px solid #fff; transform: rotateZ(45deg);"></div>
                </div>
            </div>
        </div>
        <div class="line-name">
            <!-- change pic icon type hero and  white font color here -->
            <img style="width: 22px;height: 22px;" src="./src/icon/strength.png">
            <!-- change white font text skill here  -->
            <div class="line-name-hero">
                ANCIENT APPARITION
            </div>
            <div class="line-name-id">
                43
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
                            <source id="video-type-webm" type="video/webm" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_cold_feet.webm">
                            <source id="video-type-mp4" type="video/mp4" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_cold_feet.mp4">
                        </video>
                    </div>
                    <!-- bar skill -->
                    <div style="width: 100%; margin-top: -15px; display: flex; flex-direction: row; justify-content: center; flex-wrap: wrap; position: relative; z-index: 3;">
                        <div class="icon-skill" style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/ancient_apparition_cold_feet.png');" onclick="changeSkillsDetail(0, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/ancient_apparition_ice_vortex.png');" onclick="changeSkillsDetail(1, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/ancient_apparition_chilling_touch.png');" onclick="changeSkillsDetail(2, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/ancient_apparition_ice_blast.png');" onclick="changeSkillsDetail(3, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('https://media.discordapp.net/attachments/798049559405396011/904017265538789416/unknown.png');" onclick="changeSkillsDetail(4, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('https://media.discordapp.net/attachments/798049559405396011/904017339882807336/unknown.png');" onclick="changeSkillsDetail(5, this)"></div>
                    </div>
                </div>
                <!-- PART Left -->
                <div style="width: 45%; min-height: 0; display: flex; flex-direction: column; align-items: center;">
                    <div style="width: 100%; height: 100%; box-sizing: border-box;">
                        <!-- zone head -->
                        <div style="padding: 8px; background-color: #121212; display: flex; flex-direction: row;">
                            <img style="width: 96px; height: 96px; margin: 10px 15px 10px 10px; box-shadow: 0px 0px 8px #000;" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/ancient_apparition_cold_feet.png" id="image-skills">
                            <div style="flex-grow: 1; min-height: 0; display: flex; flex-direction: column; margin-top: 5px; margin-left: 8px; margin-right: 12px; align-items: flex-start;">
                                <!-- title -->
                                <div style="color: #fff; font-size: 22px; font-weight: bold; text-transform: uppercase; letter-spacing: 1px;" id="title-skills">
                                    COLD FEET
                                </div>
                                <div id="more-detail"></div>
                                <!-- detail -->
                                <div style="color: #ddd; font-size: 18px; white-space: pre-wrap; margin-bottom: 10px;" id="description-title-skills">สร้างคำสาปน้ำแข็งใส่ศัตรูเป้าหมายที่สร้างความเสียหายอย่าง ต่อเนื่อง แต่สามารถถูกยกเลิกได้เมื่อเป้าหมายเคลื่อนที่ออกจาก จุดแรกที่เกิดการใช้สกิลนี้ขึ้น ถ้าศัตรูยังคงอยู่ในระยะที่กำหนด เป็นระยะเวลา 4 วินาทีจะถูกแช่แข็งอยู่กับที่และสตัน</div>
                            </div>
                        </div>
                        <!-- zone detail -->
                        <div style="background-color: #000; min-height: 0; display: flex; flex-direction: column; padding: 20px 30px 15px 30px;">
                            <!-- ver 2 colum -->
                            <div class="col2">
                                <div class="inner-col2" id="col-2-1">
                                    <div class="text-inner-col2">สกิล:
                                        <div class="b-text">ยูนิตเป้าหมาย</div>
                                    </div>
                                    <div class="text-inner-col2">ส่งผลต่อ::
                                        <div class="b-text">ยูนิตฝ่ายศัตรู</div>
                                    </div>
                                    <div class="text-inner-col2">ประเภทความเสียหาย:
                                        <div class="b-text">เวทมนตร์</div>
                                    </div>
                                </div>
                                <div class="inner-col2" id="col-2-2">
                                    <div class="text-inner-col2">ทะลุการป้องกันเวทโดยสมบูรณ์:
                                        <div class="b-text">ไม่ได้</div>
                                    </div>
                                    <div class="text-inner-col2">ลบล้าง:
                                        <div class="b-text">ได้</div>
                                    </div>
                                </div>
                            </div>
                            <!-- ver 1 colum -->
                            <div class="col1" id="col-1-1">
                                <div class="text-inner-col1">ความเสียหายต่อช่วง:
                                    <div class="b-text">30.0 / 50.0 / 70.0 / 90.0</div>
                                </div>
                                <div class="text-inner-col1">ระยะสิ้นสุด:
                                    <div class="b-text">715</div>
                                </div>
                                <div class="text-inner-col1">ระยะเวลาสตัน:
                                    <div class="b-text">2.0 / 2.5 / 3.0 / 3.5</div>
                                </div>
                                <div class="text-inner-col1">ระยะร่าย:
                                    <div class="b-text">700 / 800 / 900 / 1000</div>
                                </div>
                            </div>
                            <!-- ver delay skill -->
                            <div style="width: 100%; margin-top: 12px; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-between;">
                                <div style="display: flex; flex-direction: row; align-items: center;" id="cooldown">
                                    <div style="width: 16px; height: 16px; border-radius: 3px; background-size: cover; background-repeat: no-repeat; background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/cooldown.png');"></div>
                                    <div style="margin-left: 8px; color: #fff;">12.0 / 11.0 / 10.0 / 9.0</div>
                                </div>
                                <div style="display: flex; flex-direction: row; align-items: center;" id="mana-cost">
                                    <div style="width: 16px; height: 16px; border-radius: 3px; background: linear-gradient(#00A4DB, #007196);"></div>
                                    <div style="margin-left: 8px; color: #fff;">125</div>
                                </div>
                            </div>
                            <!-- var more story detail -->
                            <div style="width: 100%; background-color: #111; margin-top: 20px; margin-bottom: 10px; padding: 10px; font-style: italic; font-size: 14px; color: #aaa;" id="description-skills">
                                การปรากฏตัวของ Kaldr ดึงดูดให้ผู้คนที่อยู่รอบตัวเขาให้ถูกดูดเข้าไปในความว่างเปล่าอันหนาวเหน็บเพื่อที่จะขังพวกนั้นไว้ในคุกอันเย็นเยือกชั่วนิรันดร์
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PART BAR -->
        <div class="bar">
            <!-- change link back hero here -->
            <div class="bar-side" href="#" style="background-image: url(./src/hero/abaddon/bar.png);">
                <img class="bar-hero" style="left: 0px;" src="./src/hero/abaddon/back.png">
                <div style="width: 250px; min-height: 0; display: flex; flex-direction: column; z-index: 6;">
                    <div style="font-size: 15px; color: #9f9f9f; text-transform: uppercase; letter-spacing: 2px; text-shadow: 1px 1px 4px #000; margin-bottom: 5px;">ฮีโร่ก่อนหน้า</div>
                    <!-- change white font here -->
                    <div style="font-size: 28px; color: #fff; text-transform: uppercase; letter-spacing: 1px; font-weight: bold; line-height: 112%; text-shadow: 1px 1px 4px #000;">
                        ARC WARDEN</div>
                    <div style="width: 100%; display: flex; flex-direction: row; align-items: center;">
                        <!-- change pic type hero here -->
                        <img src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/hero_intelligence.png" style="width: 20px; height: 20px; margin-right: 10px; filter: drop-shadow(1px 1px 4px black);">
                        <!-- change white font here -->
                        <div style="color: #ddd; font-size: 15px; text-transform: uppercase; letter-spacing: 2px; text-shadow: 1px 1px 4px #000;">
                            ระยะไกล</div>
                    </div>
                </div>
            </div>
            <!-- change link here -->
            <div class="bar-center" style="height: auto;" href="#">
                <div class="bar-box">
                    <div class="bar-grid"></div>
                    <div class="bar-grid"></div>
                    <div class="bar-grid"></div>
                    <div class="bar-grid"></div>
                    <div class="bar-grid"></div>
                    <div class="bar-grid"></div>
                </div>
                <div style="color: #fff; font-size: 14px; text-transform: uppercase; letter-spacing: 2px; margin-top: 8px; text-align: center;"> ฮีโร่ทั้งหมด </div>
            </div>
            <!-- change link back hero here -->
            <div href="#" class="bar-side" style="background-image: url(./src/hero/abaddon/bar.png); justify-content: flex-start;">
                <img class="bar-hero" style="right: 0px;" src="./src/hero/abaddon/next.png">
                <div style="width: 250px; min-height: 0; display: flex; flex-direction: column; z-index: 6;">
                    <div style="font-size: 15px; color: #9f9f9f; text-transform: uppercase; letter-spacing: 2px; text-shadow: 1px 1px 4px #000; margin-bottom: 5px;">ฮีโร่ก่อนหน้า</div>
                    <!-- change white font here -->
                    <div style="font-size: 28px; color: #fff; text-transform: uppercase; letter-spacing: 1px; font-weight: bold; line-height: 112%; text-shadow: 1px 1px 4px #000;">
                        ALCHEMIST</div>
                    <div style="width: 100%; display: flex; flex-direction: row; align-items: center;">
                        <!-- change pic type hero here -->
                        <img src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/hero_intelligence.png" style="width: 20px; height: 20px; margin-right: 10px; filter: drop-shadow(1px 1px 4px black);">
                        <!-- change white font here -->
                        <div style="color: #ddd; font-size: 15px; text-transform: uppercase; letter-spacing: 2px; text-shadow: 1px 1px 4px #000;">
                            ระยะไกล</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include './components/footer.php' ?>
    <script>
        var skill_json = {
            [0]: {
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_cold_feet.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_cold_feet.mp4",
                "have-shard-or-agh": [0, ""],
                "image-skills": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/ancient_apparition_cold_feet.png",
                "title-skills": 'COLD FEET',
                "description-title-skills": 'สร้างคำสาปน้ำแข็งใส่ศัตรูเป้าหมายที่สร้างความเสียหายอย่าง ต่อเนื่อง แต่สามารถถูกยกเลิกได้เมื่อเป้าหมายเคลื่อนที่ออกจาก จุดแรกที่เกิดการใช้สกิลนี้ขึ้น ถ้าศัตรูยังคงอยู่ในระยะที่กำหนด เป็นระยะเวลา 4 วินาทีจะถูกแช่แข็งอยู่กับที่และสตัน',
                "col-2-1": [
                    ["สกิล:", "ยูนิตเป้าหมาย"],
                    ["ส่งผลต่อ:", "ยูนิตฝ่ายศัตรู"],
                    ["ประเภทความเสียหาย:", "เวทมนตร์"]
                ],
                "col-2-2": [
                    ["ทะลุการป้องกันเวทโดยสมบูรณ์:", "ไม่ได้"],
                    ["ลบล้าง:", "ได้"]
                ],
                "col-1-1": [
                    ["ความเสียหายต่อช่วง:", "30.0 / 50.0 / 70.0 / 90.0"],
                    ["ระยะสิ้นสุด:", "715 "],
                    ["ระยะเวลาสตัน: ", " 2.0 / 2.5 / 3.0 / 3.5"],
                    ["ระยะร่าย: ", "700 / 800 / 900 / 1000"]
                ],
                "cooldown": "12.0 / 11.0 / 10.0 / 9.0",
                "mana-cost": "125",
                "description-skills": "การปรากฏตัวของ Kaldr ดึงดูดให้ผู้คนที่อยู่รอบตัวเขาให้ถูกดูดเข้าไปในความว่างเปล่าอันหนาวเหน็บเพื่อที่จะขังพวกนั้นไว้ในคุกอันเย็นเยือกชั่วนิรันดร์"
            },
            [1]: {
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_ice_vortex.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_ice_vortex.mp4",
                "have-shard-or-agh": [0, ""],
                "image-skills": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/ancient_apparition_ice_vortex.png",
                "title-skills": "ICE VORTEX",
                "description-title-skills": "การปรากฏตัวของ Kaldr ดึงดูดให้ผู้คนที่อยู่รอบตัวเขาให้ถูกดูดเข้าไปในความว่างเปล่าอันหนาวเหน็บเพื่อที่จะขังพวกนั้นไว้ในคุกอันเย็นเยือกชั่วนิรันดร์",
                "col-2-1": [
                    ["สกิล:", "ตำแหน่งเป้าหมาย"]
                ],
                "col-2-2": [
                    ["ทะลุการป้องกันเวทโดยสมบูรณ์:", "ไม่ได้"],
                    ["ลบล้าง:", "ไม่ได้"]
                ],
                "col-1-1": [
                    ["รัศมี: ", "275"],
                    ["ช้าลง:", " -15 % / -20% / - 25 % / -30%"],
                    ["ได้รับความเสียหายเวทมนตร์เพิ่มขึ้น:: ", "-12% / -16% / -20% / -24%"],
                    ["ระยะเวลา:", "16"]
                ],
                "cooldown": "7.0 / 6.0 / 5.0 / 4.0",
                "mana-cost": "40 / 50 / 60 / 70",
                "description-skills": "ความเยือกเย็น ลมหนาวที่กรัดกร่อนซึ่งอยู่ภายใต้อำนาจของ Kaldr แผ่ซ่านไอเย็นยะเยือกไปทั่วลานแห่งการต่อสู้"
            },
            [2]: {
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_chilling_touch.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_chilling_touch.mp4",
                "have-shard-or-agh": [0, ""],
                "image-skills": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/ancient_apparition_chilling_touch.png",
                "title-skills": "CHILLING TOUCH",
                "description-title-skills": "เพิ่มพลังการโจมตีของ Ancient Apparition ด้วยระยะการโจมตีที่เพิ่มขึ้น ความเสียหายเวทมนตร์อันแสนรุนแรง และลดความเร็วในการเคลื่อนที่",
                "col-2-1": [
                    ["สกิล:", "ยูนิตเป้าหมาย"],
                    ["ส่งผลต่อ: ", "ยูนิตฝ่ายศัตรู"]
                ],
                "col-2-2": [
                    ["ทะลุการป้องกันเวทโดยสมบูรณ์:", "ไม่ได้"],
                    ["ลบล้าง:", "ได้"]
                ],
                "col-1-1": [
                    ["ความเสียหาย: ", "50 / 90 / 130 / 170"],
                    ["เคลื่อนที่ช้าลง: ", " 100%"],
                    ["ระยะเวลาช้าลง:: ", "0.5"],
                    ["เพิ่มระยะการโจมตี:", "60 / 120 / 180 / 240"]
                ],

                "cooldown": "15.0 / 11.0 / 7.0 / 3.0",
                "mana-cost": "30 / 45 / 60 / 75",
                "description-skills": "ความรู้อันไม่สิ้นสุดของ Ancient Apparition นั้นนำพาอาคมแห่งความเยือกเย็นมาสู่การโจมตีของเขา"
            },
            [3]: {
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_ice_blast.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_ice_blast.mp4",
                "have-shard-or-agh": [0, ""],
                "image-skills": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/ancient_apparition_ice_blast.png",
                "title-skills": "ICE BLAST",
                "description-title-skills": "ส่งตัวนำทางไปยังตำแหน่งใดก็ได้ในสนามรบ ซึ่งจะต้องกดเรียก ใช้งานอีกครั้งเพื่อระบุพื้นที่เป้าหมายที่จะถูกระเบิดโดยระเบิด น้ำแข็ง ยิ่งตัวนำทางเคลื่อนที่ไกลจะยิ่งทำให้การระเบิดใหญ่มาก ขึ้น ศัตรูที่โดนระเบิดหรือสัมผัสระเบิดน้ำแข็งที่กำลังเดินทาง จะได้รับสถานะ Frostbite ทำให้ได้รับความเสียหายและไม่ สามารถฟื้นฟูพลังชีวิตได้ ถ้าพลังชีวิตของยูนิตภายใต้สถานะ Frostbite ลดลงจนต่ำกว่าเปอร์เซ็นต์ที่กำหนด ยูนิตนั้นจะ แตกสลายและถูกสังหารทันที",
                "col-2-1": [
                    ["สกิล:", "ตำแหน่งเป้าหมาย"],
                    ["ประเภทความเสียหาย:", "เวทมนตร์"]
                ],
                "col-2-2": [
                    ["ทะลุการป้องกันเวทโดยสมบูรณ์:", "ได้"],
                    ["ลบล้าง:", "ไม่ได้"]
                ],
                "col-1-1": [
                    ["ความเสียหาย:", "250 / 325 / 400 "],
                    ["ระยะเวลา FROSTBITE:", " 10.0 / 11.0 / 12.0"],
                    ["ความเสียหายจาก FROSTBITE ต่อวินาที: ", "12.5 / 20.0 / 32.0"],
                    ["พลังชีวิตขั้นต่ำที่จะสังหาร:", "12.0% / 13.0% / 14.0%"]
                ],
                "cooldown": "60.0 / 50.0 / 40.0",
                "mana-cost": "175 ",
                "description-skills": "พายุน้ำแข็งจากอดีตกาลได้พัดผ่านแขนที่เต็มไปด้วยน้ำแข็งของ Kaldr พุ่งชนเข้าใส่โลกจนทำให้ผู้อยู่อาศัยในระแวกนั้นกลายเป็นดั่งอนุสาวรีย์แห่งพลังอมตะของเขา"
            },
            [4]: {
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_aghanims_shard.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_aghanims_shard.mp4",
                "have-shard-or-agh": [1, "SHARD มอบสกิลใหม่"],
                "image-skills": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/ancient_apparition_ice_vortex.png",
                "title-skills": "ICE VORTEX",
                "description-title-skills": "ทำให้ Ice Vortex สร้างความเสียหาย 40 หน่วยต่อวินาที และลดความเร็วในการโจมตี 20 หน่วย",
                "col-2-1": [
                    ["", ""],
                    ["", ""],
                    ["", ""]
                ],
                "col-2-2": [
                    ["", ""]
                ],
                "col-1-1": [
                    ["", ""]

                ],
                "cooldown": "",
                "mana-cost": "",
                "description-skills": ""
            },
            [5]: {
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_aghanims_scepter.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_aghanims_scepter.mp4",
                "have-shard-or-agh": [1, "SCEPTER"],
                "image-skills": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/ancient_apparition_chilling_touch.png",
                "title-skills": "CHILLING TOUCH",
                "description-title-skills": "ทำให้ไม่มีคูลดาวน์และลดมานาที่ใช้ครึ่งหนึ่ง",
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
                "cooldown": "15.0 / 11.0 / 7.0 / 3.0",
                "mana-cost": "30 / 45 / 60 / 75",
                "description-skills": "ความรู้อันไม่สิ้นสุดของ Ancient Apparition นั้นนำพาอาคมแห่งความเยือกเย็นมาสู่การโจมตีของเขา"
            },


        }
        var skills = {
            [0]: {
                "img": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/ancient_apparition_cold_feet.png",
                "poster": "",
                "webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_cold_feet.webm",
                "mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_cold_feet.webm",
                "name": "COLD FEET",
                "desc": "การปรากฏตัวของ Kaldr ดึงดูดให้ผู้คนที่อยู่รอบตัวเขาให้ถูกดูดเข้าไปในความว่างเปล่าอันหนาวเหน็บเพื่อที่จะขังพวกนั้นไว้ในคุกอันเย็นเยือกชั่วนิรันดร์"
            },
            [1]: {
                "img": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/ancient_apparition_ice_vortex.png",
                "poster": "",
                "webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_ice_vortex.webm",
                "mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_ice_vortex.mp4",
                "name": "ICE VORTEX",
                "desc": "สร้างคำสาปน้ำแข็งใส่ศัตรูเป้าหมายที่สร้างความเสียหายอย่าง ต่อเนื่อง แต่สามารถถูกยกเลิกได้เมื่อเป้าหมายเคลื่อนที่ออกจาก จุดแรกที่เกิดการใช้สกิลนี้ขึ้น ถ้าศัตรูยังคงอยู่ในระยะที่กำหนด เป็นระยะเวลา 4 วินาทีจะถูกแช่แข็งอยู่กับที่และสตัน"
            },
            [2]: {
                "img": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/ancient_apparition_chilling_touch.png",
                "poster": "",
                "webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_chilling_touch.webm",
                "mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_chilling_touch.mp4",
                "name": " CHILLING TOUCH ",
                "desc": "ความรู้ อั นไม่ สิ้ นสุดของ Ancient Apparition นั้ นนำพาอาคมแห่ งความเยือกเย็ นมาสู่ การโจมตีของเขา "
            },
            [3]: {
                "img": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/ancient_apparition_ice_blast.png",
                "poster": "",
                "webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_ice_blast.webm",
                "mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/ancient_apparition/ancient_apparition_ice_blast.mp4",
                "name": "ICE BLAST",
                "desc": "ส่งตัวนำทางไปยังตำแหน่งใดก็ได้ในสนามรบ ซึ่งจะต้องกดเรียก ใช้งานอีกครั้งเพื่อระบุพื้นที่เป้าหมายที่จะถูกระเบิดโดยระเบิด น้ำแข็ง ยิ่งตัวนำทางเคลื่อนที่ไกลจะยิ่งทำให้การระเบิดใหญ่มาก ขึ้น ศัตรูที่โดนระเบิดหรือสัมผัสระเบิดน้ำแข็งที่กำลังเดินทาง จะได้รับสถานะ Frostbite ทำให้ได้รับความเสียหายและไม่ สามารถฟื้นฟูพลังชีวิตได้ ถ้าพลังชีวิตของยูนิตภายใต้สถานะ Frostbite ลดลงจนต่ำกว่าเปอร์เซ็นต์ที่กำหนด ยูนิตนั้นจะ แตกสลายและถูกสังหารทันที"
            }
        }

        var status_hero = {
            "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/heroes/ancient_apparition.png": [
                ["600", "2.3", "HP"],
                ["351", "1.1", "MANA"]
            ]
        }

        var status_icon_json = {
            "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/hero_strength.png": ["20", "1.9"],
            "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/hero_agility.png": ["20", "2.2"],
            "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/hero_intelligence.png": ["23", "3.4"]
        }

        var status_json = {
            "ตัวแครี่": "",
            "ตัวซัพพอร์ต": "66.6",
            "ตัวนูค": "33.3",
            "ตัวหยุด": "33.3",
            "ตัวป่า": "0",
            "ตัวยืน": "",
            "ตัวหนี": "0",
            "ตัวดัน": "0",
            "ตัวเปิด": ""
        }

        var status_json_right = {
            "การโจมตี": [
                ["https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//heroes/stats/icon_damage.png", "44-54"],
                ["https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//heroes/stats/icon_attack_time.png", "1.7"],
                ["https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//heroes/stats/icon_attack_range.png", "675"],
                ["https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//heroes/stats/icon_projectile_speed.png", "120"]
            ],
            "การป้องกัน": [
                ["https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//heroes/stats/icon_armor.png", "2.3"],
                ["https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//heroes/stats/icon_magic_resist.png", "25%"]
            ],
            "การเคลื่อนที่": [
                ["https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//heroes/stats/icon_movement_speed.png", "285"],
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