<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './link/all_link.php' ?>
</head>

<body>
    <?php
    $nav_hero_active = 1;
    $nav_news_active = 0;
    include './components/nav.php';

    ?>

    <div style="background-image: url('./src/hero/bg_main.jpg');width: 100vw;
    box-sizing: border-box; padding: 0px 100px 0px 100px; background-size: 100% auto; background-repeat: no-repeat; background-position: center top; background-attachment: fixed; position: relative; min-height: 0; display: flex; flex-direction: column; align-items: center;">
        <div style="width: 100%; z-index: 2; margin-top: 50px; position: relative;" data-aos="fade-in" data-aos-duration="1000">
            <div class="herogridpage_Trapezoid_3Rwf-"></div>
            <div style="color: #fff; font-size: 3vw; font-family: Reaver,serif; font-weight: bold; text-align: center;  margin-top: 100px ; margin-bottom: 10px ; text-transform: uppercase; letter-spacing: 3px; line-height: 112%;">เลือกฮีโร่ของคุณ</div>
            <div style="width: 100%; max-width: 1000px; margin: 0px auto; color: #ddd; font-size: 26px; text-align: center; font-weight: 100; margin-bottom: 30px;">ไม่ว่าจะเป็นนักเวทจอมอุบายไปจนถึงอสูรดุร้ายและอันธพาลเจ้าเล่ห์ กลุ่มฮีโร่ของ Dota 2 นั้นมีขนาดใหญ่โตมโหฬารและหลากหลายไร้ขีดจำกัด ปลดปล่อยความสามารถน่าทึ่งและสกิลอัลติเมททำลายล้างเพื่อไปสู่ชัยชนะ</div>
        </div>
        <div style="width: 100%; max-width: 1200px; padding: 10px; border-radius: 5px; display: flex; flex-direction: row; justify-content: space-between; align-items: center; border: 1px solid #11111190; box-shadow: 0px 0px 30px #00000050; margin-top: 20px; background: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3));">
            <div style="color: #fff; width: 180px; font-size: 18px; text-transform: uppercase; letter-spacing: 2px; margin-right: 10px; margin-left: 10px;">กรองฮีโร่</div>
            <div style="    width: 250px; display: flex; flex-direction: row; align-items: center; margin-left: 20px;">
                <div style="    color: #808fa6; font-size: 17px; text-transform: uppercase; letter-spacing: 2px; margin-right: 20px;">สาย</div>
                <div class="square" style="background-image: url('./src/hero/icon_str.png');"></div>
                <div class="square" style="background-image: url('./src/hero/icon_agi.png');"></div>
                <div class="square" style="background-image: url('./src/hero/icon_int.png');"></div>
            </div>
            <div style="    width: 250px; display: flex; flex-direction: row; align-items: center; margin-left: 20px;">
                <div style="    color: #808fa6; font-size: 17px; text-transform: uppercase; letter-spacing: 2px; margin-right: 20px;">ความยาก</div>
                <div class="square" style="background-image: url('./src/hero/diamond.png')"></div>
                <div class="square" style="background-image: url('./src/hero/diamond.png')"></div>
                <div class="square" style="background-image: url('./src/hero/diamond.png')"></div>
            </div>
            <div style="    width: 250px; display: flex; flex-direction: row; justify-content: right;">
                <div style="    width: 250px; height: 50px; background-color: #25282a; display: flex; flex-direction: row; align-items: center;">
                    <div style="background-image: url('./src/hero/icon_search.svg');     width: 26px; height: 26px; min-width: 26px; min-height: 26px; margin-right: 10px; margin-left: 10px; background-size: cover; background-repeat: no-repeat;"></div>
                    <form><input type="text" value="" class="hero-input"></form>
                </div>
            </div>
        </div>
        <div style="    width: 100%; max-width: 1200px; min-height: 1500px; margin-top: 15px; transition-property: height; transition-timing-function: ease-out; transition-duration: .2s; animation-duration: 1s; animation-timing-function: ease-out; animation-delay: .1s; animation-iteration-count: 1; animation-name: herogridpage_gridIn_NeQOP; position: relative; height: 3590px;">
            <a class="icon-hero" href="abaddon.php" style="background-image: url('./src/hero/abaddon.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(0px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Abaddon</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a>
            <a class="icon-hero" href="alchemist.php" style="background-image: url('./src/hero/alchemist.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(0px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Alchemist</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="ancient_apparition.php" style="background-image: url('./src/hero/ancient_apparition.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(0px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Ancient Apparition</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="anti_mage.php" style="background-image: url('./src/hero/antimage.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(0px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Anti-Mage</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="arc_warden.php" style="background-image: url('./src/hero/arc_warden.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(0px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Arc Warden</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/axe.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(142px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Axe</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/bane.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(142px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Bane</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/batrider.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(142px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Batrider</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/beastmaster.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(142px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Beastmaster</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/bloodseeker.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(142px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Bloodseeker</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/bounty_hunter.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(284px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Bounty Hunter</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/brewmaster.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(284px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Brewmaster</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/bristleback.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(284px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Bristleback</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/broodmother.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(284px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Broodmother</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/centaur.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(284px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Centaur Warrunner</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/chaos_knight.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(426px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Chaos Knight</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/chen.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(426px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Chen</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/clinkz.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(426px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Clinkz</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/rattletrap.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(426px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Clockwerk</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/crystal_maiden.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(426px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Crystal Maiden</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/dark_seer.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(568px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Dark Seer</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/dark_willow.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(568px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Dark Willow</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/dawnbreaker.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(568px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Dawnbreaker</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/dazzle.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(568px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Dazzle</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/death_prophet.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(568px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Death Prophet</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/disruptor.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(710px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Disruptor</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/doom_bringer.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(710px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Doom</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/dragon_knight.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(710px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Dragon Knight</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/drow_ranger.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(710px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Drow Ranger</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/earth_spirit.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(710px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Earth Spirit</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/earthshaker.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(852px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Earthshaker</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/elder_titan.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(852px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Elder Titan</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/ember_spirit.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(852px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Ember Spirit</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/enchantress.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(852px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Enchantress</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/enigma.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(852px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Enigma</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/faceless_void.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(994px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Faceless Void</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/grimstroke.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(994px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Grimstroke</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/gyrocopter.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(994px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Gyrocopter</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/hoodwink.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(994px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Hoodwink</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/huskar.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(994px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Huskar</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/invoker.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(1136px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Invoker</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/wisp.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(1136px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Io</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/jakiro.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(1136px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Jakiro</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/juggernaut.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(1136px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Juggernaut</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/keeper_of_the_light.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(1136px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Keeper of the Light</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/kunkka.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(1278px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Kunkka</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/legion_commander.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(1278px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Legion Commander</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/leshrac.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(1278px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Leshrac</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/lich.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(1278px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Lich</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/life_stealer.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(1278px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Lifestealer</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/lina.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(1420px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Lina</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/lion.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(1420px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Lion</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/lone_druid.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(1420px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Lone Druid</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/luna.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(1420px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Luna</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/lycan.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(1420px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Lycan</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/mars.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(1562px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">MARS</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/magnataur.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(1562px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Magnus</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/marci.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(1562px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Marci</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/medusa.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(1562px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Medusa</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/meepo.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(1562px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Meepo</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/mirana.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(1704px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Mirana</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/monkey_king.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(1704px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Monkey King</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/morphling.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(1704px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Morphling</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/naga_siren.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(1704px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Naga Siren</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#'sprophet" style="background-image: url('./src/hero/furion.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(1704px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Nature's Prophet</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/necrolyte.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(1846px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Necrophos</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/night_stalker.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(1846px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Night Stalker</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/nyx_assassin.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(1846px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Nyx Assassin</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/ogre_magi.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(1846px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Ogre Magi</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/omniknight.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(1846px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Omniknight</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/oracle.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(1988px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Oracle</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/obsidian_destroyer.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(1988px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Outworld Destroyer</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/pangolier.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(1988px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Pangolier</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/phantom_assassin.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(1988px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Phantom Assassin</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/phantom_lancer.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(1988px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Phantom Lancer</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/phoenix.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(2130px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Phoenix</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/puck.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(2130px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Puck</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/pudge.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(2130px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Pudge</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/pugna.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(2130px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Pugna</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/queenofpain.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(2130px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Queen of Pain</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/razor.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(2272px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Razor</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/riki.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(2272px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Riki</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/rubick.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(2272px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Rubick</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/sand_king.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(2272px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Sand King</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/shadow_demon.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(2272px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Shadow Demon</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/nevermore.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(2414px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Shadow Fiend</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/shadow_shaman.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(2414px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Shadow Shaman</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/silencer.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(2414px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Silencer</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/skywrath_mage.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(2414px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Skywrath Mage</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/slardar.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(2414px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Slardar</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/slark.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(2556px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Slark</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/snapfire.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(2556px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Snapfire</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/sniper.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(2556px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Sniper</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/spectre.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(2556px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Spectre</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/spirit_breaker.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(2556px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Spirit Breaker</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/storm_spirit.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(2698px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Storm Spirit</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/sven.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(2698px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Sven</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/techies.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(2698px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Techies</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/templar_assassin.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(2698px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Templar Assassin</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/terrorblade.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(2698px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Terrorblade</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/tidehunter.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(2840px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Tidehunter</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/shredder.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(2840px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Timbersaw</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/tinker.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(2840px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Tinker</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/tiny.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(2840px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Tiny</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/treant.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(2840px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Treant Protector</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/troll_warlord.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(2982px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Troll Warlord</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/tusk.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(2982px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Tusk</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/abyssal_underlord.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(2982px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Underlord</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/undying.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(2982px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Undying</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/ursa.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(2982px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Ursa</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/vengefulspirit.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(3124px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Vengeful Spirit</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/venomancer.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(3124px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Venomancer</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/viper.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(3124px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Viper</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/visage.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(3124px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Visage</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/void_spirit.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(3124px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Void Spirit</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/warlock.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(3266px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Warlock</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/weaver.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(3266px);">
                <div class="icon-type"><img src="./src/hero/icon_agi_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Weaver</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/windrunner.png'); left: calc(0px + (2 * (100% - 225px)) / 4); top: calc(3266px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Windranger</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/winter_wyvern.png'); left: calc(0px + (3 * (100% - 225px)) / 4); top: calc(3266px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Winter Wyvern</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/witch_doctor.png'); left: calc(0px + (4 * (100% - 225px)) / 4); top: calc(3266px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Witch Doctor</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/skeleton_king.png'); left: calc(0px + (0 * (100% - 225px)) / 4); top: calc(3408px);">
                <div class="icon-type"><img src="./src/hero/icon_str_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Wraith King</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
                    </div>
                </div>
            </a><a class="icon-hero" href="#" style="background-image: url('./src/hero/zuus.png'); left: calc(0px + (1 * (100% - 225px)) / 4); top: calc(3408px);">
                <div class="icon-type"><img src="./src/hero/icon_int_colorful.png" class="herogridpage_PrimaryStatIcon_12etd">
                    <div class="hero-name">Zeus</div>
                </div>
                <div class="fade-bottom-hero">
                    <div style="left: 0px; bottom: 0px; right: 0px; width: 100%; height: 100%; position: absolute; pointer-events: none;">
                        <div style="background: linear-gradient(rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.733) 75%, rgb(0, 0, 0) 100%); position: absolute; width: 100%; height: 100%;"></div>
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