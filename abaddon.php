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
            <a class="small-arrow" href="#" style="background-image: url(&quot;https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/arrow_solid_left.png&quot;);"></a>
            <a class="small-center" href="#">
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
                <div class="small-grid"></div>
            </a>
            <a class="small-arrow" href="#" style="transform: scaleX(-1); background-image: url(&quot;https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/arrow_solid_left.png&quot;);"></a>
    </div>
        <div style="width: 100%; height: 400px; position: absolute; bottom: 0; background: linear-gradient(rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.6) 90%, black 100%); z-index: 1;"></div>
        <div class="top-hero"
        style="display:flex; justify-content: center; position:absolute; width: 80%; height:100%; top: 0px; right: -5%;">
            <video muted autoplay preload="auto" loop="" playsinline="" data-video="0"
            style="min-height:100%; transform:translate(0px, 16pc) scale(1.93, 1.93);">
            
            <!-- change vdo hero here -->
            <source type="video/mp4" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/heroes/renders/abaddon.webm">
            
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
                    <img style="width: 24px; height: 24px; margin-right: 8px;"
                    src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/melee.svg">
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
            <img style="width: 22px;height: 22px;"
            src="./src/icon/strength.png">
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
            <div style="display: flex; flex-direction: row; justify-content: center;">
                <div class="skill" style="transition-property: transform; transition-timing-function: ease-in-out; transition-duration: .1s;">
                    <!-- change pic skill here  -->
                    <img style="width: 80px; height: 80px; margin: 0px 6px; cursor: pointer; box-shadow: 0px 0px 20px #000, 0px 0px 20px #000; position: relative;" 
                    src="./src/hero/abaddon/skill/skill1.png">
                    <div class="skill-box-hov">
                        <div class="skill-inside">
                            <div style="width: 300px; height: 169px;">
                            <!-- change pic and vdo skill here  -->
                                <video muted style="width: 100%; height: 100%;" autoplay="" preload="auto" loop="" playsinline=""
                                poster="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/abaddon/abaddon_death_coil.jpg">
                                    <source type="video/webm" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/abaddon/abaddon_death_coil.webm">
                                    <source type="video/mp4" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/abaddon/abaddon_death_coil.mp4">
                                </video>
                            </div>
                            <!-- change white font text skill here  -->
                            <div style="height:auto; width: 300px; background: linear-gradient(150deg, #68727C, #14171A); padding: 10px 15px; padding-bottom: 35px;">
                                <div style="color: #fff; font-size: 18px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">
                                    Mist Coil 
                                </div>
                                <div style="color: #ddd; margin-top: 3px; font-size: 15px; margin-right: 15px; letter-spacing: 0px;">
                                    Abaddon ปลดปล่อยกลุ่มหมอกแห่งความตาย ซึ่งสร้างความเสียหายแก่ยูนิตศัตรูหรือรักษายูนิตฝ่ายเดียวกัน แลกกับพลังชีวิตบางส่วนของ Abaddon
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skill" style="transition-property: transform; transition-timing-function: ease-in-out; transition-duration: .1s;">
                    <!-- change pic skill here  -->
                    <img style="width: 80px; height: 80px; margin: 0px 6px; cursor: pointer; box-shadow: 0px 0px 20px #000, 0px 0px 20px #000; position: relative;" 
                    src="./src/hero/abaddon/skill/skill1.png">
                    <div class="skill-box-hov">
                        <div class="skill-inside">
                            <div style="width: 300px; height: 169px;">
                            <!-- change pic and vdo skill here  -->
                                <video muted style="width: 100%; height: 100%;" autoplay="" preload="auto" loop="" playsinline=""
                                poster="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/abaddon/abaddon_death_coil.jpg">
                                    <source type="video/webm" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/abaddon/abaddon_death_coil.webm">
                                    <source type="video/mp4" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/abaddon/abaddon_death_coil.mp4">
                                </video>
                            </div>
                            <!-- change white font text skill here  -->
                            <div style="height:auto; width: 300px; background: linear-gradient(150deg, #68727C, #14171A); padding: 10px 15px; padding-bottom: 35px;">
                                <div style="color: #fff; font-size: 18px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">
                                    Mist Coil 
                                </div>
                                <div style="color: #ddd; margin-top: 3px; font-size: 15px; margin-right: 15px; letter-spacing: 0px;">
                                    Abaddon ปลดปล่อยกลุ่มหมอกแห่งความตาย ซึ่งสร้างความเสียหายแก่ยูนิตศัตรูหรือรักษายูนิตฝ่ายเดียวกัน แลกกับพลังชีวิตบางส่วนของ Abaddon
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skill" style="transition-property: transform; transition-timing-function: ease-in-out; transition-duration: .1s;">
                    <!-- change pic skill here  -->
                    <img style="width: 80px; height: 80px; margin: 0px 6px; cursor: pointer; box-shadow: 0px 0px 20px #000, 0px 0px 20px #000; position: relative;" 
                    src="./src/hero/abaddon/skill/skill1.png">
                    <div class="skill-box-hov">
                        <div class="skill-inside">
                            <div style="width: 300px; height: 169px;">
                            <!-- change pic and vdo skill here  -->
                                <video muted style="width: 100%; height: 100%;" autoplay="" preload="auto" loop="" playsinline=""
                                poster="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/abaddon/abaddon_death_coil.jpg">
                                    <source type="video/webm" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/abaddon/abaddon_death_coil.webm">
                                    <source type="video/mp4" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/abaddon/abaddon_death_coil.mp4">
                                </video>
                            </div>
                            <!-- change white font text skill here  -->
                            <div style="height:auto; width: 300px; background: linear-gradient(150deg, #68727C, #14171A); padding: 10px 15px; padding-bottom: 35px;">
                                <div style="color: #fff; font-size: 18px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">
                                    Mist Coil 
                                </div>
                                <div style="color: #ddd; margin-top: 3px; font-size: 15px; margin-right: 15px; letter-spacing: 0px;">
                                    Abaddon ปลดปล่อยกลุ่มหมอกแห่งความตาย ซึ่งสร้างความเสียหายแก่ยูนิตศัตรูหรือรักษายูนิตฝ่ายเดียวกัน แลกกับพลังชีวิตบางส่วนของ Abaddon
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skill" style="transition-property: transform; transition-timing-function: ease-in-out; transition-duration: .1s;">
                    <!-- change pic skill here  -->
                    <img style="width: 80px; height: 80px; margin: 0px 6px; cursor: pointer; box-shadow: 0px 0px 20px #000, 0px 0px 20px #000; position: relative;" 
                    src="./src/hero/abaddon/skill/skill1.png">
                    <div class="skill-box-hov">
                        <div class="skill-inside">
                            <div style="width: 300px; height: 169px;">
                            <!-- change pic and vdo skill here  -->
                                <video muted style="width: 100%; height: 100%;" autoplay="" preload="auto" loop="" playsinline=""
                                poster="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/abaddon/abaddon_death_coil.jpg">
                                    <source type="video/webm" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/abaddon/abaddon_death_coil.webm">
                                    <source type="video/mp4" src="https://cdn.cloudflare.steamstatic.com/apps/dota2/videos/dota_react/abilities/abaddon/abaddon_death_coil.mp4">
                                </video>
                            </div>
                            <!-- change white font text skill here  -->
                            <div style="height:auto; width: 300px; background: linear-gradient(150deg, #68727C, #14171A); padding: 10px 15px; padding-bottom: 35px;">
                                <div style="color: #fff; font-size: 18px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">
                                    Mist Coil 
                                </div>
                                <div style="color: #ddd; margin-top: 3px; font-size: 15px; margin-right: 15px; letter-spacing: 0px;">
                                    Abaddon ปลดปล่อยกลุ่มหมอกแห่งความตาย ซึ่งสร้างความเสียหายแก่ยูนิตศัตรูหรือรักษายูนิตฝ่ายเดียวกัน แลกกับพลังชีวิตบางส่วนของ Abaddon
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PART STAUS HERO BAR HERO -->
    <div class="status-bar">
        <div class="row-status-bar">
            <div class="box-status">
                <div class="detail-status">
                    <div class="hero-icon-status">
                        <!-- change pic hero here  -->
                        <img style="width: 150px; height: 84px;" src="./src/hero/abaddon/abaddon.png">
                        <div class="hero-bar" style="background: linear-gradient(to right, #286323, #7AF03C);">
                        <!-- change white font text here  -->
                            <div style="position: absolute; width: 100%; text-align: center; color: #fff; font-size: 15px; text-shadow: 1px 1px 2px #000; font-family: Radiance,sans-serif; font-weight: 800;">
                                640
                            </div>
                            <div style="color: #286323; flex-grow: 1; text-align: right; font-size: 11px; padding-right: 16px; font-weight: bold;">
                                +3.2
                            </div>
                        </div>
                        <div class="hero-bar" style="background: linear-gradient(to right, #1056DB, #73F5FE);">
                            <div style="position: absolute; width: 100%; text-align: center; color: #fff; font-size: 15px; text-shadow: 1px 1px 2px #000; font-family: Radiance,sans-serif; font-weight: 800;">
                                291
                            </div>
                            <div style="color: #286323; flex-grow: 1; text-align: right; font-size: 11px; padding-right: 16px; font-weight: bold;">
                                +0.9
                            </div>
                        </div>
                    </div>
                    <div class="status">
                        <div class="type-status">
                            <img style="width: 30px; height: 30px;"
                            src="./src/icon/strength.png">
                            <!-- change white font text here  -->
                            <div style="color: #fff; font-family: Reaver,serif; font-size: 20px; font-weight: 600; text-shadow: 1px 1px 2px #000; margin-left: 12px;">
                                22
                            </div>
                            <div style="color: #999; font-size: 15px; text-shadow: 1px 1px 2px #000; margin-left: 8px; flex-grow: 1; text-align: right;">
                                +2.8
                            </div>
                        </div>
                        <div class="type-status">
                            <img style="width: 30px; height: 30px;"
                            src="./src/icon/agility.png">
                            <!-- change white font text here  -->
                            <div style="color: #fff; font-family: Reaver,serif; font-size: 20px; font-weight: 600; text-shadow: 1px 1px 2px #000; margin-left: 12px;">
                                22
                            </div>
                            <div style="color: #999; font-size: 15px; text-shadow: 1px 1px 2px #000; margin-left: 8px; flex-grow: 1; text-align: right;">
                                +2.8
                            </div>
                        </div>
                        <div class="type-status">
                            <img style="width: 30px; height: 30px;"
                            src="./src/icon/intelligence.png">
                            <!-- change white font text here  -->
                            <div style="color: #fff; font-family: Reaver,serif; font-size: 20px; font-weight: 600; text-shadow: 1px 1px 2px #000; margin-left: 12px;">
                                22
                            </div>
                            <div style="color: #999; font-size: 15px; text-shadow: 1px 1px 2px #000; margin-left: 8px; flex-grow: 1; text-align: right;">
                                +2.8
                            </div>
                        </div>
                    </div>
                </div>
                <div class="head-status">
                    ค่าสถานะ
                </div>
            </div>
            <div style="width: 1px; height: 100%; display: flex; flex-direction: row; align-items: center; background-color: #4f4f4f;"></div>
            <div class="box-status">
                <div class="detail-status" style="flex-wrap: wrap; align-items: center;">
                    <div class="box-bar-position">
                        <!-- change white font text here  -->
                        <div style="width: 100%; font-size: 15px; font-weight: bold; letter-spacing: 1px; text-align: left; color: #fff;">
                            ตัวแครี่
                        </div>
                        <div class="bar-position">
                            <div style="width: 100%; height: 100%; background-color: #4c4c4c; position: absolute; left: 0; top: 0;"></div>
                            
                            <!-- change width here  -->
                            <div class="detail-bar" style="width: 33.3%;"></div>

                        </div>
                    </div>
                    <div class="box-bar-position">
                        <!-- change white font text here  -->
                        <div style="width: 100%; font-size: 15px; font-weight: bold; letter-spacing: 1px; text-align: left; color: #fff;">
                            ตัวแครี่
                        </div>
                        <div class="bar-position">
                            <div style="width: 100%; height: 100%; background-color: #4c4c4c; position: absolute; left: 0; top: 0;"></div>
                            
                            <!-- change width here  -->
                            <div class="detail-bar" style="width: 33.3%;"></div>
                        
                        </div>
                    </div>
                    <div class="box-bar-position">
                        <!-- change white font text here  -->
                        <div style="width: 100%; font-size: 15px; font-weight: bold; letter-spacing: 1px; text-align: left; color: #fff;">
                            ตัวแครี่
                        </div>
                        <div class="bar-position">
                            <div style="width: 100%; height: 100%; background-color: #4c4c4c; position: absolute; left: 0; top: 0;"></div>
                            
                            <!-- change width here  -->
                            <div class="detail-bar" style="width: 33.3%;"></div>
                        
                        </div>
                    </div>
                    <div class="box-bar-position">
                        <!-- change white font text here  -->
                        <div style="width: 100%; font-size: 15px; font-weight: bold; letter-spacing: 1px; text-align: left; color: #fff;">
                            ตัวแครี่
                        </div>
                        <div class="bar-position">
                            <div style="width: 100%; height: 100%; background-color: #4c4c4c; position: absolute; left: 0; top: 0;"></div>
                            
                            <!-- change width here  -->
                            <div class="detail-bar" style="width: 33.3%;"></div>
                        
                        </div>
                    </div>
                    <div class="box-bar-position">
                        <!-- change white font text here  -->
                        <div style="width: 100%; font-size: 15px; font-weight: bold; letter-spacing: 1px; text-align: left; color: #fff;">
                            ตัวแครี่
                        </div>
                        <div class="bar-position">
                            <div style="width: 100%; height: 100%; background-color: #4c4c4c; position: absolute; left: 0; top: 0;"></div>
                            
                            <!-- change width here  -->
                            <div class="detail-bar" style="width: 33.3%;"></div>
                        
                        </div>
                    </div>
                    <div class="box-bar-position">
                        <!-- change white font text here  -->
                        <div style="width: 100%; font-size: 15px; font-weight: bold; letter-spacing: 1px; text-align: left; color: #fff;">
                            ตัวแครี่
                        </div>
                        <div class="bar-position">
                            <div style="width: 100%; height: 100%; background-color: #4c4c4c; position: absolute; left: 0; top: 0;"></div>
                            
                            <!-- change width here  -->
                            <div class="detail-bar" style="width: 33.3%;"></div>
                        
                        </div>
                    </div>
                    <div class="box-bar-position">
                        <!-- change white font text here  -->
                        <div style="width: 100%; font-size: 15px; font-weight: bold; letter-spacing: 1px; text-align: left; color: #fff;">
                            ตัวแครี่
                        </div>
                        <div class="bar-position">
                            <div style="width: 100%; height: 100%; background-color: #4c4c4c; position: absolute; left: 0; top: 0;"></div>
                            
                            <!-- change width here  -->
                            <div class="detail-bar" style="width: 33.3%;"></div>
                        
                        </div>
                    </div>
                    <div class="box-bar-position">
                        <!-- change white font text here  -->
                        <div style="width: 100%; font-size: 15px; font-weight: bold; letter-spacing: 1px; text-align: left; color: #fff;">
                            ตัวแครี่
                        </div>
                        <div class="bar-position">
                            <div style="width: 100%; height: 100%; background-color: #4c4c4c; position: absolute; left: 0; top: 0;"></div>
                            
                            <!-- change width here  -->
                            <div class="detail-bar" style="width: 33.3%;"></div>
                        
                        </div>
                    </div>
                    <div class="box-bar-position">
                        <!-- change white font text here  -->
                        <div style="width: 100%; font-size: 15px; font-weight: bold; letter-spacing: 1px; text-align: left; color: #fff;">
                            ตัวแครี่
                        </div>
                        <div class="bar-position">
                            <div style="width: 100%; height: 100%; background-color: #4c4c4c; position: absolute; left: 0; top: 0;"></div>
                            
                            <!-- change width here  -->
                            <div class="detail-bar" style="width: 33.3%;"></div>
                        
                        </div>
                    </div>
                </div>
                <div class="head-status">
                    ตำแหน่ง
                </div>
            </div>
            <div style="width: 1px; height: 100%; display: flex; flex-direction: row; align-items: center; background-color: #4f4f4f;"></div>
            <div class="box-status">
                <div class="detail-status" style="flex-wrap: wrap; justify-content: space-between;">
                    <div style="width: 30%; height: 100%; min-height: 0; display: flex; flex-direction: column;">
                        <div style="margin-left: 8px; text-align: left; text-transform: uppercase; font-size: 16px; font-weight: bold; letter-spacing: 1px; color: #969696; margin-bottom: 4px;">
                        การโจมตี
                        </div>
                        <div class="var" style="color: #fff;">
                            <img style="width: 24px; height: 24px; margin-right: 8px;" src="./src/icon/icon_damage.png">
                            50-60
                        </div>
                        <div class="var" style="color: #fff;">
                            <img style="width: 24px; height: 24px; margin-right: 8px;" src="./src/icon/icon_damage.png">
                            50-60
                        </div>
                        <div class="var" style="color: #fff;">
                            <img style="width: 24px; height: 24px; margin-right: 8px;" src="./src/icon/icon_damage.png">
                            50-60
                        </div>
                        <div class="var" style="color: #fff;">
                            <img style="width: 24px; height: 24px; margin-right: 8px;" src="./src/icon/icon_damage.png">
                            50-60
                        </div>
                    </div>
                    <div style="width: 30%; height: 100%; min-height: 0; display: flex; flex-direction: column;">
                        <div style="margin-left: 8px; text-align: left; text-transform: uppercase; font-size: 16px; font-weight: bold; letter-spacing: 1px; color: #969696; margin-bottom: 4px;">
                        การป้องกัน
                        </div>
                        <div class="var" style="color: #fff;">
                            <img style="width: 24px; height: 24px; margin-right: 8px;" src="./src/icon/icon_damage.png">
                            50-60
                        </div>
                        <div class="var" style="color: #fff;">
                            <img style="width: 24px; height: 24px; margin-right: 8px;" src="./src/icon/icon_damage.png">
                            50-60
                        </div>
                    </div>
                    <div style="width: 30%; height: 100%; min-height: 0; display: flex; flex-direction: column;">
                        <div style="margin-left: 8px; text-align: left; text-transform: uppercase; font-size: 16px; font-weight: bold; letter-spacing: 1px; color: #969696; margin-bottom: 4px;">
                        การเคลื่อนที่
                        </div>
                        <div class="var" style="color: #fff;">
                            <img style="width: 24px; height: 24px; margin-right: 8px;" src="./src/icon/icon_damage.png">
                            50-60
                        </div>
                    </div>
                </div>
                <div class="head-status">
                    ค่าสถิติ
                </div>
            </div>
        </div>
    </div>

    <!-- PART BAR -->
    <div style="width: 100%; min-height: 0; display: flex; flex-direction: column; align-items: center; background-size: cover; background-repeat: no-repeat; background-image: url('./src/hero/bg.jpg');">
        <div class="bar">
            <div class="bar-center">
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