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
            <a class="small-arrow" href="ancient_apparition.php" style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/arrow_solid_left.png');"></a>
            <a class="small-center" href="hero.php">
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
            </a>
            <a class="small-arrow" href="arc_warden.php" style="transform: scaleX(-1); background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/arrow_solid_left.png');"></a>
        </div>
        <div style="width: 100%; height: 400px; position: absolute; bottom: 0; background: linear-gradient(rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.6) 90%, black 100%); z-index: 1;"></div>
        <div class="top-hero" style="display:flex; justify-content: center; position:absolute; width: 80%; height:100%; top: 0px; right: -5%;">
            <video muted autoplay preload="auto" loop="" playsinline="" data-video="0" style="min-height:100%; transform:translate(0px, 16pc) scale(1.93, 1.93);">

                <!-- change vdo hero here -->
                <source type="video/mp4" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/antimage.webm">

            </video>
        </div>
        <div class="title-hero">
            <div style="display: flex; flex-direction: row; align-items: center;">
                <!-- change white font color hero here -->
                <img style="width: 32px; height: 32px;" src="./src/icon/AGILITY.png">
                <div style="margin-left: 6px; color: #fff; text-transform: uppercase; letter-spacing: 2px; font-weight: 100; font-size: 24px;">
                    AGILITY
                </div>
            </div>
            <div style="font-family: 'Noto Serif', serif; font-size: 80px; margin-top: 5px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #fff;">
                ANTI-MAGE

            </div>

            <div style="font-size: 16px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px; color: #a5e0f3; margin-top: 5px;">
                ฟาดฟันศัตรูของเขาด้วยการโจมตีที่เผาผลาญมานา


            </div>
            <div style="color: #eee; width: 100%; margin-top: 14px; font-weight: 200; font-size: 20px; letter-spacing: 0px;">
                เมื่อ Anti-Mage มีช่วงโอกาส เขาสามารถทำให้ตัวเองแข็งแกร่งขึ้นอย่างมาก ซึ่งมีน้อยคนที่จะหยุดเขาได้ เขาสามารถเผาผลาญมานาของศัตรูได้ทุกครั้งเมื่อโจมตี หรือเทเลพอร์ตในระยะสั้น ๆ เพื่อหนีเมื่อถูกซุ่มโจมตีได้ การต้อนเขาให้จนมุมยากและท้าทายมากสำหรับศัตรู

                <div class="t-hov" style="margin-top: 8px; text-decoration: underline; font-size: 18px; cursor: pointer;">อ่านประวัติเต็ม</div>
            </div>
            <div>
                <div style="margin-top: 25px; color: #959595; text-transform: uppercase; font-weight: bold; letter-spacing: 2px; font-size: 17px;">ประเภทการโจมตี</div>
                <div style="display: flex; flex-direction: row; align-items: center; margin-top: 8px;">

                    <!-- change pic icon [melee or ranged] and  white font color here -->
                    <img style="width: 24px; height: 24px; margin-right: 8px;" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/melee.svg">
                    <div style="color: #fff; text-transform: uppercase; letter-spacing: 2px; font-size: 15px; font-weight: bold;">ระยะประชิด
                    </div>

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
            <img style="width: 22px;height: 22px;" src="./src/icon/AGILITY.png">
            <!-- change white font text skill here  -->
            <div class="line-name-hero">
                ANTI-MAGE

            </div>
            <div class="line-name-id">
                1
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
                            <source id="video-type-webm" type="video/webm" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_mana_break.webm">
                            <source id="video-type-mp4" type="video/mp4" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_mana_break.mp4">
                        </video>
                    </div>
                    <!-- bar skill -->
                    <div style="width: 100%; margin-top: -15px; display: flex; flex-direction: row; justify-content: center; flex-wrap: wrap; position: relative; z-index: 3;">
                        <div class="icon-skill" style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/antimage_mana_break.png');" onclick="changeSkillsDetail(0, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/antimage_blink.png');" onclick="changeSkillsDetail(1, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/antimage_counterspell.png');" onclick="changeSkillsDetail(2, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/antimage_mana_void.png');" onclick="changeSkillsDetail(3, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('https://cdn.discordapp.com/attachments/798049559405396011/904223924924055592/unknown.png');" onclick="changeSkillsDetail(4, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('https://media.discordapp.net/attachments/798049559405396011/904223856724705311/unknown.png');" onclick="changeSkillsDetail(5, this)"></div>
                    </div>
                </div>
                <!-- PART Left -->
                <div style="width: 45%; min-height: 0; display: flex; flex-direction: column; align-items: center;">
                    <div style="width: 100%; height: 100%; box-sizing: border-box;">
                        <!-- zone head -->
                        <div style="padding: 8px; background-color: #121212; display: flex; flex-direction: row;">
                            <img style="width: 96px; height: 96px; margin: 10px 15px 10px 10px; box-shadow: 0px 0px 8px #000;" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/antimage_mana_break.png" id="image-skills">
                            <div style="flex-grow: 1; min-height: 0; display: flex; flex-direction: column; margin-top: 5px; margin-left: 8px; margin-right: 12px; align-items: flex-start;">
                                <!-- title -->
                                <div style="color: #fff; font-size: 22px; font-weight: bold; text-transform: uppercase; letter-spacing: 1px;" id="title-skills">
                                    MANA BREAK

                                </div>
                                <div id="more-detail"></div>
                                <!-- detail -->
                                <div style="color: #ddd; font-size: 18px; white-space: pre-wrap; margin-bottom: 10px;" id="description-title-skills">เผาผลาญมานาของศัตรูในการโจมตีแต่ละครั้ง Mana Break จะสร้างความเสียหายแก่เป้าหมายโดยคิดจาก 50% ของมานา ที่ถูกเผาผลาญ Mana Break จะแสดงผล 50% หากเกิดจากร่างเงา
                                </div>
                            </div>
                        </div>
                        <!-- zone detail -->
                        <div style="background-color: #000; min-height: 0; display: flex; flex-direction: column; padding: 20px 30px 15px 30px;">
                            <!-- ver 2 colum -->
                            <div class="col2">
                                <div class="inner-col2" id="col-2-1">
                                    <div class="text-inner-col2">สกิล:
                                        <div class="b-text">ติดตัว</div>
                                    </div>
                                    <div class="text-inner-col2">ประเภทความเสียหาย:
                                        <div class="b-text">กายภาพ</div>
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
                                <div class="text-inner-col1">มานาที่ถูกเผาผลาญต่อครั้ง:
                                    <div class="b-text">28 / 40 / 52 / 64
                                    </div>
                                </div>
                                <div class="text-inner-col1">มานาที่ถูกเผาผลาญต่อครั้งจากมานาสูงสุด:
                                    <div class="b-text">1.0% / 1.8% / 2.6% / 3.4%
                                    </div>
                                </div>
                            </div>
                            <!-- ver delay skill -->
                            <!-- var more story detail -->
                            <div style="width: 100%; background-color: #111; margin-top: 20px; margin-bottom: 10px; padding: 10px; font-style: italic; font-size: 14px; color: #aaa;" id="description-skills">
                                เทคนิคพลิกแพลงตามวิถีแห่งสันติของพระแห่งเตอร์สตาร์กุรีคือย้อนพลังเวทมนตร์กลับไปหาเจ้าของ

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PART BAR -->
        <div class="bar">
            <!-- change link back hero here -->
            <div class="bar-side" href="ancient_apparition.php" style="background-image: url(./src/hero/abaddon/bar.png);">
                <a href="ancient_apparition.php">
                    <img class="bar-hero" style="left: 0px;" src="./src/hero/anti_mage/back.png">
                    <div style="width: 250px; min-height: 0; display: flex; flex-direction: column; z-index: 6;">
                        <div style="font-size: 15px; color: #9f9f9f; text-transform: uppercase; letter-spacing: 2px; text-shadow: 1px 1px 4px #000; margin-bottom: 5px;">ฮีโร่ก่อนหน้า</div>
                        <!-- change white font here -->
                        <div style="font-size: 28px; color: #fff; text-transform: uppercase; letter-spacing: 1px; font-weight: bold; line-height: 112%; text-shadow: 1px 1px 4px #000;">
                            ANCIENT APPARITION</div>
                        <div style="width: 100%; display: flex; flex-direction: row; align-items: center;">
                            <!-- change pic type hero here -->
                            <img src="./src/hero/icon_int_colorful.png" style="width: 20px; height: 20px; margin-right: 10px; filter: drop-shadow(1px 1px 4px black);">
                            <!-- change white font here -->
                            <div style="color: #ddd; font-size: 15px; text-transform: uppercase; letter-spacing: 2px; text-shadow: 1px 1px 4px #000;">
                                ระยะไกล</div>
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
            <div href="arc_warden.php" class="bar-side" style="background-image: url(./src/hero/abaddon/bar.png); justify-content: flex-start;">
                <a href="arc_warden.php">
                    <img class="bar-hero" style="right: 0px;" src="./src/hero/anti_mage/next.png">
                    <div style="width: 250px; min-height: 0; display: flex; flex-direction: column; z-index: 6;">
                        <div style="font-size: 15px; color: #9f9f9f; text-transform: uppercase; letter-spacing: 2px; text-shadow: 1px 1px 4px #000; margin-bottom: 5px;">ฮีโร่ถัดไป</div>
                        <!-- change white font here -->
                        <div style="font-size: 28px; color: #fff; text-transform: uppercase; letter-spacing: 1px; font-weight: bold; line-height: 112%; text-shadow: 1px 1px 4px #000;">
                            ARC WARDEN</div>
                        <div style="width: 100%; display: flex; flex-direction: row; align-items: center;">
                            <!-- change pic type hero here -->
                            <img src="./src/hero/icon_agi_colorful.png" style="width: 20px; height: 20px; margin-right: 10px; filter: drop-shadow(1px 1px 4px black);">
                            <!-- change white font here -->
                            <div style="color: #ddd; font-size: 15px; text-transform: uppercase; letter-spacing: 2px; text-shadow: 1px 1px 4px #000;">
                                ระยะไกล</div>
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
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_mana_break.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_mana_break.mp4",
                "have-shard-or-agh": [0, ""],
                "image-skills": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/antimage_mana_break.png",
                "title-skills": 'MANA BREAK',
                "description-title-skills": 'เผาผลาญมานาของศัตรูในการโจมตีแต่ละครั้ง Mana Break จะสร้างความเสียหายแก่เป้าหมายโดยคิดจาก 50% ของมานา ที่ถูกเผาผลาญ Mana Break จะแสดงผล 50% หากเกิดจากร่างเงา',
                "col-2-1": [
                    ["สกิล:", "ติดตัว"],
                    ["ประเภทความเสียหาย:", "กายภาพ"]
                ],
                "col-2-2": [
                    ["ทะลุการป้องกันเวทโดยสมบูรณ์:", "ไม่ได้"],
                ],
                "col-1-1": [
                    ["มานาที่ถูกเผาผลาญต่อครั้ง:", "328 / 40 / 52 / 64"],
                    [" มานาที่ถูกเผาผลาญต่อครั้งจากมานาสูงสุด:  ", "1.0% / 1.8% / 2.6% / 3.4%"],

                ],
                "cooldown": "",
                "mana-cost": "",
                "description-skills": "เทคนิคพลิกแพลงตามวิถีแห่งสันติของพระแห่งเตอร์สตาร์กุรีคือย้อนพลังเวทมนตร์กลับไปหาเจ้าของ"
            },
            [1]: {
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_blink.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_blink.mp4",
                "have-shard-or-agh": [0, ""],
                "image-skills": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/antimage_blink.png",
                "title-skills": "BLINK",
                "description-title-skills": "การเคลื่อนย้ายในระยะสั้น ๆ ซึ่งทำให้ Anti-Mage สามารถ เข้าและออกจากการต่อสู้ได้อย่างอิสระ",
                "col-2-1": [
                    ["สกิล:", "ตำแหน่งเป้าหมาย"]
                ],
                "col-1-1": [
                    ["ระยะทาง:", "925 / 1000 / 1075 / 1150"]
                ],
                "cooldown": "15.0 / 12.0 / 9.0 / 6.0",
                "mana-cost": "60",
                "description-skills": "ในการเผชิญหน้าระหว่างเขาและเทพแห่งความตาย Anti-Mage ได้รู้ซึ้งถึงคุณค่าของการหลบหลีกที่ว่องไว"
            },
            [2]: {
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_counterspell.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_counterspell.mp4",
                "have-shard-or-agh": [0, ""],
                "image-skills": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/antimage_counterspell.png",
                "title-skills": "COUNTERSPELL",
                "description-title-skills": "ได้รับความต้านทานเวทมนตร์ติดตัว และสามารถกดใช้เพื่อสร้างเกราะป้องกันเวทมนตร์รอบ ๆ ตัวคุณที่จะสะท้อนสกิลที่เล็งเป้าหมายมาที่คุณกลับไปยังศัตรู แทนที่จะส่งผลกับคุณ",
                "col-2-1": [
                    ["สกิล:", "ไม่มีเป้าหมาย"],
                ],
                "col-2-2": [
                    ["ลบล้าง:", "ได้"],
                ],
                "col-1-1": [
                    ["ความต้านทานเวทมนตร์:", " 15% / 25% / 35% / 45%"],
                    ["ระยะเวลา: ", "1.2"]
                ],
                "cooldown": "15.0 / 11.0 / 7.0 / 3.0",
                "mana-cost": "45 / 50 / 55 / 60",
                "description-skills": "ด้วยจิตตั้งมั่นอันแน่วแน่ Anti-Mage แปรเปลี่ยนความต้านทานภายในตนเป็นการโต้กลับตามที่คาดคะเน"
            },
            [3]: {
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_mana_void.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_mana_void.mp4",
                "have-shard-or-agh": [0, ""],
                "image-skills": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/antimage_mana_void.png",
                "title-skills": "MANA VOID",
                "description-title-skills": "สำหรับทุกหน่วยของมานาที่หายไปจากยูนิตเป้าหมายจะสร้าง ความเสียหายแก่ยูนิตนั้นและศัตรูรอบข้าง เป้าหมายหลักจะ ถูกมินิสตันด้วย",
                "col-2-1": [
                    ["สกิล:", "ยูนิตเป้าหมาย "],
                    ["ส่งผลต่อ:", "ยูนิตฝ่ายศัตรู"],
                    ["ประเภทความเสียหาย:", "เวทมนตร์"]
                ],
                "col-2-2": [
                    ["ทะลุการป้องกันเวทโดยสมบูรณ์:", "ได้"],
                ],
                "col-1-1": [
                    ["ความเสียหาย:", "0.8 / 0.9 / 1.1"],
                    ["ระยะเวลาสตัน:", "0.3 "],
                    ["ความเสียหายจาก FROSTBITE ต่อวินาที: ", "12.5 / 20.0 / 32.0"],
                    ["รัศมี:", "500"],
                ],
                "cooldown": "70.0 / 70.0 / 70.0",
                "mana-cost": "1100 / 200 / 300",
                "description-skills": "หลังจากทำให้ศัตรูลงมากองต่อหน้า Anti-Mage จะสำเร็จโทษพวกมันโทษฐานที่ใช้ศาสตร์ลี้ลับ"
            },
            [4]: {
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_counterspell.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_counterspell.mp4",
                "have-shard-or-agh": [1, "SHARD"],
                "image-skills": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/antimage_counterspell.png",
                "title-skills": "COUNTERSPELL",
                "description-title-skills": "Counterspell มอบออร่ารัศมี 900 หน่วยซึ่งลดความเสียหายสกิลของศัตรู 10% หากศัตรูอยู่ในระยะ 300 หน่วยจะลดความเสียหายสกิลเพิ่มอีก 20%",
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
                "video-type-webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_aghanims_scepter.webm",
                "video-type-mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_aghanims_scepter.mp4",
                "have-shard-or-agh": [1, "SCEPTER มอบสกิลใหม่"],
                "image-skills": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/antimage_mana_overload.png",
                "title-skills": "BLINK FRAGMENT",
                "description-title-skills": "Blink ร่างเงาไปยังศัตรูหรือตำแหน่งเป้าหมาย และโจมตีเป้าหมายเป็นเวลา 7 วินาที Counterspell จะส่งผลต่อร่างเงาของ Blink Fragment ด้วยเช่นกัน มี 3 ชาร์จ",
                "col-2-1": [
                    ["สกิล:", "ยูนิตเป้าหมาย "],
                    ["ส่งผลต่อ:", "ยูนิตฝ่ายศัตรู"]
                ],
                "col-2-2": [
                    ["ทะลุการป้องกันเวทโดยสมบูรณ์:", "ได้"],
                ],
                "col-1-1": [
                    ["", ""],
                    ["", ""]
                ],
                "cooldown": "0.0",
                "mana-cost": "50",
                "description-skills": ""
            },


        }
        var skills = {
            [0]: {
                "img": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/antimage_mana_break.png",
                
                "webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_mana_break.webm",
                "mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_mana_break.webm",
                "name": "MANA BREAK",
                "desc": "เผาผลาญมานาของศัตรูในการโจมตีแต่ละครั้ง Mana Break จะสร้างความเสียหายแก่เป้าหมายโดยคิดจาก 50% ของมานา ที่ถูกเผาผลาญ Mana Break จะแสดงผล 50% หากเกิดจากร่างเงา"
            },
            [1]: {
                "img": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/antimage_blink.png",
                
                "webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_blink.webm",
                "mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_blink.mp4",
                "name": "BLINK",
                "desc": "การเคลื่อนย้ายในระยะสั้น ๆ ซึ่งทำให้ Anti-Mage สามารถ เข้าและออกจากการต่อสู้ได้อย่างอิสระ"
            },
            [2]: {
                "img": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/antimage_counterspell.png",
                
                "webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_counterspell.webm",
                "mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_counterspell.mp4",
                "name": " COUNTERSPELL ",
                "desc": "ได้รับความต้านทานเวทมนตร์ติดตัว และสามารถกดใช้เพื่อสร้างเกราะป้องกันเวทมนตร์รอบ ๆ ตัวคุณที่จะสะท้อนสกิลที่เล็งเป้าหมายมาที่คุณกลับไปยังศัตรู แทนที่จะส่งผลกับคุณ"
            },
            [3]: {
                "img": "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/abilities/antimage_mana_void.png",
                
                "webm": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_mana_void.webm",
                "mp4": "https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/antimage/antimage_mana_void.mp4",
                "name": "MANA VOID",
                "desc": "สำหรับทุกหน่วยของมานาที่หายไปจากยูนิตเป้าหมายจะสร้าง ความเสียหายแก่ยูนิตนั้นและศัตรูรอบข้าง เป้าหมายหลักจะ ถูกมินิสตันด้วย"
            }
        }

        var status_hero = {
            "https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/heroes/antimage.png": [
                ["660", "2.5", "HP"],
                ["219", "0.6", "MANA"]
            ]
        }

        var status_icon_json = {
            "./src/hero/icon_str_colorful.png": ["23", "1.6"],
            "./src/hero/icon_agi_colorful.png": ["24", "2.8"],
            "./src/hero/icon_int_colorful.png": ["12", "1.8"]
        }

        var status_json = {
            "ตัวแครี่": "100",
            "ตัวซัพพอร์ต": "",
            "ตัวนูค": "33.3",
            "ตัวหยุด": "",
            "ตัวป่า": "0",
            "ตัวยืน": "",
            "ตัวหนี": "100",
            "ตัวดัน": "0",
            "ตัวเปิด": ""
        }

        var status_json_right = {
            "การโจมตี": [
                ["./src/hero/icon_damage.png", "55-57"],
                ["./src/hero/icon_attack_time.png", "1.4"],
                ["./src/hero/icon_attack_range.png", "150"],
            ],
            "การป้องกัน": [
                ["./src/hero/icon_armor.png", "4.0"],
                ["./src/hero/icon_magic_resist.png", "25%"]
            ],
            "การเคลื่อนที่": [
                ["./src/hero/icon_movement_speed.png", "310"],
                ["./src/hero/icon_turn_rate.png", "0.6"],
                ["./src/hero/icon_vision.png", "1800 / 800"]
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