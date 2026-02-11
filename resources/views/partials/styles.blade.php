<style>
    :root {
        --pcr-blue: #0047AB;
        --pcr-yellow: #FFC107;
    }
    
    .pcr-bg-blue {
        background-color: #0047AB !important;
    }
    
    .pcr-text-blue {
        color: #0047AB !important;
    }
    
    .pcr-bg-yellow {
        background-color: #FFC107 !important;
    }
    
    .pcr-text-yellow {
        color: #FFC107 !important;
    }
    
    body {
        padding-top: 76px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    .hero-section {
        background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
        padding: 80px 0;
        margin-bottom: 40px;
    }
    
    .section-title {
        font-size: 2.5rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 50px;
        position: relative;
        padding-bottom: 20px;
    }
    
    .section-title:after {
        content: '';
        position: absolute;
        width: 100px;
        height: 4px;
        background-color: #FFC107;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }
    
    .vision-mission-card {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
        height: 100%;
    }
    
    .vision-mission-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,71,171,0.1);
    }
    
    .prodi-card {
        background: white;
        border-radius: 15px;
        padding: 30px 20px;
        text-align: center;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        margin-bottom: 30px;
        height: 100%;
    }
    
    .prodi-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0,71,171,0.15);
    }
    
    .status-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background-color: #28a745;
        color: white;
        padding: 5px 15px;
        border-radius: 25px;
        font-size: 0.8rem;
        font-weight: bold;
    }
    
    .history-timeline {
        position: relative;
        padding-left: 30px;
        margin-bottom: 30px;
    }
    
    .history-timeline:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 2px;
        background-color: #0047AB;
    }
    
    .back-to-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        background-color: #0047AB;
        color: white;
        border-radius: 50%;
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 1000;
        transition: all 0.3s ease;
    }
    
    .back-to-top:hover {
        background-color: #003a8c;
        color: white;
        transform: translateY(-3px);
    }
    
    @media (max-width: 768px) {
        body {
            padding-top: 66px;
        }
        
        .hero-section {
            padding: 40px 0;
            text-align: center;
        }
        
        .section-title {
            font-size: 2rem;
        }
    }
</style>