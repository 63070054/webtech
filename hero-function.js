
function changeSkillsDetail(index, ele) {
    let allEle = document.querySelectorAll(".icon-skill");
    for (let j = 0; j < allEle.length; j++) {
        allEle[j].className = "icon-skill not-use";
    }
    ele.className = "icon-skill";
    index = parseInt(index);
    for (let key in skill_json[index]) {
        if (key == "have-shard-or-agh") {
            if (skill_json[index][key][0] == 1) {
                document.getElementById("more-detail").innerHTML = `<div style="background-color: #1c2e50; color: #ddd; display: inline-flex; text-transform: uppercase; letter-spacing: 1px; padding: 3px 8px; margin: 3px 0px; border-radius: 4px;"> test ${skill_json[index][key][1]}</div>`;
            } else {
                document.getElementById("more-detail").innerHTML = '';
            }
            // pao
        } else if (key == "video-type-webm" || key == "video-type-mp4") {
            document.getElementById(key).src = skill_json[index][key];
            document.getElementById("video-main").load();
        } else if (key == "image-skills") {
            document.getElementById(key).src = skill_json[index][key];
        } else {

            if (typeof (skill_json[index][key]) == "object") {
                let info = ``;
                for (let i in skill_json[index][key]) {
                    info += `<div class="text-inner-col2">${skill_json[index][key][i][0]}
        <div class="b-text">${skill_json[index][key][i][1]}</div>
    </div>`;
                }
                document.getElementById(key).innerHTML = info;
            } else {
                if (key == "cooldown") {
                    if (skill_json[index][key] != "") {
                        document.getElementById(key).innerHTML = `
    <div style="width: 16px; height: 16px; border-radius: 3px; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;https://cdn.cloudflare.steamstatic.com/apps/dota2/images/dota_react/icons/cooldown.png&quot;);"></div>
    <div style="margin-left: 8px; color: #fff;">${skill_json[index][key]}</div>
    `;
                    } else {
                        document.getElementById(key).innerHTML = ``;
                    }
                } else if (key == "mana-cost") {
                    if (skill_json[index][key] != "") {
                        document.getElementById(key).innerHTML = `
    <div style="width: 16px; height: 16px; border-radius: 3px; background: linear-gradient(#00A4DB, #007196);"></div>
    <div style="margin-left: 8px; color: #fff;">${skill_json[index][key]}</div>
    `;
                    } else {
                        document.getElementById(key).innerHTML = ``;
                    }
                } else {
                    document.getElementById(key).innerHTML = skill_json[index][key];
                }
            }
        }
    }
}
function load_all_skills() {
    let status_keep = ``;
    for (let key in skills) {
        status_keep += `
                <div class="skill" style="transition-property: transform; transition-timing-function: ease-in-out; transition-duration: .1s;">
                        <img style="width: 80px; height: 80px; margin: 0px 6px; cursor: pointer; box-shadow: 0px 0px 20px #000, 0px 0px 20px #000; position: relative;" src="${skills[key]["img"]}">
                        <div class="skill-box-hov">
                            <div class="skill-inside">
                                <div style="width: 300px; height: 169px;">
                                    <video muted style="width: 100%; height: 100%;" autoplay="" preload="auto" loop="" playsinline="" poster="${skills[key]["poster"]}">
                                        <source type="video/webm" src="${skills[key]["webm"]}">
                                        <source type="video/mp4" src="${skills[key]["mp4"]}">
                                    </video>
                                </div>
                                <div style="height:auto; width: 300px; background: linear-gradient(150deg, #68727C, #14171A); padding: 10px 15px; padding-bottom: 35px;">
                                    <div style="color: #fff; font-size: 18px; font-weight: bold; text-transform: uppercase; letter-spacing: 2px;">
                                    ${skills[key]["name"]}
                                    </div>
                                    <div style="color: #ddd; margin-top: 3px; font-size: 15px; margin-right: 15px; letter-spacing: 0px;">
                                    ${skills[key]["desc"]}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            `;
    }
    all_skills.innerHTML = status_keep;
}

function load_hero_status() {
    let status_keep = ``;
    for (let key in status_hero) {
        status_keep += `
        <img style="width: 150px; height: 84px;" src="${key}">
        <div class="hero-bar" style="background: linear-gradient(to right, #286323, #7AF03C);">
            <div style="position: absolute; width: 100%; text-align: center; color: #fff; font-size: 15px; text-shadow: 1px 1px 2px #000; font-family: Radiance,sans-serif; font-weight: 800;">
                ${status_hero[key][0][0]}
            </div>
            <div style="color: #286323; flex-grow: 1; text-align: right; font-size: 11px; padding-right: 16px; font-weight: bold;">
                +${status_hero[key][0][1]}
            </div>
        </div>
        <div class="hero-bar" style="background: linear-gradient(to right, #1056DB, #73F5FE);">
            <div style="position: absolute; width: 100%; text-align: center; color: #fff; font-size: 15px; text-shadow: 1px 1px 2px #000; font-family: Radiance,sans-serif; font-weight: 800;">
            ${status_hero[key][1][0]}
            </div>
            <div style="color: #286323; flex-grow: 1; text-align: right; font-size: 11px; padding-right: 16px; font-weight: bold;">
            +${status_hero[key][1][1]}
            </div>
        </div>
        `;
    }
    all_hero_icon_status.innerHTML = status_keep;
}

function load_status_icon() {
    let status_keep = "";
    for (let key in status_icon_json) {
        status_keep += `
    <div class="type-status">
        <img style="width: 30px; height: 30px;" src="${key}">
        <!-- change white font text here  -->
        <div style="color: #fff; font-size: 20px; font-weight: 600; text-shadow: 1px 1px 2px #000; margin-left: 12px;">
            ${status_icon_json[key][0]}
        </div>
        <div style="color: #999; font-size: 15px; text-shadow: 1px 1px 2px #000; margin-left: 8px; flex-grow: 1; text-align: right;">
            +${status_icon_json[key][1]}
        </div>
    </div>
                `;
    }
    all_status_icon.innerHTML = status_keep;
}

function load_status_detail_left() {
    let status_keep = "";
    for (let key in status_json) {
        status_keep += `
                    <div class="box-bar-position">
                        <div style="width: 100%; font-size: 15px; font-weight: bold; letter-spacing: 1px; text-align: left; color: #fff;">
                            ${key}
                        </div>
                        <div class="bar-position">
                            <div style="width: 100%; height: 100%; background-color: #4c4c4c; position: absolute; left: 0; top: 0;"></div>

                            <!-- change width here  -->
                            <div class="detail-bar" style="width: ${status_json[key]}%;"></div>

                        </div>
                    </div>
                `;
    }
    all_status_detail.innerHTML = status_keep;
}
function load_status_detail_right() {
    let status_keep = "";
    for (let key in status_json_right) {
        status_keep += `
    <div style="width: 30%; height: 100%; min-height: 0; display: flex; flex-direction: column;">
        <div style="margin-left: 8px; text-align: left; text-transform: uppercase; font-size: 16px; font-weight: bold; letter-spacing: 1px; color: #969696; margin-bottom: 4px;">
            ${key}
        </div>`
        for (let i = 0; i < status_json_right[key].length; i++) {
            status_keep += `
        <div class="var" style="color: #fff;">
            <img style="width: 24px; height: 24px; margin-right: 8px;" src=" ${status_json_right[key][i][0]}">
            ${status_json_right[key][i][1]}
        </div>
            `;
        }
        status_keep += `
    </div>
        
        `;
    }
    all_status_detail_right.innerHTML = status_keep;

}
