<html lang="en">

<head>
    <?php include './link/all_link.php' ?>
</head>
<body>
    <div style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/backgrounds/greyfade.jpg') !important; overflow: hidden; background-size: cover;">
        <?php
            $nav_hero_active = 0;
            $nav_news_active = 0;
            include './components/nav.php';
        ?>
        <div style="width: 100%; background-position: center bottom; background-repeat: no-repeat; background-size: 100% auto; position: relative; padding-top: 150px; overflow: hidden; display: block;">
            <div style="color: #fefefe; font-size: 50px; font-weight: bold; text-align: center; margin-bottom: 50px; text-transform: uppercase; text-shadow: 0px 0px 20px #000; letter-spacing: 3px; line-height: 112%;">
            อัปเดตก่อนหน้า
            </div>
        </div>
        <div style="background-position: center top; background-repeat: no-repeat; background-size: 100% auto; display: flex; flex-direction: row; flex-wrap: wrap; align-items: center; justify-content: center; padding-bottom: 150px; position: relative; max-width: 2048px; margin: 0 auto;">
            <div class="past-block">
                <div class="inside" data-aos="fade-up" data-aos-duration="1000" style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//nemestice/nemestice_social.jpg');"></div>
            </div>
            <div class="past-block">
                <div class="inside" data-aos="fade-up" data-aos-duration="1000" style="background-image: url('https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//pastupdates/dawnbreaker_social.jpg');"></div>
            </div>
            <div class="past-block">
                <div class="inside" data-aos="fade-up" data-aos-duration="1000" style="background-image: url(https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//pastupdates/hoodwink_social.jpg);"></div>
            </div>
            <div class="past-block">
                <div class="inside" data-aos="fade-up" data-aos-duration="1000" style="background-image: url(https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//pastupdates/diretide_twitter.png);"></div>
            </div>
            <div class="past-block">
                <div class="inside" data-aos="fade-up" data-aos-duration="1000" style="background-image: url(https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//pastupdates/wr_social.png);"></div>
            </div>
            <div class="past-block">
                <div class="inside" data-aos="fade-up" data-aos-duration="1000" style="background-image: url(https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react//pastupdates/aghs_share.png);"></div>
            </div>
        </div>
        <?php include './components/footer.php' ?>
    </div>
</body>
<script>
    AOS.init({
        duration: 1200,
    });
</script>
</html>