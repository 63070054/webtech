<html lang="en">

<head>
    <?php include './link/all_link.php' ?>
</head>
<style>
    .one {
        width: 100%;
        min-height: 0;
        display: flex;
        flex-direction: column;
        padding: 0px 40px;
        margin-bottom: 20px;
    }

    .two {
        width: 100%;
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .three {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
    }

    .four {
        flex-grow: 1;
        min-height: 0;
        display: flex;
        flex-direction: column;
    }

    .five {
        font-size: 20px;
        font-weight: 600;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-family: "Reaver", serif;
    }

    .six {
        box-sizing: border-box;
        font-family: "Radiance", "Noto Sans", sans-serif;
    }

    .sven {
        width: 3px;
        height: 3px;
        min-width: 5px;
        min-height: 5px;
        border-radius: 3px;
        background-color: #999;
        margin-right: 10px;
        margin-top: 12px;
    }

    .eight {

        flex-grow: 1;
        font-size: 20px;
        color: #bbbbbbee;
        line-height: 30px;
        font-weight: 200;
    }

    .nhero {
        width: 100%;
        min-height: 0;
        display: flex;
        flex-direction: column;
        padding: 18px;
        padding-bottom: 0px;
        border-left: 2px solid #ffffff10;
        margin-bottom: 30px;
        background: linear-gradient(90deg, rgba(0, 0, 0, 0.38) 3.07%, rgba(6, 37, 65, 0.3) 88.06%);
        box-shadow: 0px 0px 50px #000;
        box-sizing: border-box;
    }

    .ten {
        width: 128px;
        height: 72px;
        box-shadow: 0px 0px 20px #000;
        background-size: cover;
        background-repeat: no-repeat;
        margin-right: 20px;
    }

    .name {
        flex-grow: 1;
        min-height: 0;
        display: flex;
        flex-direction: column;
    }

    .nametwo {
        font-size: 24px;
        font-weight: 600;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-family: "Reaver", serif;
    }

    .namethree {
        font-size: 16px;
        font-weight: bold;
        color: #ff715d;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-bottom: 10px;
    }

    .ck {
        text-decoration: none;
        color: inherit;
        width: 100%;
        height: 72px;
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-bottom: 24px;
    }

    .zero {
        width: 100%;
        min-height: 0;
        display: flex;
        flex-direction: column;
        margin-bottom: 24px;
    }

    .setone {
        width: 100%;
        display: flex;
        flex-direction: row;
        padding-bottom: 20px;
    }

    .settwo {
        width: 55px;
        height: 55px;
        min-width: 55px;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .setthree {
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        font-family: "Reaver", serif;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 4px;
        margin-left: 20px;
    }

    .setfour {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
    }
</style>

<body>
    <?php
    $nav_hero_active = 0;
    $nav_news_active = 0;
    include './components/nav.php';
    ?>


    <div class="patch" style="width: 100%; height: auto; background-image: url(https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/backgrounds/featured.jpg);  min-height: 0; display: flex; flex-direction: column; align-items: center; background-repeat: repeat-y; background-color: #151618; background-position: center; clear: both;">
        <div style="width: 100%; background-color: #000; margin-top: 140px; padding: 30px 0px; min-height: 0; display: flex; flex-direction: column; align-items: center; position: relative;">
            <div style="width: 900px; color: #ed3b1c; font-size: 32px; letter-spacing: 4px;">อัปเดตเกมเพลย์</div>

            <div style="width: 900px; color: #ed3b1c; font-size: 72px; font-weight: bold; letter-spacing: 8p ">7.30d</div>

            <div style="position: absolute; width: 900px; height: 100px; top: 60px; margin: 0 auto;">
                <select style="width: 100px; position: absolute; top: 0; right: 0;">
                    <option value="7.30d" style="box-sizing: border-box;">7.30d</option>
                    <option value="7.30c" style="box-sizing: border-box;">7.30c</option>
                    <option value="7.30b" style="box-sizing: border-box;">7.30b</option>
                    <option value="7.30" style="box-sizing: border-box;"> 7.30</option>
                    <option value="7.29d" style="box-sizing: border-box;">7.29d</option>
                    <option value="7.29c" style="box-sizing: border-box;">7.29c</option>
                    <option value="7.29b" style="box-sizing: border-box;">7.29b</option>
                    <option value="7.29" style="box-sizing: border-box;">7.29</option>
                    <option value="7.28c" style="box-sizing: border-box;">7.28c</option>
                    <option value="7.28b" style="box-sizing: border-box;">7.28b</option>
                    <option value="7.28a" style="box-sizing: border-box;">7.28a</option>
                    <option value="7.28" style="box-sizing: border-box;">7.28</option>
                    <option value="7.27d" style="box-sizing: border-box;">7.27d</option>
                    <option value="7.27c" style="box-sizing: border-box;">7.27c</option>
                    <option value="7.27b" style="box-sizing: border-box;">7.27b</option>
                    <option value="7.27a" style="box-sizing: border-box;">7.27a</option>
                    <option value="7.27" style="box-sizing: border-box;">7.27</option>
                    <option value="7.26c" style="box-sizing: border-box;">7.26c</option>
                    <option value="7.26b" style="box-sizing: border-box;">7.26b</option>
                    <option value="7.26a" style="box-sizing: border-box;">7.26a</option>
                    <option value="7.26" style="box-sizing: border-box;"> 7.26</option>
                    <option value="7.25c" style="box-sizing: border-box;">7.25c</option>
                    <option value="7.25b" style="box-sizing: border-box;">7.25b</option>
                    <option value="7.25a" style="box-sizing: border-box;">7.25a</option>
                    <option value="7.25" style="box-sizing: border-box;"> 7.25</option>
                    <option value="7.24b" style="box-sizing: border-box;">7.24b</option>
                    <option value="7.24" style="box-sizing: border-box;"> 7.24</option>
                    <option value="7.23f" style="box-sizing: border-box;">7.23f</option>
                    <option value="7.23e" style="box-sizing: border-box;">7.23e</option>
                    <option value="7.23d" style="box-sizing: border-box;">7.23d</option>
                    <option value="7.23c" style="box-sizing: border-box;">7.23c</option>
                    <option value="7.23b" style="box-sizing: border-box;">7.23b</option>
                    <option value="7.23a" style="box-sizing: border-box;">7.23a</option>
                    <option value="7.23" style="box-sizing: border-box;"> 7.23</option>
                    <option value="7.22h" style="box-sizing: border-box;">7.22h</option>
                    <option value="7.22g" style="box-sizing: border-box;">7.22g</option>
                    <option value="7.22f" style="box-sizing: border-box;">7.22f</option>
                    <option value="7.22e" style="box-sizing: border-box;">7.22e</option>
                    <option value="7.22d" style="box-sizing: border-box;">7.22d</option>
                    <option value="7.22c" style="box-sizing: border-box;">7.22c</option>
                    <option value="7.22b" style="box-sizing: border-box;">7.22b</option>
                    <option value="7.22" style="box-sizing: border-box;"> 7.22</option>
                    <option value="7.21d" style="box-sizing: border-box;">7.21d</option>
                    <option value="7.21c" style="box-sizing: border-box;">7.21c</option>
                    <option value="7.21b" style="box-sizing: border-box;">7.21b</option>
                    <option value="7.21" style="box-sizing: border-box;"> 7.21</option>
                    <option value="7.20e" style="box-sizing: border-box;">7.20e</option>
                    <option value="7.20d" style="box-sizing: border-box;">7.20d</option>
                    <option value="7.20c" style="box-sizing: border-box;">7.20c</option>
                    <option value="7.20b" style="box-sizing: border-box;">7.20b</option>
                    <option value="7.20" style="box-sizing: border-box;"> 7.20</option>
                    <option value="7.19d" style="box-sizing: border-box;">7.19d</option>
                    <option value="7.19c" style="box-sizing: border-box;">7.19c</option>
                    <option value="7.19b" style="box-sizing: border-box;">7.19b</option>
                    <option value="7.19" style="box-sizing: border-box;"> 7.19</option>
                    <option value="7.18" style="box-sizing: border-box;"> 7.18</option>
                    <option value="7.17" style="box-sizing: border-box;"> 7.17</option>
                    <option value="7.16" style="box-sizing: border-box;"> 7.16</option>
                    <option value="7.15" style="box-sizing: border-box;"> 7.15</option>
                    <option value="7.14" style="box-sizing: border-box;"> 7.14</option>
                    <option value="7.13b" style="box-sizing: border-box;">7.13b</option>
                    <option value="7.13" style="box-sizing: border-box;"> 7.13</option>
                    <option value="7.12" style="box-sizing: border-box;"> 7.12</option>
                    <option value="7.11" style="box-sizing: border-box;"> 7.11</option>
                    <option value="7.10" style="box-sizing: border-box;"> 7.10</option>
                    <option value="7.09" style="box-sizing: border-box;"> 7.09</option>
                    <option value="7.08" style="box-sizing: border-box;"> 7.08</option>

                    style="box-sizing: border-box;"
                </select>
            </div>
        </div>

        <div style="width: 100%; max-width: 900px; padding-top: 32px; min-height: 0; display: flex; flex-direction: column;">
            <div style="display: block;">
                <div style=" background: linear-gradient(to right, #833312FF, #83331200); border-left: 2px solid #ff5005; font-size: 30px; font-weight: 600; text-transform: uppercase; letter-spacing: 4px; color: #fff; text-shadow: 0px 0px 5px #000; box-shadow: 0px 0px 30px #000; padding: 12px 20px;"> อัปเดตไอเท็ม </div>

                <div style="width: 100%; border-left: 2px solid #ffffff10; margin-bottom: 30px; background: linear-gradient(90deg, rgba(0, 0, 0, 0.38) 3.07%, rgba(6, 37, 65, 0.3) 88.06%);box-shadow: 0px 0px 50px #000; min-height: 0;display: flex; padding: 20px 0px; flex-direction: column;">
                    <div style="padding-bottom: 0px; width: 100%; min-height: 0; display: flex; flex-direction: column; padding: 0px 40px; margin-bottom: 20px;">
                        <div style="width: 100%; display: flex; flex-direction: row; align-items: center;">
                            <div style="background-image: url('src/patch/overwhelming_blink.png');  width: 72px; height: 52px; background-size: cover; background-repeat: no-repeat; box-shadow: 0px 0px 20px #000; margin-right: 16px; margin-bottom: 10px;"></div>
                            <div style="flex-grow: 1; min-height: 0; display: flex; flex-direction: column;">
                                <div style="font-size: 20px; font-weight: 600; color: #fff; text-transform: uppercase; letter-spacing: 2px;">Overwhelming Blink</div>
                            </div>
                        </div>
                        <div style=" box-sizing: border-box;">
                            <div style=" display: flex; flex-direction: row; align-items: flex-start;">
                                <div style="width: 3px; height: 3px; min-width: 5px; min-height: 5px; border-radius: 3px; background-color: #999; margin-right: 10px; margin-top: 12px;"></div>
                                <div style="flex-grow: 1; font-size: 20px; color: #bbbbbbee; line-height: 30px; font-weight: 200;">Blink ความเสียหายปรับจาก 200 +100% Strength เป็น 100 + 150% Strength</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="width: 100%; max-width: 900px; padding-top: 32px; min-height: 0; display: flex; flex-direction: column;">
            <div style="display: block;">
                <div style="background: linear-gradient(to right, #833312FF, #83331200); border-left: 2px solid #ff5005; font-size: 30px; font-weight: 600; text-transform: uppercase; letter-spacing: 4px; color: #fff; text-shadow: 0px 0px 5px #000; box-shadow: 0px 0px 30px #000; padding: 12px 20px;">อัปเดตไอเท็มครีปป่า</div>
                <div style="width: 100%; border-left: 2px solid #ffffff10; margin-bottom: 30px; background: linear-gradient( 90deg, rgba(0, 0, 0, 0.38) 3.07%, rgba(6, 37, 65, 0.3) 88.06%); box-shadow: 0px 0px 50px #000; min-height: 0; display: flex; padding: 20px 0px; flex-direction: column;">

                    <div class="one" style="padding-bottom: 60px;">
                        <div class="two">
                            <div style="background-image: url(src/patch/pogo_stick.png); width: 72px; height: 52px; background-size: cover; background-repeat: no-repeat; box-shadow: 0px 0px 20px #000; margin-right: 16px; margin-bottom: 10px;"></div>
                            <div class="four">
                                <div class="five">Tumbler's Toy</div>
                            </div>
                        </div>
                        <div class="six">
                            <div class="three">
                                <div class="sven"></div>
                                <div class="eight">คูลดาวน์ลดลงจาก 30 เป็น 20 วินาที</div>
                            </div>
                            <div class="three">
                                <div class="sven"></div>
                                <div class="eight">ไม่สามารถใช้ได้อีกต่อไปหากเจ้าของไอเท็มติดรากหรือถูกรั้ง</div>
                            </div>
                        </div>
                    </div>

                    <div class="one" style="padding-bottom: 60px;">
                        <div class="two">
                            <div style="background-image: url(src/patch/misericorde.png); width: 72px; height: 52px; background-size: cover; background-repeat: no-repeat; box-shadow: 0px 0px 20px #000; margin-right: 16px; margin-bottom: 10px;"></div>
                            <div class="four">
                                <div class="five">Brigand's Blade</div>
                            </div>
                        </div>
                        <div class="six">
                            <div class="three">
                                <div class="sven"></div>
                                <div class="eight">โบนัสพลังโจมตีต่อทุก 10% ของพลังชีวิตที่หายไปเพิ่มขึ้นจาก 7 เป็น 8 หน่วย</div>
                            </div>
                        </div>
                    </div>
                    <div class="one" style="padding-bottom: 60px;">
                        <div class="two">
                            <div style="background-image: url(src/patch/nether_shawl.png); width: 72px; height: 52px; background-size: cover; background-repeat: no-repeat; box-shadow: 0px 0px 20px #000; margin-right: 16px; margin-bottom: 10px;"></div>
                            <div class="four">
                                <div class="five">Nether Shawl</div>
                            </div>
                        </div>
                        <div class="six">
                            <div class="three">
                                <div class="sven"></div>
                                <div class="eight">การลดเกราะป้องกันน้อยลงจาก -3 เป็น -2 หน่วย</div>
                            </div>
                            <div class="three">
                                <div class="sven"></div>
                                <div class="eight">โบนัสความต้านทานเวทมนตร์ลดลงจาก 25% เป็น 20%</div>
                            </div>
                            <div class="three">
                                <div class="sven"></div>
                                <div class="eight">เพิ่มความเสียหายสกิลน้อยลงจาก 8% เป็น 6%</div>
                            </div>
                        </div>
                    </div>
                    <div class="one" style="padding-bottom: 60px;">
                        <div class="two">
                            <div style="background-image: url(src/patch/mirror_shield.png); width: 72px; height: 52px; background-size: cover; background-repeat: no-repeat; box-shadow: 0px 0px 20px #000; margin-right: 16px; margin-bottom: 10px;"></div>
                            <div class="four">
                                <div class="five">Mirror Shield</div>
                            </div>
                        </div>
                        <div class="six">
                            <div class="three">
                                <div class="sven"></div>
                                <div class="eight">การเพิ่มค่าความสามารถลดลงจาก 16 เป็น 10 หน่วย</div>
                            </div>
                        </div>
                    </div>
                    <div class="one" style="padding-bottom: 60px;">
                        <div class="two">
                            <div style="background-image: url(src/patch/ex_machina.png); width: 72px; height: 52px; background-size: cover; background-repeat: no-repeat; box-shadow: 0px 0px 20px #000; margin-right: 16px; margin-bottom: 10px;"></div>
                            <div class="four">
                                <div class="five">Ex Machina</div>
                            </div>
                        </div>
                        <div class="six">
                            <div class="three">
                                <div class="sven"></div>
                                <div class="eight">เกราะป้องกันลดลงจาก 25 เป็น 20 หน่วย</div>
                            </div>
                        </div>
                    </div>
                    <div class="one" style="padding-bottom: 0px;">
                        <div class="two">
                            <div style="background-image: url(src/patch/fallen_sky.png); width: 72px; height: 52px; background-size: cover; background-repeat: no-repeat; box-shadow: 0px 0px 20px #000; margin-right: 16px; margin-bottom: 10px;"></div>
                            <div class="four">
                                <div class="five">Fallen Sky</div>
                            </div>
                        </div>
                        <div class="six">
                            <div class="three">
                                <div class="sven"></div>
                                <div class="eight">ดีเลย์ของเอฟเฟกต์เพิ่มขึ้นจาก 0.5 เป็น 1 วินาที</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div style="width: 100%; max-width: 900px; padding-top: 32px; min-height: 0; display: flex; flex-direction: column;">
            <div style="display: block;">
                <div style="background: linear-gradient(to right, #833312FF, #83331200); border-left: 2px solid #ff5005; font-size: 30px; font-weight: 600; text-transform: uppercase; letter-spacing: 4px; color: #fff; text-shadow: 0px 0px 5px #000; box-shadow: 0px 0px 30px #000; padding: 12px 20px;">อัปเดตฮีโร่</div>

                <div style="width: 100%; border-left: 2px solid #ffffff10; margin-bottom: 30px; background: linear-gradient(90deg, rgba(0, 0, 0, 0.38) 3.07%, rgba(6, 37, 65, 0.3) 88.06%); box-shadow: 0px 0px 50px #000;min-height: 0; display: flex; padding: 20px 0px; flex-direction: column;">

                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/bane.png);"></div>
                            <div class="name">
                                <div class="nametwo">Bane</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/bane_nightmare.png);"></div>
                                <div class="name">
                                    <div class="setthree">Nightmare</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">ความเสียหายปรับจาก 15/20/25/30 เป็น 5/15/25/35 หน่วย</div>
                                    </div>
                                </div>
                            </div>
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/bane_brain_sap.png);"></div>
                                <div class="name">
                                    <div class="setthree">Brain Sap</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">คูลดาวน์ลดลงจาก 14/13/12/11 เป็น 17/15/13/11 วินาที</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/batrider.png);"></div>
                            <div class="name">
                                <div class="nametwo">Batrider</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setfour">
                                <div class="sven"></div>
                                <div class="eight">พลังโจมตีพื้นฐานลดลง 2 หน่วย</div>
                            </div>
                        </div>
                    </div>

                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/beastmaster.png);"></div>
                            <div class="name">
                                <div class="nametwo">Beastmaster</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/beastmaster_call_of_the_wild_hawk.png);"></div>
                                <div class="name">
                                    <div class="setthree">Call of the Wild Hawk</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">อัปเกรดโดย Aghanim's Shard ลดคูลดาวน์น้อยลงจาก 15 เป็น 7 วินาที</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/bristleback.png);"></div>
                            <div class="name">
                                <div class="nametwo">Bristleback</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/bristleback_warpath.png);"></div>
                                <div class="name">
                                    <div class="setthree">Warpath</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">ระยะเวลาซ้อนทับเพิ่มขึ้นจาก 16 เป็น 16/18/20 วินาที</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/broodmother.png);"></div>
                            <div class="name">
                                <div class="nametwo">Broodmother</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/broodmother_spin_web.png);"></div>
                                <div class="name">
                                    <div class="setthree">Spin Web</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">จำนวนชาร์จเพิ่มขึ้นจาก 3/5/7/9 เป็น 4/6/8/10</div>
                                    </div>
                                </div>
                            </div>
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/broodmother_spawn_spiderlings.png);"></div>
                                <div class="name">
                                    <div class="setthree">Spawn Spiderlings</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">ความเสียหายเพิ่มขึ้นจาก 240/320/400 เป็น 260/340/420 หน่วย</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/clinkz.png);"></div>
                            <div class="name">
                                <div class="nametwo">Clinkz</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/clinkz_strafe.png);"></div>
                                <div class="name">
                                    <div class="setthree">Burning Barrage</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">ความเสียหายตามเปอร์เซ็นต์พลังโจมตีเพิ่มขึ้นจาก 60% เป็น 65%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="patchnotespage_TalentNotes_2307Y">
                            <div class="patchnotespage_TalentNoteHeader_3KTWV">ทักษะพิเศษ</div>
                            <div class="zero">
                                <div class="setfour">
                                    <div class="sven"></div>
                                    <div class="eight">ทักษะพิเศษเลเวล 20 จำนวนลูกธนู Burning Barrage เพิ่มขึ้นจาก +2 เป็น +3 ดอก</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/rattletrap.png);"></div>
                            <div class="name">
                                <div class="nametwo">Clockwerk</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setfour">
                                <div class="sven"></div>
                                <div class="eight">เกราะป้องกันพื้นฐานเพิ่มขึ้น 1 หน่วย</div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/dawnbreaker.png);"></div>
                            <div class="name">
                                <div class="nametwo">Dawnbreaker</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/dawnbreaker_fire_wreath.png);"></div>
                                <div class="name">
                                    <div class="setthree">Starbreaker</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">โบนัสความเสียหายจากการกวาดลดลงจาก 25/35/45/55 เป็น 20/30/40/50 หน่วย</div>
                                    </div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">ความเสียหายเพิ่มเติมจากการทุบลดลงจาก 40/65/90/115 เป็น 30/60/90/120 หน่วย</div>
                                    </div>
                                </div>
                            </div>
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/dawnbreaker_celestial_hammer.png);"></div>
                                <div class="name">
                                    <div class="setthree">Celestial Hammer</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">ลดความเร็วปรับจาก 35% เป็น 24/28/32/36%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/dazzle.png);"></div>
                            <div class="name">
                                <div class="nametwo">Dazzle</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setfour">
                                <div class="sven"></div>
                                <div class="eight">เกราะป้องกันพื้นฐานลดลง 1 หน่วย</div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/death_prophet.png);"></div>
                            <div class="name">
                                <div class="nametwo">Death Prophet</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/death_prophet_spirit_siphon.png);"></div>
                                <div class="name">
                                    <div class="setthree">Spirit Siphon</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">ค่าสูญเสียพลังชีวิตต่อวินาทีพื้นฐานเพิ่มขึ้นจาก 14 เป็น 16 หน่วย</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/gyrocopter.png);"></div>
                            <div class="name">
                                <div class="nametwo">Gyrocopter</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/gyrocopter_flak_cannon.png);"></div>
                                <div class="name">
                                    <div class="setthree">Flak Cannon</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">มานาที่ใช้เพิ่มขึ้นจาก 50 เป็น 50/60/70/80 หน่วย</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/mars.png);"></div>
                            <div class="name">
                                <div class="nametwo">MARS</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/mars_gods_rebuke.png);"></div>
                                <div class="name">
                                    <div class="setthree">God's Rebuke</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">มานาที่ใช้เพิ่มขึ้นจาก 80 เป็น 90 หน่วย</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/monkey_king.png);"></div>
                            <div class="name">
                                <div class="nametwo">Monkey King</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/monkey_king_wukongs_command.png);"></div>
                                <div class="name">
                                    <div class="setthree">Wukong's Command</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">เวลาเว้นช่วงการโจมตีของพลทหารเพิ่มขึ้นจาก 1.1 เป็น 1.2 วินาที</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/naga_siren.png);"></div>
                            <div class="name">
                                <div class="nametwo">Naga Siren</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/naga_siren_mirror_image.png);"></div>
                                <div class="name">
                                    <div class="setthree">Mirror Image</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">คูลดาวน์ลดลงจาก 40/36/32/28 เป็น 40/35/30/25 วินาที</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/night_stalker.png);"></div>
                            <div class="name">
                                <div class="nametwo">Night Stalker</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="patchnotespage_TalentNotes_2307Y">
                            <div class="patchnotespage_TalentNoteHeader_3KTWV">ทักษะพิเศษ</div>
                            <div class="zero">
                                <div class="setfour">
                                    <div class="sven"></div>
                                    <div class="eight">ทักษะพิเศษเลเวล 25 คูลดาวน์ Dark Ascension ลดลงจาก -60 เป็น -50 วินาที</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/pangolier.png);"></div>
                            <div class="name">
                                <div class="nametwo">Pangolier</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setfour">
                                <div class="sven"></div>
                                <div class="eight">ความเร็วในการเคลื่อนที่เพิ่มขึ้นจาก 305 เป็น 300 หน่วย</div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/phantom_assassin.png);"></div>
                            <div class="name">
                                <div class="nametwo">Phantom Assassin</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/phantom_assassin_fan_of_knives.png);"></div>
                                <div class="name">
                                    <div class="setthree">Fan of Knives</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">คูลดาวน์ลดลงจาก 20 เป็น 15 วินาที</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/pugna.png);"></div>
                            <div class="name">
                                <div class="nametwo">Pugna</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/pugna_nether_blast.png);"></div>
                                <div class="name">
                                    <div class="setthree">Nether Blast</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">ระยะร่ายเพิ่มขึ้นจาก 400 เป็น 450 หน่วย</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/riki.png);"></div>
                            <div class="name">
                                <div class="nametwo">Riki</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/riki_smoke_screen.png);"></div>
                                <div class="name">
                                    <div class="setthree">Smoke Screen</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">โอกาสโจมตีพลาดเพิ่มขึ้นจาก 20/35/50/65% เป็น 30/45/60/75%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/silencer.png);"></div>
                            <div class="name">
                                <div class="nametwo">Silencer</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/silencer_curse_of_the_silent.png);"></div>
                                <div class="name">
                                    <div class="setthree">Arcane Curse</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">ตัวคูณการลงโทษเมื่อใบ้ลดลงจาก 2 เป็น 1.7 เท่า</div>
                                    </div>
                                </div>
                            </div>
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/silencer_last_word.png);"></div>
                                <div class="name">
                                    <div class="setthree">Last Word</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">อัปเกรดโดย Aghanim's Scepter รัศมีลดลงจาก 650 เป็น 500 หน่วย</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/sven.png);"></div>
                            <div class="name">
                                <div class="nametwo">Sven</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setfour">
                                <div class="sven"></div>
                                <div class="eight">เกราะป้องกันพื้นฐานลดลง 1 หน่วย</div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/shredder.png);"></div>
                            <div class="name">
                                <div class="nametwo">Timbersaw</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/shredder_chakram.png);"></div>
                                <div class="name">
                                    <div class="setthree">Chakram</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">ความเสียหายเมื่อผ่านเพิ่มขึ้นจาก 100/140/180 เป็น 110/155/200 หน่วย</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/tinker.png);"></div>
                            <div class="name">
                                <div class="nametwo">Tinker</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/tinker_rearm.png);"></div>
                                <div class="name">
                                    <div class="setthree">Rearm</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">มานาที่ใช้เพิ่มขึ้นจาก 130/210/290 เป็น 150/225/300 หน่วย</div>
                                    </div>
                                </div>
                            </div>
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/tinker_heat_seeking_missile.png);"></div>
                                <div class="name">
                                    <div class="setthree">Heat-Seeking Missile</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">ความเสียหายต่อจรวดลดลงจาก 125/200/275/350 เป็น 115/190/265/340 หน่วย</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/tiny.png);"></div>
                            <div class="name">
                                <div class="nametwo">Tiny</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/tiny_toss.png);"></div>
                                <div class="name">
                                    <div class="setthree">Toss</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">ความเสียหายลดลงจาก 90/160/230/300 เป็น 80/150/220/290 หน่วย</div>
                                    </div>
                                </div>
                            </div>
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/tiny_tree_grab.png);"></div>
                                <div class="name">
                                    <div class="setthree">Tree Grab</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">คูลดาวน์เพิ่มขึ้นจาก 16/14/12/10 เป็น 19/16/13/10 วินาที</div>
                                    </div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">เพิ่มความเสียหายต่อยูนิตน้อยลงจาก 25% เป็น 20%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/undying.png);"></div>
                            <div class="name">
                                <div class="nametwo">Undying</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/undying_tombstone.png);"></div>
                                <div class="name">
                                    <div class="setthree">Tombstone</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">จำนวนการโจมตีจากฮีโร่เพื่อทำลาย Tombstone เพิ่มขึ้นจาก 4/5/6/7 เป็น 5/6/7/8 ครั้ง</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/ursa.png);"></div>
                            <div class="name">
                                <div class="nametwo">Ursa</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/ursa_fury_swipes.png);"></div>
                                <div class="name">
                                    <div class="setthree">Fury Swipes</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">เพิ่มพลังโจมตีต่อการซ้อนทับมากขึ้นจาก 9/18/27/36 เป็น 10/19/28/37 หน่วย</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/vengefulspirit.png);"></div>
                            <div class="name">
                                <div class="nametwo">Vengeful Spirit</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setfour">
                                <div class="sven"></div>
                                <div class="eight">ค่า Agility ที่ได้รับต่อเลเวลลดลงจาก 3.4 เป็น 3.2 หน่วย</div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/warlock.png);"></div>
                            <div class="name">
                                <div class="nametwo">Warlock</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/warlock_fatal_bonds.png);"></div>
                                <div class="name">
                                    <div class="setthree">Fatal Bonds</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">มานาที่ใช้ลดลงจาก 140 เป็น 110/120/130/140 หน่วย</div>
                                    </div>
                                </div>
                            </div>
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/warlock_rain_of_chaos.png);"></div>
                                <div class="name">
                                    <div class="setthree">Chaotic Offering</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">พลังชีวิตพื้นฐานโกเลมเพิ่มขึ้นจาก 1000/2000/3000 เป็น 1200/2100/3000 หน่วย</div>
                                    </div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">อัปเกรดโดย Aghanim's Scepter พลังชีวิตพื้นฐานโกเลมเพิ่มขึ้นจาก 750/1500/2250 เป็น 800/1600/2400 หน่วย</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/weaver.png);"></div>
                            <div class="name">
                                <div class="nametwo">Weaver</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setfour">
                                <div class="sven"></div>
                                <div class="eight">พลังโจมตีพื้นฐานปรับจาก 53-63 เป็น 54-60 หน่วย</div>
                            </div>
                        </div>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/weaver_the_swarm.png);"></div>
                                <div class="name">
                                    <div class="setthree">The Swarm</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">อัปเกรดโดย Aghanim's Shard ลดคูลดาวน์น้อยลงจาก 4 เป็น 2 วินาที</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/winter_wyvern.png);"></div>
                            <div class="name">
                                <div class="nametwo">Winter Wyvern</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/winter_wyvern_arctic_burn.png);"></div>
                                <div class="name">
                                    <div class="setthree">Arctic Burn</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">คูลดาวน์ลดลงจาก 42/36/28/20 เป็น 38/32/26/20 วินาที</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/skeleton_king.png);"></div>
                            <div class="name">
                                <div class="nametwo">Wraith King</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/skeleton_king_mortal_strike.png);"></div>
                                <div class="name">
                                    <div class="setthree">Mortal Strike</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">ความเสียหายจากคริติคอลเพิ่มขึ้นจาก 140/180/220/260% เป็น 150/190/230/270%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nhero">
                        <a class="ck" href="#">
                            <div class="ten" style="background-image: url(src/patch/zuus.png);"></div>
                            <div class="name">
                                <div class="nametwo">Zeus</div>
                                <div class="namethree"></div>
                            </div>
                        </a>
                        <div class="zero">
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/zuus_static_field.png);"></div>
                                <div class="name">
                                    <div class="setthree">Static Field</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">ความเสียหายจะไม่นับว่าเป็นการลดพลังชีวิตโดยตรงอีกต่อไป (Heavenly Jump ต่อจากนี้สามารถทำให้ Blink Dagger ติดคูลดาวน์ และส่งผลต่อเอฟเฟกต์ใดก็ตามที่ถูกยกเลิกเมื่อได้รับความเสียหาย เช่น Healing Salve)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="setone">
                                <div class="settwo" style="background-image: url(src/patch/zuus_thundergods_wrath.png);"></div>
                                <div class="name">
                                    <div class="setthree">Thundergod's Wrath</div>
                                    <div class="setfour">
                                        <div style="width: 20px; min-width: 20px;"></div>
                                        <div class="sven"></div>
                                        <div class="eight">ความเสียหายเพิ่มขึ้นจาก 300/400/500 เป็น 300/425/550 หน่วย</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './components/footer.php' ?>
</body>

</html>