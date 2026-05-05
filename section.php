<style>
.brand-cta-section{
    width:100%;
    min-height:520px;
    display:flex;
    align-items:center;
    justify-content:flex-start;
    background:
        linear-gradient(90deg, rgba(26,26,26,0.92) 0%, rgba(117,104,44,0.88) 38%, rgba(117,104,44,0.35) 62%, rgba(0,0,0,0.05) 100%),
        url("https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1800&q=80");
    background-size:cover;
    background-position:center;
    position:relative;
}

.brand-cta-section::before{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(90deg, rgba(117,104,44,0.28) 0%, transparent 60%);
}

.brand-cta-content{
    position:relative;
    z-index:2;
    width:100%;
    max-width:1200px;
    margin:0 auto;
    padding:80px 20px;
    text-align:left;
}

.brand-cta-box{
    max-width:520px;
    text-align:left;
    margin-left:0;
}

.brand-cta-box h1{
    font-size:36px;
    color:#ffffff;
    margin-bottom:20px;
    font-weight:800;
    line-height:1.3;
    text-align:left;
}

.brand-cta-box p{
    font-size:18px;
    color:rgba(255,255,255,0.9);
    line-height:1.7;
    margin-bottom:30px;
    text-align:left;
}

.brand-cta-btn{
    display:inline-block;
    padding:12px 25px;
    border-radius:50px;
    font-size:14px;
    font-weight:600;
    text-transform:uppercase;
    letter-spacing:1px;
    background:#e0b354;
    color:#1a1a1a;
    text-decoration:none;
    transition:all 0.3s ease;
    box-shadow:0 4px 15px rgba(224,179,84,0.3);
}

.brand-cta-btn:hover{
    background:#d4a336;
    transform:translateY(-3px);
    box-shadow:0 10px 25px rgba(224,179,84,0.4);
}

@media(max-width:768px){
    .brand-cta-section{
        min-height:600px;
        background:
            linear-gradient(90deg, rgba(26,26,26,0.95) 0%, rgba(117,104,44,0.88) 65%, rgba(0,0,0,0.15) 100%),
            url("https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1800&q=80");
        background-size:cover;
        background-position:center;
    }

    .brand-cta-box h1{
        font-size:28px;
    }

    .brand-cta-box p{
        font-size:16px;
    }
}
</style>

<section class="brand-cta-section">
    <div class="brand-cta-content">
        <div class="brand-cta-box">
            <h1>Discover your next adventure today!</h1>

            <p>
                Are you ready to explore the Rwanda and the rest of East Africa? 
                Hermosa Life Tours & Travel offers a variety of travel options to suit your needs.
            </p>

            <a href="#" class="brand-cta-btn">Checkout Tour Package</a>
        </div>
    </div>
</section> 