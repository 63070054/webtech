<nav>
    <div style="width: 100%; height: 100%; display: flex; flex-direction: row; align-items: center;">
        <a href="index.php" style="width: 200px; min-width: 200px;">
            <div style="width: 200px; min-width: 200px; height: 50px; min-height: 50px; background-image: url(https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/global/dota2_logo_horiz.png); background-size: contain; background-repeat: no-repeat; background-position: center center; margin-right: 40px;" class="eff-text-glow"></div>
        </a>
        <div style="margin-left: 50px;flex-grow: 1; height: 100%; display: flex; flex-direction: row; align-items: center; position: relative;">
            <div class="dropdown">
                <button class="dropbtn nav-text eff-text-glow">
                    เกม
                    <img src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/arrow_over.png">
                </button>

                <div class="dropdown-content" style="width: 100px;" id="game">
                    <a href="#" class="eff-text-glow">
                        ร้านค้า
                    </a>
                    <a href="patch.php" class="eff-text-glow">
                        แพตช์
                    </a>
                    <a href="#" class="eff-text-glow">
                        อัปเดตเกมเพลย์
                    </a>
                    <a href="#" class="eff-text-glow">
                        อัปเดตก่อนหน้า
                    </a>
                </div>
            </div>
            <a href="#" class="nav-text eff-text-glow <?php if ($nav_hero_active) {
                                                            echo "nav-text-active";
                                                        } ?>">ฮีโร่</a>
            <a href="news.php" class="nav-text eff-text-glow <?php if ($nav_news_active) {
                                                            echo "nav-text-active";
                                                        } ?>">ข่าวสาร</a>
            <a href="#" class="nav-text eff-text-glow">อีสปอร์ต</a>
        </div>
        <div style="display: flex; flex-direction: row; align-items: center;">
            <div style="min-height: 0; display: flex; flex-direction: column; align-items: flex-end;">
                <a href="#" class="nav-text eff-text-glow" style="font-size: 10px !important;">เข้าสู่ระบบ</a>
                <div class="dropdown" id="lang">
                    <button class="dropbtn nav-text eff-text-glow" style="font-size: 10px !important;">
                        <div style="width: 12px; height: 12px; margin-right: 8px; opacity: .8; margin-bottom: 1px; background-size: contain; background-repeat: no-repeat; background-image: url(https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//icons/language.svg);"></div>
                        เลือกภาษา
                        <img src="https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/arrow_over.png">
                    </button>
                    <div class="languageselector_LanguageList_1vJep">

                    </div>
                    <div class="dropdown-content" style="width: 250px;">
                        <!-- แบงค์ -->
                        <a href="#">อังกฤษ</a>
                        <a href="#">Español - España (สเปน)</a>
                        <a href="#">Français (ฝรั่งเศส)</a>
                        <a href="#">Italiano (อิตาลี)</a>
                        <a href="#">Deutsch (เยอรมัน)</a>
                        <a href="#">Ελληνικά (กรีก)</a>
                        <a href="#">한국어 (เกาหลี)</a>
                        <a href="#">简体中文 (จีนตัวย่อ)</a>
                        <a href="#">繁體中文 (จีนตัวเต็ม)</a>
                        <a href="#">Русский (รัสเซีย)</a>
                        <a href="#">ไทย (Thai)</a>
                        <a href="#">日本語 (ญี่ปุ่น)</a>
                        <a href="#">Português (โปรตุเกส)</a>
                        <a href="#">Português-Brasil (โปรตุเกส-บราซิล)</a>
                        <a href="#">Polski (โปแลนด์)</a>
                        <a href="#">Dansk (เดนมาร์ก)</a>
                        <a href="#">Nederlands (ดัตช์)</a>
                        <a href="#">Suomi (ฟินแลนด์)</a>
                        <a href="#">Norsk (นอร์เวย์)</a>
                        <a href="#">Svenska (สวีเดน)</a>
                        <a href="#">Čeština (เช็ก)</a>
                        <a href="#">Magyar (ฮังการี)</a>
                        <a href="#">Română (โรมาเนีย)</a>
                        <a href="#">Български (บัลแกเรีย)</a>
                        <a href="#">Türkçe (ตุรกี)</a>
                        <a href="#">Українська (ยูเครน)</a>
                        <a href="#">Tiếng Việt (เวียดนาม)</a>
                        <a href="#">Español - Latinoamérica (สเปน - ลาตินอเมริกา)</a>
                    </div>
                </div>
            </div>
            <a href="https://store.steampowered.com/app/570/Dota_2/" target="_blank">
                <div class="eff-border-orange eff-up" style="border: 3px solid #ffffff50; padding: 15px 25px; margin: 10px 30px; border-radius: 5px; cursor: pointer; width: fit-content; display: flex; flex-direction: row; justify-content: center; align-items: center; transition-duration: 0.2s;">
                    <div style="width: 20px; height: 20px; margin-right: 10px; background-size: contain; background-repeat: no-repeat; background-image: url(https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//icons/steam_icon.svg);"></div>
                    <div style="font-size: 20px;font-weight: 700;letter-spacing: 2px;text-transform: uppercase;color: #fff;">เล่นฟรี</div>
                </div>
            </a>
        </div>
    </div>
</nav>