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
            <a class="small-arrow" href="arc_warden.php" style="background-image: url('./src/hero/arrow_solid_left.png');"></a>
            <a class="small-center" href="hero.php">
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
            </a>
            <a class="small-arrow" href="alchemist.php" style="transform: scaleX(-1); background-image: url('./src/hero/arrow_solid_left.png');"></a>
        </div>
        <div style="width: 100%; height: 400px; position: absolute; bottom: 0; background: linear-gradient(rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.6) 90%, black 100%); z-index: 1;"></div>
        <div class="top-hero" style="display:flex; justify-content: center; position:absolute; width: 80%; height:100%; top: 0px; right: -5%;">
            <video muted autoplay preload="auto" loop="" playsinline="" data-video="0" style="min-height:100%; transform:translate(0px, 16pc) scale(1.93, 1.93);">

                <!-- change vdo hero here -->
                <source type="video/webm" src="./src/hero/abaddon/video_abaddon.webm">

            </video>
        </div>
        <div class="title-hero">
            <div style="display: flex; flex-direction: row; align-items: center;">
                <!-- change white font color hero here -->
                <img style="width: 32px; height: 32px;" src="./src/hero/icon_str_colorful.png">
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
            <div style="color: #eee; width: 100%; margin-top: 14px; font-weight: 200; font-size: 20px; letter-spacing: 0px;">
                Abaddon สามารถรอดจากการโจมตีจากศัตรูได้เกือบทั้งหมด เขาสามารถที่จะเปลี่ยนการโจมตีจากศัตรูมาเป็น
                <b>การรักษาตัวเอง</b>
                ได้ และยังช่วยใส่
                <b>เกราะป้องกันให้กับเพื่อนร่วมทีม</b>
                หรือปล่อย
                <b>พลังสองคม</b>
                ของเขาใส่เพื่อนหรือศัตรูได้อีกด้วย เขาพร้อมที่มุ่งเข้าสู่สนามรบที่มั่ววุ่นวายอยู่เสมอ
                <div class="t-hov" style="margin-top: 8px; text-decoration: underline; font-size: 18px; cursor: pointer;">อ่านประวัติเต็ม</div>
            </div>
            <div>
                <div style="margin-top: 25px; color: #959595; text-transform: uppercase; font-weight: bold; letter-spacing: 2px; font-size: 17px;">ประเภทการโจมตี</div>
                <div style="display: flex; flex-direction: row; align-items: center; margin-top: 8px;">

                    <!-- change pic icon [melee or ranged] and  white font color here -->
                    <img style="width: 24px; height: 24px; margin-right: 8px;" src="./src/hero/icon_melee.svg">
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
            <img style="width: 22px;height: 22px;" src="./src/hero/icon_str_colorful.png">
            <!-- change white font text skill here  -->
            <div class="line-name-hero">
                ABADDON
            </div>
            <div class="line-name-id">
                102
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
        background-image: url('./src/hero/bg_main.jpg');">
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
                        <video id="video-main" style="width: 100%; height: 100%; position: absolute; top: 0; left: 0;" autoplay="" preload="auto" loop="" playsinline="" muted>
                            <source id="video-type-mp4" type="video/mp4" src="./src/hero/abaddon/skill/video_skill1.mp4">
                        </video>
                    </div>
                    <!-- bar skill -->
                    <div style="width: 100%; margin-top: -15px; display: flex; flex-direction: row; justify-content: center; flex-wrap: wrap; position: relative; z-index: 3;">
                        <div class="icon-skill" style="background-image: url('./src/hero/abaddon/skill/skill1.png');" onclick="changeSkillsDetail(0, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('./src/hero/abaddon/skill/skill2.png');" onclick="changeSkillsDetail(1, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('./src/hero/abaddon/skill/skill3.png');" onclick="changeSkillsDetail(2, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('./src/hero/abaddon/skill/skill4.png');" onclick="changeSkillsDetail(3, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('./src/hero/abaddon/skill/skill5.png');" onclick="changeSkillsDetail(4, this)"></div>
                        <div class="icon-skill not-use" style="background-image: url('./src/hero/abaddon/skill/skill6.png');" onclick="changeSkillsDetail(5, this)"></div>
                    </div>
                </div>
                <!-- PART Left -->
                <div style="width: 45%; min-height: 0; display: flex; flex-direction: column; align-items: center;">
                    <div style="width: 100%; height: 100%; box-sizing: border-box;">
                        <!-- zone head -->
                        <div style="padding: 8px; background-color: #121212; display: flex; flex-direction: row;">
                            <img style="width: 96px; height: 96px; margin: 10px 15px 10px 10px; box-shadow: 0px 0px 8px #000;" src="./src/hero/abaddon/skill/skill1.png" id="image-skills">
                            <div style="flex-grow: 1; min-height: 0; display: flex; flex-direction: column; margin-top: 5px; margin-left: 8px; margin-right: 12px; align-items: flex-start;">
                                <!-- title -->
                                <div style="color: #fff; font-size: 22px; font-weight: bold; text-transform: uppercase; letter-spacing: 1px;" id="title-skills">
                                    MIST COIL
                                </div>
                                <div id="more-detail"></div>
                                <!-- detail -->
                                <div style="color: #ddd; font-size: 18px; white-space: pre-wrap; margin-bottom: 10px;" id="description-title-skills">Abaddon ปลดปล่อยกลุ่มหมอกแห่งความตาย ซึ่งสร้างความเสียหายแก่ยูนิตศัตรูหรือรักษายูนิตฝ่ายเดียวกัน แลกกับพลังชีวิตบางส่วนของ Abaddon</div>
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
                                    <div class="text-inner-col2">ส่งผลต่อ:
                                        <div class="b-text">ฮีโร่</div>
                                    </div>
                                    <div class="text-inner-col2">ประเภทความเสียหาย:
                                        <div class="b-text" style="color: rgb(163, 220, 238);">เวทมนตร์</div>
                                    </div>
                                </div>
                                <div class="inner-col2" id="col-2-2">
                                    <div class="text-inner-col2">ทะลุการป้องกันเวทโดยสมบูรณ์:
                                        <div class="b-text">เพื่อนร่วมทีม: ใช่ — ศัตรู: ไม่</div>
                                    </div>
                                </div>
                            </div>
                            <!-- ver 1 colum -->
                            <div class="col1" id="col-1-1">
                                <div class="text-inner-col1">ความเสียหายต่อตนเอง:
                                    <div class="b-text">50.0%</div>
                                </div>
                                <div class="text-inner-col1">ความเสียหาย/รักษา:
                                    <div class="b-text">110.0 / 160.0 / 210.0 / 260.0</div>
                                </div>
                                <div class="text-inner-col1">ระยะร่าย:
                                    <div class="b-text">575</div>
                                </div>
                            </div>
                            <!-- ver delay skill -->
                            <div style="width: 100%; margin-top: 12px; display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-between;">
                                <div style="display: flex; flex-direction: row; align-items: center;" id="cooldown">
                                    <div style="width: 16px; height: 16px; border-radius: 3px; background-size: cover; background-repeat: no-repeat; background-image: url('./src/hero/cooldown.png');"></div>
                                    <div style="margin-left: 8px; color: #fff;">5.5</div>
                                </div>
                                <div style="display: flex; flex-direction: row; align-items: center;" id="mana-cost">
                                    <div style="width: 16px; height: 16px; border-radius: 3px; background: linear-gradient(#00A4DB, #007196);"></div>
                                    <div style="margin-left: 8px; color: #fff;">50</div>
                                </div>
                            </div>
                            <!-- var more story detail -->
                            <div style="width: 100%; background-color: #111; margin-top: 20px; margin-bottom: 10px; padding: 10px; font-style: italic; font-size: 14px; color: #aaa;" id="description-skills">
                                ไอระเหยอันน่าพิศวงจากบ่อน้ำพุแห่ง Font of Avernus ได้หลอมรวมเป็นลมหายใจของ Abaddon ผู้ที่ปลดปล่อยมันได้ตามใจหวัง
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PART BAR -->
        <div class="bar">
            <!-- change link back hero here -->
            <div class="bar-side" href="arc_warden.php" style="background-image: url('./src/hero/bar.png');">
                <a href="arc_warden.php">
                    <img class="bar-hero" style="left: 0px;" src="./src/hero/abaddon/back.png">
                    <div style="width: 250px; min-height: 0; display: flex; flex-direction: column; z-index: 6;">
                        <div style="font-size: 15px; color: #9f9f9f; text-transform: uppercase; letter-spacing: 2px; text-shadow: 1px 1px 4px #000; margin-bottom: 5px;">ฮีโร่ก่อนหน้า</div>
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
            <!-- change link here -->
            <div class="bar-center" href="hero.php">
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
            <div href="alchemist.php" class="bar-side" style="background-image: url('./src/hero/bar.png'); justify-content: flex-start;">
                <a href="alchemist.php">
                    <img class="bar-hero" style="right: 0px;" src="./src/hero/abaddon/next.png">
                    <div style="width: 250px; min-height: 0; display: flex; flex-direction: column; z-index: 6;">
                        <div style="font-size: 15px; color: #9f9f9f; text-transform: uppercase; letter-spacing: 2px; text-shadow: 1px 1px 4px #000; margin-bottom: 5px;">ฮีโร่ถัดไป</div>
                        <!-- change white font here -->
                        <div style="font-size: 28px; color: #fff; text-transform: uppercase; letter-spacing: 1px; font-weight: bold; line-height: 112%; text-shadow: 1px 1px 4px #000;">
                            ALCHEMIST</div>
                        <div style="width: 100%; display: flex; flex-direction: row; align-items: center;">
                            <!-- change pic type hero here -->
                            <img src="./src/hero/icon_str_colorful.png" style="width: 20px; height: 20px; margin-right: 10px; filter: drop-shadow(1px 1px 4px black);">
                            <!-- change white font here -->
                            <div style="color: #ddd; font-size: 15px; text-transform: uppercase; letter-spacing: 2px; text-shadow: 1px 1px 4px #000;">
                                ระยะประชิด</div>
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
                "video-type-mp4": "./src/hero/abaddon/skill/video_skill1.mp4",
                "have-shard-or-agh": [0, ""],
                "image-skills": "./src/hero/abaddon/skill/skill1.png",
                "title-skills": 'MIST COIL',
                "description-title-skills": 'Abaddon ปลดปล่อยกลุ่มหมอกแห่งความตาย ซึ่งสร้างความเสียหายแก่ยูนิตศัตรูหรือรักษายูนิตฝ่ายเดียวกัน แลกกับพลังชีวิตบางส่วนของ Abaddon',
                "col-2-1": [

                    ["สกิล:", "ยูนิตเป้าหมาย"],
                    ["ส่งผลต่อ:", "ฮีโร่"],
                    ["ประเภทความเสียหาย", "<span style='color: rgb(163, 220, 238);'>เวทมนตร์</span>"]
                ],
                "col-2-2": [
                    ["ทะลุการป้องกันเวทโดยสมบูรณ์:", "เพื่อนร่วมทีม: ใช่ ศัตรู: ไม่"],
                ],
                "col-1-1": [
                    ["สกิล:", "ยูนิตเป้าหมาย"],
                    ["ส่งผลต่อ:", "ฮีโร่"]
                ],
                "cooldown": "5.5",
                "mana-cost": "50",
                "description-skills": "ไอระเหยอันน่าพิศวงจากบ่อน้ำพุแห่ง Font of Avernus ได้หลอมรวมเป็นลมหายใจของ Abaddon ผู้ที่ปลดปล่อยมันได้ตามใจหวัง"
            },
            [1]: {
                "video-type-mp4": "./src/hero/abaddon/skill/video_skill2.mp4",
                "have-shard-or-agh": [0, ""],
                "image-skills": "./src/hero/abaddon/skill/skill2.png",
                "title-skills": "APHOTIC SHIELD",
                "description-title-skills": "อัญเชิญพลังแห่งความมืดมาวนเวียนอยู่รอบยูนิตเพื่อนร่วมทีม สร้างโล่ป้องกันที่ดูดซับความเสียหายจำนวนหนึ่ง โล่จะระเบิดและสร้างความเสียหายบริเวณโดยรอบเมื่อถูกทำลาย เท่ากับความเสียหายที่มันสามารถดูดซับเอาไว้ได้ ชำระล้างบัฟด้านลบและอาการสตันบางชนิดให้กับยูนิตที่ถูกร่ายใส่ <br> <br>ชนิดการลบล้าง: การลบล้างขั้นสูง",
                "col-2-1": [
                    ["สกิล:", "ยูนิตเป้าหมาย"],
                    ["ส่งผลต่อ:", "ฮีโร่"],
                    ["ประเภทความเสียหาย", "<span style='color: rgb(163, 220, 238);'>เวทมนตร์</span>"]
                ],
                "col-2-2": [
                    ["ทะลุการป้องกันเวทโดยสมบูรณ์:", "ไม่ได้"],
                    ["ลบล้าง:", "ได้"]
                ],
                "col-1-1": [
                    ["ระยะเวลา:", "15.0"],
                    ["ความเสียหายมากสุดที่สามารถดูดซับได้", "110.0 / 140.0 / 170.0 / 200.0"],
                    ["รัศมีการระเบิด: ", "675"]
                ],
                "cooldown": "12.0 / 10.0 / 8.0 / 6.0 ",
                "mana-cost": "100 / 110 / 120 / 130 ",
                "description-skills": "พลังแห่งหมอกทมิฬ ปรากฎขึ้นเพื่อดูดซับการโจมตี ดั่งเช่นหมอกสีดำที่ดูดกลืนแสงได้"
            },
            [2]: {
                "video-type-mp4": "./src/hero/abaddon/skill/video_skill3.mp4",
                "have-shard-or-agh": [0, ""],
                "image-skills": "./src/hero/abaddon/skill/skill3.png",
                "title-skills": "CURSE OF AVERNUS",
                "description-title-skills": "Abaddon จู่โจมศัตรู ลดความเร็วในการเคลื่อนที่ของเป้าหมาย หากเป้าหมายถูกโจมตีครบ 4 ครั้ง จะทำให้เป้าหมายติดคำสาปเย็นยะเยือก ส่งผลให้ถูกใบ้และเคลื่อนที่ช้าลง และการโจมตีต่อเป้าหมายทั้งหมดนั้นได้รับความเร็วในการโจมตีเพิ่มขึ้น",
                "col-2-1": [
                    ["สกิล:", "ติดตัว"],
                ],
                "col-2-2": [
                    ["ทะลุการป้องกันเวทโดยสมบูรณ์:", "ไม่ได้"],
                    ["ลบล้าง:", "ได้"]
                ],
                "col-1-1": [
                    ["ระยะเวลาพื้นฐาน:", "5.0"],
                    ["ช้าลงพื้นฐาน:", "10% / 15% / 20% / 25%"],
                    ["ระยะเวลา CURSE:", "4.5"],
                    ["ช้าลงจาก CURSE:", "15% / 30% / 45% / 60%"],
                    ["ความเร็วในการโจมตี CURSE:", "40 / 60 / 80 / 100"]
                ],
                "cooldown": "",
                "mana-cost": "",
                "description-skills": "แม้ผู้ถูกล้างบาปจะดึงพลังความแข็งแกร่งมาจากบ่อไอน้ำศักดิ์สิทธิ์ พรแห่ง Avernus นั้นสามารถทำให้ผู้ไร้ประสบการณ์ต้องทรุดโทรม"
            },
            [3]: {
                "video-type-mp4": "./src/hero/abaddon/skill/video_skill4.mp4",
                "have-shard-or-agh": [0, ""],
                "image-skills": "./src/hero/abaddon/skill/skill4.png",
                "title-skills": "BORROWED TIME",
                "description-title-skills": "เมื่อเปิดใช้งาน ความเสียหายที่คุณได้รับทั้งหมดจะกลายเป็น การฟื้นฟูพลังชีวิตแทนที่จะทำอันตราย บัฟด้านลบเกือบทั้งหมด จะถูกขจัดออก สกิลนี้จะเปิดใช้งานโดยอัตโนมัติ หากไม่ได้อยู่ใน ระหว่างคูลดาวน์และพลังชีวิตของคุณลดลงเหลือต่ำกว่า 400 หน่วย  <br><br> ชนิดการลบล้าง: การลบล้างขั้นสูง",
                "col-2-1": [
                    ["สกิล:", "ไม่มีเป้าหมาย"],
                ],
                "col-2-2": [
                    ["ลบล้าง", "ไม่ได้"],
                ],
                "col-1-1": [
                    ["พลังชีวิตที่จะเปิดใช้งาน:", "400"],
                    ["ระยะเวลา:", "4.0 / 5.0 / 6.0"],
                    ["ระยะเวลาโดย SCEPTER:", "7.0 / 8.0 / 9.0"],
                    ["ความเสียหายขั้นต่ำโดย SCEPTER:", "525"],
                    ["ระยะทางโดย SCEPTER:", "1600"]
                ],
                "cooldown": "60.0 / 50.0 / 40.0 ",
                "mana-cost": "0 / 0 / 0 ",
                "description-skills": "ที่สุดของความสามารถเหนือธรรมชาติของ Avernus พลังนี้ทำลายความเข้าใจของทุกชีวิต สิ่งที่ควรจะเจ็บกลับถูกรักษา และสิ่งที่ควรจะฆ่ากลับมอบพลังให้"
            },
            [4]: {
                "video-type-mp4": "./src/hero/abaddon/skill/video_skill5.mp4",
                "have-shard-or-agh": [1, "SHARD"],
                "image-skills": "./src/hero/abaddon/skill/skill5.png",
                "title-skills": "CURSE OF AVERNUS",
                "description-title-skills": "ทำให้ Mist Coil และ Aphotic Shield ส่งผลทับซ้อน Curse of Avernus ต่อศัตรู เพิ่มการลดความเร็วพื้นฐาน 10% ลดคูลดาวน์ Mist Coil และ Aphotic Shield 1 วินาที",
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
                "cooldown": "",
                "mana-cost": "",
                "description-skills": ""
            },
            [5]: {
                "video-type-mp4": "./src/hero/abaddon/skill/video_skill6.mp4",
                "have-shard-or-agh": [1, "SCEPTER"],
                "image-skills": "./src/hero/abaddon/skill/skill6.png",
                "title-skills": "BORROWED TIME",
                "description-title-skills": "เพิ่มระยะเวลา ขณะที่ Borrowed Time ถูกใช้งานอยู่ เมื่อใดก็ตามเมื่อเพื่อนร่วมทีมได้รับความเสียหายมากกว่า 525 หน่วย ในขณะที่อยู่ในระยะ 1600 หน่วยของ Abaddon กระสุน Mist Coil หนึ่งลูกจะถูกยิงไปยังเพื่อนร่วมทีมคนนั้นโดยอัตโนมัติ",
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
                "cooldown": "60.0 / 50.0 / 40.0 ",
                "mana-cost": "0 / 0 / 0",
                "description-skills": "ที่สุดของความสามารถเหนือธรรมชาติของ Avernus พลังนี้ทำลายความเข้าใจของทุกชีวิต สิ่งที่ควรจะเจ็บกลับถูกรักษา และสิ่งที่ควรจะฆ่ากลับมอบพลังให้"
            },

            
        }
        var skills = {
            [0]: {
                "img": "./src/hero/abaddon/skill/skill1.png",
                "mp4": "./src/hero/abaddon/skill/video_skill1.mp4",
                "name": "Mist Coil",
                "desc": "Abaddon ปลดปล่อยกลุ่มหมอกแห่งความตาย ซึ่งสร้างความเสียหายแก่ยูนิตศัตรูหรือรักษายูนิตฝ่ายเดียวกัน แลกกับพลังชีวิตบางส่วนของ Abaddon"
            },
            [1]: {
                "img": "./src/hero/abaddon/skill/skill2.png",
                "mp4": "./src/hero/abaddon/skill/video_skill2.mp4",
                "name": "Aphotic Shield",
                "desc": "อัญเชิญพลังแห่งความมืดมาวนเวียนอยู่รอบยูนิตเพื่อนร่วมทีม สร้างโล่ป้องกันที่ดูดซับความเสียหายจำนวนหนึ่ง โล่จะระเบิดและสร้างความเสียหายบริเวณโดยรอบเมื่อถูกทำลาย เท่ากับความเสียหายที่มันสามารถดูดซับเอาไว้ได้ ชำระล้างบัฟด้านลบและอาการสตันบางชนิดให้กับยูนิตที่ถูกร่ายใส่ ชนิดการลบล้าง: การลบล้างขั้นสูง"
            },
            [2]: {
                "img": "./src/hero/abaddon/skill/skill3.png",
                "mp4": "./src/hero/abaddon/skill/video_skill3.mp4",
                "name": "Curse of Avernus",
                "desc": "Abaddon จู่โจมศัตรู ลดความเร็วในการเคลื่อนที่ของเป้าหมาย หากเป้าหมายถูกโจมตีครบ 4 ครั้ง จะทำให้เป้าหมายติดคำสาปเย็นยะเยือก ส่งผลให้ถูกใบ้และเคลื่อนที่ช้าลง และการโจมตีต่อเป้าหมายทั้งหมดนั้นได้รับความเร็วในการโจมตีเพิ่มขึ้น"
            },
            [3]: {
                "img": "./src/hero/abaddon/skill/skill4.png",
                "mp4": "./src/hero/abaddon/skill/video_skill4.mp4",
                "name": "Borrowed Time",
                "desc": "เมื่อเปิดใช้งาน ความเสียหายที่คุณได้รับทั้งหมดจะกลายเป็น การฟื้นฟูพลังชีวิตแทนที่จะทำอันตราย บัฟด้านลบเกือบทั้งหมด จะถูกขจัดออก สกิลนี้จะเปิดใช้งานโดยอัตโนมัติ หากไม่ได้อยู่ใน ระหว่างคูลดาวน์และพลังชีวิตของคุณลดลงเหลือต่ำกว่า 400 หน่วย ชนิดการลบล้าง: การลบล้างขั้นสูง"
            }
        }

        var status_hero = {
            "./src/hero/abaddon.png": [
                ["640", "3.2", "HP"],
                ["291", "0.9", "MANA"]
            ]
        }

        var status_icon_json = {
            "./src/hero/icon_str_colorful.png": ["22", "2.8"],
            "./src/hero/icon_agi_colorful.png": ["23", "1.5"],
            "./src/hero/icon_int_colorful.png": ["18", "2.0"]
        }

        var status_json = {
            "ตัวแครี่": "33.3",
            "ตัวซัพพอร์ต": "66.6",
            "ตัวนูค": "0",
            "ตัวหยุด": "0",
            "ตัวป่า": "0",
            "ตัวยืน": "66.6",
            "ตัวหนี": "0",
            "ตัวดัน": "0",
            "ตัวเปิด": "0"
        }

        var status_json_right = {
            "การโจมตี": [
                ["./src/hero/icon_damage.png", "50-60"],
                ["./src/hero/icon_attack_time.png", "1.7"],
                ["./src/hero/icon_attack_range.png", "150"],
                ["./src/hero/icon_projectile_speed.png", "900"]
            ],
            "การป้องกัน": [
                ["./src/hero/icon_armor.png", "28"],
                ["./src/hero/icon_magic_resist.png", "25%"]
            ],
            "การเคลื่อนที่": [
                ["./src/hero/icon_movement_speed.png", "325"],
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