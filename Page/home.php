<section id="player">
	<div class="card">
	    <div class="box">
	        <div class="img">
	            <img src="https://www.planwallpaper.com/static/images/cool-wallpaper-5_G6Qe1wU.jpg">
	        </div>
	        <h2>Pseudo Joueur<br><span>Equipe Actuel</span></h2>
	        <p> some details </p>
	        <span>
	            <ul>
	                <li class=""><button data-tag="X" class="btn btn-danger btn-small btn-rounded rounded">X</button></li>
	                <li class=""><button data-tag="S" class="btn btn-warning btn-small btn-rounded rounded">S</button></li>
	                <li class=""><button data-tag="A" class="btn btn-success btn-small btn-rounded rounded">A</button></li>
	                <li class=""><button data-tag="B" class="btn btn-primary btn-small btn-rounded rounded">B</button></li>
	                <li class=""><button data-tag="C" class="btn btn-info btn-small btn-rounded rounded">C</button></li>
	                <li class=""><button data-tag="F" class="btn btn-secondary btn-small btn-rounded rounded">F</button></li>
	            </ul>
	        </span>
	    </div>
	</div>
</section>
<style>
body {
    margin:0;
    padding:0;
    font-family:sans-serif;
    background:#fbfbfb;
}
.card {
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    width:300px;
    min-height:400px;
    background:#fff;
    box-shadow:0 20px 50px rgba(0,0,0,.1);
    border-radius:10px;
    transition:0.5s;
}
.card:hover {
    box-shadow:0 30px 70px rgba(0,0,0,.2);
}
.card .box {
    position:absolute;
    top:50%;
    left:0;
    transform:translateY(-50%);
    text-align:center;
    padding:20px;
    box-sizing:border-box;
    width:100%;
}
.card .box .img {
    width:120px;
    height:120px;
    margin:0 auto;
    border-radius:50%;
    overflow:hidden;
}
.card .box .img img {
    width:100%;
    height:100%;
}
.card .box h2 {
    font-size:20px;
    color:#262626;
    margin:20px auto;
}
.card .box h2 span {
    font-size:14px;
    background:#e91e63;
    color:#fff;
    display:inline-block;
    padding:4px 10px;
    border-radius:15px;
}
.card .box p {
    color:#262626;
}
.card .box span {
    display:inline-flex;
}
.card .box ul {
    margin:0;
    padding:0;
}
.card .box ul li {
    list-style:none;

    float:left;
}
.card .box ul li button {
    display:block;
    color:white;
    margin:0 10px;
    font-size:30px;
    transition:0.5s;
    text-align:center;
}
.card .box ul li:hover button {
    color:white;
    transform:rotateY(360deg);
}
</style>
