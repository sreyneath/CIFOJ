<div class="header">
    <div class="header-top">
        <div class="content fixed">
            <div class="container">
                <div class="logo">
                    <img src="{!! asset('images/logo/logo.jpg') !!}" alt="">
                </div>
                <div class="text">
                    <h3>សហព័ន្ធ អ្នកសារព៍តមាន កម្ពុជា_អន្តរជាតិ</h3>
                    <h3>Cambodian International Federation Of Journalists</h3>
                </div>
            </div>
            <div class="menu">
                <div class="menu-list">
                    <div class="item-menu" onclick="Onlink('{{url('/')}}')"><span>HOME</span></div>
                    <div class="item-menu" onclick="Onlink('{{url('about')}}')"><span>ABOUT</span></div>
                    <div class="item-menu" onclick="Onlink('{{url('principle')}}')"><span>CORE PRINCIPLES</span></div>
                    <div class="item-menu"><span>METHODOLOGY</span></div>
                    <div class="item-menu"><span>POST</span></div>
                    <div class="item-menu"><span>CONTACT US</span></div>
                </div>
                <div class="search">
                    <input type="text" placeholder="Search Here...">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function  Onlink(url){
    window.location.href=url;
    }
</script>
