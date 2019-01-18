<?php

?>
<section id="player">
	Loading
</section>
<button class="btn btn-success btn-small btn-skip">Skip</button>
<script type="text/javascript">
	$(document).ready(function()
	{
		$.post("index.php?page=ajax", {
			ajax:"newPlayer"
		}, function(result){
			$("#player").html(result);
		})
	});

	$(document).on("click", ".btn-skip", function(){
		$.post("index.php?page=ajax", {
			ajax:"newPlayer"
		}, function(result){
			$("#player").html(result);
		})
	});

    $(document).on("click", ".btn-action-user", function(){
        let secret = $(document).find("#secret").attr("secret");
        let action = $(this).attr("btn-action");
        let value = $(this).attr("tag");
        $.post("index.php?page=ajax", {
            ajax:action,
            id:secret,
            value:value
        }, function(result)
        {
            $.post("index.php?page=ajax", {
                ajax:"newPlayer"
            }, function(result){
                $("#player").html(result);
            })        
        })
    });
</script>
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
    width:500px;
    min-height:500px;
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
    margin:0 auto;
    border-radius:50%;
    overflow:hidden;
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
.card .box .button_list:hover {
    transform:rotateY(360deg);
}
</style>
