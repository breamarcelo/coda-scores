<head>
<style>
@media screen and (max-width:600px) {
    img.coda-logo {
        width: 110px;
    }
    h3.title {
        font-size: 20px;
    }
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
.content {
    margin: 0;
    padding: 0;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 60%;
}
.coda-logo {
    width: 200px;
}
.title {
    text-align: center;
    font-family: 'Source Serif Pro', serif;
    font-weight: 600;
    color: white;
    font-size: 30px;
    margin: 0;
    padding: 0;
}
</style>
</head>
<body>
    <div class="main">
        <div class="content">
            <img src="logo.png" class="coda-logo">
            <h3 class="title">CODA SCORES</h3><br><br>
            <?php include 'search.html';?>
        </div>
    </div>
</body>