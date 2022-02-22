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
.content {
    margin: 0;
    padding: 0;
    width: 100%;
    display: flex;
    flex-direction: column;
    height: 100%;
}
.cat-list{
    list-style: none;
    width: 80%;
    overflow: scroll;
    margin: auto;
    padding: 0 0 60px 0;
}
.letter {
    font-family: 'Source Sans Pro', serif;
    font-weight: 600;
    color: white;
    font-size: 30px;
    margin: 0;
    padding: 0;
}
.cat-item {
    display: flex;
    align-items: center;
    margin: 0;
    background-color: rgb(22, 150, 163);
}
.cat-item>a {
    width: 100%;
    text-decoration: none;
    color: white;
    padding: 10px;
    margin: 0;
    height: auto;
    font-weight: 700;
}
.cat-item>a:hover {
    background-color: rgb(67, 181, 164);
}
.song-name {
    font-weight: 300;
}
</style>
</head>
<body>
    <div class="main">
        <div class="content">
            <ul id="catList" class="cat-list">
            
            </ul>
        </div>
    </div>
<script>
let catList = document.getElementById('catList');

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200) {
        let doc = JSON.parse(this.responseText);

        // sort artist
        doc.catalogue.sort(function(a,b){
            if (a.artist > b.artist){
                return 1;
            }
            if (a.artist < b.artist) {
                return -1;
            }
            return 0;
        });

        //sort songs
        doc.catalogue.forEach(item => {
            item.songs.forEach(element => {
                item.songs.sort(function(a,b){
                    if(a.songName > b.songName){
                        return 1;
                    }
                    if(a.songName < b.songName){
                        return -1;
                    }
                    return 0;
                });
            });
        });

        let x;

        doc.catalogue.forEach(item => {
            if(x != item.artist[0]){
                x = item.artist[0];
                let letter = document.createElement('li');
                letter.classList.add('letter');
                let letterVal = document.createTextNode(x);
                letter.appendChild(letterVal);
                catList.appendChild(letter);
            }
            item.songs.forEach(items => {
                let artist = document.createElement('li');
                artist.classList.add('cat-item');
                let artistLink = document.createElement('a');
                let artistName = document.createTextNode(item.artist + " ");
                let url = document.createAttribute('href');
                url.value = 'index.php?page=page1&url=' + items.url + '&part=' + items.instruments[0].url;
                artistLink.setAttributeNode(url);
                let song = document.createElement('span');
                song.classList.add('song-name')
                let songName = document.createTextNode(items.songName);

                artistLink.appendChild(artistName);
                song.appendChild(songName);
                artistLink.appendChild(song);

                artist.appendChild(artistLink);
                catList.appendChild(artist);
            })
        })
    }
};
xhttp.open("GET", "list.json", true);
xhttp.send();

let x;

/*
arr.forEach(element => {
    if(x != element[0]){
        x = element[0];
        console.log(x);
    }
    console.log(element);
});
*/
</script>
</body>