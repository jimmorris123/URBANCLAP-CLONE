<style>
.index-content a:hover{
    color:black;
    text-decoration:none;
}
.index-content{
    margin-bottom:20px;
    padding:50px 0px;

}
.index-content .row{
    margin-top:20px;
}
.index-content a{
    color: black;
}
.index-content .card{
    background-color: #FFFFFF;
    padding:0;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius:4px;
    box-shadow: 0 4px 5px 0 rgba(0,0,0,0.14), 0 1px 10px 0 rgba(0,0,0,0.12), 0 2px 4px -1px rgba(0,0,0,0.3);

}
.index-content .card:hover{
    box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 6px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
    color:black;
}
.index-content .card img{
    width:100%;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
}
.index-content .card h4{
    margin:20px;
}
.index-content .card p{
    margin:20px;
    opacity: 0.65;
}
.index-content .blue-button{
    width: 100px;
    -webkit-transition: background-color 1s , color 1s; /* For Safari 3.1 to 6.0 */
    transition: background-color 1s , color 1s;
    min-height: 20px;
    background-color: #002E5B;
    color: #ffffff;
    border-radius: 4px;
    text-align: center;
    font-weight: lighter;
    margin: 0px 20px 15px 20px;
    padding: 5px 0px;
    display: inline-block;
}
.index-content .blue-button:hover{
    background-color: #dadada;
    color: #002E5B;
}
@media (max-width: 768px) {

    .index-content .col-lg-3 {
        margin-top: 20px;
    }
}
</style>
<div class="index-content">

          <?php foreach($projectsCreated as $project){ ?>
            <a href="<?php echo base_url();?>account/project_detail/<?php echo $project['id'];?>">
                <div class="col-lg-3">
                    <div class="card">
                        <img src="http://cevirdikce.com/proje/hasem-2/images/finance-1.jpg">
                        <h4><?php echo $project['serviceName'];?></h4>
                        <p>Created <?php echo $project['created'];?></p>
                        <p>Status <?php echo $project['statusName'];?></p>
                        <a href="<?php echo base_url();?>account/project_detail/<?php echo $project['id'];?>" class="blue-button">Job Detail</a>
                    </div>
                </div>
            </a>

          <?php } ?>

</div>
