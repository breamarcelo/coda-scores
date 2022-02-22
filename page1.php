<?php
$score = $_GET['url'];
$part = $_GET['part'];
?>

<head>
<style>
::-webkit-scrollbar {
    display: none;
}
body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow: hidden;
    background-image: url('background.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
.main {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-direction: column;
    background-color: rgba(67, 181, 164, 0.5);
}
.score-content {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: rgb(22, 150, 163);
}
.score-menu {
    margin: 0;
    padding: 0;
    width: 100%;
    height: auto;
}
.score-menu-list {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: row;
    height: auto;
}
.score-menu-item {
    display: flex;
    flex-direction: row;
}
.score-menu-item>a {
    text-decoration: none;
    color: white;
    font-weight: 600;
    padding: 5px 15px;
    text-align: center;
    background-color: rgb(22, 150, 163, 0.5);
    border-radius: 5px 5px 0 0;
    border-left: 1px solid rgba(255, 255, 255, 0.5);
    border-top: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.5);
}
.score-menu-item>a:hover {
    background-color: rgb(22, 150, 163);
}
.score-menu-item>a:active {
    background-color: rgb(22, 150, 163);

}
</style>
</head>

<body>
    <div class="main">
        <div class="score-menu">
            <ul id="instList" class="score-menu-list">

            </ul>
        </div>
        <div class="score-content">
        <iframe width="100%" height="100%" src="https://musescore.com/user/34817016/scores/<?php echo $part; ?>/embed" frameborder="0" allowfullscreen allow="autoplay; fullscreen"></iframe>
        </div>
    </div>
<script>
let instList = document.getElementById('instList');
let url = '<?php echo $score; ?>';
console.log(url);

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200) {
        let doc = JSON.parse(this.responseText);
        doc.catalogue.forEach(element => {
            element.songs.forEach(elements => {
                if (url == elements.url) {
                    elements.instruments.forEach(instElement => {
                        let instItem = document.createElement('li');
                        instItem.classList.add('score-menu-item');
                        let instAnchor = document.createElement('a');
                        let instNode = document.createTextNode(instElement.instrument);
                        let instUrl = document.createAttribute('href');
                        instUrl.value = 'index.php?page=page1&url=' + url + '&part=' + instElement.url;
                        instAnchor.setAttributeNode(instUrl);
                        instAnchor.appendChild(instNode);
                        instItem.appendChild(instAnchor);
                        instList.appendChild(instItem);
                    });
                }
            });
        });
    }
};
xhttp.open("GET", "list.json", true);
xhttp.send();
</script>
</body>
